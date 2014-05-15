<?php
$user = "heuzep5_ustamp";
$pass = "B%P3.T@BscTb";
$dbhost = "localhost";
$database = "heuzep5_stampmarket";
mysql_connect($dbhost,$user,$pass);
@mysql_select_db($database) or die( "Unable to select database");
//echo "connected";
?>