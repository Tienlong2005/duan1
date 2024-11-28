<?php
require_once '../models/Auth.php';
class AuthController extends Auth
{
    public function resgister()
    {
        if (
            $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])
        ) {
            $errors = [];
            if (empty($_POST['name'])) {
                $errors['name'] = 'Không bỏ trống tên đăng ký';
            }
            if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'Email không hợp lệ hoặc không được bỏ trống';
            }

            if (empty($_POST['password']) || strlen($_POST['password']) < 6) {
                $errors['password'] = 'Mật khẩu phải chứa ít nhất 6 ký tự và không được để trống';
            }

            $_SESSION['errors'] = $errors;
            if (count($errors) > 0) {
                header('Location:?act=signin');
                exit();
            }

            $resgister = $this->register($_POST['name'], $_POST['email'], $_POST['password']);
            if ($resgister) {
                $_SESSION['success'] = 'Tạo tài khoản thành công.Vui lòng đăng nhập';
                header('Location:?act=dang-nhap');
                exit();
            } else {
                $_SESSION['error'] = 'Tạo tài khoản không thành công';
                header('Location:' . $_SERVER['HTTP_REFERER']);
                exit();
            }
        }
        include '../views/client/auth/register.php';
    }

    public function logins()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
            $errors = [];

            if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'Email không hợp lệ hoặc không được bỏ trống';
            }

            if (empty($_POST['password']) || strlen($_POST['password']) < 6) {
                $errors['password'] = 'Mật khẩu không hợp lệ ';
            }

            $_SESSION['errors'] = $errors;

            if (count($errors) > 0) {
                header('Location:' . $_SERVER['HTTP_REFERER']);
                exit();
            }

            $login = $this->login($_POST['email'], $_POST['password']);
            if ($login) {
                $_SESSION['user'] = $login;
                $_SESSION['success'] = 'Đăng Nhập Thành Công';
                header('Location:index.php?act=trang-chu');
            } else {
                $_SESSION['error'] = 'Đăng Nhập Thất Bại';
                header('Location:' . $_SERVER['HTTP_REFERER']);
            }
            exit();
        }
        include '../views/client/auth/login.php';
    }


   

    public function logout()
    {
        if (isset($_SESSION['user'])) {
            session_unset();
            session_destroy();
        }
        header("Location: ?act=trang-chu");
        exit();
    }
}
