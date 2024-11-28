<?php include '../views/client/layout/header.php' ?>
<section class="slider_section color_scheme_2 mb-42">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
            <div class="slider_area slider_three owl-carousel">
                    <div class="single_slider d-flex align-items-center" data-bgimg="client/assets/img/slider/image1.png" >
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="slider_area slider_three owl-carousel">
                    <div class="single_slider d-flex align-items-center" data-bgimg="client/assets/img/slider/image2.png" >
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="slider_area slider_three owl-carousel">
                    <div class="single_slider d-flex align-items-center" data-bgimg="client/assets/img/slider/image3.png" >
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="slider_area slider_three owl-carousel">
                    <div class="single_slider d-flex align-items-center" data-bgimg="client/assets/img/slider/image4.png" >
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
    let images = [
    'client/assets/img/slider/slide13.jpg',
    'client/assets/img/slider/slide15.jpg',
    'client/assets/img/slider/slide21.jpg'
];

let currentIndex = 0;
let slideImage = document.getElementById('slideImage');


function changeImage() {
    currentIndex = (currentIndex + 1) % images.length;
    
    slideImage.style.opacity = 0;

    setTimeout(() => {
        slideImage.src = images[currentIndex];
        slideImage.style.opacity = 1;
    }, 1000);
}

// Chạy hàm đổi ảnh mỗi 3 giây
setInterval(changeImage, 3000);
</script>
</section>
<section class="product_area mb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title">
                    <h2><span> <strong>Giày</strong>Bóng Đá</span></h2>
                </div>
            </div>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="brake" role="tabpanel">
                <div class="product_carousel product_column5 owl-carousel">
                    <?php foreach ($showSanPhamClient as $sp): ?>
                        <div class="single_product">
                            <div class="product_name">
                                <h3><a href="?act=detail-pro"><?= $sp['ten_san_pham'] ?></a></h3>
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="?act=detail-pro">
                                <img src="./images/category<?= $sp['hinh_anh']; ?>" width="100"></td>
                                </a>
                            </div>
                            <div class="product_content">
                                <div class="product_footer d-flex align-items-center">
                                    <div class="price_box">
                                        <?php if (!empty($sp['gia_khuyen_mai'])): ?>
                                            <span class="regular_price" style="text-decoration: line-through;"><?= $sp['gia_san_pham'] ?> $</span>
                                            <span class="sale_price"><?= $sp['gia_khuyen_mai'] ?> $</span>
                                        <?php else: ?>
                                            <span class="regular_price"><?= $sp['gia_san_pham'] ?> $</span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <p class="product_status">
                                    <?php if ($sp['trang_thai'] == 1): ?>
                                        <span class="text-success">Còn Hàng</span>
                                    <?php else: ?>
                                        <span class="text-danger">Tạm Hết</span>
                                    <?php endif; ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

    </div>
</section>
<section class="product_area mb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title">
                    <h2><span> <strong>Quần áo</strong>Bóng Đá</span></h2>
                </div>
            </div>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="brake" role="tabpanel">
                <div class="product_carousel product_column5 owl-carousel">
                    <?php foreach ($showSanPhamClient as $sp): ?>
                        <div class="single_product">
                            <div class="product_name">
                                <h3><a href="?act=detail-pro"><?= $sp['ten_san_pham'] ?></a></h3>
                                <p class="manufacture_product">
                                    <a href="#"><?= $sp['danh_muc_id'] == 1 ? "Giầy" : "Áo Bóng Đá" ?></a>
                                </p>
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="?act=detail-pro">
                                <img src="./images/category<?= $sp['hinh_anh']; ?>" width="100"></td>
                                </a>
                            </div>
                            <div class="product_content">
                                <div class="product_footer d-flex align-items-center">
                                    <div class="price_box">
                                        <?php if (!empty($sp['gia_khuyen_mai'])): ?>
                                            <span class="regular_price" style="text-decoration: line-through;"><?= $sp['gia_san_pham'] ?></span>
                                            <span class="sale_price"><?= $sp['gia_khuyen_mai'] ?></span>
                                        <?php else: ?>
                                            <span class="regular_price"><?= $sp['gia_san_pham'] ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <p class="product_status">
                                    <?php if ($sp['trang_thai'] == 1): ?>
                                        <span class="text-success">Còn Hàng</span>
                                    <?php else: ?>
                                        <span class="text-danger">Tạm Hết</span>
                                    <?php endif; ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

    </div>
</section>
<hr>
<?php include '../views/client/layout/footer.php' ?>