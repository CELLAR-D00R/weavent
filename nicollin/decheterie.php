<?php
//var_dump($_POST['proprioloca']);
if(!empty($_POST['email']) && !empty($_POST['nom']) && !empty($_POST['proprioloca']))
{
   // connexion à la base de données.
    $bdd = new PDO("mysql:host=averti.spontaneit.fr;dbname=Averti_Nicollin_Formulaire_Dechet;charset=utf8", "xeryon", "zeromus45");
    //récupération des données dans le formulaire
    $civilite = $_POST['civilite'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $num = $_POST['numero'];
    $typevoie = $_POST['typevoie'];
    $nomvoie = $_POST['nom-voie'];
    $numeroetage = $_POST['numeroetage'];
    $complement = $_POST['complement'];
    $codepostal = $_POST['codepostal'];
    $ville = $_POST['ville'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $personnes= $_POST['nbpersonnes'];
    $proprioloca = $_POST['proprioloca'];

    // Entrée des données
    $req = 'INSERT INTO `decheterie`(`civilite`, `nom`, `prenom`, `numero`, `typevoie`, `nomvoie`, `numeroetage`, `complement`, `codepostal`, `ville`,  `telephone`, `email`, `nbpersonnes`, `prorprioloca`) VALUES  (:civilite, :nom, :prenom,  :numero, :typevoie, :nomvoie, :numeroetage, :complement, :codepostal, :ville, :telephone, :email, :nbpersonnes, :proprioloca)';
    $query = $bdd->prepare($req);
    $query->bindParam(':civilite', $civilite);
    $query->bindParam(':nom', $nom);
    $query->bindParam(':prenom', $prenom);
    $query->bindParam(':numero', $num);
    $query->bindParam(':typevoie', $typevoie);
    $query->bindParam(':nomvoie', $nomvoie);
    $query->bindParam(':numeroetage', $numeroetage);
    $query->bindParam(':complement', $complement);
    $query->bindParam(':codepostal', $codepostal);
    $query->bindParam(':ville', $ville);
    $query->bindParam(':telephone', $telephone);
    $query->bindParam(':email', $email);
    $query->bindParam(':nbpersonnes', $personnes);
    $query->bindParam(':proprioloca', $proprioloca);
    $v = $query->execute();
    if($v == true){
        header('Location:../confirmation.html');
    }else{
        header('Location:../erreur.html');
    }


    //redirection une fois le traitement terminé
//
    }else{
header('Location:../erreur.html');

}
?>
