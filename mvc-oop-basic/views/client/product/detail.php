<?php include '../views/client/layout/header.php' ?>
<div class="product_details variable_product mt-20">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="product-details-tab">

                    <div id="img-1" class="zoomWrapper single-zoom">
                        <a href="#">
                            <img id="zoom1" src="<?php echo $showDetailSanPhamClient['hinh_anh'] ?>" data-zoom-image="<?php echo $showDetailSanPhamClient['hinh_anh'] ?>" alt="big-1">
                        </a>
                    </div>

                    <div class="single-zoom-thumb">
                        <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                            <!-- Owl Carousel Items -->
                            <li class="owl-item active">
                                <a href="#" class="elevatezoom-gallery active"
                                    data-update=""
                                    data-image="<?php echo $showDetailSanPhamClient['hinh_anh'] ?>"
                                    data-zoom-image="<?php echo $showDetailSanPhamClient['hinh_anh'] ?>">
                                    <img src="<?php echo $showDetailSanPhamClient['hinh_anh'] ?>" alt="zo-th-1">
                                </a>
                            </li>
                        </ul>
                        <div class="owl-dots"></div>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product_d_right">

                    <h1><?php echo $showDetailSanPhamClient['ten_san_pham'] ?></h1>
                    <div class="price_box">
                        <span class="current_price"><?php echo $showDetailSanPhamClient['gia_khuyen_mai'] ?> VND</span>
                        <span class="old_price"><?php echo $showDetailSanPhamClient['gia_san_pham'] ?> VND</span>
                    </div>
                    <div class="product_desc">
                        <p>
                            <?php echo $showDetailSanPhamClient['mo_ta'] ?>
                        </p>
                    </div>
                    <form action="?act=addToCart" method="post">
                        <div class="product quantity">
                            <label for="quantity">Số Lượng</label>
                            <input type="hidden" name="san_pham_id" value="<?= $showDetailSanPhamClient['id'] ?>">
                            <input type="number" name="so_luong" min="1" value="1">
                        </div>
                        <button class="button" type="submit">Thêm Sản Phẩm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<?php include '../views/client/layout/footer.php' ?>