<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <?php include('../../components/lib/lib.php')?>
    <?php include('../../access/access.php')?>
    <?php include('../../connection.php')?>
    <?php _active('.teacher')?>
</head>
<body>
    <!-- Page wrapper start -->
    <div class="page-wrapper">
        <div class="page-content">
            <?php include('../../components/layout/side-bar.php') ?>
            <?php include_once('../../components/layout/heading.php')?>
            
            <!-- Page header start -->
            <div class="page-header">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" onclick="window.location='../settings/'">ຈັດການລະບົບ</li>
                    <li class="breadcrumb-item active">ເພີ່ມຂໍ້ມູນສຳນັກງານ</li>
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
                                                            <img src="../../img/photo.jpg" id="preview" style="width:150px;height:150px;margin-bottom:15px" />
                                                            <span class="btn btn-success btn-block">ເລືອກຮູບ</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

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
                                                <label for="fullName">ຊື່ໂຮງຮຽນ</label>
                                                <input type="hidden" name="p_id" value="<?php echo $_GET['id']?>">
                                                <input type="text" class="form-control" name="p_title" placeholder="ກະລຸນາປ້ອນຊື່ໂຮງຮຽນ">
                                            </div>
                                            <div class="form-group">
                                                <label for="fullName">ຂໍ້ມູນຕິດຕໍ່ 1</label>
                                                <input type="text" class="form-control" name="p_contact1" placeholder="ກະລຸນາປ້ອນຂໍ້ມູນຕິດຕໍ່ 1">
                                            </div>
                                            <div class="form-group">
                                                <label for="fullName">ຂໍ້ມູນຕິດຕໍ່ 2</label>
                                                <input type="text" class="form-control" name="p_contact2" placeholder="ກະລຸນາປ້ອນຂໍ້ມູນຕິດຕໍ່ 2">
                                            </div>
                                            <div class="form-group">
                                                <label for="fullName">ຂໍ້ມູນຕິດຕໍ່ 3</label>
                                                <input type="text" class="form-control" name="p_contact3" placeholder="ກະລຸນາປ້ອນຂໍ້ມູນຕິດຕໍ່ 3">
                                            </div>
                                          
                                            <div class="form-group">
                                                <label for="fullName">ລາຍລະອຽດ</label>
                                                <textarea type="text" class="form-control" rows='4' name="p_detail" placeholder="ກະລຸນາປ້ອນລາຍລະອຽດ"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="text">
                                                <button type="submit" name="_handleSubmit" class="btn btn-outline-primary"><i
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
        $id=$_POST['p_id'];
        $p_title=$_SETSTRING($con,$_POST['p_title']);
        $p_contact1=$_SETSTRING($con,$_POST['p_contact1']);
        $p_contact2=$_SETSTRING($con,$_POST['p_contact2']);
        $p_contact3=$_SETSTRING($con,$_POST['p_contact3']);
        $p_detail=$_SETSTRING($con,$_POST['p_detail']);

        @$file_img    = $_FILES['p_logo']['name'];
        @$tmp_dir    = $_FILES['p_logo']['tmp_name'];

        @$upload_dir = '../../img/';// upload directory
            @$fileExt  = strtolower(pathinfo($file_img, PATHINFO_EXTENSION));
            if ($file_img == "") {$img = $rows['p_logo'];} else {
                @$img = rand(100000, 1000000).".".$fileExt;
            }
        
        $_register=$_SQL($con,"INSERT aws_profile_system value('$_AUTO_ID','$p_title','$p_contact1', '$p_contact2','$p_contact3','$p_detail','true','$img','$_TIMESTAM','$_USER_NAME')");
        if($_register){
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
                    window.location='./'
                    }, 2000);
            </script>";}
        }
    ?>
</body>

</html>