<?php
if (isset($_GET['manu_id']) || isset($_GET['type_id'])) {
?>
    <!DOCTYPE html>
    <html lang="en">
    <?php require "./form/head.php"; ?>

    <body>
        <?php require "./form/header-bottom.php"; ?>
        <?php
        $perPage = 6;
        if (!isset($_GET['page'])) {
            $_GET['page'] = 1;
        }
        $page = $_GET['page'];
        $url = $_SERVER['PHP_SELF'];
        $total = 1;
        ?>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="left-sidebar">
                            <h2>Category</h2>
                            <div class="panel-group category-products" id="accordian">
                                <!--category-productsr-->
                                <div class="panel panel-default">
                                    <?php foreach ($manufacture->getAllManufactures() as $value) { ?>
                                        <div class="panel-heading">
                                            <h4 class="panel-title"><a href="cate.php?manu_id=<?php echo $value['manu_id'] ?>"><?php echo $value['manu_name'] ?></a></h4>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 padding-right">
                        <div class="features_items">
                            <!--features_items-->
                            <h2 class="title text-center">SamSung</h2>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <a href="">
                                                <img class="hinhanh" src="./images/ss-tv-led-65.jpg" alt="" />
                                                <p><a class="name-products" href="detail.php">Tivi Samsung</a></p>
                                                <h2>11,290,000 VND</h2>
                                                <p></p>
                                                <a href="" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <a href="">
                                                <img class="hinhanh" src="./images/ss-tv-led-65.jpg" alt="" />
                                                <p><a class="name-products" href="detail.php">Tivi Samsung</a></p>
                                                <h2>11,290,000 VND</h2>
                                                <p></p>
                                                <a href="" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <a href="">
                                                <img class="hinhanh" src="./images/ss-tv-led-65.jpg" alt="" />
                                                <p><a class="name-products" href="detail.php">Tivi Samsung</a></p>
                                                <h2>11,290,000 VND</h2>
                                                <p></p>
                                                <a href="" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="features_items">
                            <!--features_items-->
                            <h2 class="title text-center">Máy Giặt</h2>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <a href="">
                                                <img class="hinhanh" src="./images/may-giat-samsung-inverter-8kg-ww80t3020ww-sv-org.jpg" alt="" />
                                                <p><a class="name-products" href="detail.php">Máy Giặt Samsung</a></p>
                                                <h2>11,290,000 VND</h2>
                                                <p></p>
                                                <a href="" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <a href="">
                                                <img class="hinhanh" src="./images/may-giat-samsung-inverter-8kg-ww80t3020ww-sv-org.jpg" alt="" />
                                                <p><a class="name-products" href="detail.php">Máy Giặt Samsung</a></p>
                                                <h2>11,290,000 VND</h2>
                                                <p></p>
                                                <a href="" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <a href="">
                                                <img class="hinhanh" src="./images/may-giat-samsung-inverter-8kg-ww80t3020ww-sv-org.jpg" alt="" />
                                                <p><a class="name-products" href="detail.php">Máy Giặt Samsung</a></p>
                                                <h2>11,290,000 VND</h2>
                                                <p></p>
                                                <a href="" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Xu ly paginate-->
        </section>
        <?php if (isset($_GET['manu_id'])) { ?>
            <h3 style=text-align:center>
                </p><?php echo $manufacture->paginateManu($url, $total, $page, $perPage, $manu_id) ?></p>
            </h3>
        <?php } else if (isset($_GET['type_id'])) { ?>
            <h3 style=text-align:center>
                </p><?php echo $protype->paginateProtype($url, $total, $page, $perPage, $type_id) ?></p>
            </h3>
        <?php } ?>
        <?php require "./form/footer.php"; ?>
        <?php require "./form/script.php"; ?>
    </body>

    </html>
<?php
} else {
    // header("location:index.php");
}
?>