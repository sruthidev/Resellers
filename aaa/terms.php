<?php
	  include 'db.php';
if(!isset($_SESSION["username"]))
{
header("location: ./");
}

if(session_status()==PHP_SESSION_NONE)
{
session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Shopper</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">		
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
                
                <style>
                    .category {
   
    color: black   ; 
    font-size: 18px;
    font-weight: bold;
    font-family: verdana;
    
/*     margin: 5px;
    border: 3px solid #006600;*/
/*    position :absolute;
	left:720px;
	top:430px;*/
/*    width: 600px;*/
/*	background-color:#4CAF50;*/
/*	height:230px;*/
	border-radius:8px 8px 8px 8px;
  
}
                    </style>

</head>
<body>		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">	
<!--                                                        <li><a href="index.php">Home</a></li>-->
<li><a href="buyerhome.php">Back</a></li>
<!--							<li><a href="#">My Account</a></li>
							<li><a href="cart.html">Your Cart</a></li>-->
							
												
                                                
                                                     
                                                            
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="index.php" class="logo pull-left"><img src="themes/images//logo.png" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
  
					</nav>
				</div>
			</section>
                    
                    
                    
                    
                    
                    
                    
                    
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" >
                      
				<h4><span></span></h4>
			</section>
                    <section class="main-content">

                <div class="row">
                    <div class="span12">													
                        <div class="row">
                            <div class="span12">

                                <div id="myCarousel" class="myCarousel carousel slide">
                                    <div class="carousel-inner">
                                        <form id="form1" name="form1" method="post" action="">
                                            <br />
                                            <br />
                                        </form>
                                        <div class="active item">
                                            <center><h4 class="title"><span class="text"><strong>TERMS AND CONDITIONS</strong></span></h4></center>
                                            <h5 style="margin-left: 8%">*&nbsp;&nbsp;&nbsp;&nbsp;The Product will be delivered on the day of payment itself if the payment is online.</h5>
                                            <h5 style="margin-left: 8%">*&nbsp;&nbsp;&nbsp;&nbsp;If the mode is booking, the product have to be collected from the store. </h5>
                                            <h5 style="margin-left: 8%">*&nbsp;&nbsp;&nbsp;&nbsp;Once a product is booked for offline payment, it cannot be added for online payment until the booking is cancelled and vice versa.</h5>
                                            <h5 style="margin-left: 8%">*&nbsp;&nbsp;&nbsp;&nbsp;If a product is booked or paid from a different place than from the registered location the product have to be collected by the customer from the store.</h5>
                                            <h5 style="margin-left: 8%">*&nbsp;&nbsp;&nbsp;&nbsp;In the above condition if the product is paid it will be delivered to the customer if they are within 13km.</h5>
                                            
                                            
                                           
                                            
                                        </div>

                                    </div>							
                                </div>
                            </div>						
                        </div>




                        <br/>

                    </div>				
                </div></section>
		<script src="themes/js/common.js"></script>
		<script>
			$(document).ready(function() {
				$('#checkout').click(function (e) {
					document.location.href = "checkout.html";
				})
			});
		</script>		
    </body>
</html>


