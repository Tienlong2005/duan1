<?php include '../views/admin/layout/header.php' ?>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Trang Đơn Hàng</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-12 col-lg-8">
                    <div>
                        <div class="card">
                            <div class="card-header border-0">
                                <div class="row g-4">
                                    <div class="col-sm">
                                        <div class="d-flex justify-content-sm-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card header -->
                            <div class="card-body">
                                <div class="tab-content text-muted">
                                    <div class="tab-pane active" id="productnav-all" role="tabpanel">
                                        <div id="table-product-list-all" class="table-card gridjs-border-none">
                                            <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                                                <div class="gridjs-wrapper" style="height: auto;">
                                                    <table role="grid" class="gridjs-table" style="height: auto;">
                                                        <tbody class="gridjs-tbody">
                                                            <table class="table table-hover table-striped align-middle table-nowrap mb-0">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">STT</th>
                                                                        <th scope="col">Mã Đơn Hàng</th>
                                                                        <th scope="col">Tên Người Nhận </th>
                                                                        <th scope="col">SDT Người Nhận</th>
                                                                        <th scope="col">Địa Chỉ</th>
                                                                        <th scope="col">Ngày Đặt</th>
                                                                        <th scope="col">Tổng Tiền</th>
                                                                        <th scope="col">Trạng Thái</th>
                                                                        <th scope="col">Thao tác</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($listDonHang as $key => $dh): ?>
                                                                        <tr>
                                                                            <td><?= $key + 1 ?></td>
                                                                            <td><?= $dh['ma_don_hang'] ?></td>
                                                                            <td><?= $dh['ten_nguoi_nhan'] ?></td>
                                                                            <td><?= $dh['sdt_nguoi_nhan'] ?></td>
                                                                            <td><?= $dh['dia_chi_nguoi_nhan'] ?></td>
                                                                            <td><?= $dh['ngay_dat'] ?></td>
                                                                            <td><?= $dh['tong_tien'] ?></td>
                                                                            <td><?= $dh['ten_trang_thai'] ?></td>
                                                                            <td>
                                                                                <div class="form-check form-switch">
                                                                                    <a href="<?= '?act=edit-don-hang&id_don_hang=' . $dh['id'] ?>" class="btn btn-danger"><i class="ri-pencil-line"></i></a>
                                                                                    <a href="<?= '?act=chi-tiet-don-hang&id_don_hang=' . $dh['id'] ?>" class="btn btn-primary"><i class="ri-eye-line"></i></a>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    <?php endforeach ?>
                                                                </tbody>
                                                            </table>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="gridjs-footer d-flex justify-content-between align-items-center">
                                                    <!-- Phần tóm tắt -->
                                                    <div class="gridjs-summary" role="status" aria-live="polite" title="Page 1 of 2">
                                                        Showing <b>1</b> to <b>10</b> of <b>12</b> results
                                                    </div>

                                                    <!-- Phần phân trang -->
                                                    <nav aria-label="Page navigation">
                                                        <ul class="pagination mb-0">
                                                            <!-- Nút Previous -->
                                                            <li class="page-item disabled">
                                                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                                            </li>
                                                            <!-- Trang 1 -->
                                                            <li class="page-item active" aria-current="page">
                                                                <a class="page-link" href="#">1</a>
                                                            </li>
                                                            <!-- Trang 2 -->
                                                            <li class="page-item">
                                                                <a class="page-link" href="#">2</a>
                                                            </li>
                                                            <!-- Nút Next -->
                                                            <li class="page-item">
                                                                <a class="page-link" href="#">Next</a>
                                                            </li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end tab pane -->
                                </div>
                                <!-- end tab content -->
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
</div>
<?php include '../views/admin/layout/footer.php' ?>