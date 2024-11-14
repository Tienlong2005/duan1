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
    case 'them-danh-muc':
        $DanhmucAdmin->createDanhMuc();
        
        break;
    case 'edit-danh-muc':
        
        break;
}
