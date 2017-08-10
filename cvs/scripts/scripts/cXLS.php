<?php
require_once 'PHPExcel/Classes/PHPExcel/IOFactory.php';
class cXLS{
   public $nom_residence;
   public $adresse;
   public $cp;
   public $ville;
   public $nb_logement;
   public $tel1;
   public $mail1;
   public $civilite1;
   public $nom_correspondant1;
   public $tel2;
   public $mail2;
   public $civilite2;
   public $nom_correspondant2;
   public $nom_gardien;
   public $tel_gardien;
   public $mail_gardien;
   public $civilite_gardien;
   
    public function __construct() {
         
    }
    
    public function XlsToSql($bdd){
        $sql = 'INSERT INTO bailleurs(nom_residence, adresse, cp, ville, nb_logement, tel1, mail1, civilite1, nom_correspondant1, '; 
        $sql .= 'tel2, mail2, civilite2, nom_correspondant2, nom_gardien, tel_gardien, mail_gardien, civilite_gardien) VALUES ';
        $sql .= '(:nom_residence, :adresse, :cp, :ville, :nb_logement, :tel1, :mail1, :civilite1, :nom_correspondant1, :tel2, :mail2, ';
        $sql .= ':civilite2, :nom_correspondant2, :nom_gardien, :tel_gardien, :mail_gardien, :civilite_gardien)';
        $query = $bdd->prepare($sql);
        $query->bindParam(':nom_residence', $this->nom_residence,PDO::PARAM_STR);
        $query->bindParam(':adresse', $this->adresse, PDO::PARAM_STR);
        $query->bindParam(':cp', $this->cp);
        $query->bindParam(':ville', $this->ville, PDO::PARAM_STR);
        $query->bindParam(':nb_logement', $this->nb_logement);
        $query->bindParam(':tel1', $this->tel1);
        $query->bindParam(':mail1', $this->mail1, PDO::PARAM_STR);
        $query->bindParam(':civilite1', $this->civilite1);
        $query->bindParam(':nom_correspondant1', $this->nom_correspondant1, PDO::PARAM_STR);
        $query->bindParam(':tel2', $this->tel2);
        $query->bindParam(':mail2', $this->mail2, PDO::PARAM_STR);
        $query->bindParam(':civilite2', $this->civilite2);
        $query->bindParam(':nom_correspondant2', $this->nom_correspondant2, PDO::PARAM_STR);
        $query->bindParam(':nom_gardien', $this->nom_gardien);
        $query->bindParam(':tel_gardien', $this->tel_gardien);
        $query->bindParam(':mail_gardien', $this->mail_gardien, PDO::PARAM_STR);
        $query->bindParam(':civilite_gardien', $this->civilite_gardien, PDO::PARAM_STR);
        $query->execute();
    }
}
