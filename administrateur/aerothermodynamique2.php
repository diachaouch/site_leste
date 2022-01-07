<!DOCTYPE>
<html lang="en">
	<head>
  <meta charset="utf-8">
  <title>Aérothermodynamique</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <!--<link href="img/favicon.png" rel="icon">-->
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
	<link href="css/style.css" rel="stylesheet">
  <link href="css/style2.css" rel="stylesheet">

  <style>
	  
	  
	  
	#carousel {
	width:255px;
	height:290px;	
	margin:0 auto;
}

#slides {
	overflow:hidden;
	/* fix ie overflow issue */
	position:relative;
	width:250px;
	height:250px;
	border:1px solid #ccc;
}

/* remove the list styles, width : item width * total items */	
#slides ul {
	position:relative;
	left:0;
	top:0;
	list-style:none;
	margin:0;
	padding:0;	
	width:750px;			
}

/* width of the item, in this case I put 250x250x gif */
#slides li {
	width:250px;
	height:250px;	
	float:left;
}

#slides li img {
	padding:5px;
}

/* Styling for prev and next buttons */
#buttons {
	padding:0 0 5px 0;	
	float:right;
}

#buttons a {
	display:block; 
	width:31px; 
	height:32px;
	text-indent:-999em;
	float:left;
	outline:0;
}

a#prev {
	background:url(arrow.gif) 0 -31px no-repeat; 
}

a#prev:hover {
	background:url(arrow.gif) 0 0 no-repeat;
}

a#next {
	background:url(arrow.gif) -32px -31px no-repeat; 
}

a#next:hover {
	background:url(arrow.gif) -32px 0 no-repeat;
}

.clear {clear:both}  
</style>
</head>


<?php
	include('navbar.php');
?>
<body id="body">	

<div id="news-bar-theme"><div class="row-fluid">
	<div class="latest_newsarea"> 
	
	<span><h3>Aérothermodynamique</h3>
		
	 
	</span></div></div></div>

<div class="container pt-5 pb-5 mt-5" id="themes" >
  
  <p style="font-family: Century Gothic Regular" class="text-justify">
			On regroupe ici les différentes études envisagées en rapport avec l’aérodynamique et les transferts de chaleur et/ou de masse. Ce theme est scindé en sept projets :<br>

1-	Étude des écoulements et des transferts de chaleur dans les machines thermiques : Application a une parabole Stirling solaire .<br>

2-	Études numérique et expérimentale de la climatisation par dessiccation-évaporation.<br>

3- Écoulements générés en milieu fluide par une onde ultrasonore focalisée : streaming, écoulement des bulles et des particules solides .<br>

4-	Transfert radiatif.<br>

5-	Étude du contrôle des écoulements en vue d’améliorer les performances.<br>

6-	Étude des systemes de dessalement par humidification déshumidification.<br>

7-	Structures cohérentes dans les régions étroites des écoulements et autour d’un demi-cylindre circulaire proche d’une paroi.<br>
 <!-- Accordion -->
<div class="container-fluid bg-gray" id="accordion-style-1">
	<div class="container">
		
			<div class="row">
				
				<div class="col-12 mx-auto">
					<div class="accordion" id="accordionExample">
						<div class="card">
							<div class="card-header" id="headingOne">
								<span class="mb-0">
							<a data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><em class="fa fa-angle-double-right mr-3"></em> Etude de l'écoulement et du transfert de chaleur dans le cylindre d’un moteur alternatif–Application aux moteurs Stirling. </a>
						  </span>
							</div>

							<div id="collapseOne" class="collapse  fade" aria-labelledby="headingOne" data-parent="#accordionExample">
								<div class="card-body text-justify">
									<div  style="display:flex; flex-direction: row;   justify-content: space-between;">
									<div class="col-xs-4 "><img src="img/stirling-alpha.gif" alt="" class="img_top"></div>
									<div class="col-xs-4 "><img src="img/stirling-beta.gif" alt="" class="img_top"></div>
									<div class="col-xs-4 "><img src="img/PICT1113.JPG" alt="" class="img_top"></div>
									</div>
									<p class="mt-3">Le moteur Stirling est un moteur à combustion externe, il peut utiliser n’importe quelle source de chaleur (énergie de combustion, énergie solaire…). Le moteur présente un excellent rendement théorique équivalent au rendement de Carnot. La conversion de l’énergie (énergie de combustion, énergie solaire, rejets thermiques…) par les moteurs Stirling intéresse les chercheurs  dans plusieurs pays. Les Etats Unies, le Japon et l’Allemagne sont les pays les plus avancés dans ce domaine. Les sociétés SUN MACHINE GMBH et SUN MACHINE GMBH commercialisent des prototypes du moteur Stirling. Une conférence internationale sur les moteurs Stirling est organisée tous les deux ans.</p>
									<h4>Objectifs du programme de recherche: </h4>
									<ul>
									<li>Développer des modèles et des codes qui  simulent globalement l’écoulement et les transferts dans  les  moteurs Stirling.</li>

                                    <li>Développer des modèles et des codes qui  simulent finement l’écoulement et les transferts dans certains éléments du moteur Stirling (régénérateur, échangeur, ….)</li>

                                    <li>Proposer de nouvelles géométries et configurations optimales.</li>

                                    <li>Réaliser des prototypes instrumentés de moteurs Stirling.</li>

                                    <li>Essais et étude expérimentale des moteurs Stirling.</li>
									</ul>
									<h4>Résultats attendus du programme de recherche:</h4>
									<ul>
									<li>Mises en place d’outils d’études théoriques et expérimentales des  moteurs Stirling.</li>
									<li>Réalisation de prototypes de moteur Stirling.</li>
									
									</ul>
									<h4>Méthodologie et approche envisagées pour la réalisation du programme de recherche: </h4>
									<p>Deux approches seront utilisées. Une approche globale qui consiste à simuler numériquement le fonctionnement des moteurs stirling. Cette approche permettra le choix de la configuration optimale. Une approche fine qui consiste à simuler localement l’écoulement et le transfert de chaleur dans les principaux éléments du moteur Stirling (cylindre, régénérateur, échangeur).

