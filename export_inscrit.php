<?php
include('config.php');
$sql = "SELECT prenom, nom, organisation, email, options FROM inscription";

// la variable qui va contenir les données CSV
$outputCsv = '';
 
// Nom du fichier final
$fileName = "inscrits_";
$fileName .= date('Y-m-d_H:i:s');
$fileName .= ".csv";

// on envoie la requête
$req = mysql_query($sql) or die('Erreur SQL !<br>' . $sql . '<br>' . mysql_error());
if (mysql_num_rows($req) > 0) {
    $i = 0;
 
    while ($Row = mysql_fetch_assoc($req)) {
        $i++;
 
        // Si c'est la 1ère boucle, on affiche le nom des champs pour avoir un titre pour chaque colonne
        if ($i == 1) {
            foreach ($Row as $clef => $valeur)
                $outputCsv .= trim($clef) . ';';
 
            $outputCsv = rtrim($outputCsv, ';');
            $outputCsv .= "\n";
        }
 
        // On parcours $Row et on ajout chaque valeur à cette ligne
        foreach ($Row as $clef => $valeur)
            $outputCsv .= trim($valeur) . ';';
 
        // Suppression du ; qui traine à la fin
        $outputCsv = rtrim($outputCsv, ';');
 
        // Saut de ligne
        $outputCsv .= "\n";
 
    }
 
} else
    exit('Aucune donn&eacute;e &agrave; enregistrer.');
 
// Entêtes (headers) PHP qui vont bien pour la création d'un fichier Excel CSV
header("Content-disposition: attachment; filename=" . $fileName);
header("Content-Type: application/force-download");
header("Content-Transfer-Encoding: application/vnd.ms-excel\n");
header("Pragma: no-cache");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0, public");
header("Expires: 0");
 
echo $outputCsv;
exit();

?>

