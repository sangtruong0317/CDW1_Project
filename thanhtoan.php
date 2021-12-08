<!DOCTYPE html>
<html lang="en">
<?php require "./form/head.php"; ?>
<body>
    <?php require "./form/header-bottom.php"; ?>
    <div class="text-center" style="padding: 50px 50px; align-items: center;">
        <h1>ĐƠN HÀNG</h1>
        <table border="1" style="font-size: 20px;">
            <tr>
                <th>Họ tên</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>Số điện thoại</th>
                <th>Tên hàng</th>
                <th>Số lượng</th>
                <th>Giá</th>
                <th>Thành tiền</th>
            </tr>
            <tr>
                <td><?php echo $_POST["name"] ?></td>
                <td><?php echo $_POST["email"] ?></td>
                <td><?php echo $_POST["address"] ?></td>
                <td><?php echo $_POST["phone"] ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php

            ?>
            <tr>
                <td colspan="8" align="right">Tổng tiền: VND</td>
            </tr>
        </table>
        <div class="form-group col-md-12 text-center">
            <a class="btn btn-default mua-ngay" href="camon.php" style="background: #d6d6d0; color: white;">Mua ngay</a>
            <a class="btn btn-default back" href="cart.php" style="background: #d6d6d0; color: white;">Quay lại</a>
        </div>
    </div>

    <?php require "./form/footer.php"; ?>
    <?php require "./form/script.php"; ?>
</body>

</html>
<?php
ob_end_flush();
?>