<?php

class DatabaseManager
{
    // These are private: only this class needs them
    private $host;
    private $user;
    private $password;
    private $dbname;
    public $connection;

    public function __construct(string $host, string $user, string $password, string $dbname)
    {
        // TODO: Set any user and password information
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->dbname = $dbname;
    }

    public function connect()
    {
        // TODO: make the connection to the database
        $dsn = 'mysql:host=' . $this->host . '; dbname=' . $this->dbname;
        $this->connection = new PDO($dsn, $this->user, $this->password);

        $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return  $this->connection;
    }
}