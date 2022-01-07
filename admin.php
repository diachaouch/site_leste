
<!DOCTYPE>
<html lang="en">
	<head>
  <meta charset="utf-8">
  <title>LABORATOIRE D'ÉTUDES DES SYSTÈMES THERMIQUES ET ÉNERGÉTIQUES</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-hover-dropdown/2.2.1/bootstrap-hover-dropdown.min.js"></script>
  <!-- Favicons -->
  <!--<link href="img/favicon.png" rel="icon">-->
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
 <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/scrolling-nav.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

			

  <!-- Main Stylesheet File -->
	<link href="css/style.css" rel="stylesheet">
  <link href="css/style2.css" rel="stylesheet">
		<script>
		$(document).ready(function() {
 
  $("#owl-demo").owlCarousel({
 
      autoPlay: 3000, //Set AutoPlay to 3 seconds
 
      items : 4,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
 
  });
 
});
		</script>
  <style>
	  
#owl-demo .item{
  margin: 3px;
}
#owl-demo .item img{
  display: block;
  width: 100%;
  height: auto;
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
	<script>
		
	</script>	
</head>



  <!-- #header -->
	<?php
	include('navbar.php');
	?>

	<body id="body">
	
		<div id="news-bar"><div class="row-fluid">
	<div class="latest_newsarea"> 
	
	<span><h3>Actualités </h3>
		<p>Retrouvez toutes les actualités et les évènnements du LESTE. 
		<div class="text-right mt-0"><a href="" class="lireplus">>> En savoir plus </a> </div>
	</p>
	 
	</span><marquee  loop="-1" onMouseOver="this.stop();" onMouseOut="this.start();"><ul class="news_sticker"><li><a href="#">December 29th, 2020 Journée du laboratoire  </a></li></ul></marquee></div></div></div>
	<div id="compartiments">
	
<div class="container mt-5">
	<div class="row">
		
	<div class=" col-md-8 p-0 m-0 portfolio-item1 d-flex align-items-stretch">
	
            <!-- IMAGE -->
            <img src="img/9.jpg" class="img-rounded-border img-fluid "  alt="Remise de diplômes aux élèves-ingénieurs de Centrale Pékin" style="max-height: 400px; width:100%;"   >       
		  <div class="text_description_overlay">
		<div class="text_description">
			<a href="presentation.php" target="_self" class="transform"><h4 class=" text-uppercase">prèsentation du labo</h4></a>
		<p>LESTE a pour objectifs Le développement de moyens d’études (moyens de mesure, codes numériques) adaptés aux différents problemes de mécanique des fluides et d’énergétique....</p>
			<span class="arrow_border light"><a href="presentation.php" target="_self"><h3><i class=" fa fa-angle-double-right"></i></h3></a>

</span>
		</div>
	
	</div>
	
		</div>
	<div class="col-md-4 p-0 m-0 portfolio-item2 d-flex align-items-stretch" >
	
            <!-- IMAGE -->
                   
		  <div class="text_description_overlay">
		<div class="text_description text-center">
			
			
			<i class="fa fa-users h1"></i>
				<h2>membres du labo</h2>
				
			  
		
		
			
			<p>Professeurs, maitres de confèrences, Maitres assistants, Assistants, Doctotorants, Staff techniques</p>  
			
			
		</div>
			
			
		</div>
	<div class="footer" ><a href="membres.php" target="_self"><span class="arrow_border light"><h4><i class=" fa fa-angle-double-right"> lire</i></h4>

</span> </a> </div>
	</div>
		
		
	</div>
	
	
	<div class="row">
	<div class="col-md-4 p-0 m-0 portfolio-item2" >
	 <div class="text_description_overlay">
		<div class="text_description text-center">
			
			
			<i class="fa fa-th-large h1"></i>
				<h2>thèmes de recherche</h2>
				
			  
		
		
			
			<p>Aérothermodynamique, Matériaux pour l'énergie, Milieux hétérogènes, Modelisation et optimisation des systèmes énergétiques, Combustion.
				
				</p>  
		</div>
			
			
		</div>
		<div class="footer" ><a href="Thèmes-de-recherche.php"><span class="arrow_border light"><h4><i class=" fa fa-angle-double-right"> lire</i></h4>

</span> </a> </div>
		</div>
	<div class=" col-md-8 p-0 m-0 portfolio-item1 d-flex align-items-stretch" >
	
            <!-- IMAGE -->
       
            <!-- IMAGE -->
            <img src="img/6-2.jpg"  class="w-100 img-rounded-border"  alt="Remise de diplômes aux élèves-ingénieurs de Centrale Pékin" style="max-height: 400px; width:100%;"   >        
		    <div class="text_description_overlay">
		<div class="text_description">
		<a href="production.php" class="transform" target="_self"><h4 class=" text-uppercase">administrateur</h4></a>
		<p>La production scientifique du LESTE a progressé depuis sa création en 1999, Articles, Communications, Habilitations, Thèses, Mastères, Brevets.</p>
		<a href="production.php" target="_self">	<span class="arrow_border light"><h3><i class=" fa fa-angle-double-right"></i></h3></span></a>
		
		</div>

	
	</div>
	
	
	</div>
	
	
	
	
	</div>	
	
	<div class="row">
		
	<div class=" col-md-8 p-0 m-0 portfolio-item1 d-flex align-items-stretch">
	
            <!-- IMAGE -->
            <img src="img/8-1.jpg" class="img-fluid img-rounded-border"  alt="Remise de diplômes aux élèves-ingénieurs de Centrale Pékin" style="max-height: 400px;"   >       
		    <div class="text_description_overlay">
		<div class="text_description">
		<a href="projets de recherche.php" target="_self" class="transform"> <h4 class=" text-uppercase">projets de recherche</h4></a>
			<p>Vu le rôle majeur de la coopération internationale dans le progres scientifique et technologique , le LESTE a sans cesse essayer de consolider et de diversifier ses partenaires dans le but d'atteindre ses objectifs qui inscrivent parfaitement dans les orientations définies par les organismes nationaux de la recherche.</p>
		
			<a href="projets de recherche.php" target="_self"><span class="arrow_border light"><h3><i class=" fa fa-angle-double-right"></i></h3>

</span></a>
		</div>
	
	</div>
	
		</div>
	<div class="col-md-4 p-0 m-0 portfolio-item2" >
	
            <!-- IMAGE -->
                   
		  <div class="text_description_overlay">
		<div class="text_description text-center">
			
			
			<i class="fa fa-cogs h1"></i>
				<h2>activitès du labo</h2>
				
			  
		
		
			
			<p>Congrès internationaux et nationaux, symposiums, manifestations, journées du laboratoire</p>  
		</div>
			
			
		</div>
	<div class="footer" ><a href="activitès du labo.php" target="_self"><span class="arrow_border light"><h4><i class=" fa fa-angle-double-right"> lire</i></h4>

</span> </a> </div>
	</div>
		
		
	</div>
	
</div>

	</div>
	
	<div class="bread-bar bg-grey mt-5">
    	<div class="container">
        	<div class="row">
            	
            </div>
      	</div>
    </div>
	
	

	<?php
	include('footer.php');
	?>
 <!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/sticky/sticky.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-hover-dropdown/2.2.1/bootstrap-hover-dropdown.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

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
<script>

</script>
</body>
</html>
