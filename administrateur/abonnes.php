<?php
 session_start();
 require("auth.php");
 if(Auth::isLogged())
 {
 }
 else {header('Location:index.php');
	 }
  if(isset($_SESSION['Auth']))
	{ 
		extract($_POST);
		$pseudo=$_SESSION['Auth']['login'];
		$pass=$_SESSION['Auth']['mot_de_passe'];
	$log=$_SESSION['Auth']['name'];
	
	}
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Liste des abonnés</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="#"><h4>Champions Factory</h4></a>
          <a class="navbar-brand brand-logo-mini" href=""><h3>C F</h3></a>
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
                
                <a class="dropdown-item" href="../logout.php">
                  <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
              </div>
            </li>
           
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
         <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="assets/images/faces/user-profil.jpg" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2"><?php echo $log ?></span>
                  <span class="text-secondary text-small">Administrateur</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="administrateur.php">
                <span class="menu-title">Accueil</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="abonnes.php">
                <span class="menu-title">Liste des abonnés</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Gestionnaire.php">
                <span class="menu-title">Liste des gestionnaires</span>
                <i class="mdi mdi-account-multiple menu-icon"></i>
              </a>
            </li>
            
			
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row" id="proBanner">
              
            </div>
            
            <div class="row">
              <div class="col-12  grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h3>Liste des abonnés</h3>
							
  
    <!-- Modal -->
	
    <div id="myModal" class="modal fade " role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            
            <h2 class="modal-title text-center">Informations</h2>
			 <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
    <div class="modal-body">

              <div class="row">
		 <div class="col-md-6">
			  <div class="form-group">
                <label>Nom</label>
                <input type="text" id="name" class="form-control">
              </div>
			  </div>
				  <div class="col-md-6">
              <div class="form-group">
                <label>Email</label>
                <input type="text" id="email" class="form-control">
              </div>
					  </div>
					  <div class="col-md-6">
			  <div class="form-group">
                <label>Téléphone</label>
                <input type="text" id="telephone" class="form-control">
              </div>
					</div>	
					 <div class="col-md-6">
			  <div class="form-group">
                <label>date de début</label>
                <input type="date" id="date_debut" class="form-control">
              </div>
					</div>
					<div class="col-md-6">
			  <div class="form-group">
                <label>date de fin</label>
                <input type="date" id="date_fin" class="form-control">
              </div>
			   
				  <input type="hidden" id="userId" class="form-control">
				<input type="hidden" id="user_id" class="form-control">	
				<input type="hidden" id="categorie" class="form-control">
				 </div>
			    <div class="col-md-6">
			  <div class="form-group">
                <label>login</label>
                <input type="text" id="login" class="form-control">
              </div>
					</div>
                                   
                <div class="col-md-6">
			  <div class="form-group">
                <label>Mot de passe</label>
                <input type="password" id="mot_de_passe" class="form-control">
              </div>
					</div>
              
          </div>
          <div class="modal-footer">
            
            <a href="#" id="save" class="btn btn-primary pull-right">Modifier</a>
			<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Fermer</button>
          </div>
        </div>

      </div>
    </div>
	
					  
					</div>
					 <div id="inserted_item_data"> </div>
                  </div>
                </div>
              </div>
              
            </div>
            
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- End custom js for this page -->
	   <script>
$(document).ready(function(){
	function fetch_item_data()
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   success:function(data)
   {
    $('#inserted_item_data').html(data);
   }
  });
 }	
fetch_item_data();	
//  update
      $(document).on('click','a[data-role=update]',function(){
            var id  = $(this).data('id');
            var name  = $('#'+id).children('td[data-target=name]').text();
            var email  = $('#'+id).children('td[data-target=email]').text();
			var telephone  = $('#'+id).children('td[data-target=telephone]').text();
			var date_debut  = $('#'+id).children('td[data-target=date_debut]').text();
            var date_fin  = $('#'+id).children('td[data-target=date_fin]').text();
			var categorie  = $('#'+id).children('td[data-target=categorie]').text();
			var login  = $('#'+id).children('td[data-target= login]').text();
			var mot_de_passe  = $('#'+id).children('td[data-target= mot_de_passe]').text();
			var user_id  = $('#'+id).children('td[data-target= user_id]').text();
            $('#name').val(name);
			$('#email').val(email);
			$('#telephone').val(telephone);
			$('#date_debut').val(date_debut); 
            $('#date_fin').val(date_fin);
            $('#categorie').val(categorie);
			$('#login').val(login);
			$('#mot_de_passe').val(mot_de_passe);
            $('#userId').val(id);
			$('#user_id').val(user_id);
			
            $('#myModal').modal('toggle');
      });
	  
	       $('#save').click(function(){
          var id  = $('#userId').val(); 
          var name =  $('#name').val();
		  var email =   $('#email').val();
		  var telephone =   $('#telephone').val();
		  var date_debut =   $('#date_debut').val();
          var date_fin =  $('#date_fin').val();
          var login =    $('#login').val();
		  var mot_de_passe =    $('#mot_de_passe').val();
          var categorie =    $('#categorie').val();
		  var user_id =    $('#user_id').val();
          $.ajax({
              url      : 'connect.php',
              method   : 'post', 
              data     : {name : name , email: email , telephone : telephone , date_debut : date_debut , date_fin : date_fin , categorie : categorie , login : login ,
			  mot_de_passe : mot_de_passe , id : id , user_id : user_id },
              success  : function(response){
                            // now update  
                             $('#'+id).children('td[data-target=name]').text(name);
							 $('#'+id).children('td[data-target=email]').text(email);
							 $('#'+id).children('td[data-target=telephone]').text(telephone);
							 $('#'+id).children('td[data-target=date_debut]').text(date_debut);
							 $('#'+id).children('td[data-target=date_fin]').text(date_fin);
							 $('#'+id).children('td[data-target=categorie]').text(categorie);
                             $('#'+id).children('td[data-target=login]').text(login);
                             $('#'+id).children('td[data-target=mot_de_passe]').text(mot_de_passe);
                             $('#myModal').modal('toggle'); 

                         }
          });
       });


 
 
 

 
 

 
}); 

  
 </script>
  </body>
</html>