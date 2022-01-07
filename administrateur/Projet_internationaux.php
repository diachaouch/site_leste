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
      <?php
	include('../navbar_top.php');
	?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
           <?php
	include('../sidebar.php');
	?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row" id="proBanner">
              
            </div>
            
            <div class="row">
              <div class="col-12  grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h3></h3>
					<div class="table">
					 <div class="pull-right d-flex">
   
	
						<br/>
						
					   


   
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
                <label>Type</label>
                <input type="text" id="type" class="form-control">
              </div>
			 
			 <div class="form-group">
                <label>Durée</label>
                <input type="text" id="duree" class="form-control">
              </div>
			 <div class="form-group">
                <label>Titre</label>
                <input type="text" id="titre" class="form-control">
              </div>
			  </div>
					    
				<input type="hidden" id="userId" class="form-control">
				  
				  
				<div class="col-md-6">
				
					<div class="form-group">
                <label>Responsable Tunisien</label>
                <input type="text" id="responsable_tunisien" class="form-control">
              </div>
					
			  <div class="form-group">
                <label>Responsable francais</label>
                <input type="text" id="responsable_francais" class="form-control">
              </div>
					</div>
                                   
                
              
          </div>
		      <div class="row">
		      <div class="form-group">
                <label>Description</label>
				  <textarea id="description" class="form-control"></textarea>
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
   url:"fetch_projet_internationaux.php",
   method:"POST",
   success:function(data)
   {
    $('#inserted_item_data').html(data);
   }
  });
 }	
fetch_item_data();	
//  update
      
}); 

  
 </script>
  </body>
</html>