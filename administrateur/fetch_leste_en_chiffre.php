<?php
         $connect = mysqli_connect("localhost", "root", "", "leste");
?>
	<div class="table table-responsive-sm">   
		
  	   

	<table class="table table-sm">
    <thead>
      <tr>
       <th>Articles</th>
	   <th>Membres</th>
	   <th>Brevets</th>
	   <th>Habilitations</th>
	   <th>Théses</th>
	   <th>Mastères</th>
	  <th>Congrès</th>
	   <th>Corps A</th>
	   <th>Corps B</th>
	   <th>Doctorants</th>
	   <th>Staff technique</th>	
	   <th colspan="2" class="text-center">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
         
$query = "SELECT *  FROM chiffre_labo  ";
 $result = mysqli_query($connect, $query);
          while($row  = mysqli_fetch_array($result)){ ?>
              <tr id="<?php echo $row["id"]; ?>">
                <td data-target="articles"><?php echo $row['articles']; ?></td>
				<td data-target="membres"><?php echo $row['membres']; ?></td>
				<td data-target="brevets_deposes"><?php echo $row['brevets_deposes']; ?></td>
				<td data-target="habilitations_soutenues"><?php echo $row['habilitations_soutenues']; ?></td>
				<td data-target="theses_soutenues"><?php echo $row['theses_soutenues']; ?></td>
				<td data-target="mastere"><?php echo $row['mastere']; ?></td>
				<td data-target="congres"><?php echo $row['congres']; ?></td>
				<td data-target="corps_A"><?php echo $row['corps_A']; ?></td>
				<td data-target="corps_B"><?php echo $row['corps_B']; ?></td>
				<td data-target="doctorant"><?php echo $row['doctorant']; ?></td>
                <td data-target="Staff_technique"><?php echo $row['Staff_technique']; ?></td>
                <td><a href="#" type="button" class="btn btn-success btn-sm" data-role="update" data-id="<?php echo $row['id'] ;?>">Modifier</a> </td>
								
              </tr>
         <?php }
       ?>
       
    </tbody>
	
  </table>
		
</div>
    <script>
  	function fetch_item_data()
 {
  $.ajax({
   url:"fetch_leste_en_chiffre.php",
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
              url:'delete_.php',
			  
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
            var articles  = $('#'+id).children('td[data-target=articles]').text();
		    var membres  = $('#'+id).children('td[data-target=membres]').text();
		    var brevets_deposes  = $('#'+id).children('td[data-target=brevets_deposes]').text();
		    var habilitations_soutenues  = $('#'+id).children('td[data-target=habilitations_soutenues]').text();
		    var theses_soutenues  = $('#'+id).children('td[data-target=theses_soutenues]').text();
            var mastere  = $('#'+id).children('td[data-target=mastere]').text();
		    var congres  = $('#'+id).children('td[data-target=congres]').text();
		    var corps_A  = $('#'+id).children('td[data-target=corps_A]').text();
		    var corps_B  = $('#'+id).children('td[data-target=corps_B]').text();
		    var doctorant  = $('#'+id).children('td[data-target=doctorant]').text();
		    var Staff_technique  = $('#'+id).children('td[data-target=Staff_technique]').text();
		  
            $('#articles').val(articles);
		    $('#membres').val(membres);
		    $('#brevets_deposes').val(brevets_deposes);
		    $('#habilitations_soutenues').val(habilitations_soutenues);
		    $('#theses_soutenues').val(theses_soutenues);
		    $('#mastere').val(mastere);
		    $('#congres').val(congres);
		    $('#corps_A').val(corps_A);
		    $('#corps_B').val(corps_B);
		    $('#doctorant').val(doctorant);
		    $('#Staff_technique').val(Staff_technique);
			
            $('#userId').val(id);
			
			
            $('#myModal').modal('toggle');
      });
	  
	       $('#save').click(function(){
          var id  = $('#userId').val(); 
		  var articles  = $('#articles').val();
		    var membres  = $('#membres').val();
		    var habilitations_soutenues  = $('#habilitations_soutenues').val();
		    var theses_soutenues  = $('#theses_soutenues').val();
            var mastere  = $('#mastere').val();
		    var congres  = $('#congres').val();
		    var corps_A  = $('#corps_A').val();
		    var corps_B  = $('#corps_B').val();
		    var doctorant  = $('#doctorant').val();
		    var Staff_technique  = $('#Staff_technique').val();
		  
          $.ajax({
              url      : 'connect_leste_en_chiffre.php',
              method   : 'post', 
              data     : {articles : articles  , membres : membres  , habilitations_soutenues : habilitations_soutenues  , theses_soutenues : theses_soutenues  , mastere : mastere  , congres : congres  , corps_A : corps_A  , corps_B : corps_B  , doctorant : doctorant  , Staff_technique : Staff_technique  , id : id  },
              success  : function(response){
                            // now update  
			
		    $('#'+id).children('td[data-target=articles]').text(articles);
		    $('#'+id).children('td[data-target=membres]').text(membres);
		    $('#'+id).children('td[data-target=habilitations_soutenues]').text(habilitations_soutenues);
		    $('#'+id).children('td[data-target=theses_soutenues]').text(theses_soutenues);
            $('#'+id).children('td[data-target=mastere]').text(mastere);
		    $('#'+id).children('td[data-target=congres]').text(congres);
		    $('#'+id).children('td[data-target=corps_A]').text(corps_A);
		    $('#'+id).children('td[data-target=corps_B]').text(corps_B);
		    $('#'+id).children('td[data-target=doctorant]').text(doctorant);
		    $('#'+id).children('td[data-target=Staff_technique]').text(Staff_technique);
							 
                             $('#myModal').modal('toggle'); 
				            

                         }
          });
       });


 </script>