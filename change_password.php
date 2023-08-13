<?php
include('../../../database/db_conn.php');
session_start();

if(isset($_POST) & !empty($_POST)){
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $query = "SELECT * FROM `revise_login_1` where email = '".$email."'";
    $res = mysqli_query($connect, $query);
    $count = mysqli_num_rows($res);
  if($count == 1){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "UPDATE `revise_login_1` SET password = '".$password."' where email = '".$email."' ";
    $result = mysqli_query($connect, $query);
    header("location:../../login.php");
  }else{
    echo "Email does not exist in database";
  }
}
?>