Il s’agit de résoudre numériquement les équations de quantité de mouvement et d’énergie dans le cas d’un fluide compressé périodiquement. Nous utiliserons pour cela les méthodes de volumes de contrôles à base d’éléments finis. Cette étude fine permettra d’optimiser les différents éléments du moteur Stirling et de proposer des corrélations concernant les pertes de charge et le transfert de chaleur. Ces corrélations sont indispensables pour l’étude globale. Les outils théoriques mis en place seront ensuite utilisés pour concevoir et réaliser un prototype instrumenté d’un moteur Stirling.</p>
									<h4>Opportunités de valorisation des résultats de recherche:</h4>
									Le prototype réalisé peut être industrialisé et utilisé dans plusieurs installations pour la  conversion de l’énergie thermique de différentes origines.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingTwo">
								<span class="mb-0">
							<a  data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><em class="fa fa-angle-double-right mr-3"></em>Convection naturelle et mixte en milieux semi–confinés. </a>
						  </span>
							</div>
							<div id="collapseTwo" class="collapse fade" aria-labelledby="headingTwo" data-parent="#accordionExample">
								<div class="card-body">
									<div  style="display:flex; flex-direction: row;   justify-content: space-between;">
									<div class="col-xs-4 "><img src="img/Convection naturelle2.jpg" alt="" class="img_top" ></div>
									<div class="col-xs-4 "><img src="img/stirling-beta.gif" alt="" class="img_top"></div>
									<div class="col-xs-4 "><img src="img/Convection naturelle_clip_image002.jpg" alt="" class="img_top" ></div>
									</div>
									<p class="mt-3 text-justify">L’écoulement et les transferts de chaleur et de masse par convection naturelle et mixte dans des espaces confinés ou semi - confinés continue à être le sujet de nombreux travaux de recherche théoriques et expérimentaux. Ce grand intérêt est du aux domaines d’application sans cesse en développement, notamment en aérodynamique et en thermo - aéraulique (climatisation et aération des locaux, évacuation des polluants, …..).<br>

A l’échelle du Laboratoire, nous avons étudié numériquement, par la méthode des volumes de contrôle à base d’éléments finis, la convection mixte engendré par un jet à travers une cavité différentiellement chauffée. Une étude paramétrique, en régime transitoire,  couvrant une gamme assez large de paramètres a été effectuée. 
Il ressort, d’après la bibliographie, que malgré l’existence d’une quantité considérable de travaux relatifs à la convection naturelle et mixte en milieux confinés et semi-confinés, il reste encore un grand nombre de situations qui n’ont pas encore fait l’objet d’étude.</p>
									<h4>Objectifs du programme de recherche: </h4>
									<ul>
									<li>Apporter une contribution à l’étude et à la compréhension des mécanismes régissant les transferts de chaleur et de masse par convection naturelle et mixte en espace confinés et semi- confinés.</li>

                                    <li>Mettre en place des moyens fiables d’investigation des  transferts combinés de chaleur et de masse par convection naturelle et mixte en espace confinés et semi-confinés. Nous envisageons mettre en place des outils théoriques rapides et  applicables  pour des géométries complexes.</li>
									</ul>
									<h4>Méthodologie et approche envisagées pour la réalisation du programme de recherche: </h4>
                                     <p>Nous comptons tout d’abord améliorer le code existant en le rendant plus rapide en utilisant des solveurs plus performants et applicable à des géométries complexes en utilisant un maillage non structuré. Nous envisageons, par la suite, tenir compte des effets tridimensionnels. L’étude de quelques problèmes pratiques de convection naturelle et mixte sera enfin effectuée.</p>

                                    <h4>Opportunités de valorisation des résultats de recherche:</h4>
Les résultats obtenus et les outils mis en place peuvent servir pour optimiser le fonctionnement, entre autre, des  installations de climatisation, de ventilations et d’évacuation des polluants.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingThree">
								<span class="mb-0">
							<a data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							 <i class="fa fa-angle-double-right mr-3"></i>Etude des transferts couplés de chaleur et de masse lors de l'évaporation et de la condensation.
							</a>
						  </span>
							</div>
							<div id="collapseThree" class="collapse fade" aria-labelledby="headingThree" data-parent="#accordionExample">
								<div class="card-body">
									<div  style="display:flex; flex-direction: row;   justify-content: space-between;">
									<div class="col-xs-6 "><img src="img/dessalement.jpg" alt="" class="img_top"></div>
									<div class="col-xs-6 "><img src="img/dessalement2.jpg" alt="" class="img_top"></div>
									
									</div>
									<p class="mt-3 text-justify">Les phénomènes d’évaporation et de condensation sont fréquemment rencontrés aussi bien dans la nature que dans l’industrie. La maîtrise des dépenses énergétiques dans de nombreuses installations (climatiseur, séchoir, distillateur, échangeurs de matière, refroidissement par film, etc..) passe par une évaluation précise des échanges thermique et massique lors de l’évaporation et/ou de la condensation. Ainsi de nombreux travaux sont apparus concernant l’évaporation et la condensation sur des surfaces planes et des tubes et avec et sans films ruisselant. Les études effectuées ont permis de mettre en évidence, dans le cas de l’évaporation de l’eau, l’existence d’une température d’inversion au dessus de laquelle le taux d’évaporation augmente avec l’humidité. L’existence de cette température d’inversion représente un intérêt pratique dans certains procédés industriel tels que le séchage.<br>

En effet, on peut, pour des températures supérieures à la température d’inversion, effectuer le séchage en boucle fermée, ce qui conduira à d’importantes  économies d’énergie.<br>

Au niveau du Laboratoire, nous avons mené numériquement des travaux concernant l’évaporation par convection naturelle, mixte et forcée  sur une plaque plane. Ces études sont effectuées sous les hypothèses de couche limite et en tenant compte du rayonnement et de l’effet de l’existence d’un film ruisselant. Des résultats concernant l’effet des différents paramètres de contrôle ont été obtenus. La sensibilité de la température d’inversion au débit et à la température du film et à la pression de l’air a été déterminée.<br> 
Il ressort de l’étude bibliographique que :
                                    <ul><li>La température d’inversion pour la condensation de l’eau n’a pas fait l’objet de recherche.</li>
									<li>Quasiment tous les travaux théoriques  sur l’évaporation et la condensation sont effectués sous les hypothèses de couches limites.</li></ul>
 

 </p>

                                    <h4>Objectifs du programme de recherche:  </h4>
								
								<ul><li>Maîtriser et comprendre les  mécanismes régissant les transferts combinés de chaleur et de masse au cours de l ‘évaporation et/ou de la condensation. Une attention particulière sera accordée à l’existence de la température d’inversion pour la condensation de l’eau.</li>
								    <li>Mettre en place des moyens fiables d’investigation des transferts combinés de chaleur et de masse lors de l’évaporation et de la condensation. Nous envisageons mettre en place des outils théoriques moins restrictifs applicables  lorsque les hypothèses de couches  limites ne sont pas valables.</li>
									<li>Utiliser les outils mis en place et les connaissances acquises pour concevoir et réaliser des évaporateurs et des condenseurs. Le laboratoire participe par la réalisation d’un évaporateur dans un projet de recherche fédéré sur le dessalement solaire.</li>
									
								</ul>
                              <h4>Méthodologie et approche envisagées pour la réalisation du programme de recherche: </h4>
								<p>Afin de vérifier l’existence de la température d‘inversion pour la condensation, nous envisageons déterminer l’évolution du taux de condensation en fonction de l’humidité à différentes températures. Nous disposons actuellement d’un code numérique, par différences finies, qui permet de simuler , sous les hypothèses de couches limites l’évaporation et la condensation sur une plaque plane.<br>

Nous avons également un autre code numérique basé sur les méthodes de volume de contrôle à base d’éléments finis qui permet de simuler en formulation elliptique  l’évaporation et la condensation lorsque la température pariétale ou la concentration en vapeur sont imposées. Nous envisageons rendre ce code plus rapide et l’étendre aux  cas ou le flux de chaleur est imposé, la température et la concentration en vapeur étant inconnues.<br>

Les connaissances acquises et les outils mis en place seront utilisés pour concevoir et réaliser des évaporateurs et des condenseurs.</p>
								<h4>Opportunités de valorisation des résultats de recherche:</h4>
								Les résultats obtenus et les outils mis en place peuvent servir pour :

								<ul><li>Réduire le coût et   la consommation énergétique de plusieurs installations industrielles,</li>
									<li>Maîtriser certains types d’installations de dessalement,</li>
									<li>Maîtriser  la technologie des évaporateurs et des condenseurs.</li>
								</ul>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingFour">
								<span class="mb-0">
							<a data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							 <i class="fa fa-angle-double-right mr-3"></i>Etude du contrôle des écoulements.
							</a>
						  </span>
							</div>
							<div id="collapseFour" class="collapse fade" aria-labelledby="headingFour" data-parent="#accordionExample">
								<div class="card-body text-justify">
									<p>Le contrôle des écoulements revêt à l’heure actuelle un intérêt croissant pour les scientifiques et les ingénieurs de la Mécanique des Fluides. La quantité de travaux récents sur le sujet donne une idée de cet intérêt, certains chercheurs vont jusqu’à classer le contrôle d’écoulement comme une discipline scientifique à part entière.<br>

