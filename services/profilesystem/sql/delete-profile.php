<?php
include '../../../connection.php';
    $id = $_GET['id'];
    $selectMenu=$_SQL($con,"SELECT p_logo FROM aws_profile_system WHERE p_id='$id'");
    $res=$_ASSOC($selectMenu);
    $img=$res['p_logo'];
    $dir='../../../Img/';
    $query = "DELETE FROM aws_profile_system WHERE p_id='$id'";
    if (mysqli_query($con, $query)) {
        echo 'SUCCESS';
        @unlink($dir.$img);
    } else {
        echo 'FAIL';
    }
?>