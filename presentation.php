<!DOCTYPE>
<html lang="en">
	<head>
  <meta charset="utf-8">
  <title>Présentation du labo</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
  <!-- Favicons -->
  <!--<link href="img/favicon.png" rel="icon">-->
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
<script src="js/main.js"></script>
  <!-- Main Stylesheet File -->
	<link href="css/style.css" rel="stylesheet">
  <link href="css/style2.css" rel="stylesheet">

  <style>
	  
	  
	  
	#carousel {
	width:255px;
	height:290px;	
	margin:0 auto;
}

#slides {
	overflow:hidden;
	/* fix ie overflow issue */
	position:relative;
	width:250px;
	height:250px;
	border:1px solid #ccc;
}

/* remove the list styles, width : item width * total items */	
#slides ul {
	position:relative;
	left:0;
	top:0;
	list-style:none;
	margin:0;
	padding:0;	
	width:750px;			
}

/* width of the item, in this case I put 250x250x gif */
#slides li {
	width:250px;
	height:250px;	
	float:left;
}

#slides li img {
	padding:5px;
}

/* Styling for prev and next buttons */
#buttons {
	padding:0 0 5px 0;	
	float:right;
}

#buttons a {
	display:block; 
	width:31px; 
	height:32px;
	text-indent:-999em;
	float:left;
	outline:0;
}

a#prev {
	background:url(arrow.gif) 0 -31px no-repeat; 
}

a#prev:hover {
	background:url(arrow.gif) 0 0 no-repeat;
}

a#next {
	background:url(arrow.gif) -32px -31px no-repeat; 
}

a#next:hover {
	background:url(arrow.gif) -32px 0 no-repeat;
}

.clear {clear:both}  
</style>
</head>
	
<?
	include('../navbar.php');
	?>

<body id="body" class="mt-5">

		
<div class="container mt-5 p-5">
	<div class="row">
		<div class="col-md-12 text-justify card">
		<div class="card-body">
		<?php
 $connect = mysqli_connect("localhost", "root", "", "leste");
    $q= "select * from presentation_contenu ";
  
  $log=mysqli_query($connect, $q);
  $quer=mysqli_fetch_assoc($log);
 ?><?php  echo $quer['cards']; 
		mysqli_close($connect);?>
			</div>
		</div>
	</div>
	</div>

<div class="middle">
	<div class="row">
	<div class="col-sm-2  text-center mt-4">
		<div class="card-header bg-transparent"><div class="container">
	<div class="box">
	<div class="chart" data-percent="100">
		 <?php
 $connect = mysqli_connect("localhost", "root", "", "leste");
    $q= "select * from chiffre_labo ";
  
  $log=mysqli_query($connect, $q);
  $quer=mysqli_fetch_assoc($log);
  echo  $quer['articles'] ; 
		mysqli_close($connect);?>
		</div>
	<h6 class="text-uppercase font-weight-bold mt-2">Articles</h6>		
	</div>
    
</div></div>
		
		
		
	</div>
	
	<div class="col-sm-2  text-center mt-4">
		<div class="card-header bg-transparent">
		 <div class="container">
	<div class="box">
	<div class="chart" data-percent="100"> <?php
 $connect = mysqli_connect("localhost", "root", "", "leste");
    $q= "select * from chiffre_labo ";
  
  $log=mysqli_query($connect, $q);
  $quer=mysqli_fetch_assoc($log);
 ?><?php  echo $quer['membres']; 
		mysqli_close($connect);
		?></div>
	<h6 class="text-uppercase font-weight-bold mt-2">Membres</h6>	
	</div>
    
