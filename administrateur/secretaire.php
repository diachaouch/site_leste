<?php
 
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Secretaire</title>
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
          <a class="navbar-brand brand-logo" href="Gestionnaire.php"><h3>Bienvenue</h3></a>
          <a class="navbar-brand brand-logo-mini" href="Gestionnaire.php">CSD</a>
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
                  <p class="mb-1 text-black"></p>
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
                  <span class="font-weight-bold mb-2"></span>
                  <span class="text-secondary text-small">Secretaire</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="secretaire.php">
                <span class="menu-title">Accueil</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Emploi du temps</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-calendar menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="calendar.php">Emploi du temps</a></li>
                  <li class="nav-item"> <a class="nav-link" href="rattrapage.php">Rattrapages</a></li>
                </ul>
              </div>
            </li>
			<li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-absence" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Absences</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-chart-pie menu-icon"></i>
              </a>
              <div class="collapse" id="ui-absence">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="absence.php">Absences</a></li>
                  <li class="nav-item"> <a class="nav-link" href="chart_absence.php">Statistique</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="enseignant.php">
                <span class="menu-title">Enseignants</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="etudiant.php">
                <span class="menu-title">Etudiants</span>
                <i class="mdi mdi-account-multiple menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">Paramètres génèrales</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-brightness-7 menu-icon"></i>
              </a>
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                 
                  <li class="nav-item"> <a class="nav-link" href="cours.php"> Type de cours </a></li>
                  <li class="nav-item"> <a class="nav-link" href="departement.php"> Départements </a></li>
                  <li class="nav-item"> <a class="nav-link" href="salle.php"> Salles </a></li>
                  <li class="nav-item"> <a class="nav-link" href="matiere.php"> Matières </a></li>
				  <li class="nav-item"> <a class="nav-link" href="filiere.php"> Filières </a></li>
				  <li class="nav-item"> <a class="nav-link" href="cycle.php"> Cycles </a></li>
				  <li class="nav-item"> <a class="nav-link" href="niveau.php"> Niveau </a></li>
                </ul>
              </div>
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
                    <h3>liste des patients</h3>
					<div class="table-responsive">
					 <div class="pull-right d-flex">
   
	<button type="button" name="add" id="add" class="btn btn-info" class="btn btn-info" data-toggle="collapse" data-target="#user_dialog">Ajouter un patient</button>
  
    </div> 
						<br/>
						<div class="container">
						<div id="user_dialog" title="Add Data" class="collapse">
			<div class="row">
	   <div class="col-md-6">
				<div class="form-group ">
					
					<input type="text" name="name" id="data1" class="form-control"  placeholder=" Nom *"/>
					<span id="error_first_name" class="text-danger"></span>
				</div>
				
				<div class="form-group ">
					
					<input type="email" name="email" id="data2" class="form-control" placeholder="Email *" />
					<span id="error_first_name" class="text-danger"></span>
				</div>
				<div class="form-group ">
					
					<input type="text" name="telephone" id="data3" class="form-control" placeholder="Téléphone *" />
					<span id="error_first_name" class="text-danger"></span>
				</div>
				
				
			</div>
			<div class="col-md-6">
			<div class="form-group  select-style">
				
					<select name="gouvernerat" id="data4" class="form-control" >
					<option disabled selected value="">gouvernerat </option>
					<option value="Tunis">Tunis</option>
					<option value="Monastir">Monastir</option>
					<option value="Mahdia">Mahdia</option>
					<option value="autre">autre</option>
					
					</select>
			</div>
				
			<div class="form-group  ">
									
					<input type="text" name="login" id="data5" class="form-control" placeholder="login *" />
					<span id="error_first_name" class="text-danger"></span>
				
			</div>
			<div class="form-group ">
									
					<input type="text" name="mot_de_passe" id="data6" class="form-control" placeholder="mot_de_passe *" />
					<span id="error_first_name" class="text-danger"></span>
				
			</div>
			
			
			    
			    
				
				<div class="form-group ">
					
					
					<button type="button" id="submit" class="btn btn-info btn-block" value="Inserer">Inserer </button>
				</div>
			</div>
			
	   </div>	
				
	   <div class="row form-group text-center">
		   <div class="container-fluid">
		   <div id="display"></div>
		   </div>
			
	   
	   </div>	
			
				
	            
				
		
	</div>
						</div>
					 


  
    <!-- Modal -->
     <div id="myModal" class="modal fade bd-example-modal-lg" role="dialog">
      <div class="modal-dialog modal-lg">

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
			  
              <div class="form-group">
                <label>Email</label>
                <input type="text" id="email" class="form-control">
              </div>
			  <div class="form-group">
                <label>Téléphone</label>
                <input type="text" id="telephone" class="form-control">
              </div>
			  
			  </div>
			  <div class="col-md-6">
			  
			  <div class="form-group">
                <label>Gouvernerat</label>
                
					<select  id="gouvernerat" class="form-control" >
					<option value="">Selectionner</option>
					<option value="Tunis">Tunis</option>
					<option value="Monastir">Monastir</option>
					<option value="Mahdia">Mahdia</option>
					<option value="autre">autre</option>
					
					</select>
              </div>
			  
			  <div class="form-group">
                <label>Login</label>
               <input type="text"  id="login" class="form-control" />
			  </div>
			  <div class="form-group">
                <label>Mot de passe</label>
               <input type="text"  id="mot_de_passe" class="form-control"  />
			  </div>
                <input type="hidden" id="userId" class="form-control">
				
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
	<div id="inserted_item_data"></div>
					  
					</div>
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
	   <script type="text/javascript" language="javascript" >
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
            var gouvernerat  = $('#'+id).children('td[data-target=gouvernerat]').text();
			var login  = $('#'+id).children('td[data-target= login]').text();
			var mot_de_passe  = $('#'+id).children('td[data-target= mot_de_passe]').text();
			
            $('#name').val(name);
			$('#email').val(email);
			$('#telephone').val(telephone);
            $('#gouvernerat').val(gouvernerat);
			$('#login').val(login);
			$('#mot_de_passe').val(mot_de_passe);
            
			
            $('#myModal').modal('toggle');
      });
	  
	       $('#save').click(function(){
          var id  = $('#userId').val(); 
          var name =  $('#name').val();
		  var email =   $('#email').val();
		  var telephone =   $('#telephone').val();
          var gouvernerat =  $('#gouvernerat option:selected').val();
		  var login =    $('#login').val();
		  var mot_de_passe =    $('#mot_de_passe').val();
          var categorie =    $('#categorie').val();

          $.ajax({
              url      : 'connection.php',
              method   : 'post', 
              data     : {name : name , email: email , telephone : telephone , gouvernerat : gouvernerat , login : login ,
			  mot_de_passe : mot_de_passe , id : id  },
              success  : function(response){
                            // now update  
                             $('#'+id).children('td[data-target=name]').text(name);
							 $('#'+id).children('td[data-target=email]').text(email);
							 $('#'+id).children('td[data-target=telephone]').text(telephone);
							 $('#'+id).children('td[data-target=gouvernerat]').text(gouvernerat);
							 $('#'+id).children('td[data-target=login]').text(login);
                             $('#'+id).children('td[data-target=mot_de_passe]').text(mot_de_passe);
                             $('#myModal').modal('toggle'); 

                         }
          });
       });
	  

 $("#submit").click(function(){
	
	var name = $("#data1").val();
	var email = $("#data2").val();
	var telephone = $("#data3").val();
	var gouvernerat = $('#data4 option:selected').val();
	var login = $('#data5').val();
	var mot_de_passe = $('#data6').val();
	var dataString = 'name='+ name  +'&email='+ email + '&telephone='+ telephone 
	+ '&gouvernerat='+ gouvernerat  + '&login='+ login + '&mot_de_passe='+ mot_de_passe  ;
	if( name=='' ){
		$("#display").addClass("alert alert-danger").html("Remplir tous les champs");
		
	}
	else{
		
				 
     /* $("#display").html(result);*/
	  $.ajax({
     url:"insert_user.php",
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
            $('#data6').val('');
			
      	
	 /* $("#user_dialog input").val('');*/
     }
	
    });
     
	
    });	
		
		
	
	
	)
	
 });
 
 </script>
  </body>
</html>