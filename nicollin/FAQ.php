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
	<?php // require('config.php'); ?>

	<script src="js/Chart.js"></script>
	<script src="js/Chart.bundle.js"></script>
	<script src="js/Chart.bundle.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta charset="UTF-8">
	<title>info-services-déchets-trie-lens-lievin-FAQ</title>
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
			</div>
		</nav>
	</header>
	<main>
		<section class="masonry-container">
			<div class="masonry">
				<?php $indice =0;
				function background($indice){
					global $indice;
					$indice++;
					if ($indice %2 == 1){
						echo 'class="gris"';
					}
				} ?>
				<div class="article-interne page_faq">
					<div class="title-area-interne">
						<h2 class="title">FAQ</h2>
					</div>
					<div class="faq_intro-interne">

						<p <?php background($indice)?> >
							<span>Que deviennent vos pneus recyclés ? </span><br/>
							Les pneus usagés sont recyclés à 100 % sous forme d’énergie ou de matière première. Le broyat de pneumatique possède plusieurs qualités : Ils peuvent être entiers, découpés, réduits en poudre ou en granulats.
							Les pneus sont ensuite réutilisés sous forme de remblais, de murs antibruit, de supports de voies ferrées, de sous-couches drainantes et herbes synthétiques pour stades et aires de jeu…
						</p>


						<p <?php background($indice)?> >
							<span>Que devient votre textile après dépôt dans les points de collecte ?
							</span><br/>

							62% des vêtements déposés sont réutilisés (donnés ou vendus à bas prix).
							Les 38% restants sont des vêtements abîmés, effilochés qui sont recyclés. On se sert des morceaux de fil pour créer des filtres, du feutre, de la peinture, de l’isolant du rembourrage de coussins, de la neige artificielle, ou encore pour créer un autre vêtement.<br>
							Pour connaître vos points de collecte, rendez vous sur :  <a href="www.ecotextile.tm.fr" target= "_blank">www.ecotextile.tm.fr</a>  ou <a href="www.lafibredutri.fr" target= "_blank">www.lafibredutri.fr</a> et <a href="ecotlc.fr" target="_blank">ecotlc.fr</a>
						</p>


						<p <?php background($indice);?> >
							<span>Où jeter la vaisselle et le verre culinaire (verre à boire, la vaisselle transparente) ?
							</span><br/>
							La vaisselle doit être jetée avec les ordures ménagères résiduelles (contenants bordeaux). Tous les types de vaisselle sont concernés : porcelaine, grès, verre ou cristal.
							Le verre culinaire et la vaisselle « en verre » ont bien souvent une composition chimique différente du verre d’emballage qui rend impossible leur intégration au calcin (débris de verre ajoutés aux matières premières comme le sable ...) utilisé dans les fours verriers. La vaisselle transparente (assiettes, plats...) est la plupart du temps réalisée à partir d’une céramique qui fond à une température beaucoup plus élevée que le verre d’une bouteille. C’est ce qu’on appelle un infusible. Si on ne parvient pas à l’enlever avant enfournage, on retrouve ces morceaux dans les objets finis, ce qui entraîne des défauts dans les emballages.
						</p>

						<p <?php background($indice); ?> >
							<span>Comment positionner vos conteneurs lors de la collecte ?</span><br/>
							Les conteneurs doivent être présentés en bordure de trottoir et regroupés par 2 (avec celui de votre voisin immédiat). Cela permet la bonne collecte de votre poubelle et rend le ramassage des conteneurs plus rapide et plus sûr pour les personnels. En savoir plus, <a href="http://dechets-info-services.agglo-lenslievin.fr/collecte-robotisee.html" target="_blank">cliquer ici</a>
						</p>

						<p <?php background($indice); ?> >
							<span>Collecte robotisée, quels avantages ?</span><br/>
							Plus propre, plus efficace, la collecte robotisée rend le travail de ramassage moins pénible tout en tenant compte de  l’approche sociale…
							Moins de pénibilité<br/>
							Avec la collecte robotisée, le personnel est nettement moins exposé, puisqu'il ne descend du camion que lorsque des conteneurs ont été mal positionnés ou tombés sur la chaussée. Dans le système classique, les équipiers de collecte peuvent manipuler jusqu'à 15 tonnes de déchets ménagers par jour à la main. Ils sont installés sur des marchepieds d'un camion qui roule à 20-25 km/h, et en sautent régulièrement. Même s'ils ont suivi des formations sur les attitudes et les bons gestes à avoir, c'est un métier très pénible, où les tendinites, les entorses ou les troubles musculo-squelettiques sont fréquents.<br/>
							C'est un nouveau métier. Il faut acquérir de la dextérité, savoir manier le bras articulé piloté à l’aide d’une manette.<br/>
							Une collecte plus efficace avec moins de nuisances !<br/>
							Avec en moyenne 140 conteneurs collectés à l'heure, le ramassage est propre et rapide. De plus, l’amélioration des performances énergétiques, acoustiques et environnementales de ces nouveaux véhicules de collecte modernes à l’échelle du territoire est l’une des préoccupations de la Communauté d’Agglomération de Lens-Liévin. Pour celle-ci, il s'agissait d'améliorer le cadre de vie dans les communes, mais également les conditions d’exécution de ce service communautaire par la mise en œuvre d'innovations. En savoir plus, <a href="http://dechets-info-services.agglo-lenslievin.fr/collecte-robotisee.html" target="_blank">cliquer ici</a>
						</p>

						<p <?php background($indice);?> >
							<span>Quels déchets sont à mettre dans les contenants jaunes dédiés au déchets recyclables ?</span><br/>
							Les déchets acceptés (à déposer en VRAC) :<br/>
							Les boîtes métalliques et aérosols, les briques alimentaires et cartons, les bouteilles, flacons et bidons en plastique petits ou grands (le bouchon peut être remis sur la bouteille écrasée) et le papier (journaux, magazines, prospectus) sont concernés.<br/>
							<font color="#e2627c">Ne sont en revanche pas recyclables à ce jour et doivent être jetés avec les ordures ménagères résiduelles : les films enveloppant les revues, les papiers gras, les absorbants, les cartons souillés, les poubelles de tables, le polystyrène, les pots de yaourt ou de crème, les films et sacs plastiques.</font>
							En savoir plus, <a href="http://dechets-info-services.agglo-lenslievin.fr/emballages-menagers-recyclables.html" target="_blank">cliquer ici</a>
						</p>

						<p <?php background($indice);?> >
							<span>Conteneurs ou sacs, ai-je le choix ?</span><br/>
							Le mode de collecte des ordures ménagères et des emballages recyclables et papiers en zone pavillonnaire dépend des secteurs. Le camion robotisé doit pouvoir manœuvrer et accéder facilement au conteneur pour le vider. Les rues étroites des centres-villes denses et certaines voies à forte circulation ne permettent pas ces manœuvres et sont donc dotées de sacs, collectés par des camions de collecte classiques.<br/>
							Aujourd’hui 95% de la collecte en zone pavillonnaire est réalisée en conteneurs et 5% en sacs.
						</p>
						<p <?php background($indice);?> >
							<span>Dois-je apporter mon verre au point d’apport volontaire ?</span><br/>
							A partir du 1<sup>er</sup> janvier 2018, le verre ne sera plus collecté en porte à porte. La communauté d’agglomération comptera, courant 2017, 530 bornes pour collecter votre verre, soit une borne pour environ 500 habitants.<a href="verre.html">En savoir plus</a>
						</p>

						<p  <?php background($indice)?> >
							<span>Comment présenter ses végétaux à la collecte ?</span><br/>
							Les déchets végétaux verts sont collectés en porte-à-porte (tontes de pelouse, tailles de haies, feuilles mortes, …) dans un contenant rigide pour y déposer ensuite les éventuels sacs vidés, ou dans un sac biodégradable. Les petits branchages sont à présenter en fagots liés avec de la ficelle. <br>
							Maximum 1 m<sup>3</sup> accepté par collecte. Cela correspond à 10 sacs de déchets verts de 100 L maximum ou 1 m<sup>3</sup> de branchages (maximum 1m20 de long et 10 cm de diamètre, fagotés avec une ficelle).
							Au-delà, allez en déchèterie.
							En appliquant ces conseils, vous permettez ensuite une meilleure valorisation des végétaux qui sont broyés à Harnes, avant de se transformer en compost utilisé en agriculture.
						</p>

						<p <?php background($indice);?> >
							<span>Quels sont les dates et horaires de collecte des déchets ou de ramassage des encombrants ?</span><br/>
							Selon votre lieu de résidence, la date de collecte des déchets ou de ramassage des encombrants diffère.
							Pour connaître les dates et horaires qui vous concernent : <a href="http://dechets-info-services.agglo-lenslievin.fr/collecte2017.php" target="_blank">cliquer ici</a>
						</p>

						<p <?php background($indice)?>  >
							<span>Quels sont les encombrants autorisés à la collecte en porte-à-porte ?</span><br/>
							Bon nombre d’objets encombrants peut être collecté en porte-à-porte malgré tout, certains objets, produits ou matériaux ne sont pas autorisés. Sont interdits : les déchets d’équipements électriques et électroniques, les gravats, les cartons, tout produit chimique (peinture, lasure, …), les tôles en fibrociment, les pneumatiques, les bonbonnes de gaz, vitres, les miroirs et fenêtres munies de leurs vitres.  <br>

							Maximum 1 m<sup>3</sup> d’encombrants sont acceptés par collecte. Pas d’objet de plus d’1m60 ou de plus de 40 kg.<br/>
							Vous pouvez également vous rendre à la <a href="http://agglo-lenslievin.maps.arcgis.com/apps/webappviewer/index.html?id=247b26cf30cd452fa16e9440ea676ba0" target="_blank">déchèterie la plus proche</a> !<br/>
							Les déchets refusés en porte-à-porte du fait de leurs nature, volume ou poids doivent être apportés à la déchèterie. Un conseil : à l’occasion du renouvellement de votre mobilier ou de votre équipement électrique n’hésitez pas à demander la reprise de l’ancien usagé.

						</p>

						<p  <?php background($indice)?>  >
							<span>Où trouver une déchèterie près de chez moi ?</span><br/>
							La Communauté d'Agglomération de Lens-Liévin a créé sur son territoire un dispositif de 4 déchèteries dont l'une est itinérante. Ces 4 équipements sont destinés aux seuls particuliers.
							<a href="http://agglo-lenslievin.maps.arcgis.com/apps/webappviewer/index.html?id=247b26cf30cd452fa16e9440ea676ba0" target="_blank">Ma déchèterie la plus proche</a>
						</p>
						<p  <?php background($indice)?>  >
							<span>Faut-il une carte d’accès pour déposer mes déchets à la déchèterie ?</span><br/>
							L’accès en déchèterie se fait désormais au moyen d’une carte, pour en faire la demande : <a href="decheterie.php">cliquez ici pour faire votre demande de carte</a>. Après une période de tests, l’accès par carte devient obligatoire dès le 1er octobre 2017.
							<a href="http://agglo-lenslievin.maps.arcgis.com/apps/webappviewer/index.html?id=247b26cf30cd452fa16e9440ea676ba0" target="_blank">Ma déchèterie la plus proche</a>
						</p>

						<p <?php background($indice)?> >
							<span>Que dois-je amener en déchèterie ?</span><br/>
							Les déchets acceptés en déchèterie fixe : encombrants, gravats (briques, tuiles, …), végétaux, bois, métaux, gros cartons, textiles, déchets ménagers spéciaux (peintures, lasures, piles, …), batteries, déchets d'équipements électriques et électroniques, certains pneumatiques et tôles en fibrociment (uniquement à Sallaumines).<br/>
							Les déchets acceptés en déchèterie itinérante : encombrants, gravats (briques, tuiles, …), végétaux, métaux, déchets ménagers spéciaux (peintures, lasures, piles, …), petits appareils ménagers ...
						</p>
						<div <?php background($indice)?>  >
							<br>
							<span style="margin-left : 20px" >Quels sont les déchets interdits dans ma déchèterie ?</span>
							<ul>
								<li>- Les bombonnes de gaz</li>
								<li>- Les pneus jantés, pneus poids lourds ou agricoles</li>
								<li>- Les déchets de soins DASRI (seringues...) et médicaments... </li>
								<li>- Les ordures ménagères</li>
								<li>- Les cadavres d'animaux</li>
								<li>- Les déchets explosifs ou radioactifs</li>
							</ul>
							<p>Pour savoir que faire de ces déchets, <a href="autres-dechets.html">cliquer ici</a></p>
						</div>



						<p <?php background($indice)?>   >
							<span>Que faire des déchets de soins, notamment des seringues ?</span><br/>
							Ces déchets particuliers ne doivent en aucun cas être jetés dans le bac ou sac jaune. Le risque qu’un agent du tri se pique est très grand, avec transmission possible de maladies (VIH, hépatite…). Si vous êtes en auto-traitement et que vous utilisez notamment du matériel médical piquant, il existe un moyen d’évacuer ces déchets en toute sécurité. Il faut simplement retirer en pharmacie une boite jaune prévue à cet effet, et la rapporter, une fois pleine, en pharmacie.
						</p>


						<p <?php background($indice)?>  >
							<span>Que faire des déchets d’amiante ?</span><br/>
							Les déchets d’amiante doivent être amenés aux déchèteries de Sallaumines et de Pont-à-Vendin dans un emballage fermé (sac poubelle, film étirable, …). La mention « amiante » doit être inscrite sur l’emballage. Les usagers peuvent venir retirer du film étirable en déchèterie puis filmer leurs déchets chez eux.
						</p>

						<p <?php background($indice);?> >
							<span>Vous êtes professionnels, et dépassez les 1320 litres de déchets hebdomadaires ?  </span> <br> Conformément à la réglementation en vigueur, notamment le Décret n°94-609, loi n°75-633, la CALL ne collectera plus les Etablissements Autres que les Ménages (EAM) produisant plus de 1320 litres de déchets par semaine.
							Si vous êtes concerné, vous devez désormais faire appel à un prestataire privé qui prendra en charge la collecte de vos déchets.
						</p>

						<p <?php background($indice)?>   >
							<span>Quelle quantité de déchets est produite en France chaque année ? </span> <br>  Un Français consomme en moyenne 354 kg d’ordures ménagères par an.
							En prenant en compte les déchets professionnels (BTP, industrie, agriculture, activités de soin), on atteint 13,8 tonnes de déchets produits par an et par habitant. </p>
						</div>
						<div>
							<a href="index.html"class="btn lire">Retour à la page d'accueil</a>
						</div>
					</div>

				</div>

                    <!--
