<?php
ini_set('memory_limit', '1024M');
include 'config.php';
$bdd = new PDO(dbHost_web, dbLogin_web, dbPassword_web);
$sql = 'SELECT DISTINCT `adresse` FROM `bailleurs`';
$query = $bdd->query($sql);
$fquery = $query->fetchAll();
var_dump($fquery);
