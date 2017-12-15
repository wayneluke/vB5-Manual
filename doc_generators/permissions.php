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
$query =[
    'version'   => "select value from setting where varname='templateversion'",
    'groups'    => "",
    'permissions' => "", 
];

$bitfields=(array) simplexml_load_string($xmldir . "vbulletin_bitfield.xml");

$dbConnect = new Database($dbHost,$dbName,$dbUser,$dbPass);

if (!empty($dbConnect)) {
    echo "Database Connection Successful\n\r";
}

$version = $dbConnect->run_query($query['version']);
$curVersion = $version->fetchColumn();
$now=date('n/d/Y h:ia');

$groups = $dbConnect->run_query($query['groups']);

$itemReplace=[];
$currentItem='';

$outDir = $outDir . $separator . 'permissions';
$pageCounter=0;

