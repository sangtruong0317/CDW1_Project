<!DOCTYPE html>
<html lang="en">
<?php require "./form/head.php"; ?>


<body>
    <?php require "./form/header-bottom.php"; ?>
    <section>
        <section id="cart_items">
            <div class="container">
                <h3>Đơn Hàng của bạn</h3>
                <div class="table-responsive cart_info">
                    <table class="table table-condensed">
                        <thead>
                            <tr class="cart_menu" style=" background: #7b7977;">
                                <td class="image"></td>
                                <td class="description">Tên</td>
                                <td class="price">Giá</td>
                                <td class="quantity">Số lượng</td>
                                <td class="total">Tổng cộng</td>
                                <td>Xóa</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="cart_product">
                                    <a href="#"><img style="width:150px;height;200px" src="images/" alt="" width=110></a>
                                </td>
                                <td class="cart_description">
                                    <h4><a href="#">Tên</a></h4>
                                </td>
                                <td class="cart_price">
                                    <p>0 VND</p>
                                </td>
                                <td class="cart_quantity">
                                    <div class="cart_quantity_button">
                                        <a class="cart_quantity_up" href="#"> + </a>
                                        <input class="cart_quantity_input" type="text" name="quantity" value="" autocomplete="off" size="2">
                                        <a class="cart_quantity_down" href="#"> - </a>
                                    </div>
                                </td>
                                <td class="cart_total">
                                    <p class="cart_total_price">0 VND</p>
                                </td>
                                <td class="cart_delete">
                                    <a class="cart_quantity_delete" href="#"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <h3>
                        <p style=text-align:center;background-color:#7b7977;padding:10px;color:white>Tổng Cộng:  VND</p>
                    </h3>
                    <form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="processOrder.php">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Họ tên" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group col-md-12">
                            <input type="text" name="address" class="form-control" placeholder="Địa chỉ" required>
                        </div>
                        <div class="form-group col-md-12">
                            <input type="number" name="phone" class="form-control" placeholder="Số điện thoại" required>
                        </div>
                        <div class="form-group col-md-12">
                            <a class="btn btn-default update" href="index.php" style="background: #4b5051;">Tiếp tục mua hàng</a>
                            <a class="btn btn-default check_out" href="change.php?control=4" style="background: #a53535;">Xóa tất cả</a>
                            <input type="submit" name="submitOrder" class="btn btn-primary pull-right" value="Đặt hàng" style="background: #4b5051;">
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!--/#cart_items-->
        <!--features_items-->
        </div>
        </div>
    </section>
    <?php require "./form/footer.php"; ?>
    <?php require "./form/script.php"; ?>
</body>

</html>