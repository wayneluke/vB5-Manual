<?php

// Query Definitions

class QueryDefs {

    private $version = "SELECT `value` FROM {TABLE_PREFIX}setting WHERE varname='templateversion'";

    // Queries to create necessary tables.
    private $tables = [
    ];

    // Queries to populate the tables with default information.
    private $populate = [
        'modules' 
            => "insert into documentation_module (guid, template) select guid, template from widget where template != ''",
        'stylevargroup'
            => "insert into documentation_stylevargroup (stylevargroup) select distinct(stylevargroup) from stylevardfn order by stylevargroup asc;",

    ];

    // retrieve information on default pages.
    private $pages = [

    ];


    // Retrieve module information
    private $modules = [
            'categories'
                => "SELECT distinct(category) as title FROM {TABLE_PREFIX}widget ORDER BY category;",
            'widget'
                => "SELECT * FROM {TABLE_PREFIX}widget WHERE template!='' AND category = ?;",
            'templatephrase'
                => "SELECT p.text FROM {TABLE_PREFIX}widget AS w LEFT JOIN {TABLE_PREFIX}phrase AS p ON (p.varname = concat(w.template,'_widgettitle')) WHERE w.widgetid=?;",
            'titlephrase'
                => "SELECT p.text FROM {TABLE_PREFIX}widget AS w LEFT JOIN {TABLE_PREFIX}phrase AS p ON (p.varname = w.titlephrase) WHERE w.widgetid=?;",
            'definitions'
                => "select * from widgetdefinition where widgetid=?",
    ];

    // retreive setting information
    private $options = [
        'version'
            => "select value from {TABLE_PREFIX}setting where varname='templateversion'",
        'groups'
            => "SELECT sg.*, p.text AS title FROM {TABLE_PREFIX}settinggroup AS sg
            LEFT JOIN {TABLE_PREFIX}phrase AS p ON (p.varname LIKE CONCAT('settinggroup_',sg.grouptitle))    
            WHERE sg.product='vbulletin' ORDER BY sg.displayorder",
        'settings' 
            => "SELECT p.text AS title, p2.text AS 'description', s.varname, s.defaultvalue, s.datatype, s.displayorder FROM {TABLE_PREFIX}setting AS s 
            LEFT JOIN {TABLE_PREFIX}settinggroup AS sg ON (s.grouptitle = sg.grouptitle)
            LEFT JOIN {TABLE_PREFIX}phrase AS p ON (p.varname LIKE CONCAT('setting_', s.varname, '_title')) 
            LEFT JOIN {TABLE_PREFIX}phrase AS p2 ON (p2.varname LIKE CONCAT('setting_', s.varname, '_desc')) 
            WHERE s.grouptitle=? ORDER BY s.displayorder",
    ];

    // retrieve information on individual stylevars
    private $stylevars = [
        'version'
            => "select value from {TABLE_PREFIX}setting where varname='templateversion'",
        'groups'
            => "select distinct(stylevargroup) from {TABLE_PREFIX}stylevardfn ORDER BY stylevargroup ASC;",
        'stylevars' 
            => "select p1.text as 'title', p2.text as 'description', s.* from {TABLE_PREFIX}stylevardfn AS s
            LEFT JOIN {TABLE_PREFIX}phrase AS p1 ON (p1.varname LIKE CONCAT('stylevar_', s.stylevarid, '_name')) 
            LEFT JOIN {TABLE_PREFIX}phrase AS p2 ON (p2.varname LIKE CONCAT('stylevar_', s.stylevarid, '_description')) 
            where stylevargroup=? ORDER BY s.stylevarid ASC", 
        'default_value'
            => "select value from {TABLE_PREFIX}stylevar where stylevarid=? and styleid=-1",
        'templates'
            => "select title from {TABLE_PREFIX}template where styleid=-1 AND title LIKE 'css_%' AND template LIKE CONCAT('%',?,'%')",
        'retrievemap'
            => 'select value, inherited_from, relative_url from documentation_stylevarmap where stylevarid=?',
        'buildmap'
            => "insert into documentation_stylevarmap values (?, ?, ?, ?)",
    ];

    private $permissions = [

    ];

    public function getQueries($property) 
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function getVersion($db)
    {
        return $db->run_query($this->version)->fetchColumn();
    }
}