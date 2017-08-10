<?php
include 'config.php';
try{
    $bdd = new PDO(dbHost_web, dbLogin_web, dbPassword_web,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

    if(isset($_POST['idres'])){
        $idres=$_POST['idres'];
    }else{
        $idres=0;
    }
    if(isset($_POST['idbai'])){
        $idbai=$_POST['idbai'];
    }else{
        $idbai=0;
    }

    $nombailleur = $_POST["nom_bailleur"];
    $nomcontact = $_POST["nom_contact"];
    $numvoie = $_POST["numvoie"];
    $typevoie = $_POST["typevoie"];
    $nomvoie = $_POST["nomvoie"];
    $codepostal = $_POST["codepostal"];
    $ville = $_POST["ville"];
    $tel1 = $_POST["tel1"];
    $mail1 = $_POST["mail1"];

    $numadr = $_POST["numadr"];
    $typevoieadr = $_POST["typevoieadr"];
    $nomvoieadr = $_POST["nomvoieadr"];
    $complementadr = $_POST["complement"];
    $codepostaladr = $_POST["codepostal"];
    $villeadr = $_POST['ville'];

    $nomres = $_POST["nomres"];
    $nblog = $_POST["nblog"];
    $tri = $_POST["tri"];
    $typecollecte = $_POST["typecollecte"];
    $nomgardien = $_POST["nomgardien"];
    $telgardien = $_POST['telgardien'];

    if($idbai == 0){
        $sql = 'INSERT INTO `bailleurs`(`nom_bailleur`, `numvoie`, `typevoie`, `nomvoie`, `codepostal`, `ville`) VALUES (';
        $sql .= ':nom_bailleur,:numvoie,:typevoie,:nomvoie,:codepostal,:ville)';
        $query = $bdd->prepare($sql);
        $query->bindParam(':nom_bailleur', $nombailleur);
        $query->bindParam(':numvoie', $numvoie);
        $query->bindParam(':typevoie', $typevoie);
        $query->bindParam(':nomvoie', $nomvoie);
        $query->bindParam(':codepostal', $codepostal);
        $query->bindParam(':ville', $ville);
        $query->execute();
        $idbai = $bdd->lastInsertId();
    }else{
        //update
        $sql='UPDATE `bailleurs` SET `nom_bailleur`=:nom_bailleur,';
        $sql.='`numvoie`=:numvoie,`typevoie`=:typevoie,`nomvoie`=:nomvoie,`codepostal`=:codepostal,`ville`=:ville';
        $sql.=' WHERE IdBailleur=:idbailleur';
        $query = $bdd->prepare($sql);
        $query->bindParam(':idbailleur', $idbai);
        $query->bindParam(':nom_bailleur', $nombailleur);
        $query->bindParam(':numvoie', $numvoie);
        $query->bindParam(':typevoie', $typevoie);
        $query->bindParam(':nomvoie', $nomvoie);
        $query->bindParam(':codepostal', $codepostal);
        $query->bindParam(':ville', $ville);
        $query->execute();   
    }
    
    if($idres == 0){
        //nouveau resi INSERT
        $sql = 'INSERT INTO `residences`(`nomres`, `nblog`, `tri`, `typecollecte`, `nomgardien`, `telgardien`, `nomcontact`, `telcontact`, `mailcontact`, `numadr`, `typevoieadr`, `nomvoieadr`, `complementadr`, `codepostaladr`, `villeadr`, `IdBailleur`) VALUES (';
        $sql.= ':nomres,:nblog,:tri,:typecollecte,:nomgardien,:telgardien, :nomcontact,:telcontact, :mailcontact,:numadr,';
        $sql.= ':typevoieadr,:nomvoieadr, :complementadr, :codepostaladr, :villeadr, :IdBailleur)';
        $query = $bdd->prepare($sql);
        $query->bindParam(':nomres', $nomres);
        $query->bindParam(':nblog', $nblog);
        $query->bindParam(':tri', $tri);
        $query->bindParam(':typecollecte', $typecollecte);
        $query->bindParam(':nomgardien', $nomgardien);
        $query->bindParam(':telgardien', $telgardien);
        $query->bindParam(':nomcontact', $nomcontact);  
        $query->bindParam(':telcontact', $tel1);
        $query->bindParam(':mailcontact', $mail1);   
        $query->bindParam(':numadr', $numadr);
        $query->bindParam(':typevoieadr', $typevoieadr);
        $query->bindParam(':nomvoieadr', $nomvoieadr);
        $query->bindParam(':complementadr', $nomvoieadr);
        $query->bindParam(':codepostaladr', $codepostaladr);
        $query->bindParam(':villeadr', $villeadr);
        $query->bindParam(':IdBailleur', $idbai);
        $query->execute();
        $idres = $bdd->lastInsertId();
    }else{
        //update resi UPDATE
        $sql = 'UPDATE `residences` SET `nomres`=:nomres,`nblog`=:nblog,`tri`=:tri,';
        $sql.= '`typecollecte`=:typecollecte,`nomgardien`=:nomgardien,`telgardien`=:telgardien, `nomcontact`=:nomcontact,'; 
        $sql.= ' `telcontact`=:telcontact, `mailcontact`=:mailcontact, `numadr`=:numadr, `typevoieadr`=:typevoieadr,';
        $sql.= ' `nomvoieadr`=:nomvoieadr,`complementadr`=:complementadr, `codepostaladr`=:codepostaladr,';
        $sql.= ' `villeadr`=:villeadr, `IdBailleur`=:idbai WHERE IdResidence=:idres';
        $query = $bdd->prepare($sql);
        $query->bindParam(':nomres', $nomres);
        $query->bindParam(':nblog', $nblog);
        $query->bindParam(':tri', $tri);
        $query->bindParam(':typecollecte', $typecollecte);
        $query->bindParam(':nomgardien', $nomgardien);
        $query->bindParam(':telgardien', $telgardien);
        $query->bindParam(':nomcontact', $nomcontact);  
        $query->bindParam(':telcontact', $tel1);
        $query->bindParam(':mailcontact', $mail1);   
        $query->bindParam(':numadr', $numadr);
        $query->bindParam(':typevoieadr', $typevoieadr);
        $query->bindParam(':nomvoieadr', $nomvoieadr);
        $query->bindParam(':complementadr', $nomvoieadr);
        $query->bindParam(':codepostaladr', $codepostaladr);
        $query->bindParam(':villeadr', $villeadr);
        $query->bindParam(':idbai', $idbai);
        $query->bindParam(':idres', $idres);
        $query->execute();
    }
    header("Location:confirmation-enregistrement.html");
}catch( PDOException $e){
    header("Location:erreur-serveur.html");
}  
// ajouter redirection error ou confirmation
 

