<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
 
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
	 
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-hover-dropdown/2.2.1/bootstrap-hover-dropdown.min.js"></script>
  <!-- Favicons -->
  <!--<link href="img/favicon.png" rel="icon">-->
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
 <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/scrolling-nav.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
			

  <!-- Main Stylesheet File -->
	<link href="css/style.css" rel="stylesheet">
  <link href="css/style2.css" rel="stylesheet">
		<script>
		$(document).ready(function() {
			 $("#logsubmit").click(function(){
	
	var login = $("#login").val(); 
	var  mot_de_passe = $("#mot_de_passe").val();
	var dataString = 'login='+ login + '&mot_de_passe='+ mot_de_passe ;
	if( login==='' ||  mot_de_passe ==='' ){
		$("#error_message_log").html("Remplir tous les champs");
		
	}
	
	
 });
 
  $("#owl-demo").owlCarousel({
 
      autoPlay: 3000, //Set AutoPlay to 3 seconds
 
      items : 4,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
 
  });
 
});
		</script>
  <style>
.modal-login {		
	color:  rgba(0,0,0,1.00);
	max-width: 320px;
	font-weight: bold;
}
.modal-login .modal-content {
	padding: 20px;
	border-radius: 5px;
	border: none;
}
.modal-login .modal-header {
	border-bottom: none;   
	position: relative;
	justify-content: center;
}
.modal-login h4 {
	text-align: center;
	font-size: 26px;
	margin: 30px 0 -15px;
	font-weight: bold;
}
.modal-login .form-control:focus {
	border-color: #70c5c0;
}
.modal-login .form-control, .modal-login .btn {
	min-height: 40px;
	border-radius: 3px; 
}
.modal-login .close {
	position: absolute;
	top: -5px;
	right: -5px;
}	
.modal-login .modal-footer {
	background: #ecf0f1;
	border-color: #dee4e7;
	text-align: center;
	justify-content: center;
	margin: 0 -20px -20px;
	border-radius: 5px;
	font-size: 13px;
}
.modal-login .modal-footer a {
	color: #999;
}		
.modal-login .avatar {
	position: absolute;
	margin: 0 auto;
	left: 0;
	right: 0;
	top: -70px;
	width: 95px;
	height: 95px;
	border-radius: 50%;
	z-index: 9;
	background: rgba(150,26,61,1.00);
	padding: 15px;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.5);
}
.modal-login .avatar img {
	width: 100%;
}
.modal-login.modal-dialog {
	margin-top: 80px;
}
.modal-login .btn, .modal-login .btn:active {
	color: #fff;
	border-radius: 4px;
	background:  rgba(150,26,61,1.00) !important;
	text-decoration: none;
	transition: all 0.4s;
	line-height: normal;
	border: none;
}
.modal-login .btn:hover, .modal-login .btn:focus {
	background:  #aa0201 !important;
	outline: none;
}
.trigger-btn {
	display: inline-block;
	margin: 100px auto;
}

	  
	  
	  
	  
	  
	  
	  
	  .modal{
		  background: rgba(0,0,0,.50)
	  }
   
  
#owl-demo .item{
  margin: 3px;
}
#owl-demo .item img{
  display: block;
  width: 100%;
  height: auto;
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
	<script>
		
	</script>	
</head>
	<!--<section id="topbar" class="d-xs-block d-sm-block d-md-block d-lg-block">
    <div class="container clearfix">
		
      <div class="contact-info float-left">
		  Universit?? de Monastir<br><br>
		 Ecole nationale d'ing??nieurs de Monastir<br>
        
      
      </div>
      <div class="social-links float-right">
		  
<input type="text" id="search" name="search" autocomplete="on"/>
 
		  <a href="#" ><i class="ion ion-log-in"></i> Login </a>
		 
        <div class="btn-group ">
  <div  type="button" class="btn btn-success btn-sm">fr</div>
  <button type="button" class="btn btn-sm  dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">fr</span>
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item-xs " href="#">Fr</a>
    <a class="dropdown-item-xs" href="#">Eng</a>
  </div>
