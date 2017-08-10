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
    $requete = "SELECT a.numadr, a.typevoieadr, a.nomvoieadr, a.codepostal, a.ville,l.IdAdresse FROM `liens` as l INNER JOIN adresses a ON (a.IdAdresse = l.IdAdresse) WHERe IdBailleur = :idbailleur";
    // exécution de la requête
    $query = $bdd->prepare($requete);
    $query->bindParam(':idbailleur', $idbailleur);
    $query->execute();
    //$resultat = $query->fetchAll();
    //$resultat = $bdd->query($requete) or die(print_r($bdd->errorInfo()));
    // résultats
    while($donnees = $query->fetch(PDO::FETCH_ASSOC)) {
        // je remplis un tableau et mettant l'id en index (que ce soit pour les régions ou les départements)
        $json[$donnees['IdAdresse']][] = $donnees['numadr']." ".$donnees['typevoieadr']." ".$donnees['nomvoieadr']." ".$donnees['codepostal']." ".$donnees['ville'];
    }  
    // envoi du résultat au success
    echo json_encode($json);
?>