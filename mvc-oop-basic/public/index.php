<?php
session_start();
require_once '../controllers/admin/DanhMucAdminController.php';
$action = isset($_GET['act']) ? $_GET['act'] : '';
$DanhmucAdmin = new DanhMucAdminController();
switch ($action) {
    case 'admin':
        include '../views/admin/index.php';
        break;
    case 'product':
        include '../views/admin/product/list.php';
        break;
    case 'product-create':
        include '../views/admin/product/create.php';
        break;
    case 'product-edit':
        include '../views/admin/product/edit.php';
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
}
