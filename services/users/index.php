<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <?php include('../../components/lib/lib.php')?>
    <?php include('../../access/access.php')?>
    <?php _active('.settings') ?>
</head>

<body ng-app="app" ng-controller="user" ng-init="userData();limit='20'">
    <!-- Page wrapper start -->
    <div class="page-wrapper">
        <?php include('../../components/layout/side-bar.php') ?>
        <!-- Page content start  -->
        <div class="page-content">
            <?php include_once('../../components/layout/heading.php')?>
            <!-- Page header start -->
            <div class="page-header">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" onclick="window.location='../settings/'">ຈັດການລະບົບ</li>
                    <li class="breadcrumb-item active">ຂໍ້ມູນຜູ້ໃຊ້ລະບົບ</li>
                </ol>

                <ul class="app-actions">
                    <li>
                        <a href="#" id="reportrange">
                            <?php echo $_DATE_FORMAT ?> <div id="MyClockDisplay" class="clock" onload="showTime()"></div>
                        </a>
                    </li>
                    <li>
                        <a href="../users/add-user.php">
                            <i class="icon-user-plus"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Page header end -->
            <!-- Main container start -->
            <div class="main-container">
                <div class="row" id="main">
                    <?php 
                    $_USER_DATA=$_SQL($con,"SELECT * FROM aws_users");
                    foreach($_USER_DATA as $key){
                    ?>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12" id="sublist">
                        <figure class="user-card">
                            <figcaption>
                                <a href="./user-profile.php?id=<?php echo $key['user_id']?>" class="edit-card"><i class="icon-mode_edit"></i></a>
                                <img src="../../img/<?php if($key['user_img']){echo $key['user_img'];}else{echo "user_null.png";} ?>" data-darkbox='../../img/{{user_img}}' data-darkbox-group='two' alt="user" class="profile" style="border:2px solid green;width:72px;height:72px;">
                                <h5><?php echo  $key['user_fname'].' '.$key['user_lname']?></h5>
                                <ul class="list-group">
                                    <li class="list-group-item"><?php echo $key['user_address']?></li>
                                    <li class="list-group-item"><?php echo $key['user_tel']?></li>
                                </ul>
                            </figcaption>
                        </figure>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <!-- Row end -->
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