<?php
include ('../../../connection.php');

    @$old_password= $_POST['old_password'];
    @$new_password =$_POST['new_password'];

    $oldPassword=md5($old_password);
    $newPassword=md5($new_password);

    $_callOldPassword=$_SQL($con,"SELECT user_password FROM aws_users WHERE user_id='$_USER_ID'");
    $_pass=$_ASSOC($_callOldPassword);
    $pass=$_pass['user_password'];  
    if($oldPassword!=$pass){
        echo "PASSWORD_NOT_MACTH";
    }else{
        $_update =$_SQL($con, "UPDATE aws_users SET user_password='$newPassword',user_createdAt='$_DATE', user_createdBy='$_USER_FNAME' WHERE user_fname='$_USER_FNAME'");
        if ($_update) {
            echo 'SUCCESS';
        }else {
            echo 'FAIL';
    }
}
?>