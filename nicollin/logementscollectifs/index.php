<?php
    include 'config.php';
?>
<html>
<head lang="en">
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<link rel="stylesheet" href="css/averti-web-main.css">
<link rel="stylesheet" href="css/elusive-icons.min.css">
<link rel="stylesheet" href="css/materialize.min.css">
<link rel="stylesheet" href="css/weavent.css">
<link rel="stylesheet" href="css/averti.css">
<link rel="stylesheet" href="css/calendar.css">
<link rel="stylesheet" href="fonts/fontello/css/fontello.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/Chart.js"></script>
<script src="js/Chart.bundle.js"></script>
<script src="js/Chart.bundle.min.js"></script>
<script src="js/Chart.min.js"></script>
<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta charset="UTF-8">
<title>logements-collectifs</title>
</head>

    <body>
      <header class="top-nav">
        <nav class="top-nav top-nav-container">
            <div class="nav-wrapper">
                <a class="page-title" href="index.html"><img class="logo-image" src="img-trie/logo-trie.png"></a>
                <a class="page-title" href="http://www.agglo-lenslievin.fr/"><img class="logo-2" src="img-trie/logo-agglo.png" alt="lien vers le site de l'agglomération lens liévin"></a>
                <a class="page-title" href="http://nicollin-nord.com/"><img class="logo-3" src="img-trie/logo-nicollin.png" alt="lien vers le site de l'agence nicollin"></a>
                <a href="#" class="header__icon" id="header__icon"></a>
        </nav>
    </header>
    <main>
    <section class="masonry-container">
        <div class="masonry">
            <div class="article-interne nous_contacter">
                <div class="title-area-interne">
                    <h2 class="title">
                                  FORMULAIRE DES BAILLEURS </h2>
                                  <h3>Merci de compléter le formulaire ci-dessous</h3>
                    </div>
<div class="intro-interne formulaire-bailleurs">
                    <div class="row r2 formul-demande2">
                        <div class="col s12 demande2">
                            <form action="form.php" class="form" method="POST">
                                <div class="marge_bas">
                                <select id="bailleurs" name="bailleurs">
                                    <option value=0>-- Bailleurs --</option>
                                </select>
                                </div>
                                <div class="marge_bas">
                                <select id="cp" name="cp">
                                <option value=0 type='button'>-- Code postaux --</option>
                                 </select>
                                </div>
                                <div class="marge_bas">
                                <select id="residences" name="residences">
                                <option value=0 type='button'>-- Résidences --</option>
                                 </select>
                                 </div>
                                <button class="btn lire" id="btncp" type='button'>Valider</button>
                                <div class="champs_form" id="champs_form" style="display:none">
                                </div>
                              </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
           </section>
         </main>
    </body>
</html>
<script>
    $(document).ready(function() {
        var bailleur = $('#bailleurs');
        var cp = $('#cp');
        var residence = $('#residences');
        var btn_valider = $('#btncp');
        var champsform = $('#champs_form');
        bailleur.show();

        $.ajax({
            url: "bailleurs.php",
            dataType: 'json',
            success: function(json){
                bailleur.append('<option value="0">Choisir bailleur ou syndic de copropriété</option>');
                    bailleur.append('<option value="0">Bailleur ou syndicat non répertorié</option>');
		    $.each(json, function(index, value) {
                        bailleur.append('<option value="'+ index +'">'+ value +'</option>');
                    });
        }});


        btn_valider.click(function(){
            if (champsform.is(':hidden')) {
                var vbai=bailleur.val();
                var vres=residence.val();
                if(vres == null){
                   vres=0;
                }
                if(vbai==null){
                    vbai=0;
                }
                $.ajax({
                    type: "POST",
                    url: 'genererform.php',
                    data: 'idbai='+vbai+'&idres='+vres,
                    dataType: 'html',
                    success: function(code_html) {
                        champsform.append(code_html);
                        $('#tri').show();
                        $('#typecollecte').show();
                    }
            });
            champsform.show();
            } else {
                champsform.empty();
                champsform.hide();
            }

        });

        bailleur.on('change', function(){
            var idbai = $(this).val();
            champsform.empty();
                champsform.hide();
            cp.empty();
            cp.show();
            residence.empty();
            residence.hide();
            if(idbai !== 0){
               $.ajax({
                type: "POST",
                url: 'codespostaux.php',
                data: 'idbai='+ idbai,
                dataType: 'json',
                success: function(json) {
                    cp.append('<option value="0">Choisir code postal</option>');
		    cp.append('<option value="0">Code postal non listé</option>');
                    $.each(json, function(index, value) {
                        cp.append('<option value="'+ index +'">'+ value +'</option>');
                    });
                }
            });
            }else{
                cp.hide();
            }
        });
        cp.on('change', function(){
            var codep = $(this).val();
            var idbai=$('#bailleurs').val();
            residence.empty();
            residence.show();
            if(codep !== 0){
               $.ajax({
                type: "POST",
                url: 'residences.php',
                data: 'idbai='+ idbai+'&cp='+codep,
                dataType: 'json',
                success: function(json) {
                    residence.append('<option value="0">Choisir rue et/ou résidence</option>');
		    residence.append('<option value="0">rue et/ou résidence non listée(s)</option>');
                    $.each(json, function(index, value) {
                        residence.append('<option value="'+ index +'">'+ value +'</option>');
                    });
                }
            });
            }else{
                residence.hide();
            }
        });
        residence.on('change', function(){
            var idresidence = $(this).val();
            champsform.empty();
            champsform.hide();
            if(idresidence !== 0){

            }
        });
    });
</script>
