<?php
require_once '../models/Danhmuc.php';
class DanhMucAdminController extends Danhmuc {
     public function index() {
       $listDanhMuc = $this->listDanhmuc();
        include '../views/admin/danhmuc/list.php';
}
public function createDanhMuc() {
 if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['them-danh-muc'])) {
    $errors = [];
    if(empty($_POST['ten_danh_muc'])){
        $errors['ten_danh_muc'] = 'Không được để trống trường này';
    } 
    if(empty($_POST['mo_ta'])){
        $errors['mo_ta'] = 'Không được để trống trường này';
    }
    if(empty($errors)){
        $addDanhMuc = $this-> addDanhMuc($_POST['ten_danh_muc'], $_POST['mo_ta']);
        if($addDanhMuc){
            $_SESSION['success'] = 'Thêm danh mục thành công';
            header('location:index.php?act=danh-muc');
            exit();
       }else{
           $_SESSION['errors'] = 'Thêm danh mục thất bại ';  
       }
       }else{
        $_SESSION['errors'] = $errors ;
    }
        } 
    include '../views/admin/danhmuc/create.php';   
}

}