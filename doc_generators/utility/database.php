<?php

if (!isCLI()) {
    die ('These scripts are designed to run from the Command Line Interface');
}

include_once (__DIR__ . '/../config/config.php');
include_once (__DIR__ . '/../includes/database.php');

echo PHP_EOL . "Adding Database Tables (If Needed)" . PHP_EOL;
echo "User found in /config/config.php" . PHP_EOL;
echo "For security purposes log into MySQL -" . PHP_EOL;

system ("mysql -u $dbUser -p -D $dbName < " . __DIR__ . $separator . "manual.sql");

echo "Building Data" . PHP_EOL;