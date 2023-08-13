<?php 
include("../../database/db_conn.php");

$fullName = $_POST['full_name'];
$contact = $_POST['phone_no'];
$Email = $_POST['email'];
$Country = $_POST['country'];
$State = $_POST['state'];
$City = $_POST['city'];
$Company = $_POST['company'];
$Comp_add = $_POST['comp_add'];
$password = $_POST['password'];

$query = "INSERT INTO `revise_login_1`(`Name`,`Phone_no`,`Email`,`Country`,`City`,`State`,`Company`,`Company_address`,`password`) VALUES('".$fullName."','".$contact."','".$Email."','".$Country."','".$City."','".$State."','".$Company."','".$Comp_add."','".$password."')";

if(mysqli_query($connect,$query)){
    echo "success";
}else{
    alert("somthing wrong");
}

?>