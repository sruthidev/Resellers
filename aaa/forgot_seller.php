<!DOCTYPE html>
<?php
    include 'db.php';
	if(isset($_POST['submit']))
    {   
		$a=$_POST["user"];
		echo $a;
		$sql="SELECT * FROM seller where email='$a'";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_array($result);
		$d=$row['email'];
		//echo $d;
		$e=$row['password'];
		if($a==$d)
		{
		$to = $a;
			$subject = "Shopper";
			$message ="<html>
			<head>
			<title>Forgot Password</title>
			</head>
			<body>
			<p>your username and password is below</p>
			<table>
			<tr>
			<th>UserName</th>
			<th>password</th>
			</tr>
			<tr>
			<td>'$a'</td>
			<td>'$e'</td>
			</tr>
			</table>
			</body>
			</html>";
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= 'From: <sruthidevthomas@mca.ajce.in>' . "\r\n";
			$headers .= 'Cc: sruthidevthomas@mca.ajce.in' . "\r\n";
			mail($to,$subject,$message,$headers);
	}
	else
	{
		echo("enter correct password");
	}
	
    }
	
	?>
<html >
<head>
  <meta charset="UTF-8">
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
                    
                    
.button {
   
    border: none;
    color: white;
    border-radius:25px 25px 25px 25px;
    padding: 6px 16px;
    font-weight: bold;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 16px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
    

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
					<form method="POST" class="search_form">
						<input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">	
<!--                                                        <li><a href="index.php">Home</a></li>-->
<li><a href="login.php">Back</a></li>
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
                                            <center><h4 class="title"><span class="text"><strong>RECOVER</strong></span></h4></center>
		<form action="forgot.php" method="post" name="mform">
                    <center>
			<div>
				<input type="text" placeholder="Email" required="" id="username" name="user" />
			</div>
			<!--<div>
				<input type="password" placeholder="Password" required="" id="password" name="pass" />
			</div>
			-->
                        <br>
			<div >
				<input type="submit" class="btn btn-inverse large" value="Get Password" name="submit" />
                                
                        </div></center>
<!--                        <div style="margin-left:100px">
        <button class="button button1" id="btn_Product_reg" onclick="location.href = 'login.php';" style="float: right;">BACK</button>
                        </div>
--></form> 
		
	</section><!-- content -->
</div><!-- container -->
</body>
  
    <script src="js/login.js"></script>
  <div class="container">
   
<section id="footer-bar" >
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
