<?php
require_once 'PHPExcel/Classes/PHPExcel/IOFactory.php';
class bailleurClass{
   public $IdBailleur;
   public $nom_bailleur;
   public $nom_contact;
   public $numvoie;
   public $typevoie;
   public $codepostal;
   public $ville;
   public $tel1;
   public $mail1;

   public $IdResidence;
   public $nomres;
   public $nblog;
   public $tri;
   public $typecollecte;
   public $nomgardien;
   public $telgardien;
   
   public $numadr;
   public $typevoieadr;
   public $nomvoieadr;
   public $complementadr;
   public $codepostaladr;
   public $villeadr;
   
    public function __construct() {
         
    }
    
    public function verif($bdd){
        //bailleurs
        $sql = "SELECT * FROM bailleurs WHERE nom_bailleur = :nombailleur";
        $query = $bdd->prepare($sql);
        $query->bindParam(':nombailleur', $this->nom_bailleur);
        $query->execute();
        $count = $query->rowCount();
        if($count == 0){
            $this->insertBailleur($bdd);
            $this->IdBailleur = $bdd->lastInsertId();
        }else{
            $fquery = $query->fetch();
             $this->IdBailleur = $fquery['IdBailleurs'];
        }
        
        $sqlb = "SELECT * FROM `residences` WHERE nomres=:nomres AND IdBailleur=:idbailleur";
        $queryb = $bdd->prepare($sqlb);
        $queryb->bindParam(':nomres', $this->nomres);
        $queryb->bindParam(':idbailleur', $this->IdBailleur);
        $queryb->execute();
        $countb = $queryb->rowCount();
        if($countb == 0){
            $this->insertResidence($bdd);
            $this->IdResidence = $bdd->lastInsertId();
        }else{
            $fqueryb = $queryb->fetch();
            $this->IdResidence = $fqueryb['IdResidence'];
        }
    }
    
    public function insertBailleur($bdd){
        $sql = 'INSERT INTO `bailleurs`(`nom_bailleur`, `numvoie`, `typevoie`, `nomvoie`, `codepostal`, `ville`) VALUES (';
        $sql .= ':nom_bailleur,:numvoie,:typevoie,:nomvoie,:codepostal,:ville)';
        $query = $bdd->prepare($sql);
        $query->bindParam(':nom_bailleur', $this->nom_bailleur);
        $query->bindParam(':numvoie', $this->numvoie);
        $query->bindParam(':typevoie', $this->typevoie);
        $query->bindParam(':nomvoie', $this->nomvoie);
        $query->bindParam(':codepostal', $this->codepostal);
        $query->bindParam(':ville', $this->ville);
        $query->execute();
    }
    
    public function insertResidence($bdd){
        $sql = 'INSERT INTO `residences`(`nomres`, `nblog`, `tri`, `typecollecte`, `nomgardien`, `telgardien`, `nomcontact`, `telcontact`, `mailcontact`, `numadr`, `typevoieadr`, `nomvoieadr`, `complementadr`, `codepostaladr`, `villeadr`, `IdBailleur`) VALUES (';
        $sql .= ':nomres,:nblog,:tri,:typecollecte,:nomgardien,:telgardien,:nomcontact,:telcontact,:mailcontact,:numadr,';
        $sql .= ':typevoieadr,:nomvoieadr,:complementadr,:codepostaladr,:villeadr,:IdBailleur)';
        $query = $bdd->prepare($sql);
        $query->bindParam(':nomres', $this->nomres);
        $query->bindParam(':nblog', $this->nblog);
        $query->bindParam(':tri', $this->tri);
        $query->bindParam(':typecollecte', $this->typecollecte);
        $query->bindParam(':nomgardien', $this->nomgardien);
        $query->bindParam(':telgardien', $this->telgardien);
        $query->bindParam(':nomcontact', $this->nom_contact);
        $query->bindParam(':telcontact', $this->tel1);
        $query->bindParam(':mailcontact', $this->mail1);
        $query->bindParam(':numadr', $this->numadr);
        $query->bindParam(':typevoieadr', $this->typevoieadr);
        $query->bindParam(':nomvoieadr', $this->nomvoieadr);
        $query->bindParam(':complementadr', $this->complementadr);
        $query->bindParam(':codepostaladr', $this->codepostaladr);
        $query->bindParam(':villeadr', $this->villeadr);
        $query->bindParam(':IdBailleur', $this->IdBailleur);
        $query->execute();
    }
    
}
