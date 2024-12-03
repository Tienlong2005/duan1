<?php
session_start();
require_once '../controllers/admin/DanhMucAdminController.php';
require_once '../controllers/admin/SanPhamAdminController.php';
require_once '../controllers/admin/TaiKhoanAdminController.php';
require_once '../controllers/admin/DonHangAdminController.php';
require_once '../controllers/client/AuthController.php';
require_once '../controllers/admin/ProfileController.php';
require_once '../controllers/client/SanPhamController.php';
require_once '../controllers/client/CartController.php';
require_once '../controllers/admin/AuthControllerAdmin.php';
$action = isset($_GET['act']) ? $_GET['act'] : 'trang-chu';
$DanhmucAdmin = new DanhMucAdminController();
$SanphamAdmin = new SanPhamAdminController();
$TaikhoanAdmin = new TaiKhoanAdminController();
$DonHangAdmin = new DonHangAdminController();
$AuthClient = new AuthController();
$Profile = new ProfileController();
$SanPhamClient = new SanPhamController();
$GioHang = new CartController();
$AuthAmin = new AuthControllerAdmin();
switch ($action) {
    case 'admin':
        include '../views/admin/index.php';
        break;
    case "login":
        $AuthAmin->logins();
        break;

    case 'admin-user':
        include '../views/admin/profie/info.php';
        break;

    case 'logout-admin':
        $AuthAmin->logoutAdmin();
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
    case 'list-admin':
        $TaikhoanAdmin->danhSachAdmin();
        break;
    case 'list-khach-hang':
        $TaikhoanAdmin->danhSachKhachHang();
        break;

    case 'them-admin':
        $TaikhoanAdmin->createAddmin();
        break;
    case 'edit-admin':
        $id = isset($_GET['id']) ? $_GET['id'] : 0;
        if ($id) {
            $TaikhoanAdmin->suaAdmin($id);
        } else {
            $_SESSION['errors'] = 'ID không hợp lệ';
            header('Location: index.php?act=list-admin');
        }
        break;

    case 'cam-admin':
        $id = isset($_POST['id']) ? (int)$_POST['id'] : 0;
        $trang_thai = isset($_POST['trang_thai']) ? (int)$_POST['trang_thai'] : null;

        if ($id && in_array($trang_thai, [1, 2])) {
            $TaikhoanAdmin->quyenAdmin($id, $trang_thai);
            $_SESSION['success'] = 'Cập nhật trạng thái thành công!';
        } else {
            $_SESSION['errors'] = 'ID hoặc trạng thái không hợp lệ';
        }
        header('Location: index.php?act=list-admin');
        exit();
        break;

    case 'don-hang':
        $DonHangAdmin->index();
        break;
    case 'chi-tiet-don-hang':
        $DonHangAdmin->detailDonHang();
        break;
    case 'edit-don-hang':
        $DonHangAdmin->getIdDonHang();
        break;
    case "update-don-hang":
        $DonHangAdmin->updateDonHang();
    case 'trang-chu':
        $SanPhamClient->showSanPhamClient();
        break;

    case 'dang-ky':
        $AuthClient->resgister();
        break;

    case 'dang-nhap':
        $AuthClient->logins();
        break;

    case 'update-profile':
        $Profile->updateProfie();
        break;
    case 'dang-xuat':
        $AuthClient->logout();
    case 'chi-tiet-san-pham':
        if (isset($_GET['san_pham_id'])) {
            $id = $_GET['san_pham_id'];
            $SanPhamClient->getDetailSanPhamClient($id);
        } else {
            echo "Sản phẩm không tồn tại.";
        }
        break;
        include '../views/client/product/detail.php';
        break;

    case 'tai-khoan-ca-nhan':
        include '../views/client/profile/profile.php';
        break;
    case 'update-ca-nhan':
        $Profile->updateProfie();
        break;
    case 'cart':
        $GioHang->index();
        break;
    case 'update-cart-ajax':
        $GioHang->updateCartAjax();
        break;
    case 'addToCart':
        $GioHang->addToCart();
        break;

    case 'delete-cart':
        $GioHang->deleteCartItem();
        break;

    case 'update-cart':
        $GioHang->updateCart();
        break;

    case 'check-out':
        $GioHang->checkOut();
        break;

    case 'change-password':
        $AuthClient->updatePassword();
        break;

    case 'check-out':
        $GioHang->checkOut();
        break;

    case 'payment-processing':
        $GioHang->postCheckOut();
        break;
    case ' cam-binh-luan':
        $id = isset($_POST['id']) ? (int)$_POST['id'] : 0;
        $trang_thai = isset($_POST['trang_thai']) ? (int)$_POST['trang_thai'] : null;

        if ($id && in_array($trang_thai, [1, 2])) {
            $TaikhoanAdmin->quyenBinhluan($id, $trang_thai);
            $_SESSION['success'] = 'Cập nhật trạng thái thành công!';
        } else {
            $_SESSION['errors'] = 'ID hoặc trạng thái không hợp lệ';
        }
        header('Location: index.php?act=binh-luan');
        exit();
        break;

    case 'binh-luan':
        $TaikhoanAdmin->danhSachBinhLuan($id);
        break;
}
