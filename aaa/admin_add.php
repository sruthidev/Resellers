<?php


	include 'db.php';
if(!isset($_SESSION["username"]))
{
header("location: ./");
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

</head>
<body>		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">	
                                                   
                                                    <li><a href="admin_home.php">back</a></li>					
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
                                            <center><h4 class="title"><span class="text"><strong>ADMIN</strong></span></h4></center>
                                            <table >

  <tr>
      <td width="283"><div align="center"><a href="country_reg.php"><img src="themes/country.png" style="border-radius: 50%;" width="150px" height="150px" alt="no image found"  /></a></div></td>
      <td width="290"><div align="center"><a href="state_reg.php"><img src="themes/state.png" style="border-radius: 50%;" width="150px" height="150px" alt="no image found"   /></a></div></td>
      <td width="290"><div align="center"><a href="district_reg.php"><img src="themes/district.png"style="border-radius: 50%;" width="150px" height="150px" alt="no image found"   /></a></div></td>
      <td width="290"><div align="center"><a href="place_reg.php"><img src="themes/place.png"style="border-radius: 50%;" width="150px" height="150px" alt="no image found"   /></a></div></td>

  </tr></table>
                                            <table >
                                                <tr><br><td width="90"></td>
      <td width="220"><div align="center"><a href="cat_reg.php"><img src="themes/category.png" style="border-radius: 50%;" width="150px" height="150px" alt="no image found"  /></a></div></td>
      <td width="220"><div align="center"><a href="subcat_reg.php"><img src="themes/subcategory.png" style="border-radius: 50%;" width="150px" height="150px" alt="no image found"  /></a></div></td>
      <td width="220"><div align="center"><a href="deletedcustomers.php"><img src="themes/customers.png" style="border-radius: 50%;" width="150px" height="150px" alt="no image found"  /></a></div></td>
      <td width="220"><div align="center"><a href="deletedusers.php"><img src="themes/sellers.png" style="border-radius: 50%;" width="150px" height="150px" alt="no image found"  /></a></div></td>
      
  </tr>
</table>
                                            
                                            <section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="nav">
							<li><a href="./index.php">Homepage</a></li>  
							<li><a href="./about.html">About Us</a></li>
							<li><a href="./contact.html">Contact Us</a></li>
							<li><a href="./cart.html">Your Cart</a></li>
                                                        <li><a href="./login.php">Login</a></li>							
						</ul>					
					</div>
					<div class="span4">
						<h4>My Account</h4>
						<ul class="nav">
							<li><a href="#">My Account</a></li>
							<li><a href="#">Order History</a></li>
							<li><a href="#">Wish List</a></li>
							<li><a href="#">Newsletter</a></li>
						</ul>
					</div>
					<div class="span5">
						<p class="logo"><img src="themes/images/logo.png" class="site_logo" alt=""></p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. the  Lorem Ipsum has been the industry's standard dummy text ever since the you.</p>
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
				<span>Copyright 2013 bootstrappage template  All right reserved.</span>
			</section>
                                        </div>
		<script src="themes/js/common.js"></script>
		<script>
			$(document).ready(function() {
				$('#checkout').click(function (e) {
					document.location.href = "checkout.html";
				})
			});
		</script></section>		
    </body>
</html>
