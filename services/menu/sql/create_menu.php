<?php
include ('../../../connection.php');
$info = json_decode(file_get_contents("php://input"));

@$x=count($info);
if ($x > 0) {
   @$menu_title = $_SETSTRING($con, $info->menu_title);
   @$menu_note = $_SETSTRING($con, $info->menu_note);
   @$menu_icon = $_SETSTRING($con, $info->menu_icon);
    $btnName = $info->btnName;
// INSERT DATA
    if ($btnName == "ບັນທຶກ") {
        $_catch=$_SQL($con,"SELECT menu_title FROM aws_menu WHERE menu_title='$menu_title'");
        $_count=$_COUNT($_catch);
        if($_count > 0){
            echo "DATA_READY_EXIT";
        }else{
            $_DATA="'$_AUTO_ID','$menu_title','$menu_note','$menu_icon','$_TIMESTAM','$_USER_NAME'";
            $newData=$_SQL($con,"INSERT INTO aws_menu VALUES($_DATA)");
            if($newData){
                echo 3000;
            }else {
                echo 7070;
            }
        }
    }

// Update data
    if ($btnName =="ແກ້ໄຂ") {
        $id= $info->menu_id;
        $_update =$_SQL($con, "UPDATE aws_menu SET menu_title='$menu_title',menu_note='$menu_note',menu_icon='$menu_icon',menu_createdAt='$_TIMESTAM',menu_createdBy='$_USER_NAME' WHERE menu_id='$id'");
        if ($_update) {
            echo 3000;
        }else {
            echo 7070;
        }
    }
}
?>