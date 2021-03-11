<?php
@session_start();
$con = mysqli_connect('localhost', 'root', '', 'aws');
@mysqli_query($con, "SET NAMES UTF8");
// if($con){echo "dbx_connect";} else {  echo "no dbx_connect";}
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = '';
$DB_NAME = 'aws';
try {
 $DB_con = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}", $DB_USER, $DB_PASS);
 $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $DB_con->exec("SET CHARACTER SET utf8");
} catch (PDOException $e) {
 echo $e->getMessage();
}
// user data 
@$_USER_ID=$_SESSION['user_id'];
@$_USER_GENDER=$_SESSION['user_gender'];
@$_USER_FNAME=$_SESSION['user_fname'];
@$_USER_LNAME=$_SESSION['user_lname'];
@$_USER_ADDRESS=$_SESSION['user_address'];
@$_USER_TEL=$_SESSION['user_tel'];
@$_USER_NAME=$_SESSION['user_name'];
@$_USER_ROLE=$_SESSION['user_role'];
@$_USER_STATUS=$_SESSION['user_status'];
@$_USER_CREATEDAT=$_SESSION['user_createdAt'];
@$_USER_CREATEDBY=$_SESSION['user_createdBy'];
@$_USER_IMG=$_SESSION['user_img'];

// quick function 
date_default_timezone_set("Asia/Bangkok");
@$_TIMESTAM = date("Y-m-d H:i:s");
@$_DATE_FORMAT = date("Y-MM-d-D");
@$_TIME = date("H:i");
@$_GEN_ID = date("ymdhi");
@$_DATE = date("Y-m-d");
@$_YEAR = date("Y");
@$_YEAR_ = date("Y")+1;
@$_MONTH = date("m");
$_WEEK_DAY=date('D');
@$_AUTO_GEN_ID =rand(10000,100);
@$_AUTO_ID = md5($_TIMESTAM);
@$_DAY = date("d");
@$_CODE = md5(1000000030005000);
@$_SETSTRING = "mysqli_real_escape_string";
@$_SQL = "mysqli_query";
@$_ARRAY = "mysqli_fetch_array";
@$_ASSOC = "mysqli_fetch_assoc";
@$_COUNT = "mysqli_num_rows";

@$_KIP = "<font style='color:red;font-size:15px'>.₭</font>";
@$_HOUR = "<font style='color:#086B68;font-weight:bold;font-size:15px'> 'h</font>";
@$_PERCEN = "<font style='color:#F40C3D;font-weight:bold;font-size:15px'> %</font>";
?>
