<?php
$root='C:\wamp64\www\vbulletin\manual\user\pages';
date_default_timezone_set ('America/Los_Angeles');

// File lookup from https://www.geekality.net/2014/04/20/php-simple-directory-recursion/
// This should return false if there is something you want excluded
function filter($file, $key, $iterator)
{
    $exclude = array('.git','images');
    return ! in_array($file->getFilename(), $exclude);
}

// Recursive directory iterator for current directory, ignoring dots
$it = new RecursiveDirectoryIterator($root, FilesystemIterator::SKIP_DOTS);
// Wrapped by a filtering iterator with our filter function
$it = new RecursiveCallbackFilterIterator($it, 'filter');
// Wrapped by an iterator which automatically traverses children for us
$it = new RecursiveIteratorIterator($it, RecursiveIteratorIterator::SELF_FIRST);

// And then just loop :)
$path='';
$dirCount =0;
$fileCount =0;
ob_start();
echo '# vBulletin 5 Connect File List' . PHP_EOL . 'MD Files with less than 200 bytes should be considered incomplete.' . PHP_EOL . PHP_EOL;
foreach($it as $file)
{
    $size ="";
    $complete= '[x]';

    if ($file->isdir()) {
        $path = $file->getBasename();
        $dirCount++;
    } else {
        if ($file->getExtension() == 'md') {
            $path = $file->getFilename();
            $size = $file->getSize();
            $size = (isset($size) AND $size > 100) ? " (" . $size . " bytes)" : "";
            $complete = $size !== "" ? "[x]":"[ ]";
            $fileCount++;
        } else {
            continue;
        }           
       
    }
    echo str_repeat("\t", $it->getDepth()) . '- ' . $complete . ' ' . $path . $size . PHP_EOL;
}

echo PHP_EOL . PHP_EOL;
echo 'Total Directories: ' . $dirCount . ' / Total Articles: ' . $fileCount;
echo PHP_EOL . PHP_EOL;
echo 'Updated at: ' . date('n/d/Y h:ia') . PHP_EOL;

$fileTxt = ob_get_clean();
file_put_contents('../files.md',$fileTxt);

echo PHP_EOL . PHP_EOL;
echo 'Total Directories: ' . $dirCount . ' / Total Articles: ' . $fileCount;
echo PHP_EOL . PHP_EOL;
echo 'Updated at: ' . date('n/d/Y h:ia') . PHP_EOL;
