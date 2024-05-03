<?php

class Database
{
    /**
     * Database Connection
     * @var $connection PDO instance will be used within the class for DB interactions 
     * @var $statement PDO_Object will contains executed query for further execution
     */
    private $connection;
    private $statement;

    /**
     * Constructor that will initiate database connection on instance creation.
     */
    public function __construct($config, $user = 'root', $password = 'root')
    {
        $dsn = 'mysql:' . http_build_query($config, '',';');
        $this->connection = new PDO($dsn, $user, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }

    /**
     * Query Execute
     * @mathod query returns data on requested query.
     * @var $query string a MySQL database query
     * @var $params array contains, array of query parameters
     */
    public function query($query, $params){
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);
        return $this;
    }

    public function find(){
        return $this->statement->fetchAll();
    }

}