</div>
        
      </div>
    </div>
</section> -->


<header id="header" class="sticky bg-white">
	 <div class="container-fluid">

     
      <div id="logo" class="pull-left pl-lg-5 d-flex  ">
		  <div class="pr-2 "><img src="img/logo-header.png"  ></div>
		  <div class="hidden-xs hidden-sm" ><h2 >LABORATOIRE D'??TUDES </h2><h6>DES SYST??MES THERMIQUES ET ??NERG??TIQUES</h6></div>
        <a href="#body" class="scrollto ">
		</a>
			
        
      </div>

      <nav id="nav-menu-container">
		  
        <ul class="nav-menu">
			<li class="menu-active "><a href="index.php">Accueil</a></li>
          <li class=" menu-has-children"><a>Pr??sentation</a>
            <ul>
              <li><a href="presentation.php">Pr??sentation du labo</a></li>
              <li><a href="equipements.php">??quipements</a></li>	
			  <li><a href="#">Galerie de photos</a></li>	
            </ul>
          </li>	
		   <li class=" "><a href="membres.php">Membres du labo</a>
            
          </li>	
		 
		<li class="menu-has-children "><a href="">Th??mes de recherche</a>
            <ul>
			
              <li><a href="Th??mes-de-recherche.php">Pr??sentation g??n??rale</a></li>
              <li><a href="Mat??riaux_pour_l'??nergie.php">Mat??riaux pour l?????nergie</a></li>
			  <li><a href="Mileux_h??t??rog??nes.php">Milieux h??t??rog??nes</a> </li>
			  <li><a href="aerothermodynamique.php">A??rothermodynamique</a> </li>
			  <li><a href="Modelisation_et_optimisation_des_syst??mes_??nerg??tiques.php">Mod??lisation et optimisation des syst??mes ??nerg??tiques</a> </li>
			  <li><a href="combustion.php">Combustion</a> </li>
            </ul>
          </li>
		<li class="menu-has-children "><a href="">Production scientifique</a>
            <ul>
			
              <li><a href="production.php">Production scientifique</a></li>
              <li><a href="articles&communications.php">Articles & communications </a></li>
			  <li><a href="diplomes_soutenus.php">Dipl??mes soutenus</a> </li>
			  
			  
            </ul>
          </li>
			<li class="menu-has-children "><a>Projets de recherche</a>
            <ul>
			
              <li><a href="projets de recherche.php">Pr??sentation g??n??rale</a></li>
              <li><a href="cooperation.php">coop??rations</a></li>
			  			  
            </ul>
          </li>
		<li class="nav-item menu-has-children "><a href="">Activit??s du labo</a>
            <ul>
			
              <li><a href="activit??s du labo.php">journ??es & manifestations </a></li>
              <li><a href="#">galerie de photos</a></li>
			  			  
            </ul>
          </li>		
		
		
  <li class="menu-has-children "><a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#myModal">Login</a>
</li>
		  
			
		</ul>
      </nav><!-- #nav-menu-container -->
    </div>
</header>
	
<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">
				<div class="avatar">
					<img src="images/avatar.png" alt="Avatar">
				</div>				
				<h4 class="modal-title">Member Login</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				
					<div class="form-group">
						<input id="login" name="login" type="text" class="form-control" placeholder="Username" required="required">		
					</div>
					<div class="form-group">
						<input id="mot_de_passe" name="mot_de_passe"  type="password" class="form-control" placeholder="Password" required="required">	
					</div>        
					<div class="form-group">
						<input type="submit" class="btn btn-primary btn-lg btn-block login-btn" id="logsubmit" name="logsubmit" value="Log_in">
						
					</div>
				
			</div>
			<div class="modal-footer">
				<div class="col-md-12 col-sm-12">
								  <div id="error_message_log" class="text-center"></div>
								  </div>
			</div>
		</div>
	</div>
</div>    
	
	
	<script src="js/custom.js"></script>
<body>
	
	</body>
</html>