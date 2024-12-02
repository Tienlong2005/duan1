<?php include '../views/admin/layout/header.php' ?>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Danh sách bình luận của  Khách Hàng</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <!-- end col -->
                    <div class="col-xl-12 col-lg-8">
                        <div>
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <div id="selection-element">
                                                <div class="my-n1 d-flex align-items-center text-muted">
                                                    Select <div id="select-content" class="text-body fw-semibold px-1"></div> Result <button type="button" class="btn btn-link link-danger p-0 ms-3" data-bs-toggle="modal" data-bs-target="#removeItemModal">Remove</button>
                                                </div>
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
                                                        <tbody class="gridjs-tbody">
                                                            <table class="table table-hover table-striped align-middle table-nowrap mb-0">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">STT</th>
                                                                        <th scope="col">Sản Phẩm </th>
                                                                        <th scope="col">Tài Khoản </th>
                                                                        <th scope="col">Nội dung</th>
                                                                        <th scope="col">Ngày Đăng</th>
                                                                        <th scope="col">Trạng Thái</th>
                                                                        
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tbody>
                                                                    <?php foreach ($listBinhLuan as $key => $bl): ?>
                                                                        <tr>
                                                                            <td><?= $key+1; ?></td>
                                                                           
                                                                            <td>
                                                                            <a target="_blank" href="index.php?act=chi-tiet-san-pham&id_san_pham=<?php echo $bl['san_pham_id']; ?>">
                                                                            <?= $bl['ten_san_pham']; ?>
                                                                            </td>
                                                                            <td><?= $bl['tai_khoan_id']; ?></td>
                                                                            <td><?= $bl['noi_dung']; ?></td>
                                                                            <td><?= $bl['ngay_dang']; ?></td>
                                                                            <td><?= $bl['trang_thai'] == 1 ? 'Hiện' : 'Ẩn'; ?></td>
                                                                            <td>
                                                                                <div class="form-check form-switch">
                                                                                    <form action="index.php?act=cam-binh-luan" method="post" style="display:inline;">
                                                                                        <input type="hidden" name="id" value="<?= $bl['id']; ?>">
                                                                                        <input type="hidden" name="trang_thai" value="<?= $bl['trang_thai'] == 1 ? 2 : 1; ?>">
                                                                                        <button type="submit" name="binh-luan" class="btn <?= $bl['trang_thai'] == 1 ?  'btn-success' : 'btn-danger' ; ?>">
                                                                                            <?= $ad['trang_thai'] == 1 ?   ' <i class="ri-lock-unlock-line"></i>' : '<i class="ri-forbid-2-line"></i>'; ?>
                                                                                        </button>
                                                                                    </form>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    <?php endforeach; ?>
                                                        </tbody>
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