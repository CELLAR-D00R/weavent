<?php
ini_set('memory_limit', '1024M');

echo '-----------DEBUT SCRIPT--------------';
echo "\n".'----Chargement du fichier xls--------';
require_once 'PHPExcel/Classes/PHPExcel/IOFactory.php';
require 'cXLS.php';

$bdd = new PDO("mysql:host=localhost;dbname=WVT_nicollin_bai;charset=utf8","WVT_nicollin_bai", "Nicollin-bailleurs-16");
$array_data = array();
$items = array();
$count = 1;
$XLSXDocument = new PHPExcel_Reader_Excel5();
$Excel = $XLSXDocument->load('BDD_BAILLEURS.xls');
echo "\n".'---------Xls chargé-----------------';
echo "\n"."---Recuperation de toutes les fiches---";
$rowIterator = $Excel->getActiveSheet()->getRowIterator();
foreach($rowIterator as $row) {
     if($count==1){
    
    }else{
 $cellIterator = $row->getCellIterator();
 // Loop all cells, even if it is not set
 $cellIterator->setIterateOnlyExistingCells(false);
 $rowIndex = $row->getRowIndex ();
 //objet cXLS
 $Data=new cXLS();
 foreach ($cellIterator as $cell) {
     //lecture de chaque ligne
       $value=$cell->getValue();
        switch ($cell->getColumn()) {
            case 'A':$Data->nom_residence=$value;break;
            case 'B':$Data->adresse=$value;break;
            case 'C':$Data->cp=$value;break;
            case 'D':$Data->ville=$value;break;
            case 'E':$Data->nb_logement=$value;break;
            case 'F':$Data->civilite1=$value;break;
            case 'G':$Data->nom_correspondant1=$value;break;
            case 'H':$Data->tel1=$value;break;
            case 'I':$Data->mail1=$value;break;    
            case 'J':$Data->civilite2=$value;break;
            case 'K':$Data->nom_correspondant2=$value;break;
            case 'L':$Data->tel2=$value;break;
            case 'M':$Data->mail2=$value;break;
            case 'N':$Data->civilite_gardien=$value;break;
            case 'O':$Data->nom_gardien=$value;break;
            case 'P':$Data->tel_gardien=$value;break;
            case 'Q':$Data->mail_gardien=$value;break;
        }
   }
   if(isset($Data)){
        array_push($items, $Data);
    }
    
   }
   echo "\n".$count;
   $count++;
}
//var_dump($items);
echo "\n"."---------Fiches récupérées----------";
echo "\n"."-----Connexion à la base sql--------";
if($bdd==true){
    echo "\n"."----Connexion à la base sql réussie---";
    echo "\n"."---Insertion dans la base de données en cours---";
    $count=1;
    foreach ($items as $cXls){
        echo "\n".'count items:'.$count;
         $cXls->XlsToSql($bdd);
        $count++;
    }
}else{
    echo "\n"."---Erreur de connexion à la base sql----";
}
echo "\n"."--------Fin du script-------";

