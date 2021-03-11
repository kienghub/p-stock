<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <?php include('../../components/lib/lib.php')?>
    <?php include('../../access/access.php')?>
    <?php include('../../connection.php')?>
</head>
<body ng-app="app" ng-controller="controller" ng-init="user_name='<?php echo $_USER_NAME ?>'">
    <!-- Page wrapper start -->
    <div class="page-wrapper">
        <?php include('../../components/layout/side-bar.php') ?>
        <!-- Page content start  -->
        <div class="page-content">
            <?php include_once('../../components/layout/heading.php')?>
            <!-- Page header start -->
            <div class="page-header">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" onclick="window.location='../home/'">ໜ້າຫຼັກ</li>
                    <li class="breadcrumb-item active">ປ່ຽນລະຫັດຜ່ານ</li>
                </ol>

                <ul class="app-actions">
                    <li>
                        <a href="#" id="reportrange">
                            <?php echo $_DATE_FORMAT ?> <div id="MyClockDisplay" class="clock" onload="showTime()"></div>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Page header end -->
            <!-- Main container start -->
            <div class="main-container">
                <div class="row">
                  <div class="col-md-4"></div>
                    <div class="col-md-4 col-xs-12">
                        <div class="table-container">
                            <form action="#" id="changePassword">
                            <div class="t-header h5"><i class="fa fa-user-circle-o"></i> ປ່ຽນລະຫັດຜ່ານ</div>
                            <img src="../../img/password.png" alt="" style="margin-bottom: 5px;width:100%">
                            <label for="">ຊື່ຜູ້ໃຊ້</label>
                            <input type="text" class="form-control" id="user_name" value="<?php echo $_USER_NAME ?>">
                            <label for="">ລະຫັດເກົ່າ</label>
                            <input type="password" class="form-control" id="old_password" name="old_password"
                                placeholder="ກະລຸນາປ້ອນລະຫັດເກົ່າ">
                            <label for="">ລະຫັດໃໝ່</label>
                            <input type="password" class="form-control" id="new_password" name="new_password"
                                placeholder="ກະລຸນາປ້ອນລະຫັດໃໝ່">
                            <hr>
                            <button type="submit" class="btn btn-outline-primary">
                                <i class="fa fa-check-circle"></i> ຢືນຢັນ
                            </button>
                            <?php callback('../../services/home/') ?>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>
                <!-- Main container end -->
            </div>
            <!-- Page content end -->
        </div>
        <!-- Page wrapper end -->
        <?php include('../../components/lib/script.php')?>
        <script src="app.js"></script>
</body>

</html>