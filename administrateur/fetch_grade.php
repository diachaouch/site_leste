<?php
         $connect = mysqli_connect("localhost", "root", "", "leste");
?>
	<table class="table table-hover ">
		<button type="button" name="add" id="add" class="btn btn-info" class="btn btn-info" data-toggle="collapse" data-target="#user_dialog">Ajouter grade</button>
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
		</div>
				
		<div class="col-md-6">
				<div class="form-group ">
					
					
					<button type="button" id="submit" class="btn btn-info btn-block">Inserer </button>
				</div>
		</div>	
			
				
			</div>
			
		 </div>
	   </div>
    <thead>
      <tr>
       <th class="d-50">Nom</th>
	    
	   <th colspan="2" class="text-center">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
         
$query = "SELECT *  FROM grade  ";
 $result = mysqli_query($connect, $query);
          while($row  = mysqli_fetch_array($result)){ ?>
              <tr id="<?php echo $row["id"]; ?>">
                <td data-target="name"><?php echo $row['name']; ?></td>
                
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
   url:"fetch_grade.php",
   method:"POST",
   success:function(data)
   {
    $('#inserted_item_data').html(data);
   }
  });
 }
   function deleteAjax(id){
   
       if(confirm('Vous étes sure?')){
         
         $.ajax({

              type:'post',
              url:'delete_grade.php',
			  
              data:{delete_id:id},
              success:function(data){
              
                   $('#delete'+data.id).hide('slow');
				   $('#inserted_item_data').fadeIn('slow').load("fetch_grade.php");
                    
              }

         });
   
       }


	 }

 $("#submit").click(function(){
	
	var name = $("#data1").val();
	
	var dataString = 'name='+name ;
	
	
	
	
	if( name=='' ){
		$("#display").addClass("alert alert-danger").html("Remplir tous les champs");
		
	}
	else{      
		 
	  $.ajax({
     url:"insert_grade.php",
     method:"POST",
     data: dataString,
	 cache:false,
     success:function(result)
     {
		 fetch_item_data();
	$("#display").addClass("alert alert-danger").html(result);
	  
						
            
      	
	 /* $("#user_dialog input").val('');*/
     }
	
    });
     
	
    	
		
		
	
	
	}
	
 }); 
 //  update
      $(document).on('click','a[data-role=update]',function(){
            var id  = $(this).data('id');
            var name  = $('#'+id).children('td[data-target=name]').text();
          
            $('#name').val(name);
			
            $('#userId').val(id);
			
			
            $('#myModal').modal('toggle');
      });
	  
	       $('#save').click(function(){
          var id  = $('#userId').val(); 
          var name =  $('#name').val();
		  
          $.ajax({
              url      : 'connect_grade.php',
              method   : 'post', 
              data     : {name : name  , id : id  },
              success  : function(response){
                            // now update  
                             $('#'+id).children('td[data-target=name]').text(name);
							 
                             $('#myModal').modal('toggle'); 
				            

                         }
          });
       });


 </script>