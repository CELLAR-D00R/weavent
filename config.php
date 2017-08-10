<?php
$IP = "94.23.26.209";
$DATABASE = "WVT_wvtaverti";
$DATABASE_USER = "averti";
$DATABASE_PASSWORD = "avertiSQL456";
$URL = "http://averti.fr/weavent/weaventaverti/";
$connec = mysql_connect($IP, $DATABASE_USER, $DATABASE_PASSWORD);
mysql_select_db($DATABASE, $connec);
?>
