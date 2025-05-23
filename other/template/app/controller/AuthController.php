<?php
require_once __DIR__. '/../model/User.php';
class AuthController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function register($username, $password) {
        if ($this->userModel->register($username, $password)) {
            echo "Registrasi berhasil.";
        } else {
            echo "Gagal registrasi.";
        }
    }

    public function login($username, $password) {
        $user = $this->userModel->login($username, $password);
        if ($user) {
            session_start();
            $_SESSION['user'] = $user['username'];
            header("Location: ../app/view/dashboard.php");
            exit();
        } else {
            echo "Login gagal. Username atau password salah.";
        }
    }

    public function logout() {
        session_start();
        session_destroy();
        header("Location: index.php");
        exit();
    }
}
?>