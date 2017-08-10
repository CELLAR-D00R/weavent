<?php
include 'config.php';
if(isset($_GET['code_postal'])) {
    $cp = $_GET['code_postal'];
    $json = array();
     
    // connexion à la base de données
    try {
        $bdd = new PDO(dbHost_web, dbLogin_web, dbPassword_web,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    } catch(Exception $e) {
        exit('Impossible de se connecter à la base de données.');
    }
    $requete = "SELECT DISTINCT IdRue, adresse FROM bailleurs WHERE cp = ". $cp ." AND adresse!='' ORDER BY adresse";
    // exécution de la requête
    $resultat = $bdd->query($requete) or die(print_r($bdd->errorInfo()));
    // résultats
    while($donnees = $resultat->fetch(PDO::FETCH_ASSOC)) {
        // je remplis un tableau et mettant l'id en index (que ce soit pour les régions ou les départements)
        $json[$donnees['IdRue']][] = $donnees['adresse'];
    }
     
    // envoi du résultat au success
    echo json_encode($json);
}
?>


var champsform = $('#champs_form');
        var btn_form = $('#btn_form');
        var rues = $('#rues');
        var residences = $('#residence');
	var btncp = $('#btncp');
        
        
        btncp.click(function(){
           champsform.empty();
           champsform.hide();
           var cp = codepostal.val();
           if(cp != '') {
		rues.empty();
		rues.show();
                residences.empty();
            	$.ajax({
                url: 'rues.php',
                data: 'code_postal='+ cp,
                dataType: 'json',
                success: function(json) {
                    rues.append('<option value="ERR">Choisir rue</option>');
                    rues.append('<option value="0">Ma rue n\'est pas dans la liste</option>');
		    $.each(json, function(index, value) {
                        rues.append('<option value="'+ index +'">'+ value +'</option>');
                    });
                }
            });
           }
        });

	residences.on('change',function(){
		champsform.empty();
		champsform.hide();
		var resi= $(this).val();
		if(resi=='ERR'){
			btn_form.hide();
		}else{
		btn_form.show();
		}
		
	});

        rues.on('change', function() {
        var rue = $(this).val();
        champsform.empty();
        champsform.hide();
        if(rue != 0) {
	    btn_form.hide();
            residences.empty();
	    residences.show();
            $.ajax({
                type: "POST",
                url: 'residence.php',
                data: 'rue='+ rue,
                dataType: 'json',
                success: function(json) {
                    residences.append('<option value="ERR">Choisir résidence</option>');
		    residences.append('<option value="0">Ma résidence n\'est pas dans la liste</option>');
                    $.each(json, function(index, value) {
                        residences.append('<option value="'+ index +'">'+ value +'</option>');
                    });
                }
            });
        }else{
		residences.empty();
		residences.hide();
		btn_form.show();
	}
        });
        btn_form.click(function(){
            if (champsform.is(':hidden')) {
                $.ajax({
                url: 'genererform.php',
                data: 'idresidence='+ residences.val(),
                dataType: 'html',
                success: function(code_html) {
                    champsform.append(code_html);
                }
            });
            champsform.show();
            } else {
                champsform.empty();
                champsform.hide();
            }
        });