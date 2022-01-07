<?php
         $connect = mysqli_connect("localhost", "root", "", "leste");
?>
	<table class="table table-hover ">
		<button type="button" name="add" id="add" class="btn btn-info" class="btn btn-info" data-toggle="collapse" data-target="#user_dialog">Ajouter membre</button>
<br/>
						<div class="container">
						<div id="display"> </div>
						<div id="user_dialog" title="Add Data" class="collapse">
						
			<div class="row">
			
	   <div class="col-md-6">
				<div class="form-group ">
					
					<input type="text" id="data1" class="form-control"  placeholder=" Nom *"/>
					<span id="error_first_name" class="text-danger"></span>
				</div>
				<input type="hidden"  id="data4" class="form-control" value="gestionnaire" />
					<div class="form-group  ">
									
					<input type="text"  id="data5" class="form-control" placeholder="login *" />
					<span id="error_first_name" class="text-danger"></span>
				
			</div>
			<div class="form-group ">
									
					<input type="password"  id="data6" class="form-control" placeholder="mot de passe *" />
					<span id="error_first_name" class="text-danger"></span>
				
			</div>
				
			</div>
			<div class="col-md-6">
			<div class="form-group ">
					
					<input type="email"  id="data2" class="form-control" placeholder="Email *" />
					<span id="error_first_name" class="text-danger"></span>
				</div>
				
			<div class="form-group ">
					
					<input type="text"  id="data3" class="form-control" placeholder="Téléphone *" />
					<span id="error_first_name" class="text-danger"></span>
				</div>
				
				
			
			
			
			    
			    	<div class="form-group ">
					
					
					<button type="button" id="submit" class="btn btn-info btn-block">Inserer </button>
				</div>
				
			</div>
		 </div>
	   </div>
    <thead>
      <tr>
       <th>Nom</th>
	   <th>Email</th>
	   <th>Téléphone</th>
	   <th>Login</th>
	   <th>Mot de passe</th>   
	   <th colspan="2" class="text-center">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
         
$query = "SELECT *  FROM users  ";
 $result = mysqli_query($connect, $query);
          while($row  = mysqli_fetch_array($result)){ ?>
              <tr id="<?php echo $row["id"]; ?>">
                <td data-target="name"><?php echo $row['name']; ?></td>
                <td data-target="email"><?php echo $row['email']; ?></td>
				<td data-target="telephone"><?php echo $row['telephone']; ?></td>
                <td data-target="login"><?php echo $row['login']; ?></td>
				<td data-target="mot_de_passe"><?php echo $row['mot_de_passe']; ?></td>
				<td data-target="user_id" class="hidden"><?php echo $row['user_id']; ?></td>
                <td><a href="#" type="button" class="btn btn-success btn-sm" data-role="update" data-id="<?php echo $row['id'] ;?>">Modifier</a> </td>
				 <td><button class="btn btn-danger btn-sm" onclick="deleteAjax(<?php echo $row['id'];?>)"> x </button></td>
				
              </tr>
         <?php }
       ?>
       
    </tbody>
	</div>
  </table>
  <script>
  	function fetch_item_data()
 {
  $.ajax({
   url:"fetch_membre.php",
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
              url:'delete_gestionnaire.php',
			  
              data:{delete_id:id, user_id:user_id},
              success:function(data){
              
                   $('#delete'+data.id).hide('slow');
				   $('#inserted_item_data').fadeIn('slow').load("fetch_gestionnaire.php");
                    
              }

         });
   
       }


	 }

 $("#submit").click(function(){
	
	var name = $("#data1").val();
	var email = $("#data2").val();
	var telephone = $("#data3").val();
	var categorie = $("#data4").val();
	var login = $("#data5").val();
	var mot_de_passe = $("#data6").val();
	var dataString = 'name='+name +'&email='+ email + '&telephone='+ telephone + '&login='+ login + '&mot_de_passe='+ mot_de_passe + '&categorie='+ categorie ;
	
	
	
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
		 
	  $.ajax({
     url:"insert_gestionnaire.php",
     method:"POST",
     data: dataString,
	 cache:false,
     success:function(result)
     {
		 
	  fetch_item_data();
						
            
      	
	 /* $("#user_dialog input").val('');*/
     }
	
    });
     }
	
    });	
		
		
	
	
	}
	
 }); 
 //  update
      $(document).on('click','a[data-role=update]',function(){
            var id  = $(this).data('id');
            var name  = $('#'+id).children('td[data-target=name]').text();
            var email  = $('#'+id).children('td[data-target=email]').text();
			var telephone  = $('#'+id).children('td[data-target=telephone]').text();
			var categorie  = $('#'+id).children('td[data-target=categorie]').text();
			var login  = $('#'+id).children('td[data-target= login]').text();
			var mot_de_passe  = $('#'+id).children('td[data-target= mot_de_passe]').text();
			var user_id  = $('#'+id).children('td[data-target= user_id]').text();
            $('#name').val(name);
			$('#email').val(email);
			$('#telephone').val(telephone);
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
		  var login =    $('#login').val();
		  var mot_de_passe =    $('#mot_de_passe').val();
          var categorie =    $('#categorie').val();
		  var user_id =    $('#user_id').val();
          $.ajax({
              url      : 'connect_gestionnaire.php',
              method   : 'post', 
              data     : {name : name , email: email , telephone : telephone , categorie : categorie , login : login ,
			  mot_de_passe : mot_de_passe , id : id , user_id : user_id },
              success  : function(response){
                            // now update  
                             $('#'+id).children('td[data-target=name]').text(name);
							 $('#'+id).children('td[data-target=email]').text(email);
							 $('#'+id).children('td[data-target=telephone]').text(telephone);
							 
							 $('#'+id).children('td[data-target=categorie]').text(categorie);
                             $('#'+id).children('td[data-target=login]').text(login);
                             $('#'+id).children('td[data-target=mot_de_passe]').text(mot_de_passe);
                             $('#myModal').modal('toggle'); 

                         }
          });
       });


 </script>