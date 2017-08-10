<?php
include 'config.php';
if(isset($_GET['code_postal'])) {
    $cp = $_GET['code_postal'];
    $json = array();
     
    // connexion à la base de données
    try {
        $bdd = new PDO(dbHost_web, dbLogin_web, dbPassword_web,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    } catch(Exception $e) {
        exit('Impossible de se connecter à la base de données.');
    }
    $requete = "SELECT DISTINCT IdRue, adresse FROM bailleurs WHERE cp = ". $cp ." AND adresse!='' ORDER BY adresse";
    // exécution de la requête
    $resultat = $bdd->query($requete) or die(print_r($bdd->errorInfo()));
    // résultats
    while($donnees = $resultat->fetch(PDO::FETCH_ASSOC)) {
        // je remplis un tableau et mettant l'id en index (que ce soit pour les régions ou les départements)
        $json[$donnees['IdRue']][] = $donnees['adresse'];
    }
     
    // envoi du résultat au success
    echo json_encode($json);
}
?>