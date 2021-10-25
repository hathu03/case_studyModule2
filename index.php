<?php
session_start();

if (!isset($_SESSION['isLogin']) || empty($_SESSION['isLogin'])) {
    header('location: app/Views/auth/login.php');
}


require __DIR__ . '/vendor/autoload.php';

use App\Controller\ProductController;

$productController = new ProductController();
$page = $_GET['page'];
//$productController->index();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php?page=default">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">

            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="index.php?page=manager" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Detail
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="index.php?page=manager">Quan ly san pham</a>
                    <a class="dropdown-item" href="#">Rent</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Cart</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Something else orther</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<div id="carouselExampleIndicators" class="carousel slide container" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100"
                 src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fcodegym.vn%2Fcodegym-day-2020%2F&psig=AOvVaw3FKJQSr3khPPjdypHCV5Vi&ust=1635093862477000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCOD8hrr94PMCFQAAAAAdAAAAABAR"
                 alt="First slide">
        </div>
        <div class="carousel-item">
            <img style="height: 300px" class="d-block w-100"
                 src="https://www.google.com/imgres?imgurl=http%3A%2F%2Fstatic.ybox.vn%2F2019%2F5%2F1%2F1557717551734-CodeGym.png&imgrefurl=https%3A%2F%2Fwww.ybox.vn%2Ftuyen-dung%2Fhn-he-thong-dao-tao-lap-trinh-vien-hien-dai-codegym-tuyen-dung-nhan-vien-tu-van-tuyen-sinh-full-time-2019-5cd54cea0ee4c4030cf3e2e1&tbnid=Rg2Tb9bFF08V6M&vet=12ahUKEwjam4a4_eDzAhVBdpQKHdC-CVoQMygLegUIARCvAQ..i&docid=rgAS4JeCHp40_M&w=700&h=400&itg=1&q=codegym&ved=2ahUKEwjam4a4_eDzAhVBdpQKHdC-CVoQMygLegUIARCvAQ">
        </div>
        <div class="carousel-item">
            <img style="height: 300px" class="d-block w-100"
                 src="img/canhcode.png">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://images.fpt.shop/unsafe/fit-in/1200x300/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/9/22/637679098412102500_F-C1_1200x300%20(14).png" alt="Four slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<br>
<h3>Menu Lover</h3>
<hr>
<?php
switch ($page) {
    case "create-p":
        $productController->app();
        break;
    case  "delete-p":
        $id = $_REQUEST['id'];
        $productController->delete($id);
        break;
    case "manager":
        $productController->manager();
        break;
    case "detail":
        $id = $_GET['id'];
        $productController->showDetail($id);
        break;
    default:
        $productController->index();
        break;
    case "customer-creat":

}
?>


<?php
//$productController->index();
?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script>
</body>
</html>
