<?php
require_once '../models/SanPham.php';
 class SanPhamAdminController extends SanPham {
    public function index(){
        include '../views/admin/sanpham/list.php';  
    }
    public function createSanPham(){
        $listMauSac= $this->getAllMauSac();
        $listKichThuoc = $this->getAllKichThuoc();
        $listDanhMuc = $this->getAllDanhMuc();
        include '../views/admin/sanpham/create.php';
    }
 }
?>