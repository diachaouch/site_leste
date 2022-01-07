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
		  Université de Monastir<br><br>
		 Ecole nationale d'ingénieurs de Monastir<br>
        
      
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

<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="administrateur.php"><h4>LABO LESTE</h4></a>
          <a class="navbar-brand brand-logo-mini" href=""><h3>LESTE</h3></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
            
          </div>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="assets/images/faces/user-profil.jpg" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black"><?php echo $log ?></p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                
                <a class="dropdown-item" href="logout.php">
                  <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
              </div>
            </li>
           
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>

<body>
	
	</body>
</html>