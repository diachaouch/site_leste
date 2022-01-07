
	<div class="container">
	<ul class="nav nav-tabs" id="myTab" role="tablist">
  
  <li class="nav-item">
    <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#card1" role="tab" aria-controls="profile" aria-selected="false">Cards</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Paragraphe gauche</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Paragraphe droite</a>
  </li>
  
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="card1" role="tabpanel" aria-labelledby="home-tab">
<div class="form-group ">
	
	<textarea  id="cards"><?php
 $connect = mysqli_connect("localhost", "root", "", "leste");
    $q= "select * from presentation_contenu ";
  
  $log=mysqli_query($connect, $q);
  $quer=mysqli_fetch_assoc($log);
 ?><?php  echo $quer['cards']; 
		mysqli_close($connect);
		?></textarea>
	
	  </div>	
	<div class="form-group ">
		<button type="button" id="submit" class="btn btn-info btn-block">Inserer </button>
		</div>
	</div>
  <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
<div class="form-group ">
	<textarea  id="paragraphe_gauche"><?php
 $connect = mysqli_connect("localhost", "root", "", "leste");
    $q= "select * from presentation_contenu ";
  
  $log=mysqli_query($connect, $q);
  $quer=mysqli_fetch_assoc($log);
 ?><?php  echo $quer['paragraphe_gauche']; 
		mysqli_close($connect);
		?></textarea>
	
	  </div>	
	<div class="form-group ">
		<button type="button" id="submit1" class="btn btn-info btn-block">Inserer </button>
		</div>
	</div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
<div class="form-group ">
<textarea  id="paragraphe_droite" >
		<?php
 $connect = mysqli_connect("localhost", "root", "", "leste");
    $q= "select * from presentation_contenu ";
  
  $log=mysqli_query($connect, $q);
  $quer=mysqli_fetch_assoc($log);
 ?><?php  echo $quer['paragraphe_droite']; 
		mysqli_close($connect);
		?>
	</textarea>
	  </div>	  
	  <input type="hidden" id="id" name="id" value="<?php echo $quer['id'];  ?>">
	  
		<div class="form-group ">
		<button type="button" id="submit2" class="btn btn-info btn-block">Inserer </button>
		</div>
 </div>
  
</div>
	<!--	<div class="col-md-6 text-justify " style="font-family: Century Gothic Regular">
	</div>

		<div class="col-md-6 text-justify " style="font-family: Century Gothic Regular">
		
	</div>-->

   </div>
   <script src="ckeditor/ckeditor.js"></script>
   <script>
 CKEDITOR.replace('cards');
 CKEDITOR.replace('paragraphe_droite');
 CKEDITOR.replace('paragraphe_gauche');
  </script>
    <script>
	
  	function fetch_item_data()
 {
  $.ajax({
   url:"fetch_leste_paragraphe.php",
   method:"POST",
   success:function(data)
   {
    $('#inserted_item_data').html(data);
   }
  });
 }
 
$("#submit").click(function(){
	var cards = CKEDITOR.instances.cards.getData();
	
		if( cards=='' ){
		$("#display").addClass("alert alert-danger").html("Remplir tous les champs");
		
	}
	else{
		
		$.ajax({
     url:"update_paragraphe_cards.php",
     method:"POST",
	 data: { cards: cards },
    
	 cache:false,
     success:function(result)
        {
		 fetch_item_data();
     }
	
    });	
		
		
	
	
	}
               
	
 }); 		
		
$("#submit1").click(function(){
	var paragraphe_gauche = CKEDITOR.instances.paragraphe_gauche.getData();
	
		if( paragraphe_gauche=='' ){
		$("#display").addClass("alert alert-danger").html("Remplir tous les champs");
		
	}
	else{
		
		$.ajax({
     url:"update_paragraphe_gauche.php",
     method:"POST",
	 data: { paragraphe_gauche: paragraphe_gauche },
    
	 cache:false,
     success:function(result)
        {
		 fetch_item_data();
     }
	
    });	
		
		
	
	
	}
               
	
 }); 
		
$("#submit2").click(function(){
	var paragraphe_droite = CKEDITOR.instances.paragraphe_droite.getData();
	
		if( paragraphe_droite=='' ){
		$("#display").addClass("alert alert-danger").html("Remplir tous les champs");
		
	}
	else{
		
		$.ajax({
     url:"update_paragraphe_droite.php",
     method:"POST",
	 data: { paragraphe_droite: paragraphe_droite },
    
	 cache:false,
     success:function(result)
        {
		 fetch_item_data();
     }
	
    });	
		
		
	
	
	}
               
	
 }); 
	  
	
 </script>