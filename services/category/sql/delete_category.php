<?php
include '../../../connection.php';
@$data = json_decode(file_get_contents("php://input"));
@$x=count($data);
if($x > 0) {
    $id    = $data->cate_id;
    $query = "DELETE FROM aws_category WHERE cate_id='$id'";
    if (mysqli_query($con, $query)) {
        echo 3000;
    } else {
        echo 7070;
    }
}
?>