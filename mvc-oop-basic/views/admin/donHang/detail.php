<?php include '../views/admin/layout/header.php' ?>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                </div>
            </div>

            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-10">
                                <h3>Quản Lý Danh Sách Đơn Hàng-Đơn Hàng:<?= $donHang['ma_don_hang'] ?></h3>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <?php
                                if ($donHang['trang_thai_id'] == 1) {
                                    $colorAlerts = 'primary';
                                } else if ($donHang['trang_thai_id'] >= 2 && $donHang['trang_thai_id'] <= 9) {
                                    $colorAlerts = 'warning';
                                } else if ($donHang['trang_thai_id'] == 10) {
                                    $colorAlerts = 'success';
                                } else {
                                    $colorAlerts = 'primary';
                                }
                                ?>
                                <div class="alert alert-<?= $colorAlerts ?>" role="alert">
                                    Đơn Hàng: <?= $donHang['ten_trang_thai'] ?>
                                </div>
                                <!-- Main content -->
                                <div class="invoice p-3 mb-3">
                                    <!-- title row -->
                                    <div class="row">
                                        <div class="col-12">
                                            <h4>
                                                <i class="fas fa-server"></i> Shop Quần áo đá bóng và giày
                                                <small class="float-right">Ngày Đặt: <?= ($donHang['ngay_dat']) ?></small>
                                            </h4>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- info row -->
                                    <div class="row invoice-info">
                                        <div class="col-sm-4 invoice-col">
                                            <h6 style="color: blue;"><strong>Thông tin người đặt</strong></h6>
                                            <address>
                                                <strong><?= $donHang['ho_ten'] ?></strong><br>
                                                Email: <?= $donHang['email'] ?><br>
                                                SĐT: <?= $donHang['so_dien_thoai'] ?> <br>
                                            </address>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-4 invoice-col">
                                            <h6 style="color: blue;"><strong>Thông tin người nhận</strong></h6>
                                            <address>
                                                <strong><?= $donHang['ten_nguoi_nhan'] ?></strong><br>
                                                Email: <?= $donHang['email_nguoi_nhan'] ?><br>
                                                SĐT: <?= $donHang['sdt_nguoi_nhan'] ?><br>
                                                Địa Chỉ: <?= $donHang['dia_chi_nguoi_nhan'] ?><br>
                                            </address>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-4 invoice-col">
                                            <h6 style="color: blue;"><strong>Mã Đơn Hàng:<?= $donHang['ma_don_hang'] ?></strong><br></h6>
                                            <address>
                                                Tổng Tiền: <?= $donHang['tong_tien'] ?><br>
                                                Ghi Chú: <?= $donHang['ghi_chu'] ?><br>
                                                Thanh Toán: <?= $donHang['ten_phuong_thuc'] ?><br>
                                            </address>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->

                                    <!-- Table row -->
                                    <div class="row">
                                        <div class="col-12 table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>STT</th>
                                                        <th>Tên Sản Phẩm</th>
                                                        <th>Ảnh</th>
                                                        <th>Đơn Giá</th>
                                                        <th>Số Lượng</th>
                                                        <th>Thành Tiền</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $tong_tien = 0; ?>
                                                    <?php foreach ($sanPhamDonHang as $key => $sanPham) : ?>
                                                        <tr>
                                                            <td><?= $key + 1 ?></td>
                                                            <td><?= $sanPham['ten_san_pham'] ?></td>
                                                            <td><?= $sanPham['hinh_anh'] ?></td>
                                                            <td><?= $sanPham['don_gia'] ?></td>
                                                            <td><?= $sanPham['so_luong'] ?></td>
                                                            <td><?= $sanPham['thanh_tien'] ?></td>
                                                        </tr>
                                                        <?php $tong_tien += $sanPham['thanh_tien'] ?>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->

                                    <div class="col-12">
                                        <div class="col-6">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tr>
                                                        <th>Thành Tiền:</th>
                                                        <td>
                                                            <?= $tong_tien ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Vận Chuyển:</th>
                                                        <td>30000</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tổng Tiền:</th>
                                                        <td style="color: red;"><?= $tong_tien + 30000 ?></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> © Velzon.
                </div>
            </div>
        </div>
    </footer>
</div>
<?php include '../views/admin/layout/footer.php' ?>