<?php
session_start();
include('connection.php');
$name=$_POST['Name'];
//$eid=$_POST['Email_Id'];

$eid = $_POST["Email_Id"];
$pwd = $_POST["Password"];
$epwd = md5($pwd);
$cpwd = $_POST["c_password"];
$cepwd = md5($cpwd);
mysql_query("INSERT INTO new_users(Name, Email_id, Password, c_password)VALUES('$name', '$eid' , '$epwd', '$cepwd')");
header("location: navbar.php?remarks=success");
mysql_close($con);
?>