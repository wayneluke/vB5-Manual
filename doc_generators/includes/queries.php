<?php

// Query Definitions

class QueryDefs {

    protected $version = "select value from setting where varname='templateversion'";

    protected $modules = [
            'groups'        => "select distinct(category) from widget;",
            'widget'        => "SELECT COALESCE(`titlephrase`,`template`) AS title, `guid`, `icon`, `category` FROM widget WHERE widget.template !='' order by category ASC;",
            'definitions'   => "",
    ];

    protected $options = [];

    protected $stylevars = [];

    protected $permissions = [];
}