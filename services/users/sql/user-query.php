
<?php
include '../../../connection.php';
$output = array();
$_newData=$_SQL($con,"SELECT*FROM aws_users ORDER BY user_createdAt DESC");
if (mysqli_num_rows($_newData) > 0) {
	while ($row = mysqli_fetch_array($_newData)) {
		$output[] = $row;
	}
	echo json_encode($output);
}
?> 