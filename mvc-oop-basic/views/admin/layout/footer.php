    <!-- JAVASCRIPT -->
    <script src="admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="admin/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="admin/assets/libs/node-waves/waves.min.js"></script>
    <script src="admin/assets/libs/feather-icons/feather.min.js"></script>
    <script src="admin/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="admin/assets/js/plugins.js"></script>

    <!-- apexcharts -->
    <script src="admin/assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Vector map-->
    <script src="admin/assets/libs/jsvectormap/jsvectormap.min.js"></script>
    <script src="admin/assets/libs/jsvectormap/maps/world-merc.js"></script>

    <!--Swiper slider js-->
    <script src="admin/assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- Dashboard init -->
    <script src="admin/assets/js/pages/dashboard-ecommerce.init.js"></script>

    <!-- App js -->
    <script src="admin/assets/js/app.js"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>


        
        <?php
            // Kiểm tra nếu session có thông báo thành công
            if (isset($_SESSION['success'])) {
                echo "<script>
                    Toastify({
                        text: '{$_SESSION['success']}',
                        style: {
                            background: 'green',
                        },
                        duration: 3000
                    }).showToast();
                </script>";
                unset($_SESSION['success']); 
            }

            // Kiểm tra nếu session có thông báo lỗi
            if (isset($_SESSION['errors'])) {
                echo "<script>
                    Toastify({
                        text: '{$_SESSION['errors']}',
                        style: {
                            background: 'red',
                        },
                        duration: 3000
                    }).showToast();
                </script>";
                unset($_SESSION['errors']); 
            }
            ?>

</body>


<!-- Mirrored from themesbrand.com/velzon/html/corporate/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Nov 2024 14:33:39 GMT -->
</html>