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
$gravPath='admin_control_panel/customizing_vbulletin/styles/stylevars/style_variable_reference';
$outDir = $outDir . $separator . 'stylevars';

// Setup Necessary Queries.
$queries = new QueryDefs();
$stylevarQueries = $queries->getQueries('stylevars');

/**
 * Checks database for a valid inheritance map. If one doesn't exist, it will create it.
 * returns an array with the name of the inherited style variable and the url to its docummentation.
 *
 * @param int $stylevarid
 * @param array $value
 * @param string $directory
 * @return array
 */

function getInheritanceMap ($stylevarid, $value, $directory) {

    global $gravPath;
    global $dbConnect;
    global $stylevarQueries;

    $inherited = [];

    // We need a URL here, not the disk directory
    $relativeURL = preg_replace('/[0-9.]+/', null, $directory);

    // Check if this variable has been mapped previously. If so, use that data.
    $inherited = $dbConnect->fetch_query($stylevarQueries['retrievemap'], [$stylevarid]);

    if (!isset($inherited['inherited_from'])) {
    // Update Mapping.
        $ivalue=explode(".",$value,2);
        $inherited['stylevarid'] = $stylevarid;
        $inherited['value'] = $ivalue[1];
        $inherited['inherited_from'] = $ivalue[0];
        $inherited['relative_url'] = $relativeURL . '#' . $stylevarid;
        $last = $dbConnect->insert('documentation_stylevarmap', $inherited);
    }

    return $inherited;

}

$dbConnect = new Database($dbHost, $dbName, $dbUser, $dbPass, $dbPrefix);

if (!empty($dbConnect)) {
    echo "Database Connection Successful\n\r";
} else {
    die('Unable to establish Database Connection\n\r');
}

$clean = true;
$version = $queries->getVersion($dbConnect);
$now=date('n/d/Y h:ia');

$groups = $dbConnect->run_query($stylevarQueries['groups']);

$itemReplace=[];
$currentItem='';

$pageCounter=1;
$groupDir ="";

foreach ($groups as $group) {
    echo $group['stylevargroup'] . "\n";
    $stylevars = $dbConnect->run_query($stylevarQueries['stylevars'], [$group['stylevargroup']]);

    $preamble='';
    $content='';

    if ($group['stylevargroup'] !== 'GlobalPalette') {
        $groupDir = $separator . ++$pageCounter . '.' . $group['stylevargroup'];
    } else {
        $groupDir = $separator . '1.' . $group['stylevargroup'];
    }
    createDirectory($outDir . $groupDir);

    foreach ($stylevars as $stylevar) {

        $value_list="";
        if (!isset($stylevar['title']) or $stylevar['title'] == null or $stylevar['title'] === '') {
            $stylevar['title'] = $stylevar['stylevarid'];
        }        
        
        $default = [];
        $default = $dbConnect->fetch_query($stylevarQueries['default_value'], [$stylevar['stylevarid']]);
        $values = unserialize($default['value']);
        foreach ($values as $key => $value) {
            if (isset($value) AND $value > "") {
                if (strpos($key,"stylevar") === 0) {
                    $inherited = getInheritanceMap($stylevar['stylevarid'], $value, $gravPath . $groupDir);
                    $value_list .= $inherited['value'] . ': [' . $inherited['inherited_from'] . '](' . $inherited['relative_url'] . ") **Inherited**\n";
                } elseif (strpos($key,"inherit")===0) {
                    // Skip the inherited pattern for now.
                    continue;
                } else {
                    $value_list .= "  - " . $key . ": " . $value;
                    if ($key === 'color' OR $key === 'background-color') {
                        $value_list .= " [div class=palette style=background-color:$value]  [/div]";
                    }
                    $value_list .= "\n";
                }
            }
        }

        $templates = [];
        $templates = $dbConnect->run_query($stylevarQueries['templates'], [$stylevar['stylevarid']]);
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
    file_put_contents($outDir . $groupDir . $separator . 'article.md', $page);
}