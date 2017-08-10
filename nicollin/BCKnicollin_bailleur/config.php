<?php 
define ('dbHost_web','mysql:host=94.23.26.209;dbname=WVT_nicollin_bai');
define ('dbLogin_web','xeryon');
define ('dbPassword_web','zeromus45');
define ('dbName_web','WVT_nicollin_bai');

function getListRues($codepostal){
    $bdd = new PDO(dbHost_web, dbLogin_web, dbPassword_web,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    $query = $bdd->prepare('SELECT IdBailleurs, adresse FROM bailleurs WHERE cp=:cp');
    $query->bindParam(':cp', $codepostal);
    $query->execute();
    $nbResultats = $query->rowCount();
    $fquery = $query->fetchAll();
       
    $html = '<div id="liste_rue">';
        $html .= '<label>Rues';
        $html .= '<select name="rues" class="form-control input-sm">';                                        
        $html .= '<option value="NULL"></option>';
        
        for ($i=0;$i<$nbResultats;$i++){
            $html .= '<option ';
            $html .= 'value='.$fquery[$i][0].'>'.$fquery[$i][1].'</option>';
        }
        $html .= '</select> </label></div>';
        return $html;
}
