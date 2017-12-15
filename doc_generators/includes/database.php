<?php


/**
 * PDO Wrapper class for the Document Generators.
 * 
 * A Basic Wrapper for PDO to be used with the Documentant Generators.
 * From - https://phpdelusions.net/pdo/pdo_wrapper
 */

class Database extends PDO
{
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

    /**
     * run-query
     * 
     * Wrapper to run a query that will return many results.
     * 
     * @param string $sql The SQL Query to run including placeholders for bound parameters.
     * @param array $args An array of values to be used for parameters in the query.
     * @return $stmt object holding the query results as an associative array.
     */
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

    /**
     * run-query
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
}