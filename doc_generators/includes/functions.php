<?php

// Miscellaneous Functions

function delete_directory($dirname) {
    if (is_dir($dirname))
        $dir_handle = opendir($dirname);
    if (!$dir_handle)
        return false;
    while($file = readdir($dir_handle)) {
        if ($file != "." && $file != "..") {
            if (!is_dir($dirname."/".$file))
                unlink($dirname."/".$file);
            else
                delete_directory($dirname.'/'.$file);
        }
    }
    closedir($dir_handle);
    rmdir($dirname);
    return true;
}

function create_directory($dirname) {
    if (!file_exists($dirname)) {
        mkdir($dirname, 0777, true);
    }
}

function slugify($string='')
{
    $string=strip_tags($string);
    $string=preg_replace('/[^A-Za-z0-9-]+/', ' ', $string);
    $string=trim($string);
    $string=preg_replace('/[^A-Za-z0-9-]+/','_', $string); 
    $slug=strtolower($string);
    return $slug;
}

function unslugify($string="") {
    
}