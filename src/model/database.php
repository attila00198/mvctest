<?php

class Database
{

    private $db_host;
    private $db_user;
    private $db_passwd;
    private $db_name;

    public function __construct()
    {
        $this->db_host = DB_HOST;
        $this->db_user = DB_USER;
        $this->db_passwd = DB_PASSWD;
        $this->db_name = DB_NAME;
    }

    public function getConnection() {
        $connection = $this->connect();
        return $connection;
    }

    private function connect()
    {
        $dsn = "mysql:dbhost=$this->db_host;dbname=$this->db_name;";
        try {
            $conn = new PDO($dsn, $this->db_user, $this->db_passwd);
            return $conn;
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
    }
}