<div class="corps2">
<img src="./images/intervenant/photo2.jpg" alt="" width="500px" height="auto"/>
<p>
Excitavit hic ardor milites per municipia plurima, quae isdem conterminant, dispositos et castella, sed quisque serpentes latius pro viribus repellere moliens, nunc globis confertos, aliquotiens et dispersos multitudine superabatur ingenti, quae nata et educata inter editos recurvosque ambitus montium eos ut loca plana persultat et mollia, missilibus obvios eminus lacessens et ululatu truci perterrens.
<br/><br/>
Quanta autem vis amicitiae sit, ex hoc intellegi maxime potest, quod ex infinita societate generis humani, quam conciliavit ipsa natura, ita contracta res est et adducta in angustum ut omnis caritas aut inter duos aut inter paucos iungeretur.
<br/><br/>
Nam sole orto magnitudine angusti gurgitis sed profundi a transitu arcebantur et dum piscatorios quaerunt lenunculos vel innare temere contextis cratibus parant, effusae legiones, quae hiemabant tunc apud Siden, isdem impetu occurrere veloci. et signis prope ripam locatis ad manus comminus conserendas denseta scutorum conpage semet scientissime praestruebant, ausos quoque aliquos fiducia nandi vel cavatis arborum truncis amnem permeare latenter facillime trucidarunt.
</p>
</div>

