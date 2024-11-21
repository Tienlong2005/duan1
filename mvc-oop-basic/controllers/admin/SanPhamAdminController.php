<?php
require_once '../models/SanPham.php';
 class SanPhamAdminController extends SanPham {
    public function index(){
        $listSanPham = $this->listSanPham();
        include '../views/admin/sanpham/list.php';  
    }
    public function createSanPham(){
        
        
        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['them-san-pham'])){

          $errors = [];
          if(empty($_POST['ten_san_pham'])){
             $errors['ten_san_pham'] = 'Không được để trống trường này';
          } 
          if(empty($_POST['gia_san_pham'])){
            $errors['gia_san_pham'] = 'Không được để trống trường này';
         } 
         if(empty($_POST['so_luong'])){
            $errors['so_luong'] = 'Không được để trống trường này';
         } 
         if(empty($_POST['ngay_nhap'])){
            $errors['ngay_nhap'] = 'Không được để trống trường này';
         }
        
         if(empty($_POST['trang_thai'])){
            $errors['trang_thai'] = 'Không được để trống trường này';
         } 
         if(!isset($_FILES['hinh_anh'])|| $_FILES['hinh_anh']['error'] !== UPLOAD_ERR_OK ){
            $errors['hinh_anh'] = 'Vui lòng chọn lại ảnh ';
         } 
         $_SESSION['errors']  = $errors;
        
        
         $file = $_FILES['hinh_anh'];
         $hinh_anh = $file['name'];

         if(move_uploaded_file($file['tmp_name'] , './images/category' . $hinh_anh)){
            $addSanPham =$this-> addSanPham($_POST['ten_san_pham'],$_POST['gia_san_pham' ],$_POST['gia_khuyen_mai'], $hinh_anh ,$_POST['so_luong'],  $_POST['ngay_nhap'], $_POST['mo_ta'], $_POST['danh_muc_id'], $_POST['trang_thai']);
             if($addSanPham){
                $_SESSION['success'] = 'thêm sản phẩm thành công';
                header('Location: index.php?act=san-pham');
                exit();
             }else{
               $_SESSION['errors'] = 'Thêm sản phẩm thất bại. Mời nhập lại ';
               // header('Location:'.$_SERVER['HTTP_REFERER']);
              
              
            }
         }
        }
        include '../views/admin/sanpham/create.php';
    }
    public function deleteSanPham($id)
    {
        try {
            $this->delete($id); // gọi phương thức delete từ model
            $_SESSION['success'] = 'Xóa sản phẩm thành công';
        } catch (\Throwable $th) {
            $_SESSION['errors'] = 'Xóa sản phẩm thất bại';
        }
        header('Location: index.php?act=san-pham');
        exit();
    }
     public function suaSanPham($id){
        $getSanPham = $this->detailsSanPhan($id);
        if($getSanPham){
         if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['edit-san-pham'])){
            $this->updateSanPham($id);
        }
        include '../views/admin/sanpham/edit.php';
     } else {
      $_SESSION['errors'] = 'Không tìm thấy danh mục với ID: ' . $id;
      header('Location: index.php?act=san-pham');
      exit();
     }
   }
    public function updateSanPham($id){
         if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit-san-pham'])){
 
           $errors = [];
           if(empty($_POST['ten_san_pham'])){
              $errors['ten_san_pham'] = 'Không được để trống trường này';
           } 
           if(empty($_POST['gia_san_pham'])){
             $errors['gia_san_pham'] = 'Không được để trống trường này';
          } 
          if(empty($_POST['so_luong'])){
             $errors['so_luong'] = 'Không được để trống trường này';
          } 
          if(empty($_POST['ngay_nhap'])){
             $errors['ngay_nhap'] = 'Không được để trống trường này';
          }
         
          if(empty($_POST['trang_thai'])){
             $errors['trang_thai'] = 'Không được để trống trường này';
          } 
         
          $_SESSION['errors']  = $errors;
          $file = $_FILES['hinh_anh'];
          $hinh_anh = $file['name'];
          if($file['size'] >0) {
            move_uploaded_file($file['tmp_name'], './images/category/' . $hinh_anh);
            if(!empty($_POST['old_hinh_anh']) && file_exists('./images/category/' . $_POST['old_hinh_anh'])){
                unlink('./images/category/' . $_POST['old_hinh_anh']);
            }
          } else {
            $hinh_anh = $_POST['old_hinh_anh'];
          }
          $suaSanPham = $this->editSanPham($_POST['id'], $_POST['ten_san_pham'],$_POST['gia_san_pham' ],$_POST['gia_khuyen_mai'], $hinh_anh ,$_POST['so_luong'],  $_POST['ngay_nhap'], $_POST['mo_ta'], $_POST['danh_muc_id'], $_POST['trang_thai']);
          if($suaSanPham){
            $_SESSION['success'] = 'sửa sản phẩm thành công';
            header('Location: index.php?act=san-pham');
            exit();
         }else{
           $_SESSION['errors'] = 'Thêm sản phẩm thất bại. Mời nhập lại ';
           // header('Location:'.$_SERVER['HTTP_REFERER']);
          
          
        }
    }
      }
    }
?>