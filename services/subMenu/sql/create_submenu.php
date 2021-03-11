<?php
include ('../../../connection.php');
$info = json_decode(file_get_contents("php://input"));

@$x=count($info);
if ($x > 0) {
   @$subm_title = $_SETSTRING($con, $info->subm_title);
   @$subm_link = $_SETSTRING($con, $info->subm_link);
   @$subm_note = $_SETSTRING($con, $info->subm_note);
   @$sub_menu_id = $_SETSTRING($con, $info->sub_menu_id);
    $btnName = $info->btnName;
// INSERT DATA
    if ($btnName == "ບັນທຶກ") {
        $_catch=$_SQL($con,"SELECT subm_title,sub_menu_id FROM aws_submenu WHERE subm_title='$subm_title' AND sub_menu_id='$sub_menu_id'");
        $_count=$_COUNT($_catch);
        if($_count > 0){
            echo "DATA_READY_EXIT";
        }else{
            $_DATA="'$_AUTO_ID','$sub_menu_id','$subm_title','$subm_link','$subm_note','$_TIMESTAM','$_USER_NAME'";
            $newData=$_SQL($con,"INSERT INTO aws_submenu VALUES($_DATA)");
            if($newData){
                echo 3000;
            }else {
                echo 7070;
            }
        }
    }

// Update data
    if ($btnName =="ແກ້ໄຂ") {
        $id= $info->subm_id;
        $_update =$_SQL($con, "UPDATE aws_submenu SET subm_title='$subm_title',subm_link='$subm_link',subm_note='$subm_note',sub_menu_id='$sub_menu_id',subm_createdAt='$_TIMESTAM',subm_createdBy='$_USER_NAME' WHERE subm_id='$id'");
        if ($_update) {
            echo 3000;
        }else {
            echo 7070;
        }
    }
}
?>