<?php

// Query Definitions

class QueryDefs {

    protected $version = "select value from setting where varname='templateversion'";

    protected $modules = [
            'categories'        => "select distinct(category) from widget;",
            'widget'        => "SELECT * FROM widget WHERE template!='' AND category = ?;",
            'definitions'   => "",
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