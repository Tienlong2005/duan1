<?php
require_once '../Connect/connect.php';
   class SanPham extends connect {
    public function getAllMauSac(){
        $sql = 'SELECT *FROM mau_sacs';
        $stmt = $this->connect()->prepare($sql);
        $stmt ->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getAllKichThuoc(){
        $sql = 'SELECT *FROM kich_thuocs';
        $stmt = $this->connect()->prepare($sql);
        $stmt ->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getAllDanhMuc(){
        $sql = 'SELECT*FROM danh_mucs';
        $stmt = $this->connect()->prepare($sql);
        $stmt ->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }
    public function addSanPham( $ten_san_pham , $gia_san_pham , $gia_khuyen_mai , $hinh_anh ,$so_luong ,$ngay_nhap ,$danh_muc_id,$trang_thai ){
     $sql = 'INSERT INTO san_phams(ten_san_pham , gia_san_pham , gia_khuyen_mai , hinh_anh, so_luong, ngay_nhap, danh_muc_id, trang_thai) VALUES(?,?,?,?,?,?,?,?)';
     $stmt = $this->connect()->prepare($sql);
      return $stmt->execute([$ten_san_pham , $gia_san_pham , $gia_khuyen_mai , $hinh_anh ,$so_luong ,$ngay_nhap ,$danh_muc_id,$trang_thai]);
     
    }
   }
?>