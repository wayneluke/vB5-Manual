<?php

function doMenu() {
    $menu = 
    "Please select an option from below.".PHP_EOL.
    "--------------------------------------------".PHP_EOL.
    "Document Generators:".PHP_EOL.
    "\t1 - Settings & Options".PHP_EOL.
    "\t2 - Style Variables".PHP_EOL.
    "\t3 - Pages".PHP_EOL.
    "\t4 - Site Builder Modules".PHP_EOL.PHP_EOL.
    "Tools:".PHP_EOL.
    "\tA - Wikify".PHP_EOL.
    "\tB - Frontmatter".PHP_EOL.
    "\tC - File List".PHP_EOL.
    "\tD - Image List".PHP_EOL.
    "\tQ - Quit".PHP_EOL;
    
    echo $menu;
    echo PHP_EOL.'Selection ->';
    $choice = trim(fgets(STDIN));
    
    return $choice;
}

fwrite(STDOUT, CLEAR.HOME);
echo PHP_OS;
$selection = doMenu();