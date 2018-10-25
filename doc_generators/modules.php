<?php
require_once('./config/config.php');
require_once('./includes/database.php');
require_once('./includes/querydef.php');
require_once('./includes/template.php');
require_once('./includes/functions.php');

// Misc. Settings. These probably do not need to be changed.
$templateTokens=['~title~','~title_slug~','~date~','~category~','~version~','~content~'];
$contentTokens=['~title~','~image~','~description~','~varname~','~type~','~defaultvalue~'];
$imageTokens=['~imageurl~','~caption~'];

// output directory - No Trailing Slash -- Should be moved to config eventually.
$outDir = './output/modules';

// Setup Necessary Queries.
$queries = new QueryDefs();

$moduleQueries = $queries->getQueries('modules');

$dbConnect = new Database($dbHost,$dbName,$dbUser,$dbPass);

if (!empty($dbConnect)) {
    echo "Database Connection Successful\n\r";
}

$version = $queries->getVersion($dbConnect, $dbPrefix);
$now=date('n/d/Y h:ia');

$pageCounter=0;

$categories = $dbConnect->run_query($moduleQueries['categories'], $dbPrefix);
foreach ($categories as $category) {
    //Skip Abstract Category for now.
    if ($category['title'] === 'Abstract') {continue;}

    echo 'Module Category - ' . $category['title'] . "\n";

    $moduleDir = $outDir . $separator . ++$pageCounter . '.' . $category['title'];
    createDirectory($moduleDir);
    
    $modules = $dbConnect->run_query($moduleQueries['widget'], $dbPrefix, [$category['title']]);
    $content = '';
    foreach ($modules as $module)
    {

        $module['title'] = $dbConnect->run_query($moduleQueries['templatephrase'], $dbPrefix, [$module['widgetid']])->fetchColumn();
        if ($module['titlephrase'] != NULL) {
            $module['title'] = $dbConnect->run_query($moduleQueries['titlephrase'], $dbPrefix, [$module['widgetid']])->fetchColumn();
        }
        echo "\t" . $module['title'] . " - (ID:" . $module['widgetid'] . ")\n";
        $content .= $module['title'] . "\n";
    }

    $pageTitle = trim(preg_replace('/(?<!\ )[A-Z]/', ' $0', $category['title']));
    $templateReplace=[$pageTitle, slugify($category['title']), $now, $category['title'], $version, $content];

    $stylevarPage = new Template('stylevarPage.inc');
    $page=$stylevarPage->parse($templateTokens,$templateReplace);
    file_put_contents($moduleDir . $separator . 'article.md', $page);

}

