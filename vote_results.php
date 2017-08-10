<?php
include("config.php");
$id = (int) $_POST["id"];
$arr = array();
 
$rs = mysql_query("SELECT * FROM vote");
 
while($obj = mysql_fetch_object($rs)) {
$arr[] = $obj;
}
echo json_encode($arr);

?>
