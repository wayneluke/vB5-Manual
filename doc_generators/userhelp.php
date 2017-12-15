<?php
require_once('./config/config.php');
require_once('./includes/database.php');
require_once('./includes/template.php');
require_once('./includes/functions.php');

// Misc. Settings. These probably do not need to be changed.
$templateTokens=['~title~','~title_slug~','~date~','~group~','~version~','~content~'];
$contentTokens=['~title~','~image~','~description~','~help~','~additionalinfo~','~varname~','~type~','~defaultvalue~'];
$imageTokens=['~imageurl~','~caption~'];

// Setup Necessary Queries.
$query =[];

$dbConnect = new Database($dbHost,$dbName,$dbUser,$dbPass);

if (!empty($dbConnect)) {
    echo "Database Connection Successful\n\r";
}

$version = $dbConnect->run_query($query['version']);
$curVersion = $version->fetchColumn();
$now=date('n/d/Y h:ia');

$groups = $dbConnect->run_query($query['groups']);

$outDir = $outDir . $separator . 'stylevars';
$pageCounter=0;

