<?php
require_once '../models/SanPham.php';
class SanPhamController extends SanPham
{
    public function showSanPhamClient()
    {
        $showSanPhamClient = $this->showSanPham();
        include '../views/client/home/home.php';
    }
    public function getDetailSanPhamClient($id)
    {
        $showDetailSanPhamClient = $this->detailsSanPhan($id);
        if ($showDetailSanPhamClient) {
            include '../views/client/product/detail.php';
        } else {
            echo "Sản phẩm không tồn tại.";
        }
    }
}
