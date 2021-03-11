<?php
include '../../../connection.php';
$output = array();
$query  =mysqli_query($con,"SELECT
aws_submenu.*, 
aws_menu.menu_title, 
aws_menu.menu_icon, 
aws_menu.menu_note
FROM
aws_submenu LEFT JOIN aws_menu on aws_submenu.sub_menu_id=aws_menu.menu_id ORDER BY subm_createdAt DESC");
if (mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_array($query)) {
        $output[] = $row;
    }
    echo json_encode($output);
}
?> 