<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <?php include('../../components/lib/lib.php') ?>
    <?php include('../../access/access.php') ?>
</head>

<body ng-app="app" ng-controller="controller" ng-init="userData();show_data();limit='20';">
    <!-- Page wrapper start -->
    <div class="page-wrapper">
        <?php 
        include('../../components/layout/side-bar.php')
         ?>
        <!-- Page content start  -->
        <div class="page-content">
            <?php include_once('../../components/layout/heading.php') ?>
            <!-- Page header start -->
            <div class="page-header">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" onclick="window.location='../home/'">ໜ້າຫຼັກ</li>
                    <li class="breadcrumb-item active">ປະຫວັດການເຂົ້າລະບົບ</li>
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
                <div class="row no-gutters">
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col-4">
                        <div class="docs-type-container">
                            <div class="docTypeContainerScroll">
                                <div class="docs-block  bg-light">
                                    <div class="doc-labels">
                                    <a href="./?all=true"  class="<?php if(@$_GET['all']=='true'){echo 'active';}else{echo '';}?>">
                                                <i class="icon-receipt"></i> ທັງໝົດ
                                        </a>
                                    <?php 
                                            $_callYear =$_SQL($con,"SELECT * FROM aws_history_login GROUP BY years ORDER BY years DESC");
                                            foreach($_callYear as $key){
                                            ?>
                                            <a href="./?years=<?php echo $key['years'] ?>"  class="<?php if($_GET['years']==$key['years']){echo 'active';}else{echo '';}?>">
                                                <i class="icon-receipt"></i>ປີ <?php echo $key['years']; ?>
                                            </a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-9 col-sm-9 col-8">
                        <div class="documents-container">
                            <div class="documents-body">
                                <!-- Row start -->
                                <div class="table-container">
                                    <div class="t-header h5"><i class="icon-list"></i> ລາຍການປີ
                                    </div>
                                    <div class="table-responsive">
                                        <table id="main" class="table custom-table table-sm">
                                            <tr>
                                                <th class="text-center" width='90'>#</th>
                                                <th class="text-center">ຊື່ຜູ້ເຂົ້າລະບົບ</th>
                                                <th class="text-center">ຊື່ອຸປະກອນ</th>
                                                <th class="text-center">ສະຖານທີ່</th>
                                                <th class="text-center">ພິກັດ</th>
                                                <th class="text-center">ເວລາ</th>
                                                <th class="text-center">ປີ</th>
                                                <th class="text-center">ຈັດການ</th>
                                            </tr>
                                            <?php 
                                            if(@$_GET['years']){
                                                $_year="WHERE years='$_GET[years]'";
                                            }else{
                                                $_year='';
                                            }
                                            $aws_LOGIN =$_SQL($con,"SELECT * FROM aws_history_login $_year ORDER BY login_id DESC");
                                            $x=1;
                                            foreach($aws_LOGIN as $key){
                                            ?>
                                            <tr id="sublist">
                                                <td class="text-center"><?php echo $x ?></td>
                                                <td><?php echo $key['login_user']?></td>
                                                <td><?php echo $key['login_host']?></td>
                                                <td><?php echo $key['login_address']?></td>
                                                <td><a href="https://maps.google.com/?q=<?php echo $key['login_lat']?>,<?php echo $key['login_long']?>" target="_blank"><?php echo $key['login_lat']?>,<?php echo $key['login_long']?></a></td>
                                                <td><?php echo $key['login_time']?></td>
                                                <td><?php echo $key['years']?></td>
                                                <td style="width:100px!important;text-align:center">
                                                    <div class="btn-group">
                                                        <button type="button" onclick="_onDelete(<?php echo $key['login_id']?>)" class="btn btn-outline-danger"><i class="icon-trash"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php $x++;} ?>
                                        </table>
                                    </div>
                                </div>
                                <!-- Row end -->
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- Main container end -->
    </div>


    <!-- Page content end -->
    </div>
    <!-- Page wrapper end -->
    <?php include('../../components/lib/script.php') ?>
    <script src="app.js"></script>
</body>

</html>