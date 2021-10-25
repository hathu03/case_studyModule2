<?php

namespace App\Models;

class AuthModel
{
    private $dbConnect;
    public function __construct() {
        $conn = new DBConnect();
        $this->dbConnect = $conn->connect();

    }

    public function login($name, $password) {
        $sql = "SELECT * FROM users WHERE name =:name and passwords=:password";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(":name",$name);
        $stmt->bindParam(":password",$password);
        $stmt->execute();
        return $stmt->rowCount() > 0;
    }
}