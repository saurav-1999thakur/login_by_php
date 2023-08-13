<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$database = "revise";
$connect = mysqli_connect($serverName,$userName,$password,$database);
if(!$connect){
    echo ("server error".$php_errormsg("exit"));
}
?>