<?php
@session_start();
if($_SESSION['loggedin']!=1){
  @header("location:../../login.php");
 }else{
} ?>