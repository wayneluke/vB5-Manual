<?php

require_once (__DIR__ . '/includes/functions.php');
require_once (__DIR__ . '/includes/console.php');

if (!isCLI()) {
    die ('These scripts are designed to run from the Command Line Interface');
}

$selection='';

function getKeyPress($prompt=" .: Press Any Key to Continue :.") {
    echo PHP_EOL.$prompt;
    return fgetc(fopen('php://stdin', 'r'));
}

function doMenu() {

    system('clear');

    // Header
    echo PHP_EOL;
    echo Console::light_blue(" +" . str_repeat('-',38) . "+") . PHP_EOL;
    echo Console::light_blue(" |") . Console::cyan('    vBulletin Documentation System    ', 'bold') . Console::light_blue("|").PHP_EOL;
    echo Console::light_blue(" +" . str_repeat('-',38) . "+") . PHP_EOL;
    echo Console::light_blue(" |  Wayne A Luke, Updated: 2018 OCT 15  |").PHP_EOL;
    echo Console::light_blue(" +" . str_repeat('-',38) . "+") . PHP_EOL;

     // Menu
    echo PHP_EOL;
    echo Console::light_green(" Document Generators:") . PHP_EOL;
    echo Console::light_green("\t1 - Settings & Options").PHP_EOL;
    echo Console::light_green("\t2 - Style Variables").PHP_EOL;
    echo Console::light_green("\t3 - Site Builder Pages").PHP_EOL;
    echo Console::light_green("\t4 - Site Builder Modules").PHP_EOL;
    echo Console::light_green("\t5 - Usergroups Permissions").PHP_EOL;
    echo Console::light_green("\t6 - User Help").PHP_EOL;
    echo Console::light_green("\t0 - Process All").PHP_EOL;

    echo Console::light_purple(" Utilities:").PHP_EOL;
    echo Console::light_purple("\tA - Wikify").PHP_EOL;
    echo Console::light_purple("\tB - Frontmatter").PHP_EOL;
    echo Console::light_purple("\tF - File List").PHP_EOL;
    echo Console::light_purple("\tI - Image List").PHP_EOL;
    
    echo Console::light_red(" Tools:").PHP_EOL;
    echo Console::light_red("\tH - Help").PHP_EOL;
    echo Console::light_red("\tQ - Quit").PHP_EOL;
    
    return getKeyPress(Console::white(' --- Selection --> '));
}

system('stty cbreak');

while (1) {
    $selection = doMenu();
    switch (strtolower($selection)) {
        case '1':
            echo PHP_EOL;
            include ('options.php');
            getKeyPress();
            break;
        case '2':
            echo PHP_EOL;
            include('stylevars.php');
            getKeyPress();
            break;
        case 'f':
            echo PHP_EOL;
            include ('./utility/files.php');
            getKeyPress();
            break;
        case '3':
        case '4':
        case '5':
        case '6':
        case '0':
        case 'a';
        case 'b':
        case 'i':
            getKeyPress(".: Not Yet Implemented - Press a key to return to the menu. :.");
            break;
        case 'h':
            $help = fopen("ReadMe.md", "r");
            if ($help) {
                while (($line = fgets($help)) !== false) {
                    echo $line;
                }
                fclose($help);
            }
            getKeyPress();
            break;
        case 'q':
            die (PHP_EOL . ' .: Have a good day :. ' . PHP_EOL);
        default:
            getKeyPress(" .: Invalid Selection -  Press a key to return to the menu. :. ");
            break;
    }
}