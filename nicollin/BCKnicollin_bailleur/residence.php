<?php
include 'config.php';
if(isset($_POST['rue'])) {
    $rue = $_POST['rue'];
    $json = array();
     
    // connexion à la base de données
    try {
        $bdd = new PDO(dbHost_web, dbLogin_web, dbPassword_web,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    } catch(Exception $e) {
        exit('Impossible de se connecter à la base de données.');
    }
    $requete = "SELECT IdBailleurs, nom_residence FROM bailleurs WHERE IdRue = ". $rue ." ORDER BY nom_residence";
    // exécution de la requête
    $resultat = $bdd->query($requete) or die(print_r($bdd->errorInfo()));
    // résultats
    while($donnees = $resultat->fetch(PDO::FETCH_ASSOC)) {
        // je remplis un tableau et mettant l'id en index (que ce soit pour les régions ou les départements)
        $json[$donnees['IdBailleurs']][] = $donnees['nom_residence'];
    }
    // envoi du résultat au success
    echo json_encode($json);
}
?>