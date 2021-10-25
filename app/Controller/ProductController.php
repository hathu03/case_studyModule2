<?php

namespace App\Controller;

use App\Models\ProductModel;

class ProductController
{
    private $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function index() {
        $products = $this->productModel->getAll();
        include_once "app/Views/Product/list.php";
    }
    public function showDetail($id) {
        $product = $this->productModel->getbyID($id);
        include_once "app/Views/Product/detail.php";

    }
    public function manager() {
        $products = $this->productModel->getAll();
        include_once "app/Views/Product/manager.php";
    }

    public  function delete($id){
        $this->productModel->delete($id);
        header("Location:index.php?page=manager");
    }
     public function  app(){
        if ($_SERVER["REQUEST_METHOD"] == "GET"){
            include_once "app/Views/Product/crearte.php";
        }else{
            $data = [
                "name" => $_POST["name"],
                "FullName" => $_POST["FullName"],
                "pcode" => $_POST["pcode"],
                "height" => $_POST["height"],
                "weight" => $_POST["weight"],
                "information" => $_POST["information"],
                "infor" => $_POST["infor"],
                "price" => $_POST["price"],
                "img" => $_POST["img"]
            ];
            $this->productModel->store($data);
            header("Location:index.php?page=manager");
        }
     }
//    if ($_SERVER["REQUEST_METHOD"] == "GET") {
//            include_once "src/View/foods/create.php";
//        } else {
//    $data = [
//        "name" => $_POST["name"],
//        "price" => $_POST["price"],
//        "ingredient" => $_REQUEST["ingredient"],
//        "kind_of" => $_REQUEST["kind_of"],
//        "image" => $_REQUEST["image"],
//    ];
//    $this->foodsModel->store($data);
//    header("Location:index.php?page=food&action=managerList");
//}

}