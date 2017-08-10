<?php
include 'config.php';
$html='';
if (isset($_GET['idresidence'])){
    $bdd = new PDO(dbHost_web, dbLogin_web, dbPassword_web,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    $query = $bdd->prepare('SELECT * FROM bailleurs WHERE IdBailleurs=:idbailleur');
    $query->bindParam(':idbailleur', $_GET['idresidence']);
    $query->execute();
    $fquery = $query->fetch();
    $nom_residence = $fquery["nom_residence"];
    $adresse =$fquery["adresse"];
    $code_postal = $fquery["cp"];
    $ville = $fquery["ville"];
    $nb_logements = $fquery["nb_logement"];
    $tel1 = $fquery["tel1"];
    $nom_correspondant1 = $fquery["nom_correspondant1"];
    $mail1 = $fquery["mail1"];
    $civilite1 = $fquery["civilite1"];
    $tel2 = $fquery["tel2"];
    $nom_correspondant2 = $fquery["nom_correspondant2"];
    $mail2 = $fquery["mail2"];
    $civilite2 = $fquery["civilite2"];
    $telgardien = $fquery["tel_gardien"];
    $nom_gardien = $fquery["nom_gardien"];
    $mail_gardien = $fquery["mail_gardien"];
    $civilite_gardien = $fquery["civilite_gardien"];
    $html.='<input type="hidden" name="idres" value='.$_GET['idresidence'].'>';
    $html.='<div class="nom_residence">';
    $html.='<label for="nom_residence">Nom résidence</label><input type="text" name="nom_residence" value='.$nom_residence.'><br>';
    $html.='</div>';
    $html.='<div class="adresse">';
    $html.='<label for="adresse">Adresse </label><input type="text" name="adresse"  value='.$adresse.'><br>';
    $html.='</div>';
    $html.='<div class="code_postal">';
    $html.='<label for="code_postal">Code postal</label><input type="text" name="code_postal" value='.$code_postal.'><br>';
    $html.='</div>';
    $html.='<div class="ville">';
    $html.='<label for="ville">Ville</label><input type="text" name="ville" value='.$ville.'><br>';
    $html.='</div>';
    $html.='<div class="nb_logements">';
    $html.='<label for="nb_logements">Nombre logements</label><input type="text" name="nb_logements" value='.$nb_logements.'><br>';
    $html.='</div>';
    $html.='<div class="tel1">';
    $html.='<label for="tel1">Tel1</label><input type="text" name="tel1"  value='.$tel1.'><br>';
    $html.='</div>';
    $html.='<div class="nom_correspondant1">';
    $html.='<label for="nom_correspondant1">Nom correspondant 1</label><input type="text" name="nom_correspondant1"  value='.$nom_correspondant1.'><br>';
    $html.='</div>      ';
    $html.='<div class="mail1">';
    $html.='<label for="mail1">Mail </label><input type="email" name="mail1" value='.$mail1.'><br>';
    $html.='</div>';
    $html.='<div class="civilite1">';
    $html.='<label for="civilite1">Civilité 1</label><input type="text" name="civilite1" value='.$civilite1.'><br>';
    $html.='</div>';
    $html.='<div class="tel2">';
    $html.='<label for="tel2">Tel2</label><input type="text" name="tel2"  value='.$tel2.'><br>';
    $html.='</div>';
    $html.='<div class="nom_correspondant2">';
    $html.='<label for="nom_correspondant2">Nom correspondant 2</label><input type="text" name="nom_correspondant2"  value='.$nom_correspondant2.'><br>';
    $html.='</div> ';
    $html.='<div class="mail2">';
    $html.='<label for="mail2">Mail 2</label><input type="email" name="mail2" value='.$mail2.'><br>';
    $html.='</div>';
    $html.='<div class="civilite2">';
    $html.='<label for="civilite2">Civilité 2</label><input type="text" name="civilite2" value='.$civilite2.'><br>';
    $html.='</div>';
    $html.='<div class="nom_gardien">';
    $html.='<label for="nom_gardien">Nom gardien</label><input type="text" name="nom_gardien"  value='.$nom_gardien.'><br>';
    $html.='</div> ';
    $html.='<div class="tel_gardien">';
    $html.='<label for="tel_gardien">Tel gardien</label><input type="text" name="tel_gardien"  '.$telgardien.'><br>';
    $html.='</div>';
    $html.='<div class="mail_gardien">';
    $html.='<label for="mail_gardien">Mail gardien</label><input type="email" name="mail_gardien" '.$mail_gardien.'><br>';
    $html.='</div>';
    $html.='<div class="civilite_gardien">';
    $html.='<label for="civilite_gardien">Civilité gardien</label><input type="text" name="civilite_gardien" '.$civilite_gardien.'><br>';
    $html.='</div>';
    $html.='<input type="submit" value="Ok">';
}else{
    $html.='<input type="hidden" name="idres" value="0">';
    $html.='<div class="nom_residence">';
    $html.='<label for="nom_residence">Nom résidence</label><input type="text" name="nom_residence" autofocus ><br>';
    $html.='</div>';
    $html.='<div class="adresse">';
    $html.='<label for="adresse">Adresse </label><input type="text" name="adresse" ><br>';
    $html.='</div>';
    $html.='<div class="code_postal">';
    $html.='<label for="code_postal">Code postal</label><input type="text" name="code_postal"><br>';
    $html.='</div>';
    $html.='<div class="ville">';
    $html.='<label for="ville">Ville</label><input type="text" name="ville"><br>';
    $html.='</div>';
    $html.='<div class="nb_logements">';
    $html.='<label for="nb_logements">Nombre logements</label><input type="text" name="nb_logements"><br>';
    $html.='</div>';
    $html.='<div class="tel1">';
    $html.='<label for="tel1">Tel1</label><input type="text" name="tel1" ><br>';
    $html.='</div>';
    $html.='<div class="nom_correspondant1">';
    $html.='<label for="nom_correspondant1">Nom correspondant 1</label><input type="text" name="nom_correspondant1"><br>';
    $html.='</div>      ';
    $html.='<div class="mail1">';
    $html.='<label for="mail1">Mail </label><input type="email" name="mail1"><br>';
    $html.='</div>';
    $html.='<div class="civilite1">';
    $html.='<label for="civilite1">Civilité 1</label><input type="text" name="civilite1"><br>';
    $html.='</div>';
    $html.='<div class="tel2">';
    $html.='<label for="tel2">Tel2</label><input type="text" name="tel2"><br>';
    $html.='</div>';
    $html.='<div class="nom_correspondant2">';
    $html.='<label for="nom_correspondant2">Nom correspondant 2</label><input type="text" name="nom_correspondant2"><br>';
    $html.='</div> ';
    $html.='<div class="mail2">';
    $html.='<label for="mail2">Mail 2</label><input type="email" name="mail2"><br>';
    $html.='</div>';
    $html.='<div class="civilite2">';
    $html.='<label for="civilite2">Civilité 2</label><input type="text" name="civilite2"><br>';
    $html.='</div>';
    $html.='<div class="nom_gardien">';
    $html.='<label for="nom_gardien">Nom gardien</label><input type="text" name="nom_gardien"><br>';
    $html.='</div> ';
    $html.='<div class="tel_gardien">';
    $html.='<label for="tel_gardien">Tel gardien</label><input type="text" name="tel_gardien"><br>';
    $html.='</div>';
    $html.='<div class="mail_gardien">';
    $html.='<label for="mail_gardien">Mail gardien</label><input type="email" name="mail_gardien"><br>';
    $html.='</div>';
    $html.='<div class="civilite_gardien">';
    $html.='<label for="civilite_gardien">Civilité gardien</label><input type="text" name="civilite_gardien"><br>';
    $html.='</div>';
    $html.='<input type="submit" value="Ok">';
 } 
echo $html;
?>