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
					 
					 <body>
	<?php
	$id = $_GET['deleteid'];
	$connect = mysqli_connect("localhost", "root", "", "leste");
	
	$q="select * from projets_internationaux WHERE id ='$id' ";
	$log=mysqli_query($connect, $q);
    $quer=mysqli_fetch_assoc($log);
    $type = $quer['type']; 
	$duree = $quer['duree']; 
	$titre = $quer['titre']; 
	$responsable_tunisien = $quer['responsable_tunisien']; 
	$responsable_francais = $quer['responsable_francais']; 
	$description = $quer['description']; 
		mysqli_close($connect);
		?>
	
	     <div class="row">
			<form  method="post">
	        <div class="col-lg-12">
            <input type="hidden" id="data0" name="id" class="form-control"  value="<?php echo $id  ?>"/>
            <label>Type</label>
				<div class="form-group ">
					
					<input type="text" id="data1" name="type" class="form-control"  value="<?php echo $type  ?>"/>
					<span id="error_first_name" class="text-danger"></span>
				</div>
                
                
		        <div class="form-group ">
                <label>Durée</label>
				<input type="text" id="data2" name="duree" class="form-control" value="<?php echo $duree  ?>" />
		        </div>
                
                <div class="form-group ">
                <label>Titre</label>
				<input type="text" id="data3"  name="titre" class="form-control" value="<?php echo $titre  ?>" />
		        </div>
                
                <div class="form-group ">
                <label>Responsable tunisien</label>
				<input type="text" id="data4" name="responsable_tunisien" class="form-control" value="<?php echo $responsable_tunisien  ?>" />
		        </div>
                <div class="form-group ">
                <label>Responsable étranger</label>
				<input type="text" id="data5" name="responsable_francais" class="form-control" value="<?php echo $responsable_francais  ?>" />
		        </div>
					
				
			</div>
		
			<div class="col-lg-12">
			<div class="form-group ">
									
					<label>Description</label>
	 <textarea  id="description" name="description"><?php echo $description  ?></textarea>
				
			</div>
			<div class="form-group ">
					
					<input  type="submit" id="submit" name ="submit" class="btn btn-info btn-block" value="Inserer"> </input>
				</div>
				
				
			</div>
			</form>
		
		    
	     </div>
</body>
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
    <?php
	$connect = mysqli_connect("localhost", "root", "", "leste");
	if(isset($_POST["submit"])){
	$id = $_POST['id']; 
	$type = $_POST['type']; 
	$duree = $_POST['duree']; 
	$titre = $_POST['titre']; 
	$responsable_tunisien = $_POST['responsable_tunisien']; 
	$responsable_francais = $_POST['responsable_francais']; 
	$description = $_POST['description']; 
	$query = " UPDATE projets_internationaux SET  
    type = '$type', duree = '$duree' , titre = '$titre' , responsable_tunisien = '$responsable_tunisien' ,responsable_francais = '$responsable_francais',  description = '$description'  WHERE id='$id' ";
	 if(mysqli_query($connect, $query))
 {?>
	
	 <script> location.replace("Projet_internationaux.php"); </script>
 <?php
		 mysqli_close($connect);
 }
		
		}
	?>
    <script src="ckeditor/ckeditor.js"></script>
   <script>
 CKEDITOR.replace('description');
   </script>
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