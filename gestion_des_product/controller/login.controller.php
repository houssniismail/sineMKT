<?php
include('../model/login.model.php');
    if (isset($_POST['email']) && isset($_POST['password'])) {
        session_start();
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
        $loginAD = new LoginController();
        $result = $loginAD->login($_SESSION['email'], $_SESSION['password']);
        if ($result) {
            header("Location: http://localhost/gestion_des_product/views/aficherAdmin.php");
        } else {

            echo "Incorrect email or password";
        }
    }
class LoginController {
    private $model;

    public function __construct() {
        $this->model = new UserModel();
    }

    public function login($email, $password) {
        $user = $this->model->getUserByEmail($email);
        // var_dump($user['email']);
        if ($user) {
            if ($password == $user['pass']) {
                
                $_SESSION['email'] = $user;
                 

                return true;
            } else {

                return false;
            }
        } else {

            return false;
        }
    }
}