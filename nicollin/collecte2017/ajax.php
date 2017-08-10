<?php
    include 'config.php';
    $json = array();
     
    try {
        $bdd = new PDO(dbHost_web, dbLogin_web, dbPassword_web,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    } catch(Exception $e) {
        exit('Impossible de se connecter à la base de données.');
    }
    if($_POST['func'] == 'getallcp'){
        $requete = "SELECT DISTINCT code_postal FROM decheterie ORDER BY code_postal";
        // exécution de la requête
        $resultat = $bdd->query($requete) or die(print_r($bdd->errorInfo()));
        // résultats
        while($donnees = $resultat->fetch(PDO::FETCH_ASSOC)) {
            $json[$donnees['code_postal']][] = $donnees['code_postal'];
        }   
    }else if($_POST['func'] == 'getville'){
        $cp = $_POST['cp'];
        $requete = "SELECT DISTINCT commune FROM decheterie WHERE code_postal=:cp ORDER BY commune";
        $query = $bdd->prepare($requete);
        $query->bindParam(":cp", $cp);
        $query->execute();
        while($donnees = $query->fetch(PDO::FETCH_ASSOC)) {
            $json[$donnees['commune']][] = $donnees['commune'];
        } 
    }else if($_POST['func'] == 'getrue'){
        $ville = $_POST['ville'];
        $requete = "SELECT DISTINCT IdAuto, nom_rue FROM decheterie WHERE commune=:ville ORDER BY nom_rue";
        $query = $bdd->prepare($requete);
        $query->bindParam(":ville", $ville);
        $query->execute();
        while($donnees = $query->fetch(PDO::FETCH_ASSOC)) {
            $json[$donnees['nom_rue']][] = $donnees['IdAuto'];
        } 
    }else if($_POST['func'] == 'getinfos'){
        $id = $_POST['id'];
        $requete = "SELECT * FROM decheterie WHERE IdAuto=:id ";
        $query = $bdd->prepare($requete);
        $query->bindParam(":id", $id);
        $query->execute();
        $f = $query->fetch();
        $json = array('om'=>$f['om'],'vegetaux_av_sept'=> $f['vegetaux_av_sept'],'vegetaux_oct_nov'=>$f['vegetaux_oct_nov'], 'pcjmr'=>$f['pcjmr'],'verre'=>$f['verre'],'trimestre1'=>$f['trimestre1'], 'trimestre2'=>$f['trimestre2'], 'trimestre3'=>$f['trimestre3'], 'trimestre4'=>$f['trimestre4']);
    }
    // envoi du résultat au success
    echo json_encode($json);
?>
