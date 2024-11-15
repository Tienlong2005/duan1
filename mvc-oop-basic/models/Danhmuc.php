<?php
require_once '../Connect/connect.php';

  class Danhmuc extends connect {
    public function listDanhmuc() {
      $sql = 'SELECT *FROM danh_mucs';
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();
      return $stmt->fetchAll();
}
 public function addDanhMuc($ten_danh_muc,  $mo_ta){
      $sql = "INSERT INTO danh_mucs(ten_danh_muc ,mo_ta) values(? ,?)";
    $stmt = $this->connect()->prepare($sql);
    return $stmt -> execute([$ten_danh_muc,  $mo_ta]);
    
 }
 public function delete($id)
  {
    $sql = 'DELETE FROM danh_mucs WHERE id = ?';
    $stmt = $this->connect()->prepare($sql);
    return $stmt->execute([$id]);
  }
  public function editDanhMuc($id, $ten_danh_muc, $mo_ta)
  {
    $sql = 'UPDATE danh_mucs SET ten_danh_muc = ?, mo_ta = ? WHERE id = ?';
    $stmt = $this->connect()->prepare($sql);
    return $stmt->execute([$ten_danh_muc, $mo_ta, $id]);
  }
  public function detailDanhMuc($id)
  {
    $sql = 'SELECT * FROM danh_mucs WHERE id = ?';
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
}