</div>
		</div>
		
		
		
	</div>
	<div class="col-sm-2  text-center mt-4">
		<div class="card-header bg-transparent">
		 <div class="container">
	<div class="box">
	<div class="chart" data-percent="100">
	<?php
 $connect = mysqli_connect("localhost", "root", "", "leste");
    $q= "select * from chiffre_labo ";
  
  $log=mysqli_query($connect, $q);
  $quer=mysqli_fetch_assoc($log);
 ?><?php  echo $quer['brevets_deposes']; 
		mysqli_close($connect);?>	
	</div>
	<h6 class="text-uppercase font-weight-bold mt-2">Brevets déposés</h6>	
	</div>
    
</div>
		</div>
		
		
		
	</div> 
	<div class="col-sm-2  text-center mt-4">
		<div class="card-header bg-transparent">
		 <div class="container">
	<div class="box">
	<div class="chart" data-percent="100">
	<?php
 $connect = mysqli_connect("localhost", "root", "", "leste");
    $q= "select * from chiffre_labo ";
  
  $log=mysqli_query($connect, $q);
  $quer=mysqli_fetch_assoc($log);
 ?><?php  echo $quer['habilitations_soutenues']; 
		mysqli_close($connect);
		?>
	</div>
	<h6 class="text-uppercase font-weight-bold mt-2">Habilitations soutenues</h6>	
	</div>
    
</div>
		</div>
		
		
		
	</div>
	<div class="col-sm-2  text-center mt-4">
		<div class="card-header bg-transparent">
		 <div class="container">
	<div class="box">
	<div class="chart" data-percent="100">
		<?php
 $connect = mysqli_connect("localhost", "root", "", "leste");
    $q= "select * from chiffre_labo ";
  
  $log=mysqli_query($connect, $q);
  $quer=mysqli_fetch_assoc($log);
 ?><?php  echo $quer['theses_soutenues']; 
		mysqli_close($connect);?>
	</div>
	<h6 class="text-uppercase font-weight-bold mt-2">Théses soutenues</h6>	
	</div>
    
</div>
		</div>
		
		
		
	</div>
		<div class="col-sm-2  text-center mt-4">
		<div class="card-header bg-transparent">
		 <div class="container">
	<div class="box">
	<div class="chart" data-percent="100">
	<?php
 $connect = mysqli_connect("localhost", "root", "", "leste");
    $q= "select * from chiffre_labo ";
  
  $log=mysqli_query($connect, $q);
  $quer=mysqli_fetch_assoc($log);
 ?><?php  echo $quer['mastere']; 
		mysqli_close($connect);
		?>	
	</div>
	<h6 class="text-uppercase font-weight-bold mt-2">Mastères et DEA soutenues</h6>	
	</div>
    
</div>
		</div>
		
		
		
	</div>
	</div>
	
	
	
	
	
	
   <!-- <div class="counting-sec">
      <div class="inner-width">
        <div class="col">
         
          <div class="num">146</div>
          Membres
        </div>

        <div class="col">
          
          <div class="num">501</div>
          Articles
        </div>

		  <div class="col">
          
          <div class="num">05</div>
          brevets déposés
        </div>
        <div class="col">
          
          <div class="num">22</div>
          HABILITATIONS SOUTENUES
        </div>
		  
		 <div class="col">
          
          <div class="num">95</div>
          Théses soutenues
        </div>
		
		  
		  <div class="col">
          
          <div class="num">134</div>
          MASTÈRES ET DEA SOUTENUES
        </div>

        
      </div>
    </div>-->
  </div>
<div class="container p-5">
	<div class="row">
		
	<div class="col-md-6 text-justify " style="font-family: Century Gothic Regular">
	
	<?php
 $connect = mysqli_connect("localhost", "root", "", "leste");
    $q= "select * from presentation_contenu ";
  
  $log=mysqli_query($connect, $q);
  $quer=mysqli_fetch_assoc($log);
 ?><?php  echo $quer['paragraphe_gauche']; 
		mysqli_close($connect);
		?>
		
	</div>
	<div class=" col-md-6 ">
	<div class="row">
		
	</div>
		
	<div class="row">
	<div class="col-md-12">
	<h5 class="text-white p-3 mt-3" style="background:linear-gradient(90deg,#961a3d,#c1345c);">LESTE EN CHIFFRE</h5>
	<?php
 $connect = mysqli_connect("localhost", "root", "", "leste");
    $q= "select * from presentation_contenu ";
  
  $log=mysqli_query($connect, $q);
  $quer=mysqli_fetch_assoc($log);
 ?><?php  echo $quer['paragraphe_droite']; 
		mysqli_close($connect);
		?>
	
	</div>
	</div>
	</div>
	</div>
</div>
	
	
  <?
	include('footer.php');
	?><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->

  <!-- Template Main Javascript File -->
	<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
<script src="js/jquery.easypiechart.js"></script>
<script>
    $(function() {
        $('.chart').easyPieChart({
            //your options goes here
        });
    });
</script>
	<script>
	var offset = 0;
    var count = $(".slide-item-wrapper > * > *").length;
		var interval = setInterval(slideSwitch, 3000);

		
	function slideSwitch() {
	
    offset = (offset - 220) % (count * 220); // 104px div height (incl margin)
    $(".slide-item-wrapper > *").css({
      "transform": "translateY(" + offset + "px)",
    },3000);
  };
    


    
    $(".slide-item-wrapper li").hover(function () {
        clearInterval(interval);
    }, function () {
        interval = setInterval(slideSwitch, 3000); 
    });

 $("a.next").click(function(){
 
     
	offset = (offset + 220) % (count * 220); // 104px div height (incl margin)
    $(".slide-item-wrapper > * ").css({
      "transform": "translateY(" + offset + "px)",
    },3000);
  }); 

$("a.previous").click(function(){
 
     
	offset = (offset - 220) % (count * 220); // 104px div height (incl margin)
    $(".slide-item-wrapper > * ").css({
      "transform": "translateY(" + offset + "px)",
    },3000);
  }); 
	</script>
	<!--
		
		<script>
	var offset = 0;
    var count = $(".slide-item-wrapper > * > *").length;
		var interval = setInterval(slideSwitch, 3000);

		
	function slideSwitch() {
	
    offset = (offset - 200) % (count * 200); // 104px div height (incl margin)
    $(".slide-item-wrapper > *").css({
      "transform": "translateY(" + offset + "px)",
    },3000);
  };
    


    
    $(".slide-item-wrapper li").hover(function () {
        clearInterval(interval);
    }, function () {
        interval = setInterval(slideSwitch, 3000); 
    });

 $("a.next").click(function(){
 
     
	offset = (offset - 200) % (count * 200); // 104px div height (incl margin)
    $(".slide-item-wrapper > * ").prev().css({
      "transform": "translateY(" + offset + "px)",
    },3000);
  }); 
		</script>
		-->
		   
	

<script>
	//rotation speed and timer
	var speed = 5000;
	var run = setInterval('rotate()', speed);	
	
	//grab the width and calculate left value
	var item_width = $('#slides li').outerWidth(); 
	var left_value = item_width * (-1); 
        
    //move the last item before first item, just in case user click prev button
	$('#slides li:first').before($('#slides li:last'));
	
	//set the default item to the correct position 
	$('#slides ul').css({'left' : left_value});

    //if user clicked on prev button
	$('#prev').click(function() {

		//get the right position            
		var left_indent = parseInt($('#slides ul').css('left')) + item_width;

		//slide the item            
		$('#slides ul').animate({'left' : left_indent}, 200,function(){    

            //move the last item and put it as first item            	
			$('#slides li:first').before($('#slides li:last'));           

			//set the default item to correct position
			$('#slides ul').css({'left' : left_value});
		
		});

		//cancel the link behavior            
		return false;
            
	});

 
    //if user clicked on next button
	$('#next').click(function() {
		
		//get the right position
		var left_indent = parseInt($('#slides ul').css('left')) - item_width;
		
		//slide the item
		$('#slides ul').animate({'left' : left_indent}, 200, function () {
            
            //move the first item and put it as last item
			$('#slides li:last').after($('#slides li:first'));                 	
			
			//set the default item to correct position
			$('#slides ul').css({'left' : left_value});
		
		});
		         
		//cancel the link behavior
		return false;
		
	});        
	
	//if mouse hover, pause the auto rotation, otherwise rotate it
	$('#slides').hover(
		
		function() {
			clearInterval(run);
		}, 
		function() {
			run = setInterval('rotate()', speed);	
		}
	); 
        


//a simple function to click next link
//a timer will call this function, and the rotation will begin :)  
function rotate() {
	$('#next').click();
}
	
	</script>
	
	
<!--
  <script>
	   var offset = 0;
var count = $(".slide-item-wrapper > ul.timeline ").length;
	function slideSwitch() {
		
  
    offset = (offset - 200) % (count * 200); // 104px div height (incl margin)
    $(".slide-item-wrapper > *").css({
      "transform": "translateY(" + offset + "px)",
    },3000);
  };
    

$(function () {
    var interval = setInterval(slideSwitch, 3000);

    $(".slide-item-wrapper > ul.timeline > li").hover(function () {
        clearInterval(interval);
    }, function () {
        interval = setInterval(slideSwitch, 3000); 
    });
  $(".next").click(function () {
        $(".slide-item-wrapper > *").css({
      "transform": "translateY(" + offset + "px)"})
    
});	
	
	</script>-->
	<!--
   <script>
	function slideSwitch() {
		
    var offset = 0;
var count = $(".slide-item-wrapper > * > *").length;
    offset = (offset - 200) % (count * 200); // 104px div height (incl margin)
    $(".slide-item-wrapper > *").css({
      "transform": "translateY(" + offset + "px)",
    },3000);
  };
    

$(function () {
    var interval = setInterval(slideSwitch, 3000);

    $(".slide-item-wrapper li").hover(function () {
        clearInterval(interval);
    }, function () {
        interval = setInterval(slideSwitch, 3000); 
    });

});	
	</script>

-->
	
<!--	
<script>
$(function () {
   
var offset = 0;
var count = $(".slide-item-wrapper > ul.timeline ").length;
	var interval = setInterval(slideSwitch, 3000);
    $(".next").click(function () {
		clearInterval(interval);
        offset = (offset - 200) % (count * 200); // 104px div height (incl margin)
    $(".slide-item-wrapper > ul.timeline  " ).css({
      "transform": "translateY(" + offset + "px)",
    });
    });

});	
	</script>
	-->
	
	<!--
<script>
	
	$(document).ready(function () {

    function move(direction) {
        var carousel = $('#carousel ul');
        if (!carousel.is(':animated')) {
            if (direction === 'left') {
                carousel.animate({
                    marginTop: 280
                }, 1000, function () {
                    carousel.find("li:last").after(carousel.find("li:first"));
                    carousel.css('marginTop',0);
                });
            } else {
                carousel.find('li:first').before(carousel.find('li:last'));
                carousel.css('marginTop', '-280px').animate({
                    marginTop: 0
                }, 1000);
            }
        }
    }

    var t = setInterval(function () {
        move('left');
    }, 5000);

    $('#left').click(function () {
        move('top');
    });

    $('#right').click(function () {
        move('buttom');
    });
});
	</script>
-->
	<!--
	<script>
	$(document).ready(function () {

    $('.btn-vertical-slider').on('click', function () {
        
        if ($(this).attr('data-slide') == 'next') {
            $('#myCarousel2').carousel('next');
        }
        if ($(this).attr('data-slide') == 'prev') {
            $('#myCarousel2').carousel('prev')
        }


    });
});
	</script>

-->
<script type="text/javascript">
    $(".num").counterUp({delay:10,time:1000});
  </script>
</body>
</html>
