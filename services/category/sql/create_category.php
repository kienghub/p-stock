<?php
include ('../../../connection.php');
$info = json_decode(file_get_contents("php://input"));
@$x=count($info);
if ($x > 0) {
   @$cate_title = $_SETSTRING($con, $info->cate_title);
   @$cate_note = $_SETSTRING($con, $info->cate_note);
    $btnName = $info->btnName;

// INSERT DATA
    if ($btnName == "ບັນທຶກ") {
        $_catch=$_SQL($con,"SELECT cate_title FROM aws_category WHERE cate_title='$cate_title'");
        $_count=$_COUNT($_catch);
        if($_count > 0){
            echo "DATA_READY_EXIT";
        }else{
            $_DATA="'$_AUTO_ID','$cate_title','$cate_note','$_TIMESTAM','$_USER_NAME'";
            $newData=$_SQL($con,"INSERT INTO aws_category VALUES($_DATA)");
            if($newData){
                echo 3000;
                // echo ",";
                // echo $_AUTO_ID;
            }else {
                echo 7070;
            }
        }
    }else {
        $id= $info->cate_id;
        $_update =$_SQL($con, "UPDATE aws_category SET 
            cate_title='$cate_title',cate_note='$cate_note',cate_createdAt='$_TIMESTAM',cate_createdBy='$_USER_NAME' WHERE cate_id='$id'");
        if ($_update) {
            echo 3000;
        }else {
            echo 7070;
        }
    }
}
?>