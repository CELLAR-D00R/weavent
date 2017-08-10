<?php
include 'config.php';
$html='';
$bdd = new PDO(dbHost_web, dbLogin_web, dbPassword_web,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

if(isset($_POST['idbai'])){
    $idbai = $_POST['idbai'];
}else{
    $idbai=0;
}
if(isset($_POST['idres'])){
    $idres = $_POST['idres'];
}else{
    $idres=0;
}
if ($idbai == 0){
    $nombailleur = '';
    $numvoie = '';
    $typevoie = '';
    $nomvoie = '';
    $codepostal = '';
    $ville = '';
}else{
    $query = $bdd->prepare('SELECT * FROM bailleurs WHERE IdBailleurs=:idbailleur');
    $query->bindParam(':idbailleur', $idbai);
    $query->execute();
    $fquery = $query->fetch();
    $nombailleur = $fquery["nom_bailleur"];
    $numvoie = $fquery["numvoie"];
    $typevoie = $fquery["typevoie"];
    $nomvoie = $fquery["nomvoie"];
    $codepostal = $fquery["codepostal"];
    $ville = $fquery["ville"];
 }

 if ($idres == 0){
   $numadr = '';
    $typevoieadr = '';
    $nomvoieadr =  '';
    $complementadr =  '';
    $codepostaladr =  '';
    $villeadr =  '';
    $nomcontact = '';
    $tel1 = '';
    $mail1 = '';
    $nomres = '';
    $nblog = '';
    $tri = '';
    $typecollecte = '';
    $nomgardien = '';
    $telgardien = '';
 }else{
    $query = $bdd->prepare('SELECT * FROM residences WHERE IdResidence=:idres');
    $query->bindParam(':idres', $idres);
    $query->execute();
    $fquery = $query->fetch();
    $numadr = $fquery["numadr"];
    $typevoieadr = $fquery["typevoieadr"];
    $nomvoieadr = $fquery["nomvoieadr"];
    $complementadr = $fquery["complementadr"];
    $codepostaladr = $fquery["codepostaladr"];
    $villeadr = $fquery['villeadr'];
    $nomcontact = $fquery["nomcontact"];
    $tel1 = $fquery["telcontact"];
    $mail1 = $fquery["mailcontact"];
    $nomres = $fquery["nomres"];
    $nblog = $fquery["nblog"];
    $tri = $fquery["tri"];
    $typecollecte = $fquery["typecollecte"];
    $nomgardien = $fquery["nomgardien"];
    $telgardien = $fquery['telgardien'];


 }


$html.='<input type="hidden" name="idbai" value='.$idbai.'>';
$html.='<div class="msg-explication">';
$html.='<p>Merci de compléter et/ou modifier les champs ci-dessous';
$html.='</p>';
$html.='</div>';
$html.='<div>';
$html.='<h3>Informations concernant le bailleur/syndic de copropriété</h3>';
$html.='</div>';
$html.='<div class="nom_bailleur">';
$html.='<label for="nom_bailleur">Nom bailleur *</label><input type="text" name="nom_bailleur" required value="'.$nombailleur.'"><br>';
$html.='</div>';
$html.='<div class="nom_contact">';
$html.='<label for="nom_contact">Nom contact *</label><input type="text" name="nom_contact" required value="'.$nomcontact.'"><br>';
$html.='</div>';
$html.='<div class="numvoie">';
$html.='<label for="numvoie">Num voie *</label><input type="text" name="numvoie" required value="'.$numvoie.'"><br>';
$html.='</div>';
$html.='<div class="typevoie">';
$html.='<label for="typevoie">Type voie *</label><input type="text" name="typevoie" required value="'.$typevoie.'"><br>';
$html.='</div>';
$html.='<div class="nomvoie">';
$html.='<label for="nomvoie">Nom voie *</label><input type="text" name="nomvoie" required value="'.$nomvoie.'"><br>';
$html.='</div>';
$html.='<div class="codepostal">';
$html.='<label for="codepostal">Code postal *</label><input type="text" name="codepostal" required value="'.$codepostal.'"><br>';
$html.='</div>';
$html.='<div class="ville">';
$html.='<label for="ville">Ville *</label><input type="text" name="ville" required value="'.$ville.'"><br>';
$html.='</div>';
$html.='<div class="tel1">';
$html.='<label for="tel1">Téléphone *</label><input type="text" name="tel1" required value="'.$tel1.'"><br>';
$html.='</div>';
$html.='<div class="mail1">';
$html.='<label for="mail1">Email *</label><input type="text" name="mail1" required value="'.$mail1.'"><br>';
$html.='</div>';
$html.='<div>';
$html.='<h3>Informations concernant la résidence</h3>';
$html.='</div>';
$html.='<input type="hidden" name="idres" value='.$idres.'>';
$html.='<div class="nomres">';
$html.='<label for="nomres">Nom résidence *</label><input type="text" name="nomres" required value="'.$nomres.'"><br>';
$html.='</div>';
$html.='<div class="numadr">';
$html.='<label for="numadr">Numéro *</label><input type="text" name="numadr" required value="'.$numadr.'"><br>';
$html.='</div>';
$html.='<div class="typevoieadr">';
$html.='<label for="typevoieadr">Type voie *</label><input type="text" name="typevoieadr" required value="'.$typevoieadr.'"><br>';
$html.='</div>';
$html.='<div class="nomvoieadr">';
$html.='<label for="nomvoieadr">Nom voie *</label><input type="text" name="nomvoieadr" required value="'.$nomvoieadr.'"><br>';
$html.='</div>';
$html.='<div class="complement">';
$html.='<label for="complement">Complément</label><input type="text" name="complement" value="'.$complementadr.'"><br>';
$html.='</div>';
$html.='<div class="codepostal">';
$html.='<label for="codepostal">Code postal *</label><input type="text" name="codepostal" required value="'.$codepostaladr.'"><br>';
$html.='</div>';
$html.='<div class="ville">';
$html.='<label for="ville">Ville *</label><input type="text" name="ville" required value="'.$villeadr.'"><br>';
$html.='</div>';
$html.='<div class="nblog">';
$html.='<label for="nblog">Nombre logements *</label><input type="text" name="nblog" required value="'.$nblog.'"><br>';
$html.='</div>';
$html.='<div class="tri">';
$html.='<label for="tri">Tri *</label> <select required id="tri" name="tri">';
$html.='<option value=""';
if($tri==''){
    $html.='selected';
}
$html.='>-- Tri --</option>';
$html.='<option value="OUI"';
if($tri=="OUI"){
$html.='selected';
}
$html.='>OUI</option>';
$html.='<option value="NON"';
if($tri=="NON"){
$html.='selected';
}
$html.='>NON</option>';
$html.='</select><br>';
$html.='</div>';
$html.='<div class="typecollecte">';
$html.='<label for="typecollecte">Type collecte *</label>';
$html.='<select required id="typecollecte" name="typecollecte">';
$html.='<option value=""';
if($typecollecte==''){
    $html.='selected';
}
$html.='>-- Type collecte --</option>';
$html.='<option required value="bacs"';
if($tri=="bacs"){
$html.='selected';
}
$html.='>bacs</option>';
$html.='<option value="sacs"';
if($typecollecte=="sacs"){
$html.='selected';
}
$html.='>sacs</option>';
$html.='<option value="bornes"';
if($typecollecte=="bornes"){
$html.='selected';
}
$html.='>bornes enterrées</option>';
$html.='</select><br>';
$html.='</div>';
$html.='<div class="nomgardien">';
$html.='<label for="nomgardien">Nom gardien *</label><input type="text" name="nomgardien" required value="'.$nomgardien.'"><br>';
$html.='</div>';
$html.='<div class="telgardien">';
$html.='<label for="telgardien">Tel gardien *</label><input type="text" name="telgardien" required value="'.$telgardien.'"><br>';
$html.='</div>';
$html.='<div class="donne-accord">  <input type="checkbox" id="test2" required> <label for="test2">J&apos;accepte</label> <div class="petites-lettres">PROTECTION DES DONNÉES Les informations et données collectées par la Communauté d&apos;Agglomération de Lens-Liévin et son prestataire Nicollin SAS ont fait l&apos;objet d&apos;une déclaration à la CNIL. <br> Chaque utilisateur dispose d’un droit d&apos;accès aux informations le concernant et peut interroger la Communauté d&apos;Agglomération de Lens-Liévin et son prestataire Nicollin SAS pour savoir s&apos;il détient des informations sur lui, et le cas échéant d&apos;en obtenir communication.  Nicollin SAS  Z.A.L. du Carreau de la Fosse 7- 62210 AVION  Tel : 03 21 13 02 50 email: CONTACT-LENS@groupenicollin.com</div> </div>';

//$html.='<div class="donne-accord"><input type="checkbox" id="test2" required value="J'accepte"><label for="test2">J'accepte</label> 
//<div class="petites-lettres">PROTECTION DES DONNÉES Les informations et données collectées par la Communauté d’Agglomération de Lens-Liévin et son prestataire Nicollin SAS ont fait l’objet d’une déclaration à la CNIL. <br> Chaque utilisateur dispose d’un droit d’accès aux informations le concernant et peut interroger la Communauté d’Agglomération de Lens-Liévin et son prestataire Nicollin SAS pour savoir s’il détient des informations sur lui, et le cas échéant d’en obtenir communication.  Nicollin SAS  Z.A.L. du Carreau de la Fosse 7- 62210 AVION  Tel : 03 21 13 02 50 email: CONTACT-LENS@groupenicollin.com
//</div>
//</div>';
//$html.='<div class="donne-accord">';
//$html.='<input type="checkbox" id="test2" required>';
//$html.='<label for="test2">J'accepte</label>';
//$html.='<div class="petites-lettres">PROTECTION DES DONNÉES Les informations et données collectées par la Communauté d’Agglomération de Lens-Liévin et son prestataire Nicollin SAS ont fait l’objet d’une déclaration à la CNIL. <br> Chaque utilisateur dispose d’un droit d’accès aux informations le concernant et peut interroger la Communauté d’Agglomération de Lens-Liévin et son prestataire Nicollin SAS pour savoir s’il détient des informations sur lui, et le cas échéant d’en obtenir communication.  Nicollin SAS  Z.A.L. du Carreau de la Fosse 7- 62210 AVION  Tel : 03 21 13 02 50 email: CONTACT-LENS@groupenicollin.com</div>';
//$html.='</div>';
$html.='<input type="submit" id="btn_form" type="button" value="ENVOYER">';


echo $html;

?>
