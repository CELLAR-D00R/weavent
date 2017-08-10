<?php 
ini_set('memory_limit', '1024M');
//include '../../config.php';
$bdd = new PDO("mysql:host=localhost;dbname=WVT_nicollin_bai;charset=utf8","WVT_nicollin_bai", "Nicollin-bailleurs-16");
$sql = 'SELECT `adresse`, `IdBailleurs` FROM `bailleurs`';
$query = $bdd->query($sql);
$fquery = $query->fetchAll();
$count = $query->rowcount();
for ($i=0;$i<$count;$i++){
        $iquery = $bdd->prepare('SELECT `IdRue` FROM `rues` WHERE nom_rue=:nom_rue');
	var_dump($iquery);        
	$iquery->bindParam(':nom_rue', $fquery[$i][0]);
        $iquery->execute();
	$fiquery = $iquery->fetch();
        var_dump($fiquery);
       $update = 'UPDATE `bailleurs` SET IdRue=:idrue WHERE IdBailleurs=:idbailleur';
        $uquery = $bdd->prepare($update);
        $uquery->bindParam(':idrue',$fiquery[0]);
        $uquery->bindParam(':idbailleur',$fquery[$i][1]);
        $uquery->execute();
}
?>
