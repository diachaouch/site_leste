
	<div class="container">
	<div class="form-group ">
	
	<textarea  id="equipements"><?php
 $connect = mysqli_connect("localhost", "root", "", "leste");
    $q= "select * from presentation_contenu ";
  
  $log=mysqli_query($connect, $q);
  $quer=mysqli_fetch_assoc($log);
 ?><?php  echo $quer['equipements']; 
		mysqli_close($connect);
		?></textarea>
	
	  </div>
 <div class="form-group ">
		<button type="button" id="submit" class="btn btn-info btn-block">Inserer </button>
		</div>
   </div>
   <script src="ckeditor/ckeditor.js"></script>
   <script>
 CKEDITOR.replace('equipements');

  </script>
    <script>
	
  	function fetch_item_data()
 {
  $.ajax({
   url:"fetch_leste_equipements.php",
   method:"POST",
   success:function(data)
   {
    $('#inserted_item_data').html(data);
   }
  });
 }
 
$("#submit").click(function(){
	var equipements = CKEDITOR.instances.equipements.getData();
	
		if( equipements=='' ){
		$("#display").addClass("alert alert-danger").html("Remplir tous les champs");
		
	}
	else{
		
		$.ajax({
     url:"update_leste_equipements.php",
     method:"POST",
	 data: { equipements: equipements },
    
	 cache:false,
     success:function(result)
        {
		 fetch_item_data();
     }
	
    });	
		
		
	
	
	}
               
	
 }); 		
		 
	
 </script>