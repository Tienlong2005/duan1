<?php include '../views/client/layout/header.php' ?>
<div class="Checkout_section mt-32">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="user-actions">
                </div>
                <div class="user-actions">
                    <div id="checkout_coupon" class="collapse" data-parent="#accordion">
                    </div>
                </div>
            </div>
        </div>
        <div class="checkout_form">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <form action="#">
                        <h3>Your order</h3>
                        <div class="order_table table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Sản Phẩm</th>
                                        <th>Số Lượng</th>
                                        <th>Giá</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> Handbag fringilla</td>
                                        <td>2</td>
                                        <td> $165.00</td>
                                    </tr>
                                    </tfoot>
                            </table>
                        </div>
                        <div class="payment_method">
                            <div class="panel-default">
                                <input id="payment" name="check_method" type="radio" data-target="createp_account" />
                                <label for="payment" data-bs-toggle="collapse" href="#method" aria-controls="method">Ship COD</label>
                            </div>
                            <div class="panel-default">
                                <input id="payment_defult" name="check_method" type="radio" data-target="createp_account" />
                                <label for="payment_defult" data-bs-toggle="collapse" href="#collapsedefult" aria-controls="collapsedefult">Thanh Toán Online</label>
                            </div>
                            <div class="order_button">
                                <button type="submit">Proceed to PayPal</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<?php include '../views/client/layout/footer.php' ?>