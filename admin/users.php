
<!DOCTYPE html>
<html lang="en">
<?php require "./form/head.php"; ?>
<body>
    <?php require "./form/header_part.php"; ?>
    <?php require "./form/topHeaderMenu.php"; ?>
    <?php require "./form/startTopSerch.php"; ?>
    <?php require "./form/sidebarMenu.php"; ?>
    <!-- BEGIN CONTENT -->
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i> Home</a></div>
            <h1>Manage User</h1>
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"><a href="form.php?value=user"> <i class="icon-plus"></i>
                                </a></span>
                            <h5>User</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <table class="table table-bordered table-striped">
                                <thead style="height:50px;">
                                    <tr>
                                        <th class="th-user" style="padding: 10px;font-size: 17px;">User Id</th>
                                        <th class="th-user" style="padding: 10px;font-size: 17px;">Username</th>
                                        <th class="th-user" style="padding: 10px;font-size: 17px;">Role</th>
                                        <th class="th-user" style="padding: 10px;font-size: 17px;"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($user->getAccount() as $value){?>
                                    <tr class="tr-acc">
                                        <td class="user-acc" style="text-align: center;"><?= $value['user_id']?></td>
                                        <td class="user-acc" style="text-align: center;"><?= $value['name']?></td>
                                        <td class="user-acc" style="text-align: center;"><?= $value['role']?></td>
                                    </tr>
                                    <?php }?>
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