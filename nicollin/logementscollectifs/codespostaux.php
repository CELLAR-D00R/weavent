<?php
include 'config.php';
    $json = array();
    $idbailleur = $_POST['idbai'];
    // connexion à la base de données
    try {
        $bdd = new PDO(dbHost_web, dbLogin_web, dbPassword_web,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    } catch(Exception $e) {
        exit('Impossible de se connecter à la base de données.');
    }
    $requete = "SELECT DISTINCT codepostaladr  FROM residences WHERE IdBailleur=".$idbailleur." ORDER BY nomres";
    // exécution de la requête
    $resultat = $bdd->query($requete) or die(print_r($bdd->errorInfo()));
    // résultats
    while($donnees = $resultat->fetch(PDO::FETCH_ASSOC)) {
        $json[$donnees['codepostaladr']][] = $donnees['codepostaladr'];
    }
     
    // envoi du résultat au success
    echo json_encode($json);
?>