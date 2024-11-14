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
 
}