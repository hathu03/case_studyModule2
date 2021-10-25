<?php
namespace App\Models;
use PDO;
use PDOException;
class DBConnect
{
    private $dsn;
    private $username;
    private $password;

    public function __construct() {
        $this->dsn = "mysql:host=localhost;dbname=lover_sale;charset=utf8";
        $this->username = "root";
        $this->password = "123456@Abc";
    }
    public function connect() {
        try {
            return new PDO($this->dsn, $this->username, $this->password);
        }catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}