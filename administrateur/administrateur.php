	<?php
 session_start();
 require("auth.php");
 if(Auth::isLogged())
 {
 }
 else {header('Location:"\"');
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
    <title>Administrateur</title>
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
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span> Tableau de bord </h3>
              
            </div>
            <div class="row">
              <div class="col-md-6 stretch-card grid-margin" style="height: 150px;">
                <div class="card bg-gradient-blue card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Liste des abonnés <i class="mdi mdi-account mdi-48px float-right"> </i> <br>
					
                    </h4>
                    <h2 class="mb-5"></h2>
                    <h6 class="card-text"><a href="abonnes.php">Détails</a></h6>
                  </div>
                </div>
              </div>
              <div class="col-md-6 stretch-card grid-margin" style="height: 150px;">
                <div class="card bg-gradient-violet card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Liste des gestionnaires <i class="mdi mdi-calendar mdi-48px float-right"></i>
                    </h4>
                    <h2 class="mb-5"></h2>
                    <h6 class="card-text"><a href="Gestionnaire.php">Détails</a></h6>
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
  </body>
</html>