<?php

// Miscellaneous Functions

function deleteDirectory($dirName) 
{
    if (is_dir($dirName))
        $dir_handle = opendir($dirName);
    if (!$dir_handle)
        return false;
    while($file = readdir($dir_handle)) {
        if ($file != "." && $file != "..") {
            if (!is_dir($dirName."/".$file))
                unlink($dirName."/".$file);
            else
                delete_directory($dirName.'/'.$file);
        }
    }
    closedir($dir_handle);
    rmdir($dirname);
    return true;
}

function createDirectory($dirName) 
{
    if (!file_exists($dirName)) {
        if (!mkdir($dirName, 0777, true)) {
            die ('Unable to create directory - ' .$dirName);
        }
    }
    return true;
}

function slugify($string='')
{
    $string=strip_tags($string);
    $string=preg_replace('/[^A-Za-z0-9-]+/', ' ', $string);
    $string=trim($string);
    $string=preg_replace('/[^A-Za-z0-9-]+/','_', $string); 
    $string=strtolower($string);
    return $string;
    
}

function unslugify($string='') {
    return ucwords(str_replace('_',' ',$string));
}

function writeFile (string $outDir, string $fileName, string $fileTxt) {
    if (!is_dir($outDir)) {
        // dir doesn't exist, make it
        createDirectory($outDir);
      }
      echo 'Creating ' . $fileName . ' file. ' . PHP_EOL;
      file_put_contents($outDir.'/'.$fileName,$fileTxt);  
}