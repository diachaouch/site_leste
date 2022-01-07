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
    <title>Liste des rendez-vous</title>
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
          <a class="navbar-brand brand-logo" href="Gestionnaire.php"><h4>Cabinet Dr. Sameh Derbali</h4></a>
          <a class="navbar-brand brand-logo-mini" href="Gestionnaire.php"><h3>C S D</h3></a>
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
              <a class="nav-link" href="Gestionnaire.php">
                <span class="menu-title">Accueil</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="patient.php">
                <span class="menu-title">Liste des patients</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="rendez-vous.php">
                <span class="menu-title">Liste des rendez-vous</span>
                <i class="mdi mdi-account-multiple menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="messages.php">
                <span class="menu-title">Liste des messages</span>
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
                    <h3>Liste des messages</h3>
					<div class="table">
					   
	
					 


  
    <!-- Modal -->
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
		 <div class="col-md-12">
			  <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" id="name" class="form-control" disabled>
              </div>
			  </div>
		  <div class="col-md-12">
			  <label for="contenu">Message</label>
                                       
                                        <textarea class="form-control" rows="5" id="contenu" name="contenu" style="resize: vertical"></textarea>
					</div>		  
							  <div class="col-md-6">
			 
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
   url:"php/fetchmsg.php",
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
            var conternu  = $('#'+id).children('td[data-target=conternu]').text();
			
			
            $('#myModal').modal('toggle');
      });
	  
	       $('#save').click(function(){
          var id  = $('#userId').val(); 
          var date =  $('#date').val();
          $.ajax({
              url      : 'php/updatemsg.php',
              method   : 'post', 
              data     : {date : date , id : id },
              success  : function(response){
                            // now update  
                            
                             $('#'+id).children('td[data-target=date]').text(date);
                             $('#myModal').modal('toggle'); 

                         }
          });
       });
	  

 $("#submit").click(function(){
	
	var name = $("#data1").val();
	var email = $("#data2").val();
	var telephone = $("#data3").val();
	var login = $('#data4').val();
	var mot_de_passe = $('#data5').val();
	var dataString = 'name='+name +'&email='+ email + '&telephone='+ telephone + '&login='+ login + '&mot_de_passe='+ mot_de_passe ;
	if( name=='' ){
		$("#display").addClass("alert alert-danger").html("Remplir tous les champs");
		
	}
	else{
		
		$.ajax({
     url:"insert_user.php",
     method:"POST",
     data: dataString,
	 cache:false,
     success:function(result)
     {
		 
     /* $("#display").html(result);*/
	  $.ajax({
     url:"insert_patient.php",
     method:"POST",
     data: dataString,
	 cache:false,
     success:function(result)
     {
		 
      $("#display").addClass("alert alert-success").html(result);
	  fetch_item_data();
			$('#data1').val('');
			$('#data2').val('');
			$('#data3').val('');
			$('#data4').val('');
            $('#data5').val('');			
            
      	
	 /* $("#user_dialog input").val('');*/
     }
	
    });
     }
	
    });	
		
		
	
	
	}
	
 });
 
 

 
 

 
}); 

  
 </script>
  </body>
</html>