<?php
require_once '../Connect/connect.php';
   class SanPham extends connect {
    public function listSanPham(){
        $sql = 'SELECT *FROM san_phams';
        $stmt = $this->connect()->prepare($sql);
        $stmt ->execute();
        return $stmt->fetchAll();
    }
    public function addSanPham($ten_san_pham, $gia_san_pham , $gia_khuyen_mai,$hinh_anh,$so_luong , $ngay_nhap, $mo_ta, $danh_muc_id, $trang_thai){
        $sql = "INSERT INTO san_phams(ten_san_pham, gia_san_pham, gia_khuyen_mai,hinh_anh ,so_luong, ngay_nhap ,mo_ta, danh_muc_id, trang_thai) values(?,?,?,?,?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        return $stmt -> execute([$ten_san_pham, $gia_san_pham , $gia_khuyen_mai,$hinh_anh,$so_luong ,  $ngay_nhap, $mo_ta, $danh_muc_id, $trang_thai]);
            
    }
   
   
   }
?>