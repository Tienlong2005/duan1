<?php include '../views/client/layout/header.php' ?>
<section class="main_content_area py-5">
    <div class="container">
        <div class="account_dashboard bg-light p-4 rounded shadow-sm">
            <div class="row">
                <!-- Sidebar -->
                <div class="col-md-3 mb-4">
                    <div class="dashboard_tab_button bg-white p-3 rounded shadow-sm">
                        <h5 class="text-center mb-3">Dashboard</h5>
                        <ul class="nav flex-column dashboard-list" id="nav-tab">
                            <li>
                                <a href="#orders" data-toggle="tab" class="nav-link active">Orders</a>
                            </li>
                            <li>
                                <a href="#account-details" data-toggle="tab" class="nav-link">Account Details</a>
                            </li>
                            <li>
                                <a href="#change-password" data-toggle="tab" class="nav-link">Change Password</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Content Area -->
                <div class="col-md-9">
                    <div class="tab-content dashboard_content">
                        <!-- Orders Tab -->
                        <div class="tab-pane fade show active" id="orders">
                            <h3 class="mb-4">My Orders</h3>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Đơn Hàng</th>
                                            <th>Ngày Đặt</th>
                                            <th>Trạng Thái</th>
                                            <th>Tổng Tiền</th>
                                            <th>Thao Tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#1</td>
                                            <td>May 10, 2018</td>
                                            <td><span class="badge badge-success">Completed</span></td>
                                            <td>$25.00</td>
                                            <td>
                                                <a href="cart.html" class="btn btn-sm btn-primary">View</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Account Details Tab -->
                        <div class="tab-pane fade" id="account-details">
                            <h3 class="mb-4">Account Details</h3>
                            <form action="index.php?act=update-profile" method="POST">
                                <div class="form-group">
                                    <label for="ho_ten">Họ Tên</label>
                                    <input type="text" name="ho_ten" class="form-control" value="<?= $_SESSION['user']['ho_ten'] ?>">
                                    <?php if (isset($_SESSION['errors']['ho_ten'])): ?>
                                        <p class="text-danger"><?= $_SESSION['errors']['ho_ten'] ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" value="<?= $_SESSION['user']['email'] ?>">
                                    <?php if (isset($_SESSION['errors']['email'])): ?>
                                        <p class="text-danger"><?= $_SESSION['errors']['email'] ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="sdt">Số Điện Thoại</label>
                                    <input type="text" name="sdt" class="form-control" value="<?= $_SESSION['user']['so_dien_thoai'] ?>">
                                    <?php if (isset($_SESSION['errors']['sdt'])): ?>
                                        <p class="text-danger"><?= $_SESSION['errors']['sdt'] ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="gioi_tinh">Giới Tính</label>
                                    <select id="gioi-tinh" name="gioi_tinh" class="form-control">
                                        <option value="0" <?= $_SESSION['user']['gioi_tinh'] == 0 ? 'selected' : '' ?>>Nam</option>
                                        <option value="1" <?= $_SESSION['user']['gioi_tinh'] == 1 ? 'selected' : '' ?>>Nữ</option>
                                    </select>
                                    <?php if (isset($_SESSION['errors']['gioi_tinh'])): ?>
                                        <p class="text-danger"><?= $_SESSION['errors']['gioi_tinh'] ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="dia_chi">Địa Chỉ</label>
                                    <input type="text" name="dia_chi" class="form-control" value="<?= $_SESSION['user']['dia_chi'] ?>">
                                    <?php if (isset($_SESSION['errors']['dia_chi'])): ?>
                                        <p class="text-danger"><?= $_SESSION['errors']['dia_chi'] ?></p>
                                    <?php endif; ?>
                                </div>
                                <br>
                                <button type="submit" name="update-profile" class="btn btn-primary">Cập nhật</button>
                            </form>
                        </div>

                        <!-- Change Password Tab -->
                        <div class="tab-pane fade" id="change-password">
                            <h3 class="mb-4">Change Password</h3>
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label for="current-password">Current Password</label>
                                    <input type="password" id="current-password" name="current-password" class="form-control" placeholder="Enter current password" required>
                                </div>
                                <div class="form-group">
                                    <label for="new-password">New Password</label>
                                    <input type="password" id="new-password" name="new-password" class="form-control" placeholder="Enter new password" required>
                                </div>
                                <div class="form-group">
                                    <label for="confirm-password">Confirm New Password</label>
                                    <input type="password" id="confirm-password" name="confirm-password" class="form-control" placeholder="Confirm new password" required>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary">Update Password</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr>
<?php
unset($_SESSION['errors']);
include '../views/client/layout/footer.php' ?>