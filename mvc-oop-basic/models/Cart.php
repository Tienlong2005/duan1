<?php
require_once '../Connect/connect.php';

class Cart extends connect
{
    // Lấy giỏ hàng của người dùng
    public function getGioHangFromUser($user_id)
    {
        try {
            $sql = 'SELECT * FROM gio_hangs WHERE tai_khoan_id = :tai_khoan_id';
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([':tai_khoan_id' => $user_id]);
            return $stmt->fetch();  // Lấy giỏ hàng của người dùng
        } catch (Exception $e) {
            error_log("Lỗi trong getGioHangFromUser: " . $e->getMessage());
            return false;
        }
    }

    // Lấy chi tiết giỏ hàng
    public function getDetailGioHang($gio_hang_id)
    {
        try {
            $sql = 'SELECT chi_tiet_gio_hangs.*, 
                           san_phams.ten_san_pham, 
                           san_phams.hinh_anh, 
                           san_phams.gia_san_pham 
                    FROM chi_tiet_gio_hangs
                    INNER JOIN san_phams ON chi_tiet_gio_hangs.san_pham_id = san_phams.id
                    WHERE chi_tiet_gio_hangs.gio_hang_id = :gio_hang_id';
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([':gio_hang_id' => $gio_hang_id]);
            return $stmt->fetchAll();  // Lấy tất cả chi tiết giỏ hàng
        } catch (Exception $e) {
            error_log("Lỗi trong getDetailGioHang: " . $e->getMessage());
            return false;
        }
    }

    // Thêm giỏ hàng mới cho người dùng
    public function addGioHang($user_id)
    {
        try {
            $sql = 'INSERT INTO gio_hangs (tai_khoan_id) VALUES (:tai_khoan_id)';
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([':tai_khoan_id' => $user_id]);
            return $this->connect()->lastInsertId();  // Trả về ID của giỏ hàng mới
        } catch (Exception $e) {
            error_log("Lỗi trong addGioHang: " . $e->getMessage());
            return false;
        }
    }

    // Thêm sản phẩm vào chi tiết giỏ hàng
    public function addDetailGioHang($gio_hang_id, $san_pham_id, $so_luong)
    {
        try {
            $sql = 'INSERT INTO chi_tiet_gio_hangs (gio_hang_id, san_pham_id, so_luong)
                    VALUES (:gio_hang_id, :san_pham_id, :so_luong)';
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([
                ':gio_hang_id' => $gio_hang_id,
                ':san_pham_id' => $san_pham_id,
                ':so_luong' => $so_luong
            ]);
            return true;
        } catch (Exception $e) {
            error_log("Lỗi trong addDetailGioHang: " . $e->getMessage());
            return false;
        }
    }

    // Cập nhật số lượng sản phẩm trong giỏ hàng
    public function updateSoLuong($gio_hang_id, $san_pham_id, $so_luong)
    {
        try {
            $sql = 'UPDATE chi_tiet_gio_hangs
                    SET so_luong = :so_luong
                    WHERE gio_hang_id = :gio_hang_id AND san_pham_id = :san_pham_id';
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([
                ':gio_hang_id' => $gio_hang_id,
                ':san_pham_id' => $san_pham_id,
                ':so_luong' => $so_luong
            ]);
            return true;
        } catch (Exception $e) {
            error_log("Lỗi trong updateSoLuong: " . $e->getMessage());
            return false;
        }
    }

    // Xóa sản phẩm khỏi giỏ hàng
    public function deleteCartItem($gio_hang_id, $san_pham_id)
    {
        try {
            $sql = 'DELETE FROM chi_tiet_gio_hangs 
                    WHERE gio_hang_id = :gio_hang_id 
                    AND san_pham_id = :san_pham_id';
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([
                ':gio_hang_id' => $gio_hang_id,
                ':san_pham_id' => $san_pham_id
            ]);
            return true;
        } catch (Exception $e) {
            error_log("Lỗi trong deleteCartItem: " . $e->getMessage());
            return false;
        }
    }

    // Tính tổng tiền giỏ hàng
    public function TongTien($gio_hang_id)
    {
        try {
            $sql = 'SELECT SUM(chi_tiet_gio_hangs.so_luong * san_phams.gia_san_pham) AS total
                    FROM chi_tiet_gio_hangs
                    INNER JOIN san_phams ON chi_tiet_gio_hangs.san_pham_id = san_phams.id
                    WHERE chi_tiet_gio_hangs.gio_hang_id = :gio_hang_id';
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([':gio_hang_id' => $gio_hang_id]);
            $result = $stmt->fetch();
            return $result['total'] ?? 0;
        } catch (Exception $e) {
            error_log("Lỗi trong calculateTotal: " . $e->getMessage());
            return false;
        }
    }
    
}