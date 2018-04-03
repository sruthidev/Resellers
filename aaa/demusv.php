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
		<title>Bootstrap E-commerce Templates</title>
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

</head>
<body>		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form method="POST" class="search_form">
						<input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">	
<!--                                                        <li><a href="index.php">Home</a></li>-->
<li><a href="buyerhome.php">Back</a></li>
<!--							<li><a href="#">My Account</a></li>
							<li><a href="cart.html">Your Cart</a></li>-->
							
												
                                                         <li><a href="signout.php">Logout</a></li>
                                                        <li style="float:left" class="style6">
    <?php echo $_SESSION["username"];?></li>
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
                                            <center><h4 class="title"><span class="text"><strong>BOOKED PRODUCTS</strong></span></h4></center>
                                            <ul class="thumbnails">	

<form action="#" name="myform" id="bk" method="post">

<table>
  
      <?php

$qry="select * from booking,product where product.product_id=booking.product_id and booking.status=1 and booking.userid=$_SESSION[userid]";
$results=mysqli_query($con,$qry);
$i=0;
while($row=mysqli_fetch_array($results)){
    $i++;
	if($i % 6==1)
	{
		echo "<tr>";
	}
?>
    <li class="span3">
      <td>
			<form action="#" method="post">
        	<div class="product-box">
                                                                        <span class="sale_tag"></span> <?php
	  $bid=$row['book_id'];?>
    				<p><img src="<?php echo $row['image'] ?>" style="width: 250px; height: 300px; " alt=""></p>
  				<div class="category">
    				<?php echo $row['book_id'];?><br>
   					 <br><?php echo $row['product_id'];?><br>
   					 <br><?php echo $row['userid'];?><br>
                                         <br><?php echo $row['product_name'];?><br>
   					 <br><?php echo $row['selling_price'];?><br>
                                         <a href="del.php?book_id=<?php echo $row['book_id'];?>">Cancel Booking</a>
					<input type="hidden" value="<?php echo $ar['pid']?>" name="pid" />
                    
                                </div>
			</div></form>
            
		</td>
 <?php } ?>
                 </li>

                                            </ul>
                                        </div>

                                    </div>							
                                </div>
                            </div>						
                        </div>




                        <br/>

                    </div>				
                </div>
            </section>


      </table>  

			
		</div>
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

