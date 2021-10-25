<?php

namespace App\Controller;
use App\Models\AuthModel;


class AuthController
{
    private $authModel;

    public function __construct()
    {
        $this->authModel = new AuthModel();
    }

    public function login($name, $password) {
        if ($this->authModel->login($name, $password)) {
            $_SESSION['isLogin'] = true;
            header('Location: ../../../index.php');
        }else{
            $_SESSION['loginFail'] = "Tài khoản không đúng";
        }
    }

    public function showLogin() {
        include_once "app/Views/Auth/login.php";
    }
}