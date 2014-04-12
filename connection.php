<?php
$mysql_host = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "physics_easily";
$prefix = "";
$con = mysql_connect($mysql_host, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $con) or die("Could not select database");
?>