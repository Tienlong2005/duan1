<?php include '../views/admin/layout/header.php' ?>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Danh sách sản phẩm</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <!-- end col -->
                 <form>
                <div class="col-xl-12 col-lg-8">
                    <div>
                        <div class="card">
                            <div class="card-header border-0">
                                <div class="row g-4">
                                    <div class="col-sm-auto">
                                        <div>
                                            <a href="index.php?act=them-san-pham" class="btn btn-secondary" id="addproduct-btn"><i class="ri-add-line align-bottom me-1"></i> Thêm sản phẩm </a>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <div class="d-flex justify-content-sm-end">
                                            <div class="search-box ms-2">
                                                <input type="text" class="form-control" id="searchProductList" placeholder="Tìm Kiếm Danh Mục...">
                                                <i class="ri-search-line search-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
                                                                        <th scope="col">Id</th>
                                                                        <th scope="col">Tên sản phẩm </th>
                                                                        <th scope="col">Giá sản phẩn </th>
                                                                        <th scope="col">Giá khuyến mại</th>
                                                                        <th scope="col">Hình ảnh</th>
                                                                        <th scope="col">Số lượng</th>
                                                                        <th scope="col">Ngày nhập</th>
                                                                        <th scope="col">Danh mục</th>
                                                                        <th scope="col">Mô tả</th>
                                                                        <th scope="col">Trạng thái</th>
                                                                        <th scope="col">Thao Tác</th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php foreach($listSanPham as $sp) :?>
                                                                    <tr>
                                                                       
                                                                        <td><?= $sp['id'];?></td>
                                                                        <td><?= $sp['ten_san_pham'];?></td>
                                                                        <td><?= $sp['gia_san_pham'];?></td>
                                                                        <td><?= $sp['gia_khuyen_mai'];?></td>
                                                                        <td><img src="./images/category<?= $sp['hinh_anh']; ?>" width="100"></td>
                                                                        <td><?= $sp['so_luong'];?></td>
                                                                        <td><?= $sp['ngay_nhap'];?></td>
                                                                        <td><?= $sp['danh_muc_id'] ==1 ? 'Quần áo bóng đá ' : 'Giày' ?></td>
                                                                        <td><?= $sp['mo_ta'];?></td>
                                                                        <td><?= $sp['trang_thai'] == 1 ? 'Còn hàng' : 'Hết hàng' ?></td>
                                                                        <td>
                                                                            <div class="form-check form-switch">
                                                                               
                                                                            <a href="index.php?act=edit-san-pham&id=<?= $sp['id'] ?>" class="btn btn-primary"><i class="ri-settings-fill"></i></a>
                                                                                <a onclick="return confirm('Bạn có chắc muốn xóa?')" href="index.php?act=xoa-san-pham&id=<?= $sp['id']; ?>" class="btn btn-danger"><i class="ri-delete-bin-line"></i></a>

                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                                <?php endforeach ;?>
                                                            </table>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="gridjs-footer">
                                                    <div class="gridjs-pagination">
                                                        <div role="status" aria-live="polite" class="gridjs-summary" title="Page 1 of 2">Showing <b>1</b> to <b>10</b> of <b>12</b> results</div>
                                                        <div class="gridjs-pages"><button tabindex="0" role="button" disabled="" title="Previous" aria-label="Previous" class="">Previous</button><button tabindex="0" role="button" class="gridjs-currentPage" title="Page 1" aria-label="Page 1">1</button><button tabindex="0" role="button" class="" title="Page 2" aria-label="Page 2">2</button><button tabindex="0" role="button" title="Next" aria-label="Next" class="">Next</button></div>
                                                    </div>
                                                </div>
                                                <div id="gridjs-temp" class="gridjs-temp"></div>
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
            </form>
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
  
</div>
<?php include '../views/admin/layout/footer.php' ?>