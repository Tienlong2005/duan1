<?php
require_once '../Connect/connect.php';
class Taikhoan extends connect
{
  public function getAllTaiKhoan($chuc_vu_id){
    $sql = 'SELECT *FROM tai_khoans WHERE chuc_vu_id = ?';
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$chuc_vu_id]);
    return  $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function addAddmin($ho_ten, $anh_dai_dien, $email, $so_dien_thoai, $gioi_tinh, $dia_chi, $mat_khau)
{
    $sql = "INSERT INTO tai_khoans(ho_ten, anh_dai_dien, email, so_dien_thoai, gioi_tinh, dia_chi, mat_khau, chuc_vu_id, trang_thai) 
            VALUES (?, ?, ?, ?, ?, ?, ?, 1, 1)";
    $stmt = $this->connect()->prepare($sql);
    return $stmt->execute([$ho_ten, $anh_dai_dien, $email, $so_dien_thoai, $gioi_tinh, $dia_chi, $mat_khau]);
}

  public function editAdmin($id, $ho_ten, $anh_dai_dien, $email, $so_dien_thoai, $gioi_tinh, $dia_chi, $mat_khau)
  {
    $sql = 'UPDATE tai_khoans SET ho_ten = ?, anh_dai_dien = ? , email = ? , so_dien_thoai = ? , gioi_tinh = ? , dia_chi = ? , mat_khau =?  WHERE id = ?';
    $stmt = $this->connect()->prepare($sql);
    return $stmt->execute([$ho_ten, $anh_dai_dien, $email, $so_dien_thoai, $gioi_tinh, $dia_chi, $mat_khau, $id]);
  }

  public function detailsAdmin($id)
  {
    $sql = 'SELECT * FROM tai_khoans WHERE id = ?';
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
  
  public function updateQuyenAdmin($id, $trang_thai)
  {
    $sql = 'UPDATE tai_khoans SET trang_thai = ?  WHERE id = ?';
    $stmt = $this->connect()->prepare($sql);
    return $stmt->execute([$trang_thai, $id]);
  }
  public function listTaiKhoanKhach()
  {
    $sql = 'SELECT * FROM tai_khoans';
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
  }

  public function updateUser($ho_ten, $email, $so_dien_thoai,$gioi_tinh, $dia_chi){
    $sql = 'UPDATE tai_khoans SET ho_ten= ?,email=?,so_dien_thoai=?,gioi_tinh=?,dia_chi=? WHERE id=?';
    $stmt = $this->connect()->prepare($sql);
    return $stmt->execute([$ho_ten, $email, $so_dien_thoai,$gioi_tinh, $dia_chi,$_SESSION['user']['id']]); 
}

public function getUserByID($id){
  $sql = 'SELECT * FROM tai_khoans WHERE id = ? ';
  $stmt = $this->connect()->prepare($sql);
  $stmt->execute([$id]);
  return $stmt -> fetch();
}
public function getAllBinhLuan($id) {
  $sql = '
      SELECT binh_luans.*, san_phams.ten_san_pham
      FROM binh_luans
      INNER JOIN san_phams ON binh_luans.san_pham_id = san_phams.id
      WHERE binh_luans.tai_khoan_id = :id
  ';
  $stmt = $this->connect()->prepare($sql);
  $stmt->execute(['id' => $id]);
  return $stmt->fetchAll(); // 
}

public function updateQuyenBinhLuan($id, $trang_thai)
{
  $sql = 'UPDATE binh_luans SET trang_thai = ?  WHERE id = ?';
  $stmt = $this->connect()->prepare($sql);
  return $stmt->execute([$trang_thai, $id]);
}
}
