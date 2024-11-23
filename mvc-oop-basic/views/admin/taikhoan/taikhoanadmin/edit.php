<?php include '../views/admin/layout/header.php' ?>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Trang thêm Addmin</h4>

                    </div>
                </div>
            </div>
            <!-- end page title -->
          

            <form action="index.php?act=edit-admin&id=<?= $getAdmin['id']; ?>" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card">
                            <div class="card-header">
                                <ul class="nav nav-tabs-custom card-header-tabs border-bottom-0" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#addproduct-general-info" role="tab" aria-selected="true">
                                            Bảng Thêm Admin
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
                                                    <label class="form-label">Họ và tên</label>
                                                    <input type="text" class="form-control" name="ho_ten" value="<?=$getAdmin['ho_ten']; ?>" placeholder="Nhập tên ">
                                                    <?php if(isset($_SESSION['errors']['ho_ten'])): ?>
                                                    <p class="text-danger"><?= $_SESSION['errors']['ho_ten'] ?></p>
                                                <?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Email</label>
                                                    <input type="email" class="form-control" name="email" value="<?=$getAdmin['email'] ?>" placeholder=" mời nhập Email">
                                                    <?php if(isset($_SESSION['errors']['email'])): ?>
                                                    <p class="text-danger"><?= $_SESSION['errors']['email'] ?></p>
                                                <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Số điện thoại</label>
                                                    <input type="number" class="form-control" name="so_dien_thoai" value="<?=$getAdmin['so_dien_thoai']?>" placeholder="Nhập số điện thoại">
                                                    <?php if(isset($_SESSION['errors']['so_dien_thoai'])): ?>
                                                    <p class="text-danger"><?= $_SESSION['errors']['so_dien_thoai'] ?></p>
                                                <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Giới tính</label>
                                                    <select class="form-select" aria-label="Default select example"  name="gioi_tinh">
                                                        <option selected>Giới tính</option>
                                                        <option value="1" <?=$getAdmin['gioi_tinh'] ==1 ? 'selected' : ""?>>Nam</option>
                                                        <option value="2" <?=$getAdmin['gioi_tinh'] ==2 ? 'selected' : ""?>>Nữ</option>
                                                    </select>
                                                    <?php if(isset($_SESSION['errors']['gioi_tinh'])): ?>
                                                    <p class="text-danger"><?= $_SESSION['errors']['gioi_tinh'] ?></p>
                                                <?php endif; ?>
                                                </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Địa chỉ</label>
                                                    <input type="text" class="form-control" name="dia_chi" value="<?= $getAdmin['dia_chi'];?>" placeholder="Nhập địa chỉ ">
                                                    <?php if(isset($_SESSION['errors']['dia_chi'])): ?>
                                                    <p class="text-danger"><?= $_SESSION['errors']['dia_chi'] ?></p>
                                                <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Mật khẩu </label>
                                                    <input type="text" class="form-control" name="mat_khau" value="<?=$getAdmin['mat_khau'] ?>" placeholder="Mời nhập mật khẩu">
                                                    <?php if(isset($_SESSION['errors']['mau_khau'])): ?>
                                                    <p class="text-danger"><?= $_SESSION['errors']['mat_khau'] ?></p>
                                                <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Ngày sinh </label>
                                                    <input type="date" class="form-control" name="ngay_sinh" value="<?=$getAdmin['ngay_sinh']?>" placeholder="Mời nhập ngày sinh">
                                                    <?php if(isset($_SESSION['errors']['ngay_sinh'])): ?>
                                                    <p class="text-danger"><?= $_SESSION['errors']['ngay_sinh'] ?></p>
                                                <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Trạng Thái</label>
                                                    <select class="form-select" aria-label="Default select example" name="trang_thai">
                                                        <option selected>Trạng Thái</option>
                                                        <option value="1" <?=$getAdmin['trang_thai'] ==1 ? 'selected' : ""?>>Đang hoạt động</option>
                                                        <option value="2" <?=$getAdmin['trang_thai'] ==2 ? 'selected' : ""?>>Bị cấm </option>
                                                    </select>
                                                    <?php if(isset($_SESSION['errors']['trang_thai'])): ?>
                                                    <p class="text-danger"><?= $_SESSION['errors']['trang_thai'] ?></p>
                                                <?php endif; ?>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Chức vụ</label>
                                                    <select class="form-select" aria-label="Default select example" name="chuc_vu_id">
                                                        <option selected>Chức vụ</option>
                                                        <option value="1" <?=$getAdmin['chuc_vu_id'] ==1 ? 'selected' : ""?>>Admin</option>
                                                        <option value="2" <?=$getAdmin['chuc_vu_id'] ==2 ? 'selected' : ""?>>Khách Hàng</option>
                                                    </select>
                                                    <?php if(isset($_SESSION['errors']['trang_thai'])): ?>
                                                    <p class="text-danger"><?= $_SESSION['errors']['trang_thai'] ?></p>
                                                <?php endif; ?>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Ảnh đại diện</label>
                                                    <div class="input-group">
                                                    <input type="hidden" name="old_hinh_anh" value="<?=$getAdmin['anh_dai_dien'];?>">
                                                    <input class="form-control" name="anh_dai_dien" type="file" id="hinh_anh">
                                                    <button class="btn btn-outline-secondary">Rest Ảnh</button>
                                                    <?php if(isset($_SESSION['errors']['anh_dai_dien'])): ?>
                                                    <p class="text-danger"><?= $_SESSION['errors']['anh_dai-dien'] ?></p>
                                                <?php endif; ?>
                                                    </div>
                                                    </div>
                                                </div>             
                                            </div>
                                           
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <!-- end tab-pane -->
                                   
                                </div>
                                <!-- end tab content -->

                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                        <div class="text-end mb-3">
                            <a href="index.php?act=list-admin"class="btn btn-primary w-sm">Quay lại</a>
                            <button type="submit" name="edit-admin" class="btn btn-secondary w-sm">Update thông tin admin</button>
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