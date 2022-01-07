<?php
         $connect = mysqli_connect("localhost", "root", "", "leste");
?>
	<div class="table table-responsive ">
		<button type="button" name="add" id="add" class="btn btn-info" class="btn btn-info" data-toggle="collapse" data-target="#user_dialog">Ajouter un projet international </button>
<br/>
						<div class="container">
						<div id="display"> </div>
						<div id="user_dialog" title="Add Data" class="collapse container">
						
			<div class="row">
			
	        <div class="col-lg-6">
				<div class="form-group ">
					
					<input type="text" id="data1" class="form-control"  placeholder=" Type *"/>
					<span id="error_first_name" class="text-danger"></span>
				</div>
		        <div class="form-group ">
				<input type="text" id="data2" class="form-control"  placeholder=" Durée d'exécution *" />
		        </div>
					
					<div class="form-group  ">
									
					<input type="text"  id="data3" class="form-control" placeholder="Titre *" />
					<span id="error_first_name" class="text-danger"></span>
				
			</div>
			
				
			</div>
			<div class="col-lg-6">
			<div class="form-group ">
									
					<input type="text"  id="data4" class="form-control" placeholder="Responsable Tunisien *" />
					<span id="error_first_name" class="text-danger"></span>
				
			</div>
			<div class="form-group ">
					
					<input type="text"  id="data5" class="form-control" placeholder="Responsable étranger *" />
					<span id="error_first_name" class="text-danger"></span>
				</div>
				
				
			</div>
			
		    </div>
			
			<div class="col-lg-9">
			<div class="form-group ">
	<label>Description</label>
	<textarea id="desc"></textarea>
	
</div>
					    
			    	<div class="form-group ">
			
					<button type="button" id="submit" class="btn btn-info btn-block">Inserer </button>
				</div>				
			</div>
	   </div>
	<table>
    <thead>
      <tr>
       <th>Type</th>
	   <th>Durée d'exècution</th>
	   <th>Titre</th>
	   <th>Responsable tunisien</th>
       <th>Responsable étranger</th>
	   <th colspan="2" class="text-center">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
         
$query = "SELECT *  FROM projets_internationaux  ";
 $result = mysqli_query($connect, $query);
          while($row  = mysqli_fetch_assoc($result)){ 
		  echo '
              <tr id= '.$row["id"].'>
                <td> '.$row['type'].'</td>
                <td>'. $row['duree'].'</td>
				<td >'. $row['titre'].'</td>
                <td >'. $row['responsable_tunisien'].'</td>
				<td >'.$row['responsable_francais'].' </td>
				<td class="hidden">'. $row['description'].'</td>
                <td><button class="btn btn-success btn-sm"><a class="text-light" href="update_projet_international.php?deleteid='.$row['id'].' ">Modifier</a></button> </td>
				 <td><button class="btn btn-danger btn-sm" onclick="deleteAjax('.$row['id'].')"> x </button></td>
				
              </tr>';
         }
       ?>
       
    </tbody>
	</table>
	</div>
  </div>
<script src="ckeditor/ckeditor.js"></script>
 <script>
 CKEDITOR.replace('desc');
   </script>
  <script>
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
   function deleteAjax(id){
   
       if(confirm('Vous étes sure?')){
         var user_id  = $('#'+id).children('td[data-target= user_id]').text();
         $.ajax({

              type:'post',
              url:'delete_projet_internationaux.php',
			  
              data:{delete_id:id},
              success:function(data){
              
                   $('#delete'+data.id).hide('slow');
				   $('#inserted_item_data').fadeIn('slow').load("fetch_gestionnaire.php");
                    
              }

         });
   
       }


	 }

 $("#submit").click(function(){
	
	var type = $("#data1").val();
	var duree = $("#data2").val();
	var titre = $("#data3").val();
	var responsable_tunisien = $("#data4").val();
	var responsable_francais = $("#data5").val();
    var description = CKEDITOR.instances.desc.getData();
	var dataString = 'type='+type +'&duree='+ duree + '&titre='+ titre + '&responsable_tunisien='+ responsable_tunisien + '&responsable_francais='+ responsable_francais + '&description='+ description ;
	
	
	
	if( type=='' ){
		$("#display").addClass("alert alert-danger").html("Remplir tous les champs");
		
	}
	else{
		
	
		 
	  $.ajax({
     url:"insert_projet_international.php",
     method:"POST",
     data: dataString,
	 cache:false,
     success:function(result)
     {	 
	  fetch_item_data();   
     }
	
    });
    }	
		
	
 }); 
 //  update
      $(document).on('click','a[data-role=update]',function(){
            var id  = $(this).data('id');
            var type  = $('#'+id).children('td[data-target=type]').text();
            var duree  = $('#'+id).children('td[data-target=duree]').text();
			var titre  = $('#'+id).children('td[data-target=titre]').text();
			var responsable_tunisien  = $('#'+id).children('td[data-target=responsable_tunisien]').text();
			var responsable_francais  = $('#'+id).children('td[data-target= responsable_francais]').text();
		    var description = $('#'+id).children('td[data-target=description]').text();
			
            $('#type').val(type);
			$('#duree').val(duree);
			$('#titre').val(titre);
            $('#responsable_tunisien').val(responsable_tunisien);
			$('#responsable_francais').val(responsable_francais);
			$('#description')= CKEDITOR.instances.description.getData();
            $('#userId').val(id);
			
			
            $('#myModal').modal('toggle');
      });
	  
	       $('#save').click(function(){
          var id  = $('#userId').val(); 
          var type =  $('#type').val();
		  var duree =   $('#duree').val();
		   var titre =   $('#titre').val();
		  var responsable_tunisien =   $('#responsable_tunisien').val();
		  var responsable_francais =    $('#responsable_francais').val();
		  
		  var description = CKEDITOR.instances.description.getData();
          $.ajax({
              url      : 'connect_projet_internationaux.php',
              method   : 'post', 
              data     : {type : type , duree: duree , titre : titre , responsable_tunisien : responsable_tunisien , responsable_francais : responsable_francais ,
			   id : id  },
              success  : function(response){
                            // now update  
                             $('#'+id).children('td[data-target=type]').text(type);
							 $('#'+id).children('td[data-target=duree]').text(duree);
							 $('#'+id).children('td[data-target=titre]').text(titre);
							 
							 $('#'+id).children('td[data-target=responsable_tunisien]').text(responsable_tunisien);
                             $('#'+id).children('td[data-target=responsable_francais]').text(responsable_francais);
                             
                             $('#myModal').modal('toggle'); 

                         }
          });
       });


 </script>