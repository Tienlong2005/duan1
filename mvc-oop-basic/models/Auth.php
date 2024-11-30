<?php
require_once '../Connect/connect.php';
class Auth extends connect
{
    public function register($name, $email, $password)
    {
        $hash_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO tai_khoans (ho_ten, email, mat_khau , chuc_vu_id) VALUES (?, ?, ?, 2)";
        $stmt = $this->connect()->prepare($sql);
        return $stmt->execute([$name, $email, $hash_password]);
    }

    public function login($email, $password)
    {
        $sql = "SELECT * FROM tai_khoans WHERE email=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['mat_khau'])) {
            return $user;
        }
        return false;
    }
}
