<?php require('collecte2017/config.php'); ?>
<!DOCTYPE html>
<html>

    <head lang="fr">
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


        <script src="js/Chart.js"></script>
        <script src="js/Chart.bundle.js"></script>
        <script src="js/Chart.bundle.min.js"></script>
        <script src="js/Chart.min.js"></script>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta charset="UTF-8">
        <title>déchets-tri-lens-liévin</title>
    </head>

    <body>
        <header class="top-nav">
            <nav class="top-nav top-nav-container">
                <div class="nav-wrapper">
                    <a class="page-title" href="index.html"><img class="logo-image" src="img-trie/logo-trie.png"></a>
                    <a class="page-title" href="http://www.agglo-lenslievin.fr/"><img class="logo-2" src="img-trie/logo-agglo.png" alt="lien vers le site de l'agglomération lens liévin"></a>
                    <a class="page-title" href="http://nicollin-nord.com/"><img class="logo-3" src="img-trie/logo-nicollin.png" alt="lien vers le site de l'agence nicollin"></a>
                    <a href="#" class="header__icon" id="header__icon"></a>
                    <div class="menu">
                        <ul>  <a href="index.html">
                            <li class="btn">particulier</li>
                            </a>
                            <a href="professionnel.html">
                                <li class="btn jaune">professionnel</li>
                            </a>
                            <a href="tri-selectif.html" >
                                <li class="btn rouge">tri selectif</li>
                            </a>
                            <a href="decheteries.html" >
                                <li class="btn vertclair 3">déchèteries</li>
                            </a>
                            <a href="http://www.agglo-lenslievin.fr" target="_blank">
                                <li class="btn bleuciel 4">l'agglo</li>
                            </a>
                            <a href="nicollin.html" >
                                <li class="btn jaune">Nicollin</li>
                            </a>
                            <a href="contact.html">
                                <li class="btn vertfonce">Contact</li>
                            </a>

                        </ul>
                        <!-- <h1>trie lens lievin</h1> -->


                    </div>
                    <div class="consignes">
                      <H3> <br>entrez vos coordonnées pour connaitre les dates et horaires de ramassage de vos ordures </H3></div>
                    </div>


                    </nav>
                </header>



            <main>
                <section class="masonry-container">
                    <div class="masonry">
                        <div class="masonry-sizer"></div>
                        <div class="gutter-sizer"></div>
                        <!-- Bloc 1 -->


                        <div class="masonry-item m1r1c applatrouge ">
                            <div class="row r1">

                                    <div class="col s12">
                                        <div class="valign-wrapper">
                                            <div class="valign center-align">
                                                <div class="texte-btn">
                                                     <br>
                                <div class="marge_bas">
                                <select id="cp" name="cp">
                                    <option value=0>-- Code Postal --</option>
                                </select>
                                </div>
                                <div class="marge_bas">
                                <select id="ville" name="ville">
                                <option value=0 type='button'>-- Ville --</option>
                                 </select>
                                </div>
                                <div class="marge_bas">
                                <select id="rue" name="rue">
                                <option value=0 type='button'>-- Rue --</option>
                                 </select>
                                 </div>

                                                </div>

                                            </div>

                                        </div>
                                    </div>

                            </div>
                        </div>
                        <!-- déchets-recyclables -->
                        <div class="masonry-item m1r1c fondjaune ">
                            <div class="row r1">
                                <div class="col s12 centrage ">
                                        <div class="valign-wrapper">
                                            <div class="valign center-align">
                                                <div id='bloc4' class="texte-btn">
                                                    <h3>EMBALLAGES MÉNAGERS RECYCLABLES</h3>
                                                    <div class="resultat result-recyclables">

                                                    </div>
                                                    </div>
                                            </div>

                                        </div>
                                    </div>

                            </div>
                        </div>
                        <!-- verre -->
                        <div class="masonry-item m1r1c fondvertfonce">
                            <div class="row r1">

                                    <div class="col s12 centrage">
                                        <div class="valign-wrapper">
                                            <div class="valign center-align">
                                                <div id='bloc5' class="texte-btn">
                                                    <h3>EMBALLAGES EN VERRE</h3>
                                                    <div class="resultat result-verre">

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                            </div>
                        </div>
                        <!-- textile -->
                        <div class="masonry-item m1r1c fondgrenat ">
                            <div class="row r1">

                                    <div class="col s12 centrage ">
                                        <div class="valign-wrapper">
                                            <div class="valign center-align">
                                                <div id="bloc3" class="texte-btn">
                                                    <h3>ORDURES M&Eacute;NAG&Egrave;RES RÉSIDUELLES</h3>
                                                    <div class="resultat result-residuelles">

                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                            </div>
                        </div>

                      <!-- déchets verts -->
                        <div class="masonry-item m1r1c fondvertclair">
                            <div class="row r1">
                                <div class="col s12 centrage ">
                                        <div class="valign-wrapper">
                                            <div class="valign center-align">
                                                <div id="bloc1" class="texte-btn">
                                                    <h3>LES D&Eacute;CHETS VERTS</h3>
                                                    <div class="resultat result-verts">

                                                    </div>
                                                </div>
                                              </div>
                                            </div>
                                    </div>
                            </div>
                        </div>
                        <!-- encombrants -->
                        <div class="masonry-item m1r1c fondgris">
                            <div class="row r1">
                              <div class="col s12 centrage">
                                        <div class="valign-wrapper">
                                            <div class="valign center-align">
                                                <div id='bloc2' class="texte-btn">
                                                    <h3>LES ENCOMBRANTS
                                                  </h3>
                                                    <div class="resultat result-encombrants">

                                                    </div>
                                                </div>
                                              </div>
                                            </div>
                                    </div>
                              </div>
                        </div>



                      </div>
                      <div class="consignes">
                        <H3>RAPPEL DES RÈGLES DE TRI</H3></div>
                      <div class="consignes-poubelles">


                      <img src="img-trie/consignes-poubelles.jpg" alt="schéma explicatif et consignes de tri pour toutes les catégories de déchets" style="width: 100%;
    height: auto;">
                      </div>

                </section>
            </main>
        <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.min.js"></script>
        <script src="js/masonry.pkgd.min.js"></script>
        <script src="js/jquery.calendario.js"></script>
        <script>
        $(document).ready(function() {
            var listecp = $('#cp');
            listecp.show();
            var listeville = $('#ville');
            var listerue = $('#rue');

            $.ajax({
                type:"POST",
                url: "collecte2017/ajax.php",
                data: 'func=getallcp',
                dataType: 'json',
                success: function(json){
                    listecp.append('<option value="0">Choisir code postal</option>');
                    $.each(json, function(index, value) {
                        listecp.append('<option value="'+ index +'">'+ index +'</option>');
                    });
            }});
            listerue.on('change', function(){
                $('#bloc1').children('.resultat').empty();
                $('#bloc2').children('.resultat').empty();
                $('#bloc3').children('.resultat').empty();
                $('#bloc4').children('.resultat').empty();
                $('#bloc5').children('.resultat').empty();
               var id = $(this).val();
                if(id !== 0){
                     $.ajax({
                        type:"POST",
                        url: "collecte2017/ajax.php",
                        data: 'func=getinfos&id='+id,
                        dataType: 'json',
                        success: function(json){
                            console.log(json);
                            var bloc1 = '<P>de Avril à Septembre : <br class="espace-ligne" >  '+json.vegetaux_av_sept+'</P>';
                            bloc1+='<P>de Octobre à Novembre : <br class="espace-ligne" > '+json.vegetaux_oct_nov+' </P>';
                            //$('#bloc1').html(bloc1);
                            $('#bloc1').children('.resultat').html(bloc1);

                            var bloc2 = '<P class="trimestre">trimestre 1 : <br>'+json.trimestre1+' </P>';
                            bloc2+='<P class="trimestre">trimestre 2 : <br class="espace-ligne" > '+json.trimestre2+' </P>';
                            bloc2+='<P class="trimestre">trimestre 3 : <br class="espace-ligne" >'+json.trimestre3+' </P>';
                            bloc2+='<P class="trimestre">trimestre 4 : <br class="espace-ligne" >'+json.trimestre4+' </P>';
                            $('#bloc2').children('.resultat').html(bloc2);

                            var bloc3 ='<P>'+json.om+'</P>';
                            $('#bloc3').children('.resultat').html(bloc3);

                            var bloc4 = '<P>';
                            bloc4+=json.pcjmr+'</P>';
                            $('#bloc4').children('.resultat').html(bloc4);

                            var bloc5 = '<P>'+json.verre+'</P>';
                            $('#bloc5').children('.resultat').html(bloc5);
                    }});
                 }else{

                 }
            });
            listeville.on('change', function(){
                $('#bloc1').children('.resultat').empty();
                $('#bloc2').children('.resultat').empty();
                $('#bloc3').children('.resultat').empty();
                $('#bloc4').children('.resultat').empty();
                $('#bloc5').children('.resultat').empty();
                var ville = $(this).val();
                if(ville !== 0){
                     listerue.empty();
                     listerue.show();
                     $.ajax({
                        type:"POST",
                        url: "collecte2017/ajax.php",
                        data: 'func=getrue&ville='+ville,
                        dataType: 'json',
                        success: function(json){
                            console.log(json);
                            listerue.append('<option value="0">Choisir rue</option>');
                            $.each(json, function(value, index) {
                                listerue.append('<option value="'+ index +'">'+ value +'</option>');
                            });
                    }});
                 }else{

                 }
            });
            listecp.on('change', function(){
                $('#bloc1').children('.resultat').empty();
                $('#bloc2').children('.resultat').empty();
                $('#bloc3').children('.resultat').empty();
                $('#bloc4').children('.resultat').empty();
                $('#bloc5').children('.resultat').empty();
                 var cp = $(this).val();
                 listerue.empty();
                 listerue.hide();
                 if(cp !== 0){
                     listeville.empty();
                     listeville.show();
                     $.ajax({
                        type:"POST",
                        url: "collecte2017/ajax.php",
                        data: 'func=getville&cp='+cp,
                        dataType: 'json',
                        success: function(json){
                            listeville.append('<option value="0">Choisir ville</option>');
                            $.each(json, function(index, value) {
                                listeville.append('<option value="'+ index +'">'+ index +'</option>');
                            });
                    }});
                 }else{

                 }
            });
         });


        </script>
        <script>
            $(document).ready(function() {
                $('.masonry').masonry({
                    // set itemSelector so .grid-sizer is not used in layout
                    itemSelector: '.masonry-item',
                    // use element for option
                    columnWidth: '.masonry-sizer',
                    percentPosition: true,
                    gutter: '.gutter-sizer'
                });
                $('.sliderSmall').slider({
                    full_width: true,
                    height: 248,
                    indicators: false
                });
                $('.sliderBig').slider({
                    full_width: true,
                    height: 508
                });
                $('.arrow-left').click(function() {
                    $('.sliderSmall').slider('prev');
                });
                $('.arrow-right').click(function() {
                    $('.sliderSmall').slider('next');
                });
            });
        </script>

        <!-- CHANGEMENT TEXTE CALENDRIER -->
        <script>
            $(document).ready(function() {
                $(".texte_date").hide();
                $(".texte_20").show();
            });
            $(".fc-event a").click(function(evt) {

                evt.preventDefault(); // prevents browser's default anchor behavior

                var id = $(this).attr("href");
                $(".texte_date").hide();
                $(id).show();
            });
        </script>
        <!-- FIN CHANGEMENT TEXTE CALENDRIER -->

        <!-- SONDAGE -->
        <script>
            var ctx = document.getElementById("resultats");
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["Opt 1", "Opt 2", "Opt 3"],
                    datasets: [{
                        label: '# of Votes',
                        backgroundColor: "rgba(51,51,51,1)",
                        borderColor: "rgba(51,51,51,1)",
                        borderWidth: 1,
                        hoverBackgroundColor: "rgba(0,0,0,1)",
                        hoverBorderColor: "rgba(0,0,0,1)",
                        data: [12, 19, 3]
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        </script>
        <script>
            $(function($) {
                var getVoteResults = function() {
                    $.get("vote_results.php", function(data, status) {
                        var parsedData = JSON.parse(data);
                        var resultData = [parsedData[0].yes, parsedData[0].no, parsedData[0].noanswer];
                        var ctx = document.getElementById("resultatsBloc");
                        var myChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: ["yes", "no", "no answer"],
                                datasets: [{
                                    label: '# of Votes',
                                    backgroundColor: "rgba(51,51,51,1)",
                                    borderColor: "rgba(51,51,51,1)",
                                    borderWidth: 1,
                                    hoverBackgroundColor: "rgba(0,0,0,1)",
                                    hoverBorderColor: "rgba(0,0,0,1)",
                                    data: resultData
                                }]
                            },
                            options: {
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero: true
                                        }
                                    }]
                                }
                            }
                        });
                        $('#vote-area').toggle();
                    });
                }
                $(".vote-options a").click(function() {
                    var id = $(this).parent("div").attr("id");
                    var type = $(this).attr("id");
                    $.post("vote.php", {
                        id: id,
                        type: type
                    }, function(answer) {
                        console.log(id);
                        console.log(type);
                        getVoteResults();
                    });

                });
            });
        </script>
        <!-- FIN SONDAGE -->

        <!-- Social media - Share buttons -->
        <!-- Facebook -->
        <div id="fb-root"></div>
        <script>
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.5";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>

        <!-- Twitter -->
        <script>
            ! function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0],
                    p = /^http:/.test(d.location) ? 'http' : 'https';
                if (!d.getElementById(id)) {
                    js = d.createElement(s);
                    js.id = id;
                    js.src = p + '://platform.twitter.com/widgets.js';
                    fjs.parentNode.insertBefore(js, fjs);
                }
            }(document, 'script', 'twitter-wjs');
        </script>

        <!-- Share button LinkedIn - Blogger Config. Ref.: http://goo.gl/tC65tg -->
        <script src='//platform.linkedin.com/in.js' type='text/javascript'>
            lang: fr_FR
        </script>

        <!-- -ENCART LIVE -->
        <script>
            function init() {
                var cusid_ele = document.getElementsByClassName('live-canvas');
                for (var i = 0; i < cusid_ele.length; ++i) {
                    var canvas = cusid_ele[i];
                    if (canvas.getContext) {
                        var ctx = canvas.getContext("2d");
                        // Draw triangle
                        ctx.fillStyle = "#FABE00";
                        ctx.beginPath();
                        // Draw a triangle location for each corner from x:y 100,110 -> 200,10 -> 300,110 (it will return to first point)
                        ctx.moveTo(72, 72);
                        ctx.lineTo(0, 0);
                        ctx.lineTo(72, 0);
                        ctx.closePath();
                        ctx.fill();

                        ctx.rotate(Math.PI / 4);
                        ctx.font = 'italic 16pt Arial';
                        ctx.fillStyle = "#000000";
                        ctx.fillText("Live", 33, -7);
                    }
                }
            }
            onload = init;
        </script>
        <!--GOOGLE ANALYTICS-->
        <script>
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-83086304-1', 'auto');
            ga('send', 'pageview');
        </script>

        <!------------------------------------------------------------------ SOCIAL MEDIA CUSTOMIZED SHARE BUTTONS ------------------------------------------------------------------------->
        <script>
            (function() {

                var popupCenter = function(url, title, width, height) {
                    var popupWidth = width || 640;
                    var popupHeight = height || 320;
                    var windowLeft = window.screenLeft || window.screenX;
                    var windowTop = window.screenTop || window.screenY;
                    var windowWidth = window.innerWidth || document.documentElement.clientWidth;
                    var windowHeight = window.innerHeight || document.documentElement.clientHeight;
                    var popupLeft = windowLeft + windowWidth / 2 - popupWidth / 2;
                    var popupTop = windowTop + windowHeight / 2 - popupHeight / 2;
                    var popup = window.open(url, title, 'scrollbars=yes, width=' + popupWidth + ', height=' + popupHeight + ', top=' + popupTop + ', left=' + popupLeft);
                    popup.focus();
                    return true;
                };

                document.querySelector('.share_facebook').addEventListener('click', function(e) {
                    e.preventDefault();
                    var url = this.getAttribute('data-url');
                    var shareUrl = "https://www.facebook.com/sharer/sharer.php?u=" + encodeURIComponent(url);
                    popupCenter(shareUrl, "Partager sur facebook");
                });

                document.querySelector('.share_twitter').addEventListener('click', function(e) {
                    e.preventDefault();
                    var url = this.getAttribute('data-url');
                    var shareUrl = "https://twitter.com/intent/tweet?text=" + encodeURIComponent(document.title) +
                        "&via=agenceaverti" +
                        "&url=" + encodeURIComponent(url);
                    popupCenter(shareUrl, "Partager sur Twitter");
                });

                document.querySelector('.share_linkedin').addEventListener('click', function(e) {
                    e.preventDefault();
                    var url = this.getAttribute('data-url');
                    var shareUrl = "https://www.linkedin.com/shareArticle?url=" + encodeURIComponent(url);
                    popupCenter(shareUrl, "Partager sur Linkedin");
                });

            })();
        </script>
        <!------------------------------------------------------------------ MENU BURGER ------------------------------------------------------------------------->
        <script>
            (function($){

                /* Quand je clique sur l'icône hamburger je rajoute une classe au body */
                $('#header__icon').click(function(e){
                    e.preventDefault();
                    $('body').toggleClass('with--sidebar');
                });

                /* Je veux pouvoir masquer le menu si on clique sur le cache */
                $('#site-cache').click(function(e){
                    $('body').removeClass('with--sidebar');
                })

            })(jQuery);
        </script>

    </body>

</html>
