<!DOCTYPE html>
<html lang="en">
<?php require "./form/head.php"; ?>
<?php
//$total = 0;
if (isset($_GET['id']) || isset($_SESSION['last_id'])) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    } else if (isset($_SESSION['last_id'])) {
        $id = $_SESSION['last_id'];
    }
    if (isset($_SESSION['wishlist'][$id])) {
        $_SESSION['wishlist'][$id]++;
    } else {
        $_SESSION['wishlist'][$id] = 1;
    }
    if (!isset($_SESSION['id'][$id])) {
        $_SESSION['id'][$id] = $id;
    }
}
?>
<!--Xu ly gio hang-->

<body>
    <?php require "./form/header-bottom.php"; ?>
    <section>
        <section id="cart_items">
            <div class="container">
                <h3>Sản phẩm yêu thích</h3>
                <div class="table-responsive cart_info">
                    <table class="table table-condensed">
                        <thead>
                            <tr class="cart_menu" style=" background: #7b7977;">
                                <td class="image"></td>
                                <td class="description">Tên</td>
                                <td class="price">Giá</td>
                                <td class="price">Giỏ hàng</td>
                                <td>Xóa</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php if (isset($_SESSION['id']) && isset($_SESSION['wishlist'])) {
                                    foreach ($_SESSION['id'] as $numberID) {
                                        foreach ($product->getProductsByID($numberID) as $value) { ?>
                                            <td class="cart_product">
                                                <a href=""><img style="width:150px;height;200px" src="images/<?php echo $value['pro_image'] ?>" alt="" width=110></a>
                                            </td>
                                            <td class="cart_description">
                                                <h4><a href="detail.php?id=<?php echo $value['ID'] ?>"><?php echo $value['name'] ?></a></h4>
                                            </td>
                                            
                                            
                                            <td class="cart_price">
                                                <p><?php echo number_format($value['price']) ?> VND</p>
                                            </td>
                                            <td class="cart_description">
                                            <a href="cart.php?id=<?php echo $value['ID'] ?>"
                                                     class="btn btn-default add-to-cart"><i
                                                         class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
                                            </td>
                                            <td class="cart_delete">
                                                <a class="cart_quantity_delete" href="changewishlist.php?id=<?php echo $numberID ?>&control=3"><i class="fa fa-times"></i></a>
                                            </td>
                            </tr>
                <?php }
                                    }
                                } ?>
                <!--Form dat hang-->
                        </tbody>
                    </table>
                        <div class="form-group col-md-12">
                            <a class="btn btn-default update" href="index.php" style="background: #4b5051;">Quay lại trang chủ</a>
                            <a class="btn btn-default check_out" href="changewishlist.php?control=4" style="background: #a53535;">Xóa tất cả</a>
                            
                        </div>
                </div>
            </div>
        </section>
        </div>
        </div>
    </section>
    <?php require "./form/footer.php"; ?>
    <?php require "./form/script.php"; ?>
</body>

</html>