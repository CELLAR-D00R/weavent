<?php
ini_set('memory_limit', '1024M');

echo '-----------DEBUT SCRIPT--------------';
echo "\n".'----Chargement du fichier xls--------';
require_once 'PHPExcel/Classes/PHPExcel/IOFactory.php';
require 'importClass.php';

$bdd = new PDO("mysql:host=94.23.26.209;dbname=WVT_decheterie2;charset=utf8","xeryon", "zeromus45");
$array_data = array();
$datas = array();
$count = 1;
$XLSXDocument = new PHPExcel_Reader_Excel5();
$Excel = $XLSXDocument->load('import_v32.xls');
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
 $data=new importClass();
 foreach ($cellIterator as $cell) {
     //lecture de chaque ligne
       $value=$cell->getValue();
        switch ($cell->getColumn()) {
            case 'A':$data->code_postal=$value;break;
            case 'B':$data->commune=$value;break;
            case 'C':$data->nom_rue=$value;break;
            case 'D':$data->om=$value;break;
            case 'E':$data->vegetaux_av_sept=$value;break;
            case 'F':$data->vegetaux_oct_nov=$value;break;
            case 'G':$data->pcjmr=$value;break;
            case 'H':$data->verre=$value;break;
            case 'I':$data->trimestre1=$value;break;
            case 'J':$data->trimestre2=$value;break;
            case 'K':$data->trimestre3=$value;break;
            case 'L':$data->trimestre4=$value;break;
        }
   }
   if(isset($data)){
        array_push($datas, $data);
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
    foreach ($datas as $classBailleur){
        echo "\n".'count items:'.$count;
        $classBailleur->save($bdd);
        $count++;
    }
}else{
    echo "\n"."---Erreur de connexion à la base sql----";
}
echo "\n"."--------Fin du script-------";

