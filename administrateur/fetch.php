<?php
         $connect = mysqli_connect("localhost", "root", "", "sport");
		 
?>
		
				
	   <div class="row form-group text-center">
		   <div class="container-fluid">
		   <div id="display"></div>
		   </div>
			
	   
	   </div>	
	   <button type="button" name="add" id="add" class="btn btn-info" class="btn btn-info" data-toggle="collapse" data-target="#user_dialog">Ajouter un abonné</button>
<br/>
								<div id="display"> </div>
						<div id="user_dialog" title="Add Data" class="collapse">
						
			<div class="row">
			
	   <div class="col-md-6">
				<div class="form-group ">
					
					<input type="text" id="data1" class="form-control"  placeholder=" Nom *"/>
					<span id="error_first_name" class="text-danger"></span>
				</div>
				
				<div class="form-group ">
					
					<input type="email"  id="data2" class="form-control" placeholder="Email *" />
					<span id="error_first_name" class="text-danger"></span>
			</div>
				
				
				<input type="hidden"  id="data8" class="form-control" value="abonné" />
					
				<div class="form-group ">
					
					<input type="text"  id="data3" class="form-control" placeholder="Téléphone *" />
					<span id="error_first_name" class="text-danger"></span>
				</div>	
			<div class="form-group  ">
									
					<input type="text"  id="data4" class="form-control" placeholder="login *" />
					<span id="error_first_name" class="text-danger"></span>
				
			</div>


			
			<div class="form-group ">
									
					<input type="password"  id="data5" class="form-control" placeholder="mot de passe *" />
					<span id="error_first_name" class="text-danger"></span>
				
			</div>
			
				
			</div>
			<div class="col-md-6">
			
			<div class="form-group  ">
			
					<label>Date de début de l'abonnement</label>				
					<input type="date"  id="data6" class="form-control"  />
					<span id="error_first_name" class="text-danger"></span>
				
					<label>Date de fin de l'abonnement</label>				
					<input type="date"  id="data7" class="form-control"  />
					<span id="error_first_name" class="text-danger"></span>
				
			</div>
			
			    
			    	<div class="form-group ">
					
					
					<button type="button" id="sub" class="btn btn-info btn-block">Inserer </button>
				</div>
				
			</div>
		 </div>
	   </div>
					<div class="table">
					 <div class="pull-right d-flex">
   
	
						<br/>
						
					   


	<table class="table table-hover ">
    <thead>
      <tr>
       <th>Nom</th>
	   <th>Email</th>
	   <th>Telephone</th>
	   
	   <th colspan="2">Délai de l'abonnement</th>
	   
	   
	   
	   <th colspan="2" class="text-center">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
  $connect = mysqli_connect("localhost", "root", "", "sport");       
$query = "SELECT *  FROM abonne ";
 $result = mysqli_query($connect, $query);
          while($row  = mysqli_fetch_array($result)){ ?>
              <tr id="<?php echo $row["id"]; ?>">
                <td data-target="name"><?php echo $row['name']; ?></td>
                <td data-target="email"><?php echo $row['email']; ?></td>
				<td data-target="telephone"><?php echo $row['telephone']; ?></td>
                <td data-target="date_debut"><?php echo $row['date_debut']; ?></td>
				<td data-target="date_fin"><?php echo $row['date_fin']; ?></td>
				<td data-target="login" class="hidden"><?php echo $row['login']; ?></td>
				<td data-target="mot_de_passe" class="hidden"><?php echo $row['mot_de_passe']; ?></td>
				<td data-target="user_id" class="hidden"><?php echo $row['user_id']; ?></td>
                <td><a href="#" type="button" class="btn btn-success btn-sm" data-role="update" data-id="<?php echo $row['id'] ;?>">Modifier</a> </td>
				 <td><button class="btn btn-danger btn-sm" onclick="deleteAjax(<?php echo $row['id'];?>)"> x </button></td>
				
              </tr>
         <?php }
       ?>
       
    </tbody>
  </table>
  <script>
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
   function deleteAjax(id){
   
       if(confirm('Vous étes sure?')){
         var user_id  = $('#'+id).children('td[data-target= user_id]').text();
         $.ajax({

              type:'post',
              url:'delete_abonne.php',
			  
              data:{delete_id:id, user_id:user_id},
              success:function(data){
              
                   $('#delete'+data.id).hide('slow');
				   $('#inserted_item_data').fadeIn('slow').load("fetch.php");
                    
              }

         });
   
       }


	 }
 $("#sub").click(function(){
	
	var name = $("#data1").val();
	var email = $("#data2").val();
	var telephone = $("#data3").val();
	var login = $('#data4').val();
	var mot_de_passe = $('#data5').val();
	var date_debut = $('#data6').val();
	var date_fin = $('#data7').val();
	var categorie = $('#data8').val();
	var dataString = 'name='+ name + '&email='+ email + 
	'&telephone='+ telephone + '&categorie='+ categorie + '&login='+ login + '&mot_de_passe='+ mot_de_passe + '&date_debut='+ date_debut + '&date_fin='+ date_fin  ;
	
	if( name=='' ){
		$("#display").addClass("alert alert-danger").fadeToggle(2800).html("<h5>Veuillez remplir votre nom! </h5>");
		
	} else
		if( email=='' ){
		$("#display").addClass("alert alert-danger").fadeToggle(2800).html("<h5>Veuillez remplir votre email! </h5>");
		
	} else
		if( telephone=='' ){
		$("#display").addClass("alert alert-danger").fadeToggle(2800).html("<h5>Veuillez remplir votre téléphone! </h5>");
		
	} else
		if( login=='' ){
		$("#display").addClass("alert alert-danger").fadeToggle(2800).html("<h5>Veuillez remplir votre login! </h5>");
		
	} else
		if( mot_de_passe=='' ){
		$("#display").addClass("alert alert-danger").fadeToggle(2800).html("<h5>Veuillez remplir votre mot de passe! </h5>");
		
	}
	else{
		
		$.ajax({
     url:"insert_user.php",
     method:"POST",
     data: dataString,
	 cache:false,
     success:function(result)
     {
		 
			 $("#display").fadeIn().html(result);
		      setTimeout(function(){  
                               $("#display").fadeIn("Slow");  
                          }, 4000);
			       $("#display").html(result);
		  
      $.ajax({
     url:"insert_abonne.php",
     method:"POST",
     data: dataString,
	 cache:false,
     success:function(result)
     {
		 
			 
		  
      $("#data1").val('');
	  $("#data2").val('');
	  $("#data3").val(' ');
	  $("#data4").val('');
	 $("#data5").val('');
	  fetch_item_data();
	  
     }
			
	
    }); 
	  
	  
     }
			
	
    });
	
		
	}
	
 });
  </script>