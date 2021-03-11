<?php
include ('../../../connection.php');
$info = json_decode(file_get_contents("php://input"));

@$x=count($info);
if ($x > 0) {
   @$rank_title = $_SETSTRING($con, $info->rank_title);
   @$rank_note = $_SETSTRING($con, $info->rank_note);
    $btnName = $info->btnName;
// INSERT DATA
    if ($btnName == "ບັນທຶກ") {
        $_catch=$_SQL($con,"SELECT rank_title FROM aws_rank WHERE rank_title='$rank_title'");
        $_count=$_COUNT($_catch);
        if($_count > 0){
            echo "DATA_READY_EXIT";
        }else{
            $_DATA="'$_AUTO_ID','$rank_title','$rank_note','$_TIMESTAM','$_USER_NAME'";
            $newData=$_SQL($con,"INSERT INTO aws_rank VALUES($_DATA)");
            if($newData){
                echo 3000;
            }else {
                echo 7070;
            }
        }
    }

// Update data
    if ($btnName =="ແກ້ໄຂ") {
        $id= $info->rank_id;
        $_update =$_SQL($con, "UPDATE aws_rank SET 
            rank_title='$rank_title',rank_note='$rank_note',rank_createdAt='$_TIMESTAM',rank_createdBy='$_USER_NAME' WHERE rank_id='$id'");
        if ($_update) {
            echo 3000;
        }else {
            echo 7070;
        }
    }
}
?>