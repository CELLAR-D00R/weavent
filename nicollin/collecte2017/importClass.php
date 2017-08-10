<?php
require_once 'PHPExcel/Classes/PHPExcel/IOFactory.php';
class importClass{
    public $commune;
    public $nom_rue;
    public $om;
    public $vegetaux_av_sept;
    public $vegetaux_oct_nov;
    public $pcjmr;
    public $verre;
    public $trimestre1;
    public $trimestre2;
    public $trimestre3;
    public $trimestre4;
    public $code_postal;
    
    private $bdd;
    
    public function __construct() {
         
    }
    
    public function save($bdd){
        $req = 'INSERT INTO `decheterie`(`commune`, `nom_rue`, `om`, `vegetaux_av_sept`, `vegetaux_oct_nov`,';
        $req.= '`pcjmr`, `verre`,`trimestre1`, `trimestre2`, `trimestre3`, `trimestre4`, `code_postal`) VALUES (';
        $req.= ':commune,:nom_rue,:om,:vegetaux_av_sept,:vegetaux_oct_nov,:pcjmr,:verre,:trimestre1,';
        $req.= ':trimestre2,:trimestre3,:trimestre4,:code_postal)';
        $q = $bdd->prepare($req);
        $q->bindParam(':commune', $this->commune);
        $q->bindParam(':nom_rue', $this->nom_rue);
        $q->bindParam(':om', $this->om);
        $q->bindParam(':vegetaux_av_sept', $this->vegetaux_av_sept);
        $q->bindParam(':vegetaux_oct_nov', $this->vegetaux_oct_nov);
        $q->bindParam(':pcjmr', $this->pcjmr);
        $q->bindParam(':verre', $this->verre);
        $q->bindParam(':trimestre1', $this->trimestre1);
        $q->bindParam(':trimestre2', $this->trimestre2);
        $q->bindParam(':trimestre3', $this->trimestre3);
        $q->bindParam(':trimestre4', $this->trimestre4);
        $q->bindParam(':code_postal', $this->code_postal);
        $q->execute();
    }
}
