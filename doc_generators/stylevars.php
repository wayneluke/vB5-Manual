<?php
require_once('./config/config.php');
require_once('./includes/database.php');
require_once('./includes/querydef.php');
require_once('./includes/template.php');
require_once('./includes/functions.php');

// Misc. Settings. These probably do not need to be changed.
$templateTokens=['~title~','~title_slug~','~preamble~','~date~','~group~','~version~','~content~'];
$contentTokens=['~title~','~description~','~varname~','~type~','~defaultvalue~','~templatelist~'];
$imageTokens=['~imageurl~','~caption~'];

// Setup Necessary Queries.
$queries = new QueryDefs();
$stylevarQueries = $queries->getQueries('stylevars');

// Checks database for valid inheritance map. If one doesn't exist, it will create it.
// returns an array with the name of the inherited style variable and the url to its docummentation.
function getInheritanceMap ($dbConnect, $stylevarQueries, $dbPrefix, $stylevarid, $value, $directory) {
    $inherited = [];

    // We need a URL here, not the disk directory
    $relativeURL = preg_replace('/[0-9.]+/', null, $directory);

    // Check if this variable has been mapped previously. If so, use that data.
    $map = $dbConnect->fetch_query($stylevarQueries['retrievemap'], $dbPrefix, [$stylevarid]);

    if (!isset($map['inherited_from'])) {
    // Update Mapping.
        $ivalue=explode(".",$value,2);
        $inherited['value'] = $ivalue[1];
        $inherited['inherited_from'] = $ivalue[0] . " **(Inherited)**";
        $inherited['relative_url'] = $relativeURL;
        $dbConnect->run_query($stylevarQueries['variablemap'], $dbPrefix, $inherited);
    }

    return $inherited;

}

$dbConnect = new Database($dbHost,$dbName,$dbUser,$dbPass);

if (!empty($dbConnect)) {
    echo "Database Connection Successful\n\r";
}

$clean = true;
$version = $queries->getVersion($dbConnect, $dbPrefix);
$now=date('n/d/Y h:ia');

$groups = $dbConnect->run_query($stylevarQueries['groups'], $dbPrefix);

$itemReplace=[];
$currentItem='';

$outDir = $outDir . $separator . 'stylevars';
$pageCounter=1;
$groupDir ="";

foreach ($groups as $group) {
    echo $group['stylevargroup'] . "\n";
    $stylevars = $dbConnect->run_query($stylevarQueries['stylevars'], $dbPrefix, [$group['stylevargroup']]);

    $preamble='';
    $content='';

    if ($group['stylevargroup'] !== 'GlobalPalette') {
        $groupDir = $outDir . $separator . ++$pageCounter . '.' . $group['stylevargroup'];
    } else {
        $groupDir = $outDir . $separator . '1.' . $group['stylevargroup'];
    }
    createDirectory($groupDir);

    foreach ($stylevars as $stylevar) {

        $value_list="";
        if (!isset($stylevar['title']) or $stylevar['title'] == null or $stylevar['title'] === '') {
            $stylevar['title'] = $stylevar['stylevarid'];
        }        
        
        $default = [];
        $default = $dbConnect->fetch_query($stylevarQueries['default_value'], $dbPrefix, [$stylevar['stylevarid']]);
        $values = unserialize($default['value']);
        foreach ($values as $key => $value) {
            if (isset($value) AND $value > "") {
                if (strpos($key,"stylevar") === 0) {
                    $inherited = getInheritanceMap($dbConnect, $stylevarQueries, $dbPrefix, $stylevar['stylevarid'], $value, $groupDir);
                    $value_list .= $inherited['value'] . '[' . $inherited['inherited_from'] . '](' . $inherited['relative_url'] . ')\n';
                } elseif (strpos($key,"inherit")===0) {
                    continue;
                } else {
                    $value_list .= "  - " . $key . ": " . $value;
                    if ($key === 'color' OR $key === 'background-color') {
                        $value_list .= " [swatch=$value]  [/swatch]";
                    }
                    $value_list .= "\n";
                }
            }
        }

        $templates = [];
        $templates = $dbConnect->run_query($stylevarQueries['templates'], $dbPrefix, [$stylevar['stylevarid']]);
        $templatelist='';
        foreach ($templates as $template) {
            $templatelist .= $template['title'] . ", ";
        }
        $templatelist = substr(trim($templatelist),0,-1) . "\n";
        echo "\t". $stylevar['title'] ."\n";
        $itemReplace=[
            $stylevar['title'],          // title
            trim($stylevar['description']),    // description
            $stylevar['stylevarid'],     // variable name
            $stylevar['datatype'],       // type
            $value_list,                 // default values    
            $templatelist,              // List of templates where used.
        ];
        $currentItem = new Template('stylevarItem.inc');
        $content.=$currentItem->parse($contentTokens,$itemReplace);
    }
    $pageTitle = trim(preg_replace('/(?<!\ )[A-Z]/', ' $0', $group['stylevargroup']));
    $templateReplace=[$pageTitle, slugify($group['stylevargroup']), $preamble, $now, $group['stylevargroup'], $version, $content];

    $stylevarPage = new Template('stylevarPage.inc');
    $page=$stylevarPage->parse($templateTokens,$templateReplace);
    file_put_contents($groupDir . $separator . 'article.md', $page);
}