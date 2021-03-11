<?php 
include('./connection.php');
$_callProfileSystem=$_SQL($con,"SELECT*FROM aws_profile_system");
$_profile=$_ASSOC($_callProfileSystem);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Meta -->
    <meta name="description" content="aws">
    <meta name="author" content="kieng">
    <link rel="shortcut icon"
        href="./img/<?php if($_profile['p_logo']){echo $_profile['p_logo'];}else{echo 'app-logo.png';}?>" />
    <!-- Title -->
    <title>Login</title>
    <!-- *************
			************ Common Css Files *************
		************ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
    <!-- Master CSS -->
    <link rel="stylesheet" href="./assets/css/main.css" />
    <?php
function isVal()
{echo "<font style='color:red'>*</font>";}
?>
</head>

<body class="authentication">
    <!-- Container start -->
    <div class="container">
        <form action="#" method="post">
            <div class="row justify-content-md-center">
                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                    <div class="login-screen">
                        <div class="login-box">
                            <div style="text-align:center!important">
                                <center><img
                                        src="./img/<?php if($_profile['p_logo']){echo $_profile['p_logo'];}else{echo 'app-logo.png';}?>"
                                        alt="logo-app" style="width:150px;height:100px" /></center>
                                <h2>A<font style="color:#1864ab">WPS</font>
                                </h2>
                            </div>
                            <div class="form-group">

                                <label for="">ຊື່ຜູ້ໃຊ້ ຫຼື ເບີໂທ</label>
                                <input type="text" class="form-control" name="user_name"
                                    placeholder="ກະລຸນາປ້ອນຊື່ຜູ້ໃຊ້ ຫຼື ເບີໂທ" />
                            </div>
                            <div class="form-group">
                                <label for="">ລະຫັດຜ່ານ</label>
                                <input type="password" class="form-control" id="password" name="user_password"
                                    placeholder="ກະລຸນາປ້ອນລະຫັດຜ່ານ" />
                            </div>
                            <div class="actions mb-4">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" onchange="_view()"
                                        id="remember_pwd">
                                    <label class="custom-control-label" for="remember_pwd"> ສະແດງລະຫັດຜ່ານ</label>
                                </div>
                                <button type="submit" name="onLogin" class="btn btn-primary">ເຂົ້າສູ່ລະບົບ</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    </div>
    <!-- Container end -->
    <script type="text/javascript" src="./assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/AIO/notiflix-aio-2.0.0.min.js"></script>
    <?php 
      if (isset($_POST['onLogin'])) {
        @session_start();
        @$username = $_SETSTRING($con, $_POST['user_name']);
        @$password = md5($_POST['user_password']);
        $_DATA_USERS = mysqli_query($con, "SELECT * FROM aws_users WHERE user_name='$username' AND user_password='$password' AND user_status='true' OR user_tel='$username'");
        $count = mysqli_num_rows($_DATA_USERS);
        if ($count == 1) {
            $row = mysqli_fetch_array($_DATA_USERS);
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['user_fname'] = $row['user_fname'];
            $_SESSION['user_lname'] = $row['user_lname'];
            $_SESSION['user_gender'] = $row['user_gender'];
            $_SESSION['user_address'] = $row['user_address'];
            $_SESSION['user_tel'] = $row['user_tel'];
            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['user_role'] = $row['user_role'];
            $_SESSION['user_status'] = $row['user_status'];
            $_SESSION['user_createdAt'] = $row['user_createdAt'];
            $_SESSION['user_createdBy'] = $row['user_createdBy'];
            $_SESSION['user_img'] = $row['user_img'];
            $_SESSION['loggedin'] = 1;
            $_SESSION['limit']=20;
            // get user login
            @$user_name = $row['user_name'];
            @$details = json_decode(file_get_contents("http://ipinfo.io/"));
            @$address = $details->city; // city
            // Function to get the client IP address
            @$coordinates = explode(",", $details->loc); // -> '31,-89' becomes'31','-80'
            @$lat = $coordinates[0]; // latitude
            @$long = $coordinates[1]; // longitude
            @$hostName = gethostname();
            $_SQL($con, "INSERT INTO aws_history_login VALUES('$_AUTO_ID','$user_name','$hostName','$address','$lat','$long','$_TIMESTAM','$_YEAR')");
            echo "<script>Notiflix.Loading.Standard('ກຳລັງດຳເນີນງານ...');setInterval(function () {window.location='services/home/'}, 500);</script>";
        } else {
            echo "<script> Notiflix.Report.Failure('ຜິດພາດ','ຊື່ ຫຼື ລະຫັດຜ່ານບໍ່ຖືກຕ້ອງ ກະລຸນາລອງໃໝ່ອີກຄັ້ງ !', 'ປິດ',function () {window.location='index.php'});</script>";
        }
    }
    ?>
    <!-- show password  -->
    <script>
    function _view() {
        const newLocal = "password";
        var temp = document.getElementById(newLocal);
        if (temp.type === "password") {
            temp.type = "text";
        } else {
            temp.type = "password";
        }
    }
    </script>
</body>

</html>