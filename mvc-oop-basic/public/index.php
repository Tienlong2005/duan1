<?php
session_start();
require_once '../controllers/admin/DanhMucAdminController.php';
require_once '../controllers/admin/SanPhamAdminController.php';
$action = isset($_GET['act']) ? $_GET['act'] : '';
$DanhmucAdmin = new DanhMucAdminController();
$SanphamAdmin = new SanPhamAdminController();
switch ($action) {
    case 'admin':
        include '../views/admin/index.php';
        break;
    case 'san-pham':
        $SanphamAdmin->index();
        break;
    case 'them-san-pham':
        $SanphamAdmin->createSanPham();
        break;
    case 'edit-san-pham':
        include '../views/admin/sanpham/edit.php';
        break;
    case 'xoa-san-pham';
    $id = isset($_GET['id']) ? $_GET['id'] : 0;
    if ($id) {
        $SanphamAdmin->deleteSanPham($id);
    } else {
        $_SESSION['errors'] = 'ID không hợp lệ';
    }
        break;
    case 'danh-muc':
        $DanhmucAdmin->index();
        break;
    case 'xoa-danh-muc':
        $id = isset($_GET['id']) ? $_GET['id'] : 0;
        if ($id) {
            $DanhmucAdmin->deleteDanhMuc($id);
        } else {
            $_SESSION['errors'] = 'ID không hợp lệ';
        }
        break;

    case 'them-danh-muc':
        $DanhmucAdmin->createDanhMuc();
        break;
    case 'edit-danh-muc':
        $id = isset($_GET['id']) ? $_GET['id'] : 0;
        if ($id) {
            $DanhmucAdmin->suaDanhMuc($id); // Gọi phương thức sửa danh mục
        } else {
            $_SESSION['errors'] = 'ID không hợp lệ';
            header('Location: index.php?act=danh-muc');
        }
        break;
    default:
    
    
}
