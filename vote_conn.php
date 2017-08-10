<?php
$host = "localhost";
$user = "wvtproto";
$pass = "tqDCzwND";
$db = "WVT_proto_spontaneit";
 
$conn = mysql_connect($host, $user, $pass) or die (mysql_error());
$db = mysql_select_db($db, $conn) or die (mysql_error());
$charset = mysql_set_charset("utf8");
?>