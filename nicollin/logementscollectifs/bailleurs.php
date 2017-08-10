<?php
include 'config.php';
    $json = array();
     
    // connexion à la base de données
    try {
        $bdd = new PDO(dbHost_web, dbLogin_web, dbPassword_web,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    } catch(Exception $e) {
        exit('Impossible de se connecter à la base de données.');
    }
    $requete = "SELECT DISTINCT IdBailleurs, nom_bailleur FROM bailleurs ORDER BY nom_bailleur";
    // exécution de la requête
    $resultat = $bdd->query($requete) or die(print_r($bdd->errorInfo()));
    // résultats
    while($donnees = $resultat->fetch(PDO::FETCH_ASSOC)) {
        $json[$donnees['IdBailleurs']][] = $donnees['nom_bailleur'];
    }
     
    // envoi du résultat au success
    echo json_encode($json);
?>