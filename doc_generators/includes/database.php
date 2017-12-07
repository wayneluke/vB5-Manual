<?php
// From - https://phpdelusions.net/pdo/pdo_wrapper

class Database extends PDO
{
    public function __construct($host, $dbname, $username = NULL, $password = NULL, $options = [])
    {
        $default_options = [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ];
        $options = array_replace($default_options, $options);
        $dsn = 'mysql:host='.$host.';dbname='.$dbname;
        parent::__construct($dsn, $username, $password, $options);
    }
    public function run_query($sql, $args = NULL)
    {
        if (!$args)
        {
             return $this->query($sql);
        }
        $stmt = $this->prepare($sql);
        $stmt->execute($args);
        return $stmt;
    }
}