<?php
include '../../../connection.php';
$output = array();
$query  =mysqli_query($con,"SELECT * FROM aws_category ORDER BY cate_createdAt DESC");
if (mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_array($query)) {
        $output[] = $row;
    }
    echo json_encode($output);
}
?> 