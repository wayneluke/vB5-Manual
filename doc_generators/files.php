<?php
// https://www.geekality.net/2014/04/20/php-simple-directory-recursion/

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
foreach($it as $file)
{
    if ($file->isdir()) {
        $path = $file->getBasename();
    } else {
        $path = $file->getFilename();
    }
    echo str_repeat("\t", $it->getDepth())
        . '- '
        . $path
        . PHP_EOL;
}