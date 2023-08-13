<?php
include("../../database/db_conn.php");
session_start();
if($_SESSION['email']==''){
    header("location:../login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h2>Name: <?php echo strtoupper($_SESSION['name']);?></h2>
    <h2>Phone number: <?php echo $_SESSION['phone'];?></h2>
    <h2>Email: <?php echo $_SESSION['email'];?></h2>
    <h2>Company name: <?php echo ucwords($_SESSION['company']);?></h2>
    <a href="login/logout.php"><span class="glyphicon glyphicon-log-in">Logout</span></a>
</body>
</html>