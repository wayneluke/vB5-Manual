<?php

// Query Definitions

class QueryDefs {

    protected $version = "SELECT `value` FROM setting WHERE varname='templateversion'";

    protected $modules = [
            'categories'        => "SELECT distinct(category) FROM widget;",
            'widget'            => "SELECT * FROM widget WHERE template!='' AND category = ?;",
            'templatephrase'    => "SELECT p.text FROM widget AS w LEFT JOIN phrase AS p ON (p.varname = concat(w.template,'_widgettitle')) WHERE w.widgetid=?;",
            'titlephrase'       => "SELECT p.text FROM widget AS w LEFT JOIN phrase AS p ON (p.varname = w.titlephrase) WHERE w.widgetid=?;",
            'definitions'       => "",
    ];

    protected $options = [];

    protected $stylevars = [];

    protected $permissions = [];

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