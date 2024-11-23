<?php
session_start();
require_once '../controllers/admin/DanhMucAdminController.php';
require_once '../controllers/admin/SanPhamAdminController.php';
require_once '../controllers/admin/TaiKhoanAdminController.php';
$action = isset($_GET['act']) ? $_GET['act'] : '';
$DanhmucAdmin = new DanhMucAdminController();
$SanphamAdmin = new SanPhamAdminController();
$TaikhoanAdmin = new TaiKhoanAdminController();
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
        $id = isset($_GET['id']) ? $_GET['id'] : 0;
        if ($id) {
            $SanphamAdmin->suaSanPham($id); // Gọi phương thức sửa danh mục
        } else {
            $_SESSION['errors'] = 'ID không hợp lệ';
            header('Location: index.php?act=san-pham');
        }
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
        case 'edit-admin':
        $id = isset($_GET['id']) ? $_GET['id'] : 0;
        if ($id) {
            $TaikhoanAdmin->suaAdmin($id); // Gọi phương thức sửa danh mục
        } else {
            $_SESSION['errors'] = 'ID không hợp lệ';
            header('Location: index.php?act=list-admin');
        }
        break;
        case 'list-admin':
            $TaikhoanAdmin->index();
            break;


            case 'cam-admin':
                $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
                $trang_thai = isset($_GET['trang_thai']) ? (int)$_GET['trang_thai'] : null;
            
                if ($id && in_array($trang_thai, [1, 2])) {
                    $TaikhaonAdmin->quyenAdmin($id, $trang_thai);
                    $_SESSION['success'] = 'Cập nhật trạng thái thành công!';
                } else {
                    $_SESSION['errors'] = 'ID hoặc trạng thái không hợp lệ';
                }
            
                header('Location: index.php?act=list-admin');
                exit();
                break;
            
            
            case 'them-admin':
                $TaikhoanAdmin->createAddmin();
                break;
    case 'trang-chu':
        include '../views/client/home/index.php';
        break;

    case 'dang-ki':
        include '../views/client/home/register.php';
        break;

    case 'dang-nhap':
        include '../views/client/home/login.php';
        break;

    case 'detail-pro':
        include '../views/client/home/detail.php';
        break;

    case 'tai-khoan-ca-nhan':
        include '../views/admin/taikhoan/cannhan/editcanhan.php';
        break;
    case 'cart':
        include '../views/client/home/cart.php';
        break;
    case 'check-out':
        include '../views/client/home/checkOut.php';
        break;
    default:
}