Le contrôle peut s’appliquer à la paroi ou à distance. A la paroi, pour contrôler un écoulement on peut agir sur des paramètres comme la rugosité, la forme, la courbure, le mouvement de la paroi rigide, la température et la porosité. Chauffer et refroidir la paroi peut notamment influencer l’écoulement par les variations de la viscosité et de la densité résultantes. Le transfert de masse peut avoir lieu à travers une paroi poreuse ou une paroi avec des fentes : aspiration ou injection de fluide peuvent avoir des effets considérables sur l’écoulement, en influençant en particulier la forme du profil de vitesse près de la paroi et donc la susceptibilité de la couche limite à la transition et au décollement. Différents additifs, tels que des polymères, micro-bulles, gouttelettes, particules, poussières ou fibres, peuvent aussi être injectés à travers la surface, dans l'eau ou l'air du milieu ambiant. Les moyens de contrôle non localisés peuvent être des appareils de génération de vortex, des ondes acoustiques ou des forces électromagnétiques, qui agissent à distance sur une couche de cisaillement.<br>

Un appareil de contrôle peut être passif, n'exigeant aucun apport d’énergie, ou actif, exigeant une dépense d'énergie. Le contrôle actif est divisé en prédéterminé ou réactif. Le contrôle prédéterminé fournit  de l'énergie à l'entrée du système en préjugeant en avance l'état particulier de l’écoulement. La boucle de commande dans ce cas est ouverte et aucune sonde n’est exigée. Dans le cas du contrôle réactif, l'entrée du contrôle est ajustée de façon continue. La boucle de commande dans ce cas peut être fermée (boucle d’asservissement : feed-back) ou ouverte (alimentation amont feed-forward). <br>
En ce qui nous concerne, nous utiliserons la technique des jets synthétiques, c’est-à-dire des jets pulsés pariétaux à débit moyen nul. Cette technologie de contrôle actif est basée sur l’utilisation de moteurs électrodynamiques. Elle donne la possibilité de faire varier l’amplitude et la fréquence des pulsations sur de larges gammes, ce qui permet une bonne adaptation aux caractéristiques des écoulements à contrôler.</p>
									<h4>Objectifs du programme de recherche:  </h4>
									<ul>
										<li>Mise en place d’un outil d’étude expérimentale du contrôle par jet synthétique des écoulements;</li>
										<li>Mise en place d’un outil d’étude expérimentale du contrôle par jet synthétique des écoulements;</li>
										<li>Etude numérique et expérimentale du contrôle des écoulements autour d’un obstacle ;</li>
									</ul>
                                  <h4>Méthodologie et approche envisagées pour la réalisation du programme de recherche:</h4>
									La partie numérique du programme proposé comporte plusieurs étapes :
                                  <ul><li>Simuler l’écoulement autour d’un obstacle dans le cas sans contrôle.</li>
									<li>Simuler le jet synthétique seul.</li>
									<li>Simuler le jet synthétique seul.</li>
									<li>Simuler l’écoulement  contrôlé.</li>
									</ul>
									La partie expérimentale du programme proposé comporte plusieurs phases:
									<ol>
									<li><strong>Mise en place du dispositif et campagne de mesure  par PIV de l’écoulement :</strong> </li>
									<ul>
										<li>Construction du dispositif expérimental pour la réalisation des mesures.</li>

                                        <li>Réalisation de campagnes de mesure de l’écoulement  par la technique de vélocimétrie par image de particules (PIV) pour  différents paramètres (fréquence d’excitation, vitesse débitante, amplitude du jet, déphasage, ….).  </li>
									</ul>
									<li><strong>Post-traitement des mesures :</strong></li>
									<ul>
										<li>Analyses statistiques.</li>
										<li>Identification des structures.</li>
										<li>Calcul de  la trajectoire des  particules.</li>
                                        <li> Extraction des modes à partir de la Décomposition Orthogonale en Modes Propres.</li>
									
										</ul>
										<li><strong>Analyse des résultats et synthèse :</strong> </li>
									<ul>
										<li> Mise en évidence de l’apport du contrôle.</li>

                                        <li>Détermination de l’effet de chaque phase de soufflage et d’aspiration du jet pulsé sur le mécanisme de contrôle.</li>
										<li>Détermination de l’importance du déphasage entre les excitations.</li>
									</ul>
									</ol>
									<h4>Opportunités de valorisation des résultats de recherche :</h4>
									Les résultats obtenus et les techniques mises en place, s’ils sont probants, permettront d’améliorer à faible coût les performances aérodynamique et énergétique de plusieurs systèmes et  installations.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingFive">
								<span class="mb-0">
							<a data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive"><em class="fa fa-angle-double-right mr-3"></em> Structures cohérentes dans les régions étroites de canaux composés. </a>
						  </span>
							</div>

							<div id="collapseFive" class="collapse  fade" aria-labelledby="headingOne" data-parent="#accordionExample">
								<div class="card-body text-justify">
									<p>
									Les écoulements dans les conduits non - circulaires exhibent des distributions et des variations de vitesse différentes de celles des écoulements dans les conduits circulaires. En particuliers, des phénomènes distincts ont été observés dans les canaux composés dont la section d’écoulement est formée d’une région relativement large et d’une région adjacente assez étroite. Des exemples de ce type de canaux composés incluent les faisceaux de tubes dans une configuration compacte, les canaux contenant des cavités longitudinales et les canaux contenant des ailettes parallèles à l’écoulement principal. Un fait très connu et qui illustre ces phénomènes distincts est l’observation expérimentale que les coefficients locaux de frottement et de transfert de chaleur par convection maintiennent, dans la région étroite, des valeurs relativement large et essentiellement indépendantes de la largeur de l’espace disponible pour l’écoulement. Les analyses de turbulence conventionnelles, basées sur le concept de transport local, ont été incapables de prédire ces observations. Au fait, l’absence d’explication précise a abouti à de nombreuses spéculations, parmi lesquelles la plus prometteuse semble être l’augmentation du mélange et du transport turbulent par la présence, dans la région étroite, de tourbillons quasi-périodiques à grande échelle.<br>

