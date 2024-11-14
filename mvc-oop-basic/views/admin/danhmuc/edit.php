<?php include '../views/admin/layout/header.php' ?>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Trang Thêm Danh Mục</h4>
                    </div>
                </div>
            </div>
            <form action="index.php?act=edit-danh-muc?id=<?=$DanhmucAdmin['id']?>" method="POST" class="needs-validation" novalidate="">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <ul class="nav nav-tabs-custom card-header-tabs border-bottom-0" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#addproduct-general-info" role="tab" aria-selected="true">
                                           Bảng Sửa Danh Mục
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="addproduct-general-info" role="tabpanel">
                                        <div class="row align-items-center">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Tên Danh Mục</label>
                                                    <input type="text" class="form-control" value="<?=$DanhmucAdmin['ten_danh_muc']?>" name="ten_danh_muc" placeholder="Nhập tên danh mục" required>
                                                </div>
                                                <?php if(isset($_SESSION['errors']['ten_danh_muc'])): ?>
                                                    <p class="text-danger"><?= $_SESSION['errors']['ten_danh_muc'] ?></p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Mô tả</label>
                                                    <textarea class="form-control" value="<?=$DanhmucAdmin['mo_ta']?>" name="mo_ta" placeholder="Nhập mô tả" rows="4" required></textarea>
                                                </div>
                                                <?php if(isset($_SESSION['errors']['mo_ta'])): ?>
                                                    <p class="text-danger"><?= $_SESSION['errors']['mo_ta'] ?></p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-end mb-3">
                            <a href="index.php?act=danh-muc"  class="btn btn-primary w-sm" onclick="window.history.back()">Quay lại</a>
                            <button type="submit" class="btn btn-secondary w-sm" name="edit-danh-muc">Update danh mục</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include '../views/admin/layout/footer.php' ?>