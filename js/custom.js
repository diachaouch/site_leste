$(document).ready(function() {


 $("#logsubmit").click(function(){
	
	var login = $("#login").val(); 
	var  mot_de_passe = $("#mot_de_passe").val();
	var dataString = 'login='+ login + '&mot_de_passe='+ mot_de_passe ;
	if( login=='' ||  mot_de_passe =='' ){
		$("#error_message_log").html("Remplir tous les champs");
		
	}
	else{
		
		
		$.ajax({
     url:"login.php",
     method:"POST",
     data: dataString,
	 cache:false,
     success:function(result)
     {
		  $("#error_message_log").fadeIn().html(result);
		      setTimeout(function(){  
                               $('#ens_error_message').fadeIn("Slow");  
                          }, 4000);
			       $("#error_message_log").html(result);

	  
	  
     }
	
    });
		
		
	}
	
 });
		
    
    
	
	$("#cf-submit").click(function(){
	var name = $("#username").val();
	var email = $("#useremail").val();
	var telephone = $("#telephone").val();
	var login = $("#userlogin").val();
	var mot_de_passe = $("#userpassword").val();
    var categorie =  $('#categorie').val();
	var date_debut =  $('#date_debut').val();
	var date_fin =  $('#date_fin').val();
	
	var dataString = 'name='+ name + '&email='+ email + 
	'&telephone='+ telephone + '&categorie='+ categorie + '&login='+ login + '&mot_de_passe='+ mot_de_passe + '&date_debut='+ date_debut + '&date_fin='+ date_fin  ;
	if( name=='' || email=='' || telephone=='' || login=='' || mot_de_passe=='' ){
		$("#error_message").fadeToggle(2800).html("<h5 class='text-danger'>Remplir tous les champs </h5>");
		
	}
	else{
		
		$.ajax({
     url:"insert_user.php",
     method:"POST",
     data: dataString,
	 cache:false,
     success:function(result)
     {
		 
			 $("#error_message").fadeToggle(2800).html(result);
		  

	  
	  
     }
			
	
    });
	$.ajax({
     url:"insert_abonne.php",
     method:"POST",
     data: dataString,
	 cache:false,
     success:function(result)
     {
		 
			 $("#error_message").fadeToggle(2800).html(result);
		  

	     
	  
     }
			
	
    });
		 $("#userlogin").val('');
			$("#userpassword").val(''); 
		   
	}
	
 });
 
	$("#appsubmit").click(function(){
	
	var date = $("#date").val(); 
	var message = $("#message").val();
	var patient_id = $("#patient_id").val();
	var dataString = 'date='+ date + '&message='+ message + '&patient_id='+ patient_id ;
	if( date==='' ||  message ==='' ){
		$("#error_message_app").fadeToggle(3000).html("Remplir tous les champs");
		
	}
	else{
		
		$.ajax({
     url:"php/message.php",
     method:"POST",
     data: dataString,
	 cache:false,
     success:function(result)
     {
		 $("#error_message_app").fadeToggle(3000).html(result);
	     $.ajax({
     url:"php/rdv.php",
     method:"POST",
     data: dataString,
	 cache:false,
     success:function()
     {
		 
		 
	    $("#message").val("");
		  $("#date").val("");
     }
	
    });
     }
	
    });
		
	
		
	}
	
 });

 });