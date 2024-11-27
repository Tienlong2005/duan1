<?php include '../views/client/layout/header.php'; ?>
<div class="shopping_cart_area mt-32">
    <div class="container">
        <form action="index.php?act=cart&action=update" method="post">
            <div class="row">
                <div class="col-12">
                    <div class="table_desc">
                        <div class="cart_page table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product_remove">Xoá</th>
                                        <th class="product_thumb">Ảnh</th>
                                        <th class="product_name">Sản Phẩm</th>
                                        <th class="product-price">Giá</th>
                                        <th class="product_quantity">Số Lượng</th>
                                        <th class="product_total">Tổng Tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($chiTietGioHang)) : ?>
                                        <?php foreach ($chiTietGioHang as $item) : ?>
                                            <tr>
                                                <td><a href="index.php?act=cart&action=delete&san_pham_id=<?= $item['san_pham_id'] ?>">Xoá</a></td>
                                                <td><img src="<?= $item['hinh_anh'] ?>" alt="<?= $item['ten_san_pham'] ?>" width="50"></td>
                                                <td><?= $item['ten_san_pham'] ?></td>
                                                <td><?= number_format($item['gia_san_pham'], 0, ',', '.') ?> ₫</td>
                                                <td><input name="quantity[<?= $item['san_pham_id'] ?>]" value="<?= $item['so_luong'] ?>" type="number" min="1"></td>
                                                <td><?= number_format($item['so_luong'] * $item['gia_san_pham'], 0, ',', '.') ?> ₫</td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <tr>
                                            <td colspan="6">Giỏ hàng của bạn đang trống!</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>

                            </table>
                        </div>
                        <div class="cart_submit">
                            <button type="submit" name="update-cart">Cập nhật giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--coupon code area start-->
            <div class="coupon_area">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="coupon_code left">
                            <h3>Mã Giảm Giá</h3>
                            <div class="coupon_inner">
                                <p>Nhập mã giảm giá của bạn tại đây.</p>
                                <input placeholder="Mã giảm giá" type="text">
                                <button type="submit">Áp dụng</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="coupon_code right">
                            <h3>Tổng Giỏ Hàng</h3>
                            <div class="coupon_inner">
                                <div class="cart_subtotal">
                                    <p>Tổng Tiền</p>
                                    <p class="cart_amount">
                                        <?= isset($tongTien) ? number_format($tongTien, 0, ',', '.') : '0' ?> ₫
                                    </p>
                                </div>
                                <div class="checkout_btn">
                                    <a href="index.php?act=checkout">Thanh Toán</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--coupon code area end-->
        </form>
    </div>
</div>
<hr>
<?php include '../views/client/layout/footer.php'; ?>