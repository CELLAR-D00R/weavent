<?php
ini_set('memory_limit', '1024M');

echo '-----------DEBUT SCRIPT--------------';
echo "\n".'----Chargement du fichier xls--------';
require_once 'PHPExcel/Classes/PHPExcel/IOFactory.php';
require 'bailleurClass.php';

$bdd = new PDO("mysql:host=94.23.26.209;dbname=WVT_nicollin_bai2;charset=utf8","xeryon", "zeromus45");
$array_data = array();
$bailleurs = array();

$count = 1;
$XLSXDocument = new PHPExcel_Reader_Excel5();
$Excel = $XLSXDocument->load('161108_BDD BAILLEURS.xls');
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
 $bailleur=new bailleurClass();
 foreach ($cellIterator as $cell) {
     //lecture de chaque ligne
       $value=$cell->getValue();
        switch ($cell->getColumn()) {
            case 'A':$bailleur->nom_bailleur=$value;break;
            case 'B':$bailleur->nom_contact=$value;break;
            case 'C':$bailleur->numvoie=$value;break;
            case 'D':$bailleur->typevoie=$value;break;
            case 'E':$bailleur->nomvoie=$value;break;
            case 'F':$bailleur->codepostal=$value;break;
            case 'G':$bailleur->ville=$value;break;
            case 'H':$bailleur->tel1=$value;break;
            case 'I':$bailleur->mail1=$value;break; 
            
            case 'J':$bailleur->nomres=$value;break;
            
            case 'K':$bailleur->numadr=$value;break;
            case 'L':$bailleur->typevoieadr=$value;break;
            case 'M':$bailleur->nomvoieadr=$value;break;
            case 'N':$bailleur->complementadr=$value;break;
            case 'O':$bailleur->codepostaladr=$value;break;
            case 'P':$bailleur->villeadr=$value;break;
            
            case 'Q':$bailleur->nblog=$value;break;
            case 'R':$bailleur->tri=$value;break;
            case 'S':$bailleur->typecollecte=$value;break;
            case 'T':$bailleur->nomgardien=$value;break;
            case 'U':$bailleur->telgardien=$value;break;
            
        }
   }
   if(isset($bailleur)){
        array_push($bailleurs, $bailleur);
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
    foreach ($bailleurs as $classBailleur){
        echo "\n".'count items:'.$count;
        $classBailleur->verif($bdd);
        $count++;
    }
}else{
    echo "\n"."---Erreur de connexion à la base sql----";
}
echo "\n"."--------Fin du script-------";

