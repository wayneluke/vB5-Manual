<?php


/**
 * PDO Wrapper class for the Document Generators.
 */

class Database extends PDO
{

    protected $dbPrefix = '';

    /**
     * __construct
     * 
     * Sets up the variables needed to create a database connection. Calls the parent PDO class to create the connection.
     * 
     * @param string $host Database Server Name.
     * @param string $dbname Database Name
     * @param string $username Database Username (optional)
     * @param string $password Database Password (optional)
     * @param array $options An array of options sent to PDO.
     */
    public function __construct($host, $dbname, $username = '', $password = '', $prefix=NULL, $options = [])
    {
        $default_options = [
            PDO::ATTR_ERRMODE               => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE    => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES      => false,
        ];
        $options = array_replace($default_options, $options);
        $dsn = 'mysql:host='.$host.';dbname='.$dbname;
        $this->dbPrefix = $prefix;

        parent::__construct($dsn, $username, $password, $options);
    }

    /**
     * run-query
     * 
     * Wrapper to run a query that will return many results.
     * 
     * @param string $sql The SQL Query to run including placeholders for bound parameters.
     * @param string $prefix The Table Prefix used in vBulletin's database.
     * @param array $args An array of values to be used for parameters in the query.
     * @return $stmt object holding the query results as an associative array.
     */
    public function run_query($sql, $args = NULL)
    {
        $sql = str_replace("{TABLE_PREFIX}", $this->dbPrefix, $sql);
        if (!$args)
        {
             return $this->query($sql);
        }
        $stmt = $this->prepare($sql);
        try {
            $stmt->execute($args);
        } catch (PDOException $e) {
            echo $sql . "\n\r";
            echo r_print($args) . "\n\r";
            echo $e;
            die();
        }
        return $stmt;
    }

    /**
     * fetch-query
     * 
     * Wrapper to run a query that will return a single row of results.
     * 
     * @param string $sql The SQL Query to run including placeholders for bound parameters.
     * @param array $args An array of values to be used for parameters in the query.
     * @return The result of the query in an array.
     */
    public function fetch_query($sql, $args= NULL) 
    {
        $query = $this->run_query($sql, $args);
        return $query->fetch();
    }

    /**
     * insert
     * 
     * Will insert a row into the database. If the row already exists, it will be replaced.
     *
     * @param string $table The table name to build the insert query for.
     * @param array $data An array of values to insert into the table. The array keys should match the name of the table's fields.
     * @return array
     */
    public function insert(string $table, array $data) : array
    {
        $sql = "REPLACE INTO $table(" . implode(",",array_keys($data)).") VALUES(:" . implode(",:",array_keys($data)).")";
        $stmt = $this->prepare($sql);
        $stmt->execute($data);
        return $this->lastInsertId();
    }
}