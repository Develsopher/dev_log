<?php

// connect to our MYSQL databas and execute a query.
// class로 genera한 방식으로 변경
class Database
{
    public $connection;
    public $statement;
    
    public function __construct($config, $username = 'root', $password = '3329')
    {
        $dsn = "mysql:" . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params = [])
    {
        $this->statement = $this->connection->prepare($query);

        $this->statement->execute($params);

        return $this;
    }

    public function find()
    {
        return $this->statement->fetch();
    }

    public function findOrFail()
    {
        $result = $this->find();
    
        if(! $result) {
            abort();
        }

        return $result;
    }

    public function findAll()
    {
        return $this->statement->fetchAll();
    }
}
