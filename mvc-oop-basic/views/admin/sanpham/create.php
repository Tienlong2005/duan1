<?php include '../views/admin/layout/header.php' ?>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Trang Thêm Sản Phẩm</h4>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <form id="createproduct-form" autocomplete="off" class="needs-validation" novalidate="">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card">
                            <div class="card-header">
                                <ul class="nav nav-tabs-custom card-header-tabs border-bottom-0" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#addproduct-general-info" role="tab" aria-selected="true">
                                            Bảng Thêm Sản Phẩm
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#addproduct-metadata" role="tab">
                                            Album Ảnh
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end card header -->
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="addproduct-general-info" role="tabpanel">
                                        <div class="row align-items-center">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Tên Sản phẩm</label>
                                                    <input type="text" class="form-control" id="danh_muc" placeholder="Nhập sản phẩm">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Danh Mục</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                   
                                                    <?php foreach ( $listDanhMuc as $dm):?>
                                                        <option value="<?= $dm['id'] ?>"><?= $dm['ten_danh_muc'] ?></option>
                                                        <?php endforeach ;?>
                                                       
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Giá sản phẩm</label>
                                                    <input type="number" class="form-control" id="danh_muc" placeholder="Nhập giá Sản Phẩm">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Giá Khuyến Mãi</label>
                                                    <input type="number" class="form-control" id="danh_muc" placeholder="Nhập giá khuyến Mãi">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Số Lượng</label>
                                                    <input type="number" class="form-control" id="danh_muc" placeholder="Nhập số lượng">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Ngày Nhập</label>
                                                    <input type="date" class="form-control" id="danh_muc" placeholder="Ngày nhập">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <select class="form-select" aria-label="Default select example">
                                                    <?php foreach ( $listKichThuoc as $size):?>
                                                        <option value="<?= $dm['id'] ?>"><?= $dm['ten_mau_sac'] ?></option>
                                                        <?php endforeach ;?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <select class="form-select" aria-label="Default select example">
                                                    <?php foreach ( $listKichThuoc as $size):?>
                                                        <option value="<?= $dm['id'] ?>"><?= $dm['ten_kich_thuoc'] ?></option>
                                                        <?php endforeach ;?>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- File Upload Section (Single image) -->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Thêm Ảnh</label>
                                                    <div class="input-group">
                                                        <input class="form-control" id="product-image-input" type="file" accept="image/png, image/gif, image/jpeg">
                                                        <button class="btn btn-outline-secondary" type="button" id="image-upload-btn">
                                                            <i class="ri-image-fill"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Mô tả</label>
                                                        <textarea class="form-control" id="manufacturer-brand-input" placeholder="Nhập mô tả" rows="4"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <!-- end tab-pane -->
                                    <div class="tab-pane" id="addproduct-metadata" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Thêm Album Ảnh</label>
                                                    <div class="input-group">
                                                        <input class="form-control" id="product-album-input" type="file" accept="image/png, image/gif, image/jpeg" multiple>
                                                        <button class="btn btn-outline-secondary" type="button" id="album-upload-btn">
                                                            <i class="ri-image-fill"></i> Album
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end tab content -->

                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                        <div class="text-end mb-3">
                            <button type="submit" class="btn btn-primary w-sm">Quay lại</button>
                            <button type="submit" class="btn btn-secondary w-sm">Thêm mới</button>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </form>


        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
</div>
<?php include '../views/admin/layout/footer.php' ?>