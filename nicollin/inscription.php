<?php
if(!empty($_POST['prenom']) AND ($_POST['nom']) AND ($_POST['email']) AND ($_POST['adresse']))
{
   // connexion à la base de données.
    $bdd = new PDO("mysql:host=averti.spontaneit.fr;dbname=Averti_Nicollin_questions;charset=utf8","averti","17!averti");
    //récupération des données dans le formulaire

    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $adresse = $_POST['adresse'];
    $postal = $_POST['postal'];
    $ville = $_POST['ville'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $message = $_POST['message'];

    //envoyer email
   	if(isset($_POST['objet'])){
   		$choix=$_POST['objet'];
	   switch($choix){
			case 1:$sujetmail = "déménagement/déménagement";break;
			case 2:$sujetmail = "sacs ou conteneurs";break;
            case 3:$sujetmail = "dotations";break;
			case 4:$sujetmail = "changement de capacité";break;
            case 5:$sujetmail = "réparation";break;
			case 6:$sujetmail = "bac disparu/volé";break;
			case 7:$sujetmail = "signaler un problème";break;
            case 8:$sujetmail = "autre";break;
		}
        if($choix==7 || $choix==8){
            $to = 'd.montreuil@groupenicollin.com';
        }else{
		//$to = 'nicolas.deboise@spontaneit.fr';
            $to = 'd.boscart@groupenicollin.com';
        }
		$messagemail = utf8_decode("Nom : ".$nom."\n"."Prénom : ".$prenom."\n"."Ville : ".$ville."\n"."Code postal : ".$postal."\n"."Adresse : ".$adresse);
		if($telephone != ''){
			$messagemail .= "\n"."Telephone : ".$telephone;
		}
		$messagemail .= utf8_decode("\n".$message);
		$headers = 'From : '.$email;
		$verifMail = mail($to, $sujetmail, $messagemail, $headers);
	}

    // Entrée des données
    $req = $bdd->prepare('INSERT INTO inscription (nom, prenom, telephone, email, adresse, ville, postal, message) VALUES (:nom, :prenom, :telephone, :email, :adresse, :ville, :postal, :message)');
    $verifSQL = $req->execute(array(
        'prenom' => $prenom,
        'nom' => $nom,
        'adresse' => $adresse,
        'postal' => $postal,
        'ville' => $ville,
        'email' => $email,
        'telephone' => $telephone,
        'message' => $message)
	);


    if($verifMail==FALSE || $verifSQL==FALSE){
        header('Location:../erreur.html');
    }else{
    //redirection une fois le traitement terminé
        header('Location:../confirmation.html');
    }
}else{
    header('Location:../erreur.html');
}
?>
