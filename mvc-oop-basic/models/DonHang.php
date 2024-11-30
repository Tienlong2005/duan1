<?php
include_once '../Connect/connect.php';
class DonHang extends Connect
{
    public function listDonHang()
    {
        $sql = 'SELECT don_hangs.*, trang_thai_don_hangs.ten_trang_thai FROM don_hangs INNER JOIN trang_thai_don_hangs ON don_hangs.trang_thai_id = trang_thai_don_hangs.id';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function allTrangThaiDonHàng()
    {
        $sql = 'SELECT * FROM trang_thai_don_hangs';
        $stmt = $this->connect()->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function getdetailDonHang($id)
    {
        $sql = "SELECT don_hangs.*, 
               trang_thai_don_hangs.ten_trang_thai,
               tai_khoans.ho_ten, 
               tai_khoans.email,
               tai_khoans.so_dien_thoai, 
               phuong_thuc_thanh_toans.ten_phuong_thuc
        FROM don_hangs 
        INNER JOIN trang_thai_don_hangs ON don_hangs.trang_thai_id = trang_thai_don_hangs.id 
        INNER JOIN tai_khoans ON don_hangs.tai_khoan_id = tai_khoans.id 
        INNER JOIN phuong_thuc_thanh_toans ON don_hangs.phuong_thuc_thanh_toan_id = phuong_thuc_thanh_toans.id 
        WHERE don_hangs.id =?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function getSanPhamDonHang($id)
    {
        $sql = 'SELECT chi_tiet_don_hangs.*, san_phams.ten_san_pham, san_phams.hinh_anh, chi_tiet_don_hangs.don_gia, chi_tiet_don_hangs.so_luong 
            FROM chi_tiet_don_hangs
            INNER JOIN san_phams ON chi_tiet_don_hangs.san_pham_id = san_phams.id
            WHERE chi_tiet_don_hangs.don_hang_id = ?';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getDonHangFromKhachHang($id)
    {
        $sql = "SELECT don_hangs.*, trang_thai_don_hangs.ten_trang_thai FROM don_hangs INNER JOIN trang_thai_don_hangs ON don_hangs.trang_thai_id = trang_thai_don_hangs.id 
            WHERE don_hangs.tai_khoan_id=?";

        $stmt = $this->connect()->prepare($sql);

        $stmt->execute([$id]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateTrangThaiDonHang($id, $trang_thai_id)
    {
        $sql = 'UPDATE don_hangs SET trang_thai_id =? WHERE id=?';
        $stmt = $this->connect()->prepare($sql);
        // $a= $stmt->execute([$id, $trang_thai_id]);
        // var_dump($a);die();
        return $stmt->execute([$trang_thai_id, $id]);
    }
}
