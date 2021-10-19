<!DOCTYPE html>
<html lang="en">
<?php require "./form/head.php"; ?>
<?php
$perPage = 6; 	//số lượng sản phẩm hiển thị trên 1 trang  
$total = count($product->getAllProducts()); 	// Tính tổng số dòng
?>
<body>
    <?php require "./form/header_part.php"; ?>
    <?php require "./form/topHeaderMenu.php"; ?>
    <?php require "./form/startTopSerch.php"; ?>
    <?php require "./form/sidebarMenu.php"; ?>
    <!-- BEGIN CONTENT -->
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb" style="padding: 1px;background: #cbcbcb;"> <a href="index.php" title="Go to Home" class="tip-bottom current" style="font-size: 17px;"><i class="icon-home"></i> Home</a></div>
            <h1>Quản Lí Sản Phẩm </h1>
    </div>
        <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="delete.php" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Xóa sản phẩm</h5>
                        <input type="hidden" value="" name="id" id="id">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Bạn có chắc chắn xoá?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                        <button type="submit" name="submitDelete" class="btn btn-primary">Xóa</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> 
                            <span class="icon"> <i class="icon-align-justify"></i> </span>
                            <h5> Sản Phẩm</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="getId">ID</th>
                                        <th>Hình ảnh</th>
                                        <th>Tên SP</th>
                                        <th>Hãng</th>
                                        <th>Loại SP</th>
                                        <th>Chi tiết</th>
                                        <th>Giá (VNĐ)</th>
                                        <th>Nổi bật</th>
                                        <th>Ngày tạo</th>
                                        <th>Chức năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr class="">
                                        <td class="getId"></td>
                                        <td width="250"><img src="../images/" />
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="#" class="btn btn-primary" style="height: 25px; width:60px; font-size: 15px; margin: 15px 5px 0 25px">Thêm <i class="fas fa-plus-square"></i></a>
                                            <button type="button" style="height: 35px; width:86px; font-size: 15px; margin: 15px 5px 15px 25px" 
                                            class="btn btn-danger"
                                            data-toggle="modal" data-target="#delete">
                                                Xóa <i class="fas fa-trash-alt"></i>
                                            </button>
                                            <a href="#" class="btn btn-success" style="height: 25px; width:60px; font-size: 15px; margin: 0px 5px 0 25px">Sửa <i class="far fa-edit"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT -->
    <?php require "./form/footer_part.php"; ?>
    <?php require "./form/script.php"; ?>
</body>

</html>
<script>
    function deleteID(delID){
        let getID = document.getElementById('id');
        let id = delID;
        getID.value = id;
    }
</script>