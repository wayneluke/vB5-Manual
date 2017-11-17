<?php

$path = dirname(__FILE__);
$httpPath = '//'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

//Check that $path exists and is readable.
if (!is_dir($path)) {
    throw new RuntimeException(sprintf('Path %s does not exist!', $path));
}

if (!is_readable($path)) {
    throw new RuntimeException(sprintf('Path %s is not readable!', $path));
}

function build_sorter($key) {
    return function ($a, $b) use ($key) {
        return strnatcmp($a[$key], $b[$key]);
    };
}

function getFiles ($directory, $httpPath) {
    $rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory));

    $files = [];
    foreach ($rii as $fileInfo) {
        if ($fileInfo->isFile() AND ($fileInfo->getFilename() !== 'index.php' AND $fileInfo->getFileName() !== 'style.css')) {
            $files[] = [
                'section' => str_replace($directory . DIRECTORY_SEPARATOR,'',dirname($fileInfo->getPathname())),
                'filename' => $fileInfo->getFilename(),
                'modified' => date('m-d-Y', $fileInfo->getATime() ).', '.date('H:i:s', $fileInfo->getATime()),
                'size' => $fileInfo->getSize(),
            ];
        }
    }

    return $files;
}    

$fileList = getFiles($path, $httpPath);
usort ($fileList, build_sorter('section'));

?>
<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Image Directory for the vBulletin 5 Connect Manual">
    <meta name="author" content="Wayne Luke">

    <title>vBulletin 5 - Manual Images</title>
    <base href="http://vb5resources.com/manual/vb5_images/"

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300,400italic,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://vb5resources.com/manual/vb5_images/style.css?v=1.0">
</head>
<body>
    <div class="wrapper">
        <h1>vBulletin 5 - Manual Images</h1>
        <p>This is an index of all images used in the vBulletin 5 Connect Documentation Manual.</p>
        <table class='table'>
<?php
$currentSection = '';
foreach ($fileList as $file) {
    if ($currentSection !== $file['section']) {
        echo "\t\t<tr class='row header'>\n";
        echo "\t\t\t<th class='cell'>" . $file['section'] . "</th>\n";
        echo "\t\t\t<th class='cell'>File Size</th>\n";
        echo "\t\t\t<th class='cell'>Modified</th>\n";
        echo "\t\t\t<th class='cell'>BBCode</th>\n";
        echo "\t\t</tr>\n";
        echo "\t</thead>\n";
        echo "\t<tbody>\n";
        $currentSection = $file['section'];            
    }
    $imageUrl = $httpPath . $file['section'] . "/" . $file['filename'];

    echo "\t\t<tr class='row'>\n";
    echo "\t\t\t<td class='cell'><a href='" . $imageUrl ."' target='_blank'>" . $file['filename'] . "</a></td>\n";
    echo "\t\t\t<td class='cell'>" . $file['size'] . "</td>\n";
    echo "\t\t\t<td class='cell'>" . $file['modified'] . "</td>\n";
    echo "\t\t\t<td class='cell'><input class='form-style' type='text' size='40' value='[img]" . $imageUrl ."[/img]' onClick='this.select();'></td>\n";
    echo "\t\t</tr>\n";                
}
?>
            <tfoot>
                <tr class='row'>
                    <td class='footer' colspan="4">Contents subject to change</td>
                </tr>
            </tfoot>    
        </table>
    </div>
    <p class="small">This presentation is &copy; Copyright - Rabid Badger Studios, All Rights Reserved</p>            
</body>
</html>