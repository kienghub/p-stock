<!doctype html>
<html lang="en" ng-app="app" ng-controller="controller" ng-init="_callMenu()">

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
                    <li class="breadcrumb-item active">ກຸ່ມກຸ່ມເມນູ</li>
                </ol>

                <ul class="app-actions">
                    <li>
                        <a href="#" id="reportrange">
                            <span class="range-text"></span>
                            <i class="icon-chevron-down"></i>
                        </a>
                    </li>
                    <li>
                        <a href="../settings/">
                            <i class="icon-export"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Page header end -->
            <!-- Main container start -->
            <div class="main-container">
                <div class="row">
                    <div class="col-md-3 col-12">
                        <div class="blog p-3">
                            <h4><i class="fa fa-plus"></i> <span ng-bind="form_title"></span></h4>
                            <hr>
                            <div class="form-group">
                                <label for="">ກຸ່ມເມນູ <?php isVal()?></label>
                                <input type="hidden" class="form-control" ng-model="menu_id">
                                <input type="text" class="form-control" ng-model="menu_title"
                                    placeholder="ກະລຸນາປ້ອນກຸ່ມເມນູ">
                            </div>
                            <div class="form-group">
                                <label for="">ໄອຄອ໋ນ <?php isVal()?></label>
                                <input type="text" class="form-control" ng-model="menu_icon"
                                    placeholder="ກະລຸນາປ້ອນໄອຄອ໋ນ">
                            </div>
                            <div class="form-group">
                                <label for="">ໝາຍເຫດ</label>
                                <textarea rows="3" class="form-control" ng-model="menu_note"
                                    placeholder="ກະລຸນາປ້ອນໝາຍເຫດ"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="button" ng-click="_onSave()" class="btn btn-outline-primary"><i
                                        class="fa fa-check-circle"></i> <span ng-bind='btnName'"></span></button>
                                    <button type="button" ng-click="_clear()" class="btn btn-outline-danger"><i
                                            class="fa fa-times-circle"></i> ຍົກເລີກ</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-12">
                        <div class="blog p-3">
                            <h4><i class="fa fa-list"></i> ລາຍການກຸ່ມເມນູ</h4>
                            <hr>
                            <div class="table-responsice">
                                <table class="table table-hover table-sm" id="main">
                                    <tr>
                                        <th>#</th>
                                        <th>ລາຍການ</th>
                                        <th>ໄອຄອ໋ນ</th>
                                        <th>ໝາຍເຫດ</th>
                                        <th>ລົງວັນທີ</th>
                                        <th>ລົງໂດຍ</th>
                                        <th></th>
                                    </tr>
                                    <tr ng-repeat="x in _menus" id="sublist">
                                        <td ng-bind='$index+1'></td>
                                        <td ng-bind='x.menu_title'></td>
                                        <td><i class="fa fa-{{x.menu_icon}} fa-2x"></i></td>
                                        <td ng-bind='x.menu_note'></td>
                                        <td ng-bind='x.menu_createdAt'></td>
                                        <td ng-bind='x.menu_createdBy'></td>
                                        <td>
                                            <div class="btn-group float-right">
                                                <button type="button" ng-click="_onUpdate(x)"
                                                    class="btn btn-outline-primary"><i
                                                        class="fa fa-pencil"></i></button>
                                                <button type="button" ng-click="_onDelete(x.menu_id)"
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
    <!-- Page wrapper end -->
    <?php include('../../components/lib/script.php')?>
    <script src="app.js"></script>
</body>

</html>