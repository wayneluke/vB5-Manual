<?php

setlocale(LC_ALL, 'en_US.UTF8');

//include some files to get started.
require_once('./config/config.php');
require_once('./includes/functions.php');

//include necessary template(s)
require_once('./includes/templates/settings.markdown.php');

// Misc. Settings. These probably do not need to be changed.
$outDir='../pages/20.vbulletin_5.3.0/06.admin_control_panel/02.settings/01.options';
$separator=DIRECTORY_SEPARATOR;
$tokens=['%title%','%title_slug%','%date%','%group%','%version%','%content%'];


// Setup Necessary Queries.
$queries =[
    'version' => "select value from setting where varname='templateversion",
    'groups' => "SELECT sg.*, p.text AS title FROM settinggroup AS sg
        LEFT JOIN phrase AS p ON (p.varname LIKE CONCAT('settinggroup_',sg.grouptitle))    
        WHERE sg.product='vbulletin' ORDER BY sg.displayorder",
    'settings' => "SELECT p.text AS title, p2.text AS 'description', s.varname, s.defaultvalue, s.datatype, s.displayorder FROM setting AS S 
        LEFT JOIN settinggroup AS sg ON (s.grouptitle = sg.grouptitle)
        LEFT JOIN phrase AS p ON (p.varname LIKE CONCAT('setting_', s.varname, '_title')) 
        LEFT JOIN phrase AS p2 ON (p2.varname LIKE CONCAT('setting_', s.varname, '_desc')) 
        WHERE s.grouptitle=? ORDER BY s.displayorder",
];


function get_data($connection, $query, $params=[]) {
    $stmt = $connection->prepare($query);
    if (!empty($params)) {
        $types = str_repeat('s', count($params));
        $stmt->bind_param($types, ...$params);
    }        
    $stmt->execute();
    return $stmt->get_result();
}

create_directory($outDir);

mysqli_report(MYSQLI_REPORT_STRICT);

try {
     $connection = new mysqli($dbHost, $dbUser, $dbPass, $dbDatabase);
} catch (Exception $e ) {
     echo "Service unavailable\n\r";
     die("message: " . $e->message);
     
}

echo ("Connected to MySQL Successfully\n\r");


$groups=get_data($connection,$queries['groups']);
while ($group = $groups->fetch_array()) {
    if ($group[1]) {
        echo "Creating page for \"" .$group[5].".\n\r";
        
        $now=date('n/d/Y h:ia');
        $content="";

        $settings=get_data($connection,$queries['settings'],[$group[0]]);
        while ($setting = $settings->fetch_array()) {
            $content .= "## " . $setting[0] . "\n" . $setting[1] . "\n\r\n\r";
        }
        
        $replace=[$group[5],slugify($group[5]),$now,$group[0],'5.3.3', $content];
        $page=str_replace($tokens,$replace,$template);
        $groupDir = $outDir . $separator . $group[1] . '.' . $group[0];

        create_directory($groupDir);
        file_put_contents($groupDir . $separator . 'article.md', $page);
    }

}