<div class="corps3">
<p>
Ego vero sic intellego, Patres conscripti, nos hoc tempore in provinciis decernendis perpetuae pacis habere oportere rationem. Nam quis hoc non sentit omnia alia esse nobis vacua ab omni periculo atque etiam suspicione belli?

Quis enim aut eum diligat quem metuat, aut eum a quo se metui putet? Coluntur tamen simulatione dumtaxat ad tempus. Quod si forte, ut fit plerumque, ceciderunt, tum intellegitur quam fuerint inopes amicorum. Quod Tarquinium dixisse ferunt, tum exsulantem se intellexisse quos fidos amicos habuisset, quos infidos, cum iam neutris gratiam referre posset.
</p>
</div>

<div class="corps4">
<img src="./images/intervenant/photo3.jpg" alt="" width="1000px" height="auto"/>
</div>

<div class="corps5">
<p>
Alii summum decus in carruchis solito altioribus et ambitioso vestium cultu ponentes sudant sub ponderibus lacernarum, quas in collis insertas cingulis ipsis adnectunt nimia subtegminum tenuitate perflabiles, expandentes eas crebris agitationibus maximeque sinistra, ut longiores fimbriae tunicaeque perspicue luceant varietate liciorum effigiatae in species animalium multiformes.

Nemo quaeso miretur, si post exsudatos labores itinerum longos congestosque adfatim commeatus fiducia vestri ductante barbaricos pagos adventans velut mutato repente consilio ad placidiora deverti.

Nam sole orto magnitudine angusti gurgitis sed profundi a transitu arcebantur et dum piscatorios quaerunt lenunculos vel innare temere contextis cratibus parant, effusae legiones, quae hiemabant tunc apud Siden, isdem impetu occurrere veloci. et signis prope ripam locatis ad manus comminus conserendas denseta scutorum conpage semet scientissime praestruebant, ausos quoque aliquos fiducia nandi vel cavatis arborum truncis amnem permeare latenter facillime trucidarunt.
</p>
</div> -->


</section>
</main>
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script src="js/materialize.min.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/jquery.calendario.js"></script>
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
