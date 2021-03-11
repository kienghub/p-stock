<?php
include ('../../../connection.php');
$info = json_decode(file_get_contents("php://input"));

@$x=count($info);
if ($x > 0) {
   @$proj_title = $_SETSTRING($con, $info->proj_title);
   @$proj_note = $_SETSTRING($con, $info->proj_note);
    $btnName = $info->btnName;
// INSERT DATA
    if ($btnName == "ບັນທຶກ") {
        $_catch=$_SQL($con,"SELECT proj_title FROM aws_project WHERE proj_title='$proj_title'");
        $_count=$_COUNT($_catch);
        if($_count > 0){
            echo "DATA_READY_EXIT";
        }else{
            $_DATA="'$_AUTO_ID','$proj_title','$proj_note','$_TIMESTAM','$_USER_NAME'";
            $newData=$_SQL($con,"INSERT INTO aws_project VALUES($_DATA)");
            if($newData){
                echo 3000;
            }else {
                echo 7070;
            }
        }
    }

// Update data
    if ($btnName =="ແກ້ໄຂ") {
        $id= $info->proj_id;
        $_update =$_SQL($con, "UPDATE aws_project SET 
            proj_title='$proj_title',proj_note='$proj_note',proj_createdAt='$_TIMESTAM',proj_createdBy='$_USER_NAME' WHERE proj_id='$id'");
        if ($_update) {
            echo 3000;
        }else {
            echo 7070;
        }
    }
}
?>