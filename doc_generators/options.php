<?php
require_once('./config/config.php');
require_once('./includes/database.php');
require_once('./includes/querydef.php');
require_once('./includes/template.php');
require_once('./includes/functions.php');

// Misc. Settings. These probably do not need to be changed.
//$outDir='../pages/20.vbulletin_5.3.0/06.admin_control_panel/02.settings/01.options';

$separator=DIRECTORY_SEPARATOR;
$templateTokens=['~title~','~title_slug~','~date~','~group~','~version~','~content~'];
$contentTokens=['~title~','~image~','~description~','~help~','~additionalinfo~','~varname~','~type~','~defaultvalue~'];
$imageTokens=['~imageurl~','~caption~'];

// Setup Necessary Queries.
$queries = new QueryDefs();
$optionQueries = $queries->getQueries('options');

$dbConnect = new Database($dbHost,$dbName,$dbUser,$dbPass);

if (!empty($dbConnect)) {
    echo "Database Connection Successful\n\r";
}

$clean = true;
$version = $queries->getVersion($dbConnect, $dbPrefix);
$now=date('n/d/Y h:ia');

$groups = $dbConnect->run_query($optionQueries['groups'], $dbPrefix);

$itemReplace=[];
$currentItem='';
$outDir = $outDir . $separator . 'settings';
foreach ($groups as $group) {
    if ($group['displayorder']==0){
        continue;
    }
    echo $group['title'] . "\n\r";
    $settings = $dbConnect->run_query($optionQueries['settings'], $dbPrefix, [$group['grouptitle']]);
    $content='';
    foreach ($settings as $setting) {
        echo "\t\t". $setting['title'] ."\n\r";
        $itemReplace=[$setting['title'],'',$setting['description'],'','',$setting['varname'],$setting['datatype'],htmlentities($setting['defaultvalue'])];
        $currentItem = new Template('settingItem.inc');
        $content.=$currentItem->parse($contentTokens,$itemReplace);
    }
    $groupDir = $outDir . $separator . $group['displayorder'] . '.' . $group['grouptitle'];
    createDirectory($groupDir);
    $templateReplace=[$group['title'], slugify($group['title']), $now, $group['grouptitle'], $version, $content];

    $settingPage = new Template('settingPage.inc');
    $page=$settingPage->parse($templateTokens,$templateReplace);
    file_put_contents($groupDir . $separator . 'article.md', $page);
}

