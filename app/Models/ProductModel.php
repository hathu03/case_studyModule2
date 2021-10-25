<?php

namespace App\Models;

class ProductModel
{
    private $dbConnect;
    public function __construct() {
        $conn = new DBConnect();
        $this->dbConnect = $conn->connect();

    }
    public function getAll() {
        $sql = "SELECT * FROM product";
        $stmt = $this->dbConnect->query($sql);
        return $stmt->fetchAll();
    }
    public function getbyID($id) {
        $sql = "SELECT * FROM product WHERE id =:id";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM product WHERE id = " . $id;
        $this->dbConnect->query($sql);
    }

    public function store($data)
    {
        $sql = "INSERT INTO product(name, FullName, pcode, height, weight, Information, infor, price, img) VALUES (?,?,?,?,?,?,?,?,?);";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1, $data['name']);
        $stmt->bindParam(2, $data['FullName']);
        $stmt->bindParam(3, $data['pcode']);
        $stmt->bindParam(4, $data['height']);
        $stmt->bindParam(5, $data['weight']);
        $stmt->bindParam(6, $data['information']);
        $stmt->bindParam(7, $data['infor']);
        $stmt->bindParam(8, $data['price']);
        $stmt->bindParam(9, $data['img']);
        $stmt->execute();
    }


}