<!doctype html>
<?php
include("connect.php");
if(@$_POST["btn_create-product"]){
  $product_name=$_POST["productname"];
  $container_id=$_POST["containerid"];
  $cargo_number=$_POST["cargonumber"];
  $cargo_company=$_POST["cargocompany"];
  $DepartureCity=$_POST["departureCity"];
  $ArrivalCity=$_POST["ArrivalCity"];
  
  try{
    $sql="INSERT INTO product (productName,containerID,cargoNumber,cargoCompanyName,departureCity,arrivalCity)
      VALUES ('$product_name', '$container_id', '$cargo_number', '$cargo_company', '$DepartureCity', '$ArrivalCity')";

      $conn->exec($sql);

  }
  catch(PDOException $e){
    echo $sql . "<br>".$e->getMessage();
  }

}
?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">

<title>Login Page</title>
<link rel="icon" href="favicon.png" type="image/png">
<link rel="shortcut icon" href="favicon.ico" type="img/x-icon">

<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">

<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

<script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/wow.js"></script>
<script type="text/javascript" src="js/classie.js"></script>
<script src="contactform/contactform.js"></script>

<!-- =======================================================
    Theme Name: Knight
    Theme URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
======================================================= -->

</head>
<body>
<header class="header" id="header"><!--header-start-->
	<div class="container">
    	<figure class="logo animated fadeInDown delay-07s">
        	<a href="#"><img src="img/logo.png" alt=""></a>	
        </figure>	
       
        </ul>
		
			

                      <div class="form">
                  
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <form action="" method="post" role="form" class="contactForm" action="#">
                        <div class="form-group">
                            <input type="text" name="productname" class="form-control input-text" id="name" placeholder="Product Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control input-text" name="containerid" id="name" placeholder="Container ID" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control input-text" name="cargonumber" id="subject" placeholder="Cargo Number" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control input-text" name="cargocompany" id="subject" placeholder="Cargo Company" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                          <div class="form-group">
                            <input type="text" class="form-control input-text" name="departureCity" id="subject" placeholder="Departure City" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                          <div class="form-group">
                            <input type="text" class="form-control input-text" name="ArrivalCity" id="subject" placeholder="Arrival City" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                        
                        <div class="text-center"><input type="submit"  name="btn_create-product" class="input-btn" value="Create Product"></div>
                    </form>
                </div>
        
			
    </div>
</header><!--header-end-->

<script type="text/javascript">
    $(document).ready(function(e) {
        $('#test').scrollToFixed();
        $('.res-nav_click').click(function(){
            $('.main-nav').slideToggle();
            return false    
            
        });
        
    });
</script>

  <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    wow.init();
  </script>


<script type="text/javascript">
	$(window).load(function(){
		
		$('.main-nav li a, .servicelink').bind('click',function(event){
			var $anchor = $(this);
			
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 102
			}, 1500,'easeInOutExpo');
			/*
			if you don't want to use the easing effects:
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1000);
			*/
      if ($(window).width() < 768 ) { 
        $('.main-nav').hide(); 
      }
			event.preventDefault();
		});
	})
</script>

<script type="text/javascript">

$(window).load(function(){
  
  
  var $container = $('.portfolioContainer'),
      $body = $('body'),
      colW = 375,
      columns = null;

  
  $container.isotope({
    // disable window resizing
    resizable: true,
    masonry: {
      columnWidth: colW
    }
  });
  
  $(window).smartresize(function(){
    // check if columns has changed
    var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
    if ( currentColumns !== columns ) {
      // set new column count
      columns = currentColumns;
      // apply width to container manually, then trigger relayout
      $container.width( columns * colW )
        .isotope('reLayout');
    }
    
  }).smartresize(); // trigger resize to set container width
  $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');
 
        var selector = $(this).attr('data-filter');
        $container.isotope({
			
            filter: selector,
         });
         return false;
    });
  
});

</script>

</body>
</html>