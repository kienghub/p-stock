<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <?php include('../../components/lib/lib.php')?>
    <?php include('../../access/access.php')?>
    <?php _active('.settings') ?>
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
                    <li class="breadcrumb-item" onclick="window.location='./'"> ຂໍ້ມູນຜູ້ໃຊ້ລະບົບ</li>
                    <li class="breadcrumb-item active">ເພີ່ມຂໍ້ມູນຜູ້ໃຊ້</li>
                </ol>

                <ul class="app-actions">
                    <li>
                        <a href="#" id="reportrange">
                            <?php echo $_DATE_FORMAT ?>
                        </a>
                    </li>
                    <li>
                        <a href="../users/">
                            <i class="icon-export"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Main container start -->
            <div class="main-container">

                <!-- Row start -->
                <div class="row gutters justify-content-center">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <form action="#" method="post" enctype="multipart/form-data">
                            <div class="card m-0">
                                <div class="card-header">
                                    <div class="card-title"><i class="icon-user-plus"></i> ເພີ່ມຂໍ້ມູນຜູ້ໃຊ້</div>
                                    <div class="card-sub-title"></div>
                                </div>
                                <div class="card-body">
                                    <div class="user-profile text-center">
                                        <div class="image">
                                            <div class="dropbox">
                                                <input type="file" name="user_img" onchange="readURL(this);" id="file-5"
                                                    class="hidden inputfile inputfile-4"
                                                    data-multiple-caption="{count} files selected" multiple
                                                    style="display: none!important" />
                                                <label for="file-5">
                                                    <img src="../../img/user_null.png" id="preview"
                                                        style="width:150px;height:150px;margin-bottom:15px" />
                                                    <span class="btn btn-success btn-block">ເລືອກຮູບ</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">ຊື່ <?php isVal()?></label>
                                        <input type="text" class="form-control" name="user_fname"
                                            placeholder="ກະລຸນາປ້ອນຊື່" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">ນາມສະກຸນ <?php isVal()?></label>
                                        <input type="text" class="form-control" name="user_lname"
                                            placeholder="ກະລຸນາປ້ອນນາມສະກຸນ" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">ເພດ <?php isVal()?></label>
                                        <div class="m-2">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="user_gender" name="user_gender"
                                                    class="custom-control-input" value="MALE" required>
                                                <label class="custom-control-label" for="user_gender"
                                                    value="MALE">ຊາຍ</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline2" name="user_gender"
                                                    value="FEMALE" class="custom-control-input" required>
                                                <label class="custom-control-label" for="customRadioInline2">ຍິງ</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">ທີ່ຢູ່ <?php isVal()?></label>
                                        <textarea class="form-control" id="user_address" name="user_address"
                                            placeholder="ກະລຸນາປ້ອນທີ່ຢູ່" rows="4" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">ເບີໂທ <?php isVal()?></label>
                                        <input type="number" class="form-control" id="user_tel" name="user_tel"
                                            placeholder="ກະລຸນາປ້ອນເບີໂທ" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">ຊື່ເຂົ້າໃຊ້ລະບົບ <?php isVal()?></label>
                                        <input type="text" id="user_name" class="form-control" name="user_name"
                                            placeholder="ກະລຸນາປ້ອນຊື່ເຂົ້າໃຊ້ລະບົບ" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">ລະຫັດຜ່ານ <?php isVal()?></label>
                                        <input type="password" id="user_password" class="form-control"
                                            name="user_password" placeholder="ກະລຸນາປ້ອນລະຫັດຜ່ານ" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">ສິດການນຳໃຊ້ <?php isVal()?></label>
                                        <select class="form-control" name="user_role" id="user_role" required>
                                            <option value="">-- ເລືອກ --</option>
                                            <option value="ADMIN">ຜູ້ບໍລິຫານ</option>
                                        </select>
                                    </div>
                                    <button type="submit" name="_handleSubmit" class="btn btn-outline-primary"><i
                                            class="icon-check-circle"></i> ບັນທຶກ</button>
                                    <button type="button" class="btn btn-outline-danger"><i class="icon-close"></i>
                                        ຍົກເລີກ</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Row end -->

            </div>
            <!-- Main container end -->

        </div>
        <!-- Main container end -->
    </div>
    <!-- Page content end -->
    </div>
    <!-- Page wrapper end -->
    <?php include('../../components/lib/script.php')?>
    <?php 
require_once('../../connection.php');
if(isset($_POST['_handleSubmit'])){
    $user_fname=$_SETSTRING($con,$_POST['user_fname']);
    $user_lname=$_SETSTRING($con,$_POST['user_lname']);
    $user_gender=$_SETSTRING($con,$_POST['user_gender']);
    $user_address=$_SETSTRING($con,$_POST['user_address']);
    $user_tel=$_SETSTRING($con,$_POST['user_tel']);
    $user_name=$_SETSTRING($con,$_POST['user_name']);
    echo $user_password=md5($con,$_POST['user_password']);
    $user_role=$_SETSTRING($con,$_POST['user_role']);

    @$file_img    = $_FILES['user_img']['name'];
    @$tmp_dir    = $_FILES['user_img']['tmp_name'];
    @$upload_dir = '../../img/';// upload directory

    @$fileExt  = strtolower(pathinfo($file_img, PATHINFO_EXTENSION));
    if ($file_img == "") {$img = '';} else {
        @$img = rand(100000, 1000000).".".$fileExt;
    }

    $_uniqeData=$_SQL($con,"SELECT*FROM aws_users WHERE user_name='$user_name' AND user_password='$user_password'");
    $_catch=$_COUNT($_uniqeData);
    if($_catch>0){
        echo "<script>
        Notiflix.Notify.Failure('ການດຳເນີນງານບໍ່ສຳເລັດ ຂໍ້ມູນນີ້ມີຜູ້ໃຊ້ແລ້ວ');
         setTimeout(() => {
                  window.location='../users/add-user.php'
                }, 2000);
        </script>"; 
    }else{
    $_DATA="'$_AUTO_ID','$user_fname','$user_lname','$user_gender','$user_address','$user_tel','$user_name','$user_password','$user_role','true','$img','$_TIMESTAM','$_USER_NAME'";
    $_createUser=$_SQL($con,"INSERT INTO aws_users VALUES($_DATA)");
    if($_createUser){
        @move_uploaded_file($tmp_dir, $upload_dir.$img);
        echo "<script>
        Notiflix.Notify.Success('ການດຳເນີນງານສຳເລັດ');
         setTimeout(() => {
                  window.location='../users/add-user.php'
                }, 2000);
        </script>";
    }else{
        echo "<script>
        Notiflix.Notify.Failure('ການດຳເນີນງານບໍ່ສຳເລັດ');
         setTimeout(() => {
                  window.location='../users/add-user.php'
                }, 2000);
        </script>";}
}
}
?>
</body>

</html>