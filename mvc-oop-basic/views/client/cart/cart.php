<?php include '../views/client/layout/header.php';
if (empty($_SESSION['user'])) {
    header('Location:?act=signin');
    exit;
}
?>
<div class="shopping_cart_area py-5">
    <div class="container">
        <form action="index.php?act=update-cart" method="post">
            <div class="table-responsive mb-4">
                <table class="table table-bordered text-center align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Thao Tác</th>
                            <th>Ảnh</th>
                            <th>Sản Phẩm</th>
                            <th>Giá</th>
                            <th>Số Lượng</th>
                            <th>Tổng Tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $tongTienGioHang = 0;
                        foreach ($chiTietGioHang as $sp) :
                            $tongTien = $sp['gia_khuyen_mai'] ? $sp['gia_khuyen_mai'] * $sp['so_luong'] : $sp['gia_san_pham'] * $sp['so_luong'];
                            $tongTienGioHang += $tongTien;
                        ?>
                            <tr>
                                <td>
                                    <a href="?act=delete-cart&san_pham_id=<?= $sp['san_pham_id'] ?>" class="btn btn-sm btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                                <td>
                                    <img src="<?= $sp['hinh_anh'] ?>" class="img-thumbnail" style="max-width: 80px;">
                                </td>
                                <td><?= $sp['ten_san_pham'] ?></td>
                                <td>
                                    <?= number_format($sp['gia_khuyen_mai'] ?: $sp['gia_san_pham'], 0, ',', '.') ?>
                                </td>
                                <td>
                                    <input
                                        type="number"
                                        name="quantity[<?= $sp['san_pham_id'] ?>]"
                                        class="form-control text-center"
                                        value="<?= $sp['so_luong'] ?>"
                                        min="1"
                                        max="100">
                                </td>
                                <td><?= number_format($tongTien, 0, ',', '.') ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-end">
                <div class="card shadow-sm" style="max-width: 400px; width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title">Tổng Giỏ Hàng</h5>
                        <div class="d-flex justify-content-between mb-3">
                            <span>Tổng Cộng</span>
                            <span class="fw-bold">
                                <?= number_format($tongTienGioHang, 0, ',', '.') ?>
                            </span>
                        </div>
                        <a href="index.php?act=check-out" class="btn btn-primary w-100">Thanh Toán</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<hr>
<?php include '../views/client/layout/footer.php'; ?>