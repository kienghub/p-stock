<?php
include '../../../connection.php';
    $id = $_GET['id'];
    $query = "DELETE FROM aws_history_login WHERE login_id='$id'";
    if (mysqli_query($con, $query)) {
        echo 'SUCCESS';
    } else {
        echo 'FAIL';
    }
?>