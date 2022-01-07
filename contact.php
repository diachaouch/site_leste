
<!DOCTYPE>
<html lang="en">
	<head>
  <meta charset="utf-8">
  <title>Contact</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

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

  <!-- Main Stylesheet File -->
	<link href="css/style.css" rel="stylesheet">
  <link href="css/style2.css" rel="stylesheet">

  <style>
	  h5{
		  font-weight: bold;
		  padding-bottom: 10px;
		  margin: 0;
		  
	  }  
	  p{
		  padding:0;
		  margin: 0 0 10px ;
	  }
	  
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


<?php
	include('navbar.php');
?>
<body id="body">

<!--
      Contact Section
    ============================-->
    <section id="contact" class="wow fadeInUp">
      <div class="container">
        
          <h2>Contact </h2>
          <p></p>
		  <div class="row">
		   <div class="col-md-6 col-sm-6">
		    <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group has-feedback col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars"  />
				  
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Envoyer</button></div>
          </form>
        </div>
		</div>
		<div class="col-md-6 col-sm-6">
		
			<h5><i class="ion-ios-location-outline"></i> Addresse</h5>
			<p>Ecole Nationale d'Ingénieurs de Monastir Avenue Ibn El Jazzar 5019 Monastir, Tunisie.</p>
			<h5> <i class="ion-ios-telephone-outline"></i>Téléphones</h5>
			<p>(+216) 73 50 05 11<br>
				(+216) 73 50 05 14</p>
			<h5><i class="ion-ios-email-outline"></i> E-mail</h5>
			<p>enim_leste@yahoo.fr</p>
		 
		</div>

		  </div>
       
      
      </div>

      <div class="container-fluid">
							 

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:300px;width:100%;"><div id="gmap_canvas" style="height:300px;width:100%;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.trivoo.net" id="get-map-data">trivoo</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(40.805478,-73.96522499999998),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(40.805478, -73.96522499999998)});infowindow = new google.maps.InfoWindow({content:"<b>The Breslin</b><br/>2880 Broadway<br/> New York" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
								</div>

		<!-- ############CONTACT FORM ################-->
		
    
    </section>

  

  <!--==========================
    Footer
  ============================-->
  <?php
	include('footer.php');
	?><!-- #footer -->

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
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AZFZERGOPNRGPNERGPIONERGPN&exp&sensor=false&libraries=places" sensor="false"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

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
