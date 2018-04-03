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
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
               <style>
                    .category {
   
    color: black   ; 
    font-size: 18px;
    font-weight: bold;
    font-family: verdana;
  
}
.category:hover {
   
    color: white;
}
.button {
    background-color: orange;
    border: none;
    color: white;
    border-radius:13px 13px 13px 13px;
    /*padding: 16px 32px;*/
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
    background-color: white; 
    color: orangered    ; 
    border: 2px solid white;
}

.button1:hover {
    background-color: orangered;
    color: white;
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
                                                        <li><a href="sellerhome.php">Back</a></li>
<!--							<li><a href="#">My Account</a></li>
							<li><a href="cart.html">Your Cart</a></li>-->
							
							<!--<li><a href="register.php">Seller Register</a></li>-->					
                                                         <li><a href="signout.php">Logout</a></li>
                                                           <li style="float:left; color:red; font-weight: bolder; font-size: 14px">
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
                                                                                    <center><h4 class="title"><span class="text"><strong>Nearby Products</strong></span></h4></center>
											<ul class="thumbnails">	
     
              
                                                                                                          <?php 
$cid=$_SESSION['userid'];

$query=mysqli_query($con,"select * from seller where userid=$cid");
while($row2= mysqli_fetch_array($query)){
    $placeid=$row2['place_id'];
   
    $qry="select * from product,seller where product.userid=seller.userid and product.status='1' and seller.place_id=$placeid";
$res=mysqli_query($con,$qry);
$i=0;
while($ar=mysqli_fetch_array($res))
{
	$i++;
	if($i % 6==1)
	{
		echo "<tr>";
	}
?>												
												<li class="span3">
                                                                                                    <form action="moredetsell.php" method="post">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><img src="<?php echo $ar['image']?>" style="width: 500px; height: 300px; " alt=""></p>
                                                                                                                <div class="category">
                                                                                                                    <?php echo $ar['product_name']?><br>
                                                                                                                    <?php echo $ar['store_name']?>
   					
                                         <input type="hidden" value="<?php echo $ar['product_id']?>" name="pid" /></div>
                                        <!--<input type="submit" value="More Details" name="submit" class="button1"/>-->
                                                                                                                <!--<button class="button button1" name="submit">More Details</button>-->
														
                                                                                                        </div></form>
                                                                                                            <?php } 
}
?>
												</li>
												
											</ul>
										</div>
										
									</div>							
								</div>
							</div>						
						</div>
					
                                                
                                                
                                            
                                               	
					</div>				
				</div>
			</section>
                    
                    
                    

<center>
<table>


      </table>    
</center>	
		<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="nav">
							   <li><a href="changepwd.php">Change Password</a></li>

<li><a href="seller_product.php">Products Added</a></li>
<li><a href="seller_booked.php">Products Paid</a></li>
<li><a href="seller_bkd.php">Products Booked</a></li>
							
						</ul>					
					</div>
					<div class="span4">
						<h4>Navigation</h4>
						<ul class="nav">
							<li><a href="seller_cancelled.php">Products Cancelled</a></li>

<!--<li><a href="seller_best_sold.php">Best Sold</a></li>-->
<!--<li><a href="status.php">Pending</a></li>-->
<li><a href="edit_seller_profile.php">Edit Profile</a></li>
<!--<li><a href="edit_seller_products.php">Edit Products</a></li>-->
                                                        <li><a href="products_nearby.php">Nearby Products</a></li>
                                                        <li><a href="signout.php">Logout</a></li>
						</ul>
					</div>
				 <div class="span5">
                        <p class="logo"><img src="themes/images/logo.png" class="site_logo" alt=""></p>
                        <p>You can get your products at lowest cost from your nearest store.</p>
                        <br/>
                        <span class="social_icons">
                            <a class="facebook" href="#">Facebook</a>
                            <a class="twitter" href="#">Twitter</a>
                            <a class="skype" href="#">Skype</a>
                            <a class="vimeo" href="#">Vimeo</a>
                        </span>
                    </div>					
                </div>	
            </section>
            <section id="copyright">
                <center><span>This Website belongs to Sruthi Dev Thomas</span></center>
            </section>
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