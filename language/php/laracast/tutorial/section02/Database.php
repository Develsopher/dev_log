<?php

// connect to our MYSQL databas and execute a query.
// class로 genera한 방식으로 변경
class Database
{
    public $connection;
    
    public function __construct($config, $username = 'root', $password = '')
    {
        // $config = [
        //     'host' => 'localhost',
        //     'port' => 3306,
        //     'dbname' => 'my_php',
        //     'charset' => 'utf8mb4'
        // ];


        $dsn = "mysql:" . http_build_query($config, '', ';');

        // $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params = [])
    {
        $statement = $this->connection->prepare($query);
        $statement->execute($params);
        
        return $statement;
        // return $statement->fetch(PDO::FETCH_ASSOC);
    }
}
