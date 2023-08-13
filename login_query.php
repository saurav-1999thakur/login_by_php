<?php
include("../../../database/db_conn.php");
session_start();

$email = $_POST['email'];
$password = $_POST['password'];
$query = "SELECT * FROM `revise_login_1` WHERE email='".$email."' and password = '".$password."'";
$result = mysqli_query($connect,$query);

$num_rows = $result->num_rows;
if($num_rows==1){
    $data = mysqli_fetch_assoc($result);
    $_SESSION['name'] = $data['Name'];
    $_SESSION['phone'] = $data['Phone_no'];
    $_SESSION['email'] = $data['Email'];
    $_SESSION['company'] = $data['Company'];
    header("location:../dashboard.php");
}else{
    header("location:../../login.php");
}
?>