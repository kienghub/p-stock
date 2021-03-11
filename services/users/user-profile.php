<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <?php include('../../components/lib/lib.php')?>
    <?php include('../../access/access.php')?>
    <?php _active('.settings') ?>
</head>

<body ng-app="app" ng-controller='user'>
    <!-- Page wrapper start -->
    <div class="page-wrapper">
        <?php include('../../components/layout/side-bar.php') ?>
        <!-- Page content start  -->
        <div class="page-content">
            <?php include_once('../../components/layout/heading.php')?>
            <!-- Page header start -->
            <?php 
                $_callUserData=$_SQL($con,"SELECT*FROM aws_users where user_id='$_GET[id]'");
                $res=$_ASSOC($_callUserData);
            ?>
            <div class="page-header">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" onclick="window.location='../settings/'">ຈັດການລະບົບ</li>
                    <li class="breadcrumb-item" onclick="window.location='./index.php'">ຂໍ້ມູນຜູ້ໃຊ້ລະບົບ</li>
                    <li class="breadcrumb-item active">ລາຍລະອຽດ</li>
                </ol>

                <ul class="app-actions">
                    <li>
                        <a href="#" id="reportrange">
                            <?php echo $_DATE_FORMAT ?>
                        </a>
                    </li>
                    <li>
                        <a href="../users/user-profile.php?id=<?php echo $res['user_id'] ?>&edit=true">
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
                                                        <input type="file" name="user_img" onchange="readURL(this);"
                                                            id="file-5" class="hidden inputfile inputfile-4"
                                                            data-multiple-caption="{count} files selected" multiple
                                                            style="display: none!important"/>
                                                        <label for="file-5">
                                                            <img src="../../img/<?php if($res['user_img']){echo $res['user_img'];}else{echo 'user_null.png';}?>"
                                                                id="preview"
                                                                style="width:150px;height:150px;margin-bottom:15px" />
                                                            <span class="btn btn-success btn-block"
                                                                <?php if(@$_GET['edit']==true){echo "";}else{echo "hidden";}?>>ເລືອກຮູບ</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="user-name"><?php echo $res['user_fname'] ?></h5>
                                            <h6 class="user-email"><?php echo $res['user_lname'] ?></h6>
                                        </div>
                                        <div class="list-group">
                                            <a href="#" class="list-group-item">ສິດການນຳໃຊ້:
                                                <?php $res['user_role'] ?></a>
                                            <a href="#" class="list-group-item">ສະຖານະ:
                                                <?php if($res['user_status']==true){echo "ຍັງໃຊ້ງານ";}else{echo "ປິດໃຊ້ງານ";} ?></a></a>
                                            <a href="#" class="list-group-item">ວັນທີສ້າງ:
                                                <?php echo $res['user_createdAt'] ?></a>
                                            <a href="#" class="list-group-item">ສ້າງໂດຍ:
                                                <?php echo $res['user_createdBy'] ?></a>
                                        </div>

                                        <span class="input-group-btn">
                                            <button type="button" onclick="_onDelete(<?php echo $_GET['id'] ?>)"
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
                                    <div class="card-title">ຂໍ້ມູນຜູ້ໃຊ້ລະບົບ</div>
                                </div>
                                <div class="card-body">
                                    <div class="row gutters">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="fullName">ຊື່ <?php isVal()?></label>
                                                <input type="hidden" name="user_id" value="<?php echo $_GET['id']?>">
                                                <input type="text" class="form-control" name="user_fname" required
                                                    <?php if(@$_GET['edit']==true){echo "";}else{echo "disabled";}?>
                                                    value="<?php echo $res['user_fname']?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="fullName">ນາມສະກຸນ <?php isVal()?></label>
                                                <input type="text" class="form-control" name="user_lname" required
                                                    <?php if(@$_GET['edit']==true){echo "";}else{echo "disabled";}?>
                                                    value="<?php echo $res['user_lname']?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="">ເພດ <?php isVal()?></label>
                                                <div class="m-2">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="user_gender" name="user_gender" required
                                                            <?php if(@$_GET['edit']==true){echo "";}else{echo "disabled";}?>
                                                            class="custom-control-input"
                                                            <?php if($res['user_gender']=="MALE"){echo "checked";}else{echo "";} ?>
                                                            value="MALE">
                                                        <label class="custom-control-label"
                                                            for="user_gender">ຊາຍ</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="customRadioInline2" name="user_gender"
                                                            <?php if(@$_GET['edit']==true){echo "";}else{echo "disabled";}?>
                                                            class="custom-control-input" required
                                                            <?php if($res['user_gender']=="FEMALE"){echo "checked";}else{echo "";} ?>
                                                            value="FEMALE">
                                                        <label class="custom-control-label"
                                                            for="customRadioInline2">ຍິງ</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="fullName">ທີ່ຢູ່ <?php isVal()?></label>
                                                <textarea type="text" class="form-control" name="user_address" required
                                                    <?php if(@$_GET['edit']==true){echo "";}else{echo "disabled";}?>
                                                    value="<?php echo $res['user_address']?>"><?php echo $res['user_address']?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="fullName">ເບິໂທ <?php isVal()?></label>
                                                <input type="text" class="form-control" name="user_tel" required
                                                    <?php if(@$_GET['edit']==true){echo "";}else{echo "disabled";}?>
                                                    value="<?php echo $res['user_tel']?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="fullName">ຊື່ເຂົ້າໃຊ້ລະບົບ <?php isVal()?></label>
                                                <input type="text" class="form-control" name="user_name"  required
                                                    <?php if(@$_GET['edit']==true){echo "";}else{echo "disabled";}?>
                                                    value="<?php echo $res['user_name']?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="">ສິດການນຳໃຊ້ <?php isVal()?></label>
                                                <select class="form-control" name="user_role" required
                                                    <?php if(@$_GET['edit']==true){echo "";}else{echo "disabled";}?>>
                                                    <option value="<?php echo $res['user_role']?>">
                                                        <?php $res['user_role'] ?>
                                                    </option>
                                                    <option value="CASHIER">ບັນຊີ</option>
                                                    <option value="ADMIN">ຜູ້ບໍລິຫານ</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                                            <?php if(@$_GET['edit']==true){echo "";}else{echo "hidden";}?>>
                                            <div class="text">
                                                <button type="submit" name="_handleSubmit" class="btn btn-primary"><i
                                                        class="icon-check-circle"></i> ຢືນຢັນ</button>
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
        $id=$_POST['user_id'];
        $user_fname=$_SETSTRING($con,$_POST['user_fname']);
        $user_lname=$_SETSTRING($con,$_POST['user_lname']);
        $user_gender=$_SETSTRING($con,$_POST['user_gender']);
        $user_address=$_SETSTRING($con,$_POST['user_address']);
        $user_tel=$_SETSTRING($con,$_POST['user_tel']);
        $user_name=$_SETSTRING($con,$_POST['user_name']);
        $user_role=$_SETSTRING($con,$_POST['user_role']);

        $_callUserDataResult=$_SQL($con,"SELECT*FROM aws_users where user_id='$id'");
        $rows=$_ASSOC($_callUserDataResult);
        @$file_img    = $_FILES['user_img']['name'];
        @$tmp_dir    = $_FILES['user_img']['tmp_name'];

        @$upload_dir = '../../img/';// upload directory
            @$fileExt  = strtolower(pathinfo($file_img, PATHINFO_EXTENSION));
            if ($file_img == "") {$img = $rows['user_img'];} else {
                @$img = rand(100000, 1000000).".".$fileExt;
            }
        
        $_newData="user_fname='$user_fname',user_lname='$user_lname',user_gender='$user_gender', user_address='$user_address',user_tel='$user_tel',user_name='$user_name', user_role='$user_role',user_img='$img', user_createdAt='$_TIMESTAM',user_createdBy='$_USER_NAME'";
        $_updateUser=$_SQL($con,"UPDATE aws_users SET $_newData WHERE user_id='$id'");
        if($_updateUser){
        @unlink($tmp_dir, $upload_dir.$rows['user_img']);
        @move_uploaded_file($tmp_dir, $upload_dir.$img);
        echo "<script>
        Notiflix.Notify.Success('ການດຳເນີນງານສຳເລັດ');
         setTimeout(() => {
                  window.location='../users/user-profile.php?id=$id'
                }, 2000);
        </script>";
        }else{
            echo "<script>
            Notiflix.Notify.Failure('ການດຳເນີນງານບໍ່ສຳເລັດ');
            setTimeout(() => {
                    window.location='../users/user-profile.php?id=$id&edit=true'
                    }, 2000);
            </script>";}
        }
    ?>
</body>

</html>