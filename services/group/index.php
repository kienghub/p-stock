<!doctype html>
<html lang="en" ng-app="app" ng-controller="controller" ng-init="_callGroup();_callUsers();">

<head>
    <!-- Required meta tags -->
    <?php include('../../Components/lib/lib.php')?>
    <?php include('../../access/access.php')?>
    <?php _active('.settings')?>
</head>

<body>
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
                    <li class="breadcrumb-item active">ກຸ່ມເຮັດວຽກ</li>
                </ol>

                <ul class="app-actions">
                    <li>
                        <a href="#" id="reportrange">
                            <span class="range-text"></span>
                            <i class="icon-chevron-down"></i>
                        </a>
                    </li>
                    <li>
                        <a href="../home/">
                            <i class="icon-export"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Page header end -->
            <!-- Main container start -->
            <div class="main-container">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="blog p-3">
                            <button type="button" onclick="window.location='./add_group.php'" class="btn btn-outline-success float-right"><i class="fa fa-user-plus"></i>
                                ເພີ່ມສະມາຊິກກຸ່ມ</button>
                            <h4><i class="fa fa-list"></i> ລາຍການກຸ່ມວຽກ</h4>
                            <hr>
                            <div class="table-responsice">
                                <table class="table table-hover table-sm" id="main">
                                    <tr>
                                        <th>#</th>
                                        <th>ລາຍການ</th>
                                        <th>ໝາຍເຫດ</th>
                                        <th>ລົງວັນທີ</th>
                                        <th>ລົງໂດຍ</th>
                                        <th></th>
                                    </tr>
                                    <tr ng-repeat="x in _categorys" id="sublist">
                                        <td ng-bind='$index+1'></td>
                                        <td ng-bind='x.group_title'></td>
                                        <td ng-bind='x.group_note'></td>
                                        <td ng-bind='x.group_createdAt'></td>
                                        <td ng-bind='x.group_createdBy'></td>
                                        <td>
                                            <div class="btn-group float-right">
                                                <a href="./edit_group.php?id='{{x.group_id}}'" class="btn btn-outline-primary"><i
                                                        class="fa fa-pencil"></i>
                                                </a>
                                                        
                                                <button type="button" ng-click="_onDelete(x.group_id)"
                                                    class="btn btn-outline-danger"><i class="fa fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row end -->
        </div>
        <!-- Main container end -->
    </div>
    <!-- Page content end -->
    </div>
    </div>
    <!-- Page wrapper end -->
    <?php include('../../components/lib/script.php')?>
    <script src="app.js"></script>
</body>

</html>