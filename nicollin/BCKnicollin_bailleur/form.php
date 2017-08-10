<?php
include 'config.php';
$bdd = new PDO(dbHost_web, dbLogin_web, dbPassword_web,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$IdResidence=$_POST['idres'];

$nom_residence = $_POST['nom_residence'];
$adresse = $_POST['adresse'];
$cp = $_POST['code_postal'];
$ville = $_POST['ville'];
$nb_logement = $_POST['nb_logements'];
$tel1 = $_POST['tel1'];
$mail1 = $_POST['mail1'];
$civilite1 = $_POST['civilite1'];
$nom_correspondant1 = $_POST['nom_correspondant1'];
$tel2 = $_POST['tel2'];
$mail2 = $_POST['mail2'];
$civilite2 = $_POST['civilite2'];
$nom_correspondant2 = $_POST['nom_correspondant2'];
$nom_gardien= $_POST['nom_gardien'];
$tel_gardien= $_POST['tel_gardien'];
$mail_gardien= $_POST['mail_gardien'];
$civilite_gardien= $_POST['civilite_gardien'];
//rue verifier si adresse existe
$IdRue = rueExiste($adresse, $bdd);
if($IdResidence == 0){
    //nouveau bailleur INSERT
    $sql = 'INSERT INTO `bailleurs`(`IdRue`,`nom_residence`, `adresse`, `cp`, `ville`, `nb_logement`, ';
    $sql .= '`tel1`, `mail1`, `civilite1`, `nom_correspondant1`, `tel2`, `mail2`, `civilite2`, `nom_correspondant2`, ';
    $sql .= '`nom_gardien`, `tel_gardien`, `mail_gardien`, `civilite_gardien`) VALUES (';
    $sql .= ':idrue, :nom_residence,:adresse,:cp,:ville,:nb_logement,:tel1,:mail1,:civilite1,';
    $sql .= ':nom_correspondant1,:tel2,:mail2,:civilite2,:nom_correspondant2,:nom_gardien,:tel_gardien,';
    $sql .= ':mail_gardien,:civilite_gardien)';
    $query = $bdd->prepare($sql);
}else{
    //update bailleur UPDATE
    $sql = 'UPDATE `bailleurs` SET  IdRue=:idrue, nom_residence=:nom_residence,adresse=:adresse,cp=:cp,ville=:ville,nb_logement=:nb_logement, tel1=:tel1, mail1=:mail1, civilite1=:civilite1, ';
    $sql .= 'nom_correspondant1=:nom_correspondant1, tel2=:tel2, mail2=:mail2, civilite2=:civilite2, nom_correspondant2=:nom_correspondant2, nom_gardien=:nom_gardien, ';
    $sql .= 'tel_gardien=:tel_gardien, mail_gardien=:mail_gardien, civilite_gardien=:civilite_gardien WHERE IdBailleurs=:idbailleur'; 
    $query = $bdd->prepare($sql);
    $query->bindParam(':idbailleur', $IdResidence);
}
    $query->bindParam(':idrue', $IdRue);
    $query->bindParam(':nom_residence', $nom_residence);
    $query->bindParam(':adresse', $adresse);
    $query->bindParam(':ville', $ville);
    $query->bindParam(':cp', $cp);
    $query->bindParam(':nb_logement', $nb_logement);
    $query->bindParam(':tel1', $tel1);
    $query->bindParam(':mail1', $mail1);
    $query->bindParam(':civilite1', $civilite1);
    $query->bindParam(':nom_correspondant1', $nom_correspondant1);
    $query->bindParam(':tel2', $tel2);
    $query->bindParam(':mail2', $mail2);
    $query->bindParam(':civilite2', $civilite2);
    $query->bindParam(':nom_correspondant2', $nom_correspondant2);
    $query->bindParam(':nom_gardien', $nom_gardien);
    $query->bindParam(':tel_gardien', $tel_gardien);
    $query->bindParam(':mail_gardien', $mail_gardien);
    $query->bindParam(':civilite_gardien', $civilite_gardien);
    $query->execute();
    
// ajouter redirection error ou confirmation

    
    
    function rueExiste($librue, $bdd){
        $sql = 'SELECT * FROM rues WHERE nom_rue=:nomrue';
        $query = $bdd->prepare($sql);
        $query->bindParam(':nomrue', $librue);
        $query->execute();
        $count = $query->rowcount();
        if ($count==0){
            //ajouter rue
            $isql = 'INSERT INTO rues(nom_rue) VALUES (:nom_rue)';
            $iquery = $bdd->prepare($isql);
            $iquery->bindParam(':nom_rue', $librue);
            $iquery->execute();
            $lastid = $bdd->lastInsertId();
            //$fiquery=$iquery->fetch(PDO::FETCH_ASSOC);
            $IdRue = $lastid;
        }else{
            $fquery = $query->fetch();
            $IdRue = $fquery['IdRue'];
        }
        return $IdRue;
    }