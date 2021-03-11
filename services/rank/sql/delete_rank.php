<?php
include '../../../connection.php';
@$data = json_decode(file_get_contents("php://input"));
@$x=count($data);
if($x > 0) {
    $id    = $data->rank_id;
    $query = "DELETE FROM aws_rank WHERE rank_id='$id'";
    if (mysqli_query($con, $query)) {
        echo 3000;
    } else {
        echo 7070;
    }
}
?>