<?php
if(!empty($_POST['prenom']) AND ($_POST['nom']) AND ($_POST['email']))
{
    
// connexion à la base de données.
include ('config.php');
$prenom = mysql_real_escape_string(htmlspecialchars($_POST['prenom']));
$nom = mysql_real_escape_string(htmlspecialchars($_POST['nom']));
$organisation = mysql_real_escape_string(htmlspecialchars($_POST['organisation']));
$email = mysql_real_escape_string(htmlspecialchars($_POST['email']));
$telephone = mysql_real_escape_string(htmlspecialchars($_POST['telephone']));

$options = '';
for ($i=1;$i<7;$i++){
	if ($_POST['option'.$i] != ''){
		if ($options == ''){
			$options = $_POST['option'.$i];
		}else{
			$options .= "/".$_POST['option'.$i];
		}
	}
}

//mysql_query("INSERT INTO inscription VALUES($prenom,$nom,$organisation,$email,$telephone)");
$insertQuery = sprintf("INSERT INTO inscription (prenom, nom, organisation, email, telephone) VALUES (%s, %s, %s, %s, %s)",
          "'".$prenom."'", "'".$nom."'", "'".$organisation."'", "'".$email."'", "'".$telephone."'");
$resultQuery = mysql_query($insertQuery, $connec) or die(mysql_error());

//update option
$lastId = mysql_insert_id();
if($options != ''){
	$updateQuery = "UPDATE inscription SET options ='".$options."' WHERE id = ".$lastId;
	$execQuery = mysql_query($updateQuery, $connec) or die(mysql_error());
}

// redirection une fois le traitement terminé 
header('Location:'.$URL.'confirmation.html'); 

}else{
	echo 'error';
}
?>