Des pulsations (elles n’ont pas été encore reconnues comme tourbillons) ont été observés en premier par Rowe et al [1974] dans la région étroite de l’écoulement dans un faisceau de tube. Par la suite, Hooper [1983], Hooper et Rehme [1984] et Möller [1991] ont conduits des études systématiques de ces pulsations dans différentes configurations de faisceaux de tubes. Ils ont conclu que la fréquence des pulsations augmente  avec le nombre de Reynolds et la diminution de la taille de la région étroite (c'est-à-dire l’espace entre deux tubes). Hooper et Rehme [1984] ont attribué la formation des pulsations à un mécanisme d’instabilité entre canaux parallèles, alors que Möller [1991] les a modelées comme une allée de tourbillons dans le fossé entre les tubes. Guellouz (membre de l’équipe de notre laboratoire) et Tavoularis [1995] ont présenté des mesures dans un conduit rectangulaire contenant une barre circulaire suspendue qui peut être déplacée pour ajuster l’espace entre la barre et la paroi inférieure du conduit. A partir de leurs mesures de spectre et de corrélations spatio-temporelles, ils ont montré que le phénomène périodique est une allé de tourbillons contrarotatifs qui sont transportés avec l’écoulement et dont les centres sont de part et d’autre du plan de symétrie. Ils ont aussi déterminé la vitesse de convection et l’espacement axial de ces tourbillons en fonction de la taille du fossé entre la barre et la paroi.<br>

Des structures similaires ont été observées dans d’autres types de conduits comme par exemple un canal contenant une cavité longitudinale, deux canaux rectangulaires relié par une fente mince (Meyer et Rehme [1994]) ou un conduit contenant deux ailettes ou huit ailettes (Meyer et Rehme [1995]).
Les principales conclusions de ces deux études se résument comme suit : les tourbillons sont présents même pour de faibles nombres de Reynolds, leur espacement axial est indépendant du nombre de Reynolds et leur vitesse de convection est approximativement égale à la moyenne de la vitesse minimale dans la région étroite et la vitesse au bord de cette région.<br>

La seule étude numérique de ces tourbillons est celle de Biemüller et al. [1996] qui a obtenu un accord qualitatif entre ses simulations LES et des résultats expérimentaux. 
Guellouz et Tavoularis [2000a,b] ont présenté pour la même configuration que [1995], en plus des mesures conventionnelles de la turbulence, la seule étude jusqu‘à maintenant utilisant la technique d’échantillonnage conditionnés dans un écoulement de ce type. Ils ont démontré que les tourbillons sont des structures cohérentes à grande échelle. Ils ont documenté leurs propriétés et expliquer leurs contributions et effets sur les contraintes turbulentes, le transfert de chaleur et le mélange. Ils ont aussi proposé un modèle physique pour ces structures.<br>

Les études citées ci-haut ont démontré au-delà de tout doute la présence et l’importance de structures cohérentes dans les régions étroites de canaux composés. Cependant, elles n’ont pas décrit adéquatement toutes les propriétés de ces structures. Une continuation logique serait d’élaborer des expériences dans différents canaux composés où les paramètres dynamiques et géométriques de l’écoulement seraient variés systématiquement pour étudier leurs influences sur la formation, la force, l’étendue et l’espacement des structures. Les autres points à élucider sont liés à l’origine des structures. En effet, les processus physiques qui mènent à la formation de ces structures doivent être reliés. Une étude méthodique devrait mener à l’énoncé d’un modèle unifié pour des familles de géométries. Sur le plan théorique, il serait très utile de développer des modèles et corrélations empiriques qui incorporent les effets des structures cohérentes.<br></p>
									<h4>Objectifs du programme de recherche: </h4>
									Le programme de recherche défini ici se propose d’étudier expérimentalement l’écoulement dans les canaux composés comprenant une région étroite. Son objectif général est d’améliorer la compréhension de la structure de l’écoulement en caractérisant les structures cohérentes qui s’y forment.<br>

Les contributions spécifiques de cette recherche peuvent se résumer comme suit :
									<ul>
									<li>Offrir une description temporelle et spatiale plus détaillée du champ de vitesse et surtout des structures cohérentes.</li>
									<li>Corréler les propriétés des structures cohérentes avec des paramètres géométriques et dynamiques de l’écoulement.</li>
									<li>Expliquer physiquement la raison de la formation des structures cohérentes.</li>
									<li>Evaluer la contribution des structures cohérentes au transport de quantité de mouvement et de chaleur. </li>
									</ul>
									<p>Le but ultime de la recherche est d’obtenir un modèle physique qui pourrait prédire avec précision l’écoulement, la transmission de chaleur et le transport de scalaire dans la région étroite des écoulements dans les canaux composés.</p>
									
									<h4>Méthodologie et approche envisagées pour la réalisation du programme de recherche:</h4>
									Afin d’atteindre nos objectifs définis, les configurations d’écoulement seront considérées avec une variation des paramètres géométriques et dynamiques suivants :
									<ul>
									<li>Deux types de canaux composés seront employés. Une première famille  contenant deux ailettes ou plus (obtenue pratiquement en introduisant des ailettes dans la soufflerie de l’ENIM) et une deuxième famille formée par deux sous canaux rectangulaires reliés par une fente mince (obtenue en insérant une ou deux barres de section rectangulaire pour diviser la section du canal à eau de l’ENIM en deux sous canaux reliés à travers l’espace entre la barre et la paroi du canal ou entre les barres). Ces sections ont été choisies pour compléter l’information déjà obtenue dans les études précédentes. Elles permettent l’étude de cas fondamentaux distincts de symétrie et d’asymétrie de l’écoulement.</li>
									<li>Les mesures seront prises pour les écoulements établis, bien que la région de développement sera étudiée pour élucider l’origine de la formation des structures cohérentes.</li>
									<li> La longueur et l’espacement des ailettes (respectivement largeur et hauteur de la fente) seront variés pour toutes les géométries étudiées.</li>
									<li>Le nombre de Reynolds sera varié pour couvrir les régimes d’écoulement laminaires et turbulents.</li>
									<li>La taille des sous-canaux ne sera pas variée. On ne prévoit aucun effet pour le rapport des tailles des sous-canaux et de la fente (ou de l’espace entre les ailettes) utilisé.</li>
									<li> L’anémométrie à fils-chauds sera employée pour les mesures dans la soufflerie, tandis que la technique de PIV (Particle Image Velocimetry) sera employée dans le canal à eau.</li>
									<li>Le dépouillement des données utilisera les techniques statistiques usuelles d’étude de la turbulence et d’autres techniques pour le traitement des structures cohérentes comme l’échantillonnage conditionné et la décomposition orthogonale propre (POD).</li>
									<li>Pour l’étude de la contribution des structures au transport de scalaire, il est envisageable (si le temps et le budget le permettent) de mesurer la concentration d’hélium injecter isocinétiquement à partir de sources ponctuelles dans l’écoulement.</li>
									
									</ul>
									<h4>Opportunités de valorisation des résultats de recherche:</h4>
									Outre la publication dans les journaux techniques et la présentation dans des conférences spécialisées des résultats de ce programme de recherche, un effort spécial sera fourni pour attirer l’attention d’industriels susceptibles de bénéficier des résultats de la recherche ou du savoir faire qu’elle a contribué à accumuler. Il est possible que des projets plus appliqués en découlent.
								</div>
							</div>
						</div>
							<div class="card">
							<div class="card-header" id="headingSix">
								<span class="mb-0">
							<a  data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix"><em class="fa fa-angle-double-right mr-3"></em> Transfert radiatif. </a>
						  </span>
							</div>

							<div id="collapseSix" class="collapse  fade" aria-labelledby="headingOne" data-parent="#accordionExample">
								<div class="card-body text-justify">
									<p>
									Un bon dimensionnement des installations industrielles opérant à haute température (chaudières, chambre de combustion, échangeurs de chaleur, capteur solaire, réacteurs nucléaires…) et la compréhension de plusieurs phénomènes physiques tel que l’effet de serre (échauffement climatique) exigent une prédiction précise de l’écoulement et des transferts de chaleur et de masse, et en particulier  le transfert radiatif dans ces systèmes. Par conséquent, plusieurs investigations expérimentales et numériques, décrivant ces mécanismes de transferts et d’écoulement ont été effectuées. Pour ces raisons, plusieurs méthodes ont été développées pour résoudre l’équation de transfert radiatif (ETR). Parmi ces méthodes nous pouvons cité la Méthode des Zones, la méthode de Monte Carlo, la Méthode des Ordonnées Discrètes, la Méthode des Volumes Finis (MVF), la Méthode des Volumes de Contrôle à base d'Éléments Finis (MVCEF).<br>

Il ressort de l’étude bibliographique que nous avons effectuée, que les méthodes existantes pour la prédiction du transfert radiatif présentent les inconvénients suivantes : (i) une non compatibilité avec les méthodes utilisées pour la dynamique des fluides et le transfert de la chaleur par convection et par conduction; (ii) une flexibilité très limitée  pour les configurations réelles (géométries complexes); et (iii) un  temps de calcul long et l’espace mémoire très important. Par conséquent, et très récemment plusieurs chercheurs se sont intéressés à la mise en place de nouvelles techniques permettant de contourner ces difficultés.<br>

Les investigations au sein du LESTE concernant ce problème de transfert radiatif ont permis dans une première étape de développer un code de résolution numérique de l’ETR basé sur les méthodes de volumes de contrôle à base d’éléments finis  en maillages structurés dans des configurations bidimensionnelles cartésiennes (2D Cartésien). Dans une seconde étape, nous avons étendu le modèle développé aux configurations géométriques complexes par l’utilisation de maillages non-structurés. Le code mis en place nécessite, peu de temps de calcul, CPU,  et ne présente pas  d’oscillations numériques. De plus, un bon accord est obtenu entre les résultats trouvés et ceux de la littérature.<br>

</p>
									<h4>Objectifs du programme de recherche: </h4>
									Nous nous proposons de faire l’extension de l’outil numérique déjà développé aux problèmes de transferts radiatifs pour les configurations axisymétriques et pour les configurations tridimensionnelles (3D). D’autre part, nous nous proposons de mettre à la disposition des chercheurs un logiciel documenté facile à intégrer dans les autres codes de calcul. <br>

Méthodologie et approche envisagées pour la réalisation du programme de recherche:
									<ul>
									<li>Adaptation du mailleur déjà développé dans le cas 2D cartésien aux configurations axisymétriques.</li>
									<li> Discrétisation de l’ETR en se basant sur les méthodes de volumes de contrôle à base d’éléments finis  en maillages non- structuré dans des configurations axisymétriques.</li>
									<li>Extension du code de calcul numérique pour la prédiction du transfert radiatif dans plusieurs configurations géométriques axisymétriques.</li>
									<li>Validation du code de calcul. </li>
									<li>Elaboration d’un mailleur pour les configurations  tridimensionnelles.</li>
									<li>Discrétisation de l’ETR en se basant sur les méthodes de volumes de contrôle à base d’éléments finis  en maillages non- structuré pour des configurations tridimensionnelles.</li>
									<li>Extension du logiciel de calcul au configurations  tridimensionnelles et validation.</li>
									</ul>
									<h4>Opportunités de valorisation des résultats de recherche:</h4>
									<ul><li>Le logiciel mis en place peut être commercialisé.</li>
									<li>Les résultats obtenus et le code mis en place permettront de réduire la consommation énergétique de plusieurs installations</li></ul>
									

 
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
		
	</div>
</div>
<!-- .// Accordion -->
			 
</p>
	
	<!-- Card Wider -->
	
	
	
	
	
	
	
	
	</div>


	
  <?php
	include('footer.php');
?><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/sticky/sticky.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

	<script>
	var offset = 0;
    var count = $(".slide-item-wrapper > * > *").length;
		var interval = setInterval(slideSwitch, 3000);

		
	function slideSwitch() {
	
    offset = (offset - 220) % (count * 220); // 104px div height (incl margin)
    $(".slide-item-wrapper > *").css({
      "transform": "translateY(" + offset + "px)",
    },3000);
  };
    


    
    $(".slide-item-wrapper li").hover(function () {
        clearInterval(interval);
    }, function () {
        interval = setInterval(slideSwitch, 3000); 
    });

 $("a.next").click(function(){
 
     
	offset = (offset + 220) % (count * 220); // 104px div height (incl margin)
    $(".slide-item-wrapper > * ").css({
      "transform": "translateY(" + offset + "px)",
    },3000);
  }); 

$("a.previous").click(function(){
 
     
	offset = (offset - 220) % (count * 220); // 104px div height (incl margin)
    $(".slide-item-wrapper > * ").css({
      "transform": "translateY(" + offset + "px)",
    },3000);
  }); 
	</script>
	<!--
		
		<script>
	var offset = 0;
    var count = $(".slide-item-wrapper > * > *").length;
		var interval = setInterval(slideSwitch, 3000);

		
	function slideSwitch() {
	
    offset = (offset - 200) % (count * 200); // 104px div height (incl margin)
    $(".slide-item-wrapper > *").css({
      "transform": "translateY(" + offset + "px)",
    },3000);
  };
    


    
    $(".slide-item-wrapper li").hover(function () {
        clearInterval(interval);
    }, function () {
        interval = setInterval(slideSwitch, 3000); 
    });

 $("a.next").click(function(){
 
     
	offset = (offset - 200) % (count * 200); // 104px div height (incl margin)
    $(".slide-item-wrapper > * ").prev().css({
      "transform": "translateY(" + offset + "px)",
    },3000);
  }); 
		</script>
		-->
		   
	

<script>
	//rotation speed and timer
	var speed = 5000;
	var run = setInterval('rotate()', speed);	
	
	//grab the width and calculate left value
	var item_width = $('#slides li').outerWidth(); 
	var left_value = item_width * (-1); 
        
    //move the last item before first item, just in case user click prev button
	$('#slides li:first').before($('#slides li:last'));
	
	//set the default item to the correct position 
	$('#slides ul').css({'left' : left_value});

    //if user clicked on prev button
	$('#prev').click(function() {

		//get the right position            
		var left_indent = parseInt($('#slides ul').css('left')) + item_width;

		//slide the item            
		$('#slides ul').animate({'left' : left_indent}, 200,function(){    

            //move the last item and put it as first item            	
			$('#slides li:first').before($('#slides li:last'));           

			//set the default item to correct position
			$('#slides ul').css({'left' : left_value});
		
		});

		//cancel the link behavior            
		return false;
            
	});

 
    //if user clicked on next button
	$('#next').click(function() {
		
		//get the right position
		var left_indent = parseInt($('#slides ul').css('left')) - item_width;
		
		//slide the item
		$('#slides ul').animate({'left' : left_indent}, 200, function () {
            
            //move the first item and put it as last item
			$('#slides li:last').after($('#slides li:first'));                 	
			
			//set the default item to correct position
			$('#slides ul').css({'left' : left_value});
		
		});
		         
		//cancel the link behavior
		return false;
		
	});        
	
	//if mouse hover, pause the auto rotation, otherwise rotate it
	$('#slides').hover(
		
		function() {
			clearInterval(run);
		}, 
		function() {
			run = setInterval('rotate()', speed);	
		}
	); 
        


//a simple function to click next link
//a timer will call this function, and the rotation will begin :)  
function rotate() {
	$('#next').click();
}
	
	</script>

	
<!--
  <script>
	   var offset = 0;
var count = $(".slide-item-wrapper > ul.timeline ").length;
	function slideSwitch() {
		
  
    offset = (offset - 200) % (count * 200); // 104px div height (incl margin)
    $(".slide-item-wrapper > *").css({
      "transform": "translateY(" + offset + "px)",
    },3000);
  };
    

$(function () {
    var interval = setInterval(slideSwitch, 3000);

    $(".slide-item-wrapper > ul.timeline > li").hover(function () {
        clearInterval(interval);
    }, function () {
        interval = setInterval(slideSwitch, 3000); 
    });
  $(".next").click(function () {
        $(".slide-item-wrapper > *").css({
      "transform": "translateY(" + offset + "px)"})
    
});	
	
	</script>-->
	<!--
   <script>
	function slideSwitch() {
		
    var offset = 0;
var count = $(".slide-item-wrapper > * > *").length;
    offset = (offset - 200) % (count * 200); // 104px div height (incl margin)
    $(".slide-item-wrapper > *").css({
      "transform": "translateY(" + offset + "px)",
    },3000);
  };
    

$(function () {
    var interval = setInterval(slideSwitch, 3000);

    $(".slide-item-wrapper li").hover(function () {
        clearInterval(interval);
    }, function () {
        interval = setInterval(slideSwitch, 3000); 
    });

});	
	</script>

-->
	
<!--	
<script>
$(function () {
   
var offset = 0;
var count = $(".slide-item-wrapper > ul.timeline ").length;
	var interval = setInterval(slideSwitch, 3000);
    $(".next").click(function () {
		clearInterval(interval);
        offset = (offset - 200) % (count * 200); // 104px div height (incl margin)
    $(".slide-item-wrapper > ul.timeline  " ).css({
      "transform": "translateY(" + offset + "px)",
    });
    });

});	
	</script>
	-->
	
	<!--
<script>
	
	$(document).ready(function () {

    function move(direction) {
        var carousel = $('#carousel ul');
        if (!carousel.is(':animated')) {
            if (direction === 'left') {
                carousel.animate({
                    marginTop: 280
                }, 1000, function () {
                    carousel.find("li:last").after(carousel.find("li:first"));
                    carousel.css('marginTop',0);
                });
            } else {
                carousel.find('li:first').before(carousel.find('li:last'));
                carousel.css('marginTop', '-280px').animate({
                    marginTop: 0
                }, 1000);
            }
        }
    }

    var t = setInterval(function () {
        move('left');
    }, 5000);

    $('#left').click(function () {
        move('top');
    });

    $('#right').click(function () {
        move('buttom');
    });
});
	</script>
-->
	<!--
	<script>
	$(document).ready(function () {

    $('.btn-vertical-slider').on('click', function () {
        
        if ($(this).attr('data-slide') == 'next') {
            $('#myCarousel2').carousel('next');
        }
        if ($(this).attr('data-slide') == 'prev') {
            $('#myCarousel2').carousel('prev')
        }


    });
});
	</script>

-->
<script>
$(document).ready(function(){
	$('#nav-icon1').click(function(){
		$(this).toggleClass('open');
	});
});
</script>
</body>
</html>
