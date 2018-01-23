<?php
require_once('./config/config.php');
require_once('./includes/database.php');
require_once('./includes/querydef.php');
require_once('./includes/template.php');
require_once('./includes/functions.php');

// Misc. Settings. These probably do not need to be changed.
$templateTokens=['~title~','~title_slug~','~date~','~group~','~version~','~content~'];
$contentTokens=['~title~','~image~','~description~','~help~','~additionalinfo~','~varname~','~type~','~defaultvalue~'];
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

ob_start();
$version = $queries->getVersion($dbConnect);
$now=date('n/d/Y h:ia');

$categories = $dbConnect->run_query($moduleQueries['categories']);

foreach ($categories as $category) {
    //Skip Abstract Category for now.
    if ($category['category'] === 'Abstract') {continue;}

    echo '# ' . $category['category'] . PHP_EOL;
    $modules = $dbConnect->run_query($moduleQueries['widget'],[$category['category']]);
    foreach ($modules as $module)
    {
        print_r($module);
    }
}    

echo $version . PHP_EOL;

$fileTxt = ob_get_clean();

writeFile($outDir,'chapter.md',$fileTxt);
