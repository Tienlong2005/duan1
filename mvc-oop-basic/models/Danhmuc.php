<?php
require_once '../Connect/connect.php';
class Danhmuc extends connect {
public function listDanhmuc() {
  $sql = 'SELECT *FROM danh_mucs';
  $stmt = $this->connect()->prepare($sql);
  $stmt->execute();
  return $stmt->fetchAll();
}
 public function addDanhMuc($ten_danh_muc , $mo_ta){
    $sql = "INSERT INTO danh_mucs(ten_danh_muc ,mo_ta) values(? ,?)";
    $stmt = $this->connect()->prepare($sql);
    return $stmt -> execute([$ten_danh_muc , $mo_ta]);
 }
 public function editDanhMuc($id, $ten_danh_muc ,$mo_ta){
  $sql = 'update danh_mucs set ten_danh_muc =? , mo_ta =? where id=?';
   $stmt = $this->connect()->prepare($sql);
   return $stmt -> execute([$id,$ten_danh_muc , $mo_ta]);
 }
 public function deleteDanhMuc($id){
  $sql = 'delete from danh_mucs set ten_danh_muc =? , mo_ta =? where id=?';
  $stmt = $this->connect()->prepare($sql);
  return $stmt->execute($id);

 }
 public function detalDanhMuc(){
  $sql = 'select* from danh_mucs where id=?';
  $stmt = $this->connect()->prepare($sql);
 $stmt->execute($_GET['id']);
 $stmt->fetch(PDO::FETCH_ASSOC);

 }
}