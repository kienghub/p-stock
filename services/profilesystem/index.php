<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <?php include('../../components/lib/lib.php')?>
    <?php include('../../access/access.php')?>
    <?php include('../../connection.php')?>
    <?php 
        $_callUserData=$_SQL($con,"SELECT*FROM aws_profile_system");
        $res=$_ASSOC($_callUserData);
        $_data=$_COUNT($_callUserData);
    ?>
</head>

<body ng-app="app" ng-controller="system">
    <!-- Page wrapper start -->
    <div class="page-wrapper">
        <div class="page-content">
            <?php include('../../components/layout/side-bar.php') ?>
            <?php include_once('../../components/layout/heading.php')?>

            <!-- Page header start -->
            <div class="page-header">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" onclick="window.location='../home/'">ໜ້າຫຼັກ</li>
                    <li class="breadcrumb-item active">ຂໍ້ມູນສຳນັກງານ</li>
                </ol>
                <ul class="app-actions">
                    <li>
                        <a href="#" id="reportrange">
                            <?php echo $_DATE_FORMAT ?> <div id="MyClockDisplay" class="clock" onload="showTime()">
                            </div>
                        </a>
                    </li>
                    <li <?php if($_data>0){echo "hidden";}else{echo "";}?>>
                        <a href="./sign-up.php">
                            <i class="icon-plus"></i>
                        </a>
                    </li>
                    <li <?php if($_data>0){echo "";}else{echo "hidden";}?>>
                        <a href="./?edit=true">
                            <i class="icon-edit"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Page header end -->
            <!-- Main container start -->
            <div class="main-container">
                <form action="#" method="post" enctype="multipart/form-data">
                    <!-- Row start -->
                    <div class="row gutters">
                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="account-settings">
                                        <div class="user-profile">
                                            <div class="user-avatar">
                                                <div class="image">
                                                    <div class="dropbox">
                                                        <input type="file" name="p_logo" onchange="readURL(this);"
                                                            id="file-5" class="hidden inputfile inputfile-4"
                                                            data-multiple-caption="{count} files selected" multiple
                                                            style="display: none!important" />
                                                        <label for="file-5">
                                                            <img src="../../img/<?php if($res['p_logo']){echo $res['p_logo'];}else{echo 'logo-app.png';}?>"
                                                                id="preview"
                                                                style="width:150px;height:150px;margin-bottom:15px" />
                                                            <span
                                                                <?php if(@$_GET['edit']==true){echo "";}else{echo "hidden";}?>
                                                                class="btn btn-success btn-block">ເລືອກຮູບ</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="user-name"><?php echo $res['p_title'] ?></h5>
                                        </div>

                                        <span class="input-group-btn"
                                            <?php if($_data>0){echo "";}else{echo "hidden";}?>>
                                            <button type="button" onclick="_onDelete(<?php echo $res['p_id'] ?>)"
                                                class="btn btn-outline-danger btn-block"><i class="icon-trash"></i>
                                                ລຶບບັນຊີ</button>
                                        </span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                            <div class="card h-100">
                                <div class="card-header">
                                    <div class="card-title">ຂໍ້ມູນສຳນັກງານ</div>
                                </div>
                                <div class="card-body">
                                    <div class="row gutters">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="fullName">ຊື່ </label>
                                                <input type="hidden" name="p_id" value="<?php echo $res['p_id']?>">
                                                <input type="text" class="form-control" name="p_title"
                                                    <?php if(@$_GET['edit']==true){echo "";}else{echo "disabled";}?>
                                                    value="<?php echo $res['p_title']?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="fullName">ຂໍ້ມູນຕິດຕໍ່ 1</label>
                                                <input type="text" class="form-control" name="p_contact1"
                                                    <?php if(@$_GET['edit']==true){echo "";}else{echo "disabled";}?>
                                                    value="<?php echo $res['p_contact1']?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="fullName">ຂໍ້ມູນຕິດຕໍ່ 2</label>
                                                <input type="text" class="form-control" name="p_contact2"
                                                    <?php if(@$_GET['edit']==true){echo "";}else{echo "disabled";}?>
                                                    value="<?php echo $res['p_contact2']?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="fullName">ຂໍ້ມູນຕິດຕໍ່ 3</label>
                                                <input type="text" class="form-control" name="p_contact3"
                                                    <?php if(@$_GET['edit']==true){echo "";}else{echo "disabled";}?>
                                                    value="<?php echo $res['p_contact3']?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="fullName">ລາຍລະອຽດ</label>
                                                <textarea type="text" class="form-control" rows="4" name="p_detail"
                                                    <?php if(@$_GET['edit']==true){echo "";}else{echo "disabled";}?>
                                                    value="<?php echo $res['p_detail']?>"><?php echo $res['p_detail']?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                                            <?php if(@$_GET['edit']==true){echo "";}else{echo "hidden";}?>>
                                            <div class="text">
                                                <button type="submit" name="_handleSubmit"
                                                    class="btn btn-outline-primary"><i class="icon-check-circle"></i>
                                                    ຢືນຢັນ</button>
                                                <a href="../users/user-profile.php?id=<?php echo $res['user_id'] ?>"
                                                    class="btn btn-outline-danger"><i class="icon-close"></i>
                                                    ຍົກເລີກ</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row end -->
                </form>
            </div>
            <!-- Main container end -->
        </div>
        <!-- Main container end -->
    </div>
    <!-- Page content end -->
    </div>
    <!-- Page wrapper end -->
    <?php include('../../components/lib/script.php')?>
    <script src="app.js"></script>
    <?php 
    require_once('../../connection.php');
    if(isset($_POST['_handleSubmit'])){
        $id=$_POST['p_id'];
        $p_title=$_SETSTRING($con,$_POST['p_title']);
        $p_contact1=$_SETSTRING($con,$_POST['p_contact1']);
        $p_contact2=$_SETSTRING($con,$_POST['p_contact2']);
        $p_contact3=$_SETSTRING($con,$_POST['p_contact3']);
        $p_detail=$_SETSTRING($con,$_POST['p_detail']);

        $_callProfileDataResult=$_SQL($con,"SELECT*FROM aws_profile_system where p_id='$id'");
        $rows=$_ASSOC($_callProfileDataResult);
        @$file_img    = $_FILES['p_logo']['name'];
        @$tmp_dir    = $_FILES['p_logo']['tmp_name'];

        @$upload_dir = '../../img/';// upload directory
            @$fileExt  = strtolower(pathinfo($file_img, PATHINFO_EXTENSION));
            if ($file_img == "") {$img = $rows['p_logo'];} else {
                @$img = rand(100000, 1000000).".".$fileExt;
            }
        
        $_updateProfile=$_SQL($con,"UPDATE aws_profile_system SET p_title='$p_title',p_contact1='$p_contact1',p_contact2='$p_contact2', p_contact3='$p_contact3',p_detail='$p_detail',p_logo='$img', p_createdAt='$_DATE',p_createdBy='$_USER_NAME' WHERE p_id='$id'");
        if($_updateProfile){
        @unlink($tmp_dir, $upload_dir.$rows['p_logo']);
        @move_uploaded_file($tmp_dir, $upload_dir.$img);
        echo "<script>
        Notiflix.Notify.Success('ການດຳເນີນງານສຳເລັດ');
         setTimeout(() => {
                  window.location='./'
                }, 2000);
        </script>";
        }else{
            echo "<script>
            Notiflix.Notify.Failure('ການດຳເນີນງານບໍ່ສຳເລັດ');
            setTimeout(() => {
                    window.location='./?edit=true'
                    }, 2000);
            </script>";}
        }
    ?>
</body>

</html>