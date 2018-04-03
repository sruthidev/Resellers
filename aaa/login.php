<?php
include 'db.php'; //database connection page

 function encryptIt($q){
                $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
                $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
                return( $qEncoded );
            }
if(isset($_POST["submit"]))
{
    
//    $url = 'https://www.google.com/recaptcha/api/siteverify';
//    $privatekey = "6LfTwkAUAAAAABv0qaagKeb3f_WpISGvWkTXRsGN";
//    $response = file_get_contents($url . "?secret=" . $privatekey . "&response=" . $_POST['g-recaptcha-response'] . "&remoteip=" . $_SERVER['REMOTE_ADDR']);
//    $data = json_decode($response);
//
//    if (isset($data->success) AND $data->success == true)
     {
        
        
    
	$username=$_POST["username"];   //username value from the form
	$pwd=$_POST["password"];	//password value from the form
	//echo $username;
        $password = encryptIt($pwd);
	$sql="select * from login where username='$username' and password ='$password' and status=1"; //value querried from the table
	$res=mysqli_query($con,$sql);  //query executing function
if($res)
{
	
	if($fetch=mysqli_fetch_array($res))
	{
		if($fetch['role_id']==1)   
		{
//			$_SESSION["name"]=$fetch['name'];
			$_SESSION["userid"]=$fetch['userid'];
			$_SESSION["username"]=$username;	// setting username as session variable 
	header("location:admin_home.php");	//home page or the dashboard page to be redirected
	}
	elseif($fetch['role_id']==2)   
		{
		$_SESSION["username"]=$username;	// setting username as session variable 
		$_SESSION["userid"]=$fetch['userid'];
	header("location:sellerhome.php");
	}
        elseif($fetch['role_id']==3)   
		{
		$_SESSION["username"]=$username;	// setting username as session variable 
		$_SESSION["userid"]=$fetch['userid'];
	header("location:buyerhome.php");
	}
	}
        else
{
echo "<script>alert('invalid credentials!')</script>";
}
}

    }	
//    else{
//        echo '<script> alert("Unauthorized access!!!");</script>';
//    }
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
                <script src='https://www.google.com/recaptcha/api.js'></script>
                
                <!--<script src="https://apis.google.com/js/platform.js" async defer></script>-->
                <meta name="google-signin-client_id" content="28475586243-2d7k8ghms2i2u8dmsuo1deqruvaaj3n0.apps.googleusercontent.com">
                <script src="https://apis.google.com/js/platform.js?key=AIzaSyAdmfUAI2PrOsmz7z2GU27ujgQ5hJqEpyE" async defer></script>
                <!--<meta name="google-signin-client_id" content="306246560236-mtnc3rp1n9jfiad4jkj2pan9b5f5pj8e.apps.googleusercontent.com">-->
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
                 <script>
                     gapi.load('auth2',function(){
                         gapi.auth2.init();
                     });
                     
        function loginPwd(){
            var fpwd1=/^[a-z0-9]{3,25}$/;
                if(document.frmLogin.password.value.search(fpwd1)==-1)
                 {
                      alert("Username or Password is incorrect!!");
                      document.frmLogin.password.focus();
                      
                      return false;
                }
        }
        
        
function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
}

function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }
  
        </script>
        
	</head>
    <body>	
        <a href="#" onclick="signOut();">Sign out</a>
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
                                                        <li><a href="index.php">Home</a></li>
<!--							<li><a href="#">My Account</a></li>
							<li><a href="#">Your Cart</a></li>
							<li><a href="#">Checkout</a></li>	-->
                                                        <li><a href="cusregister.php">Are You Looking for Something?</a></li>
							<li><a href="register.php">Are You a Seller?</a></li>		
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="index.html" class="logo pull-left"><img src="themes/images//logo.png" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
<!--						<ul>
							<li><a href="./products.html">Woman</a>					
								<ul>
									<li><a href="./products.html">Lacinia nibh</a></li>									
									<li><a href="./products.html">Eget molestie</a></li>
									<li><a href="./products.html">Varius purus</a></li>									
								</ul>
							</li>															
							<li><a href="./products.html">Man</a></li>			
							<li><a href="./products.html">Sport</a>
								<ul>									
									<li><a href="./products.html">Gifts and Tech</a></li>
									<li><a href="./products.html">Ties and Hats</a></li>
									<li><a href="./products.html">Cold Weather</a></li>
								</ul>
							</li>							
							<li><a href="./products.html">Hangbag</a></li>
							<li><a href="./products.html">Best Seller</a></li>
							<li><a href="./products.html">Top Seller</a></li>
						</ul>-->
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
                                            <center><h4 class="title"><span class="text"><strong>Login</strong></span></h4></center>
						<form action="#" method="post"  name="frmLogin"  id="frmLogin" onsubmit="return loginPwd()">
							<input type="hidden" name="next" value="/"><div class="span5"></div>
							<fieldset>
								<div class="control-group">
                                                                    <label class="control-label"><b>Username</b></label>
									<div class="controls">
                                                                            <input type="text" placeholder="Enter your username" id="username" name="username" class="input-xlarge" required/>
									</div>
								</div>
								<div class="control-group">
                                                                    <label class="control-label"><b>Password</b></label>
									<div class="controls">
                                                                            <input type="password" placeholder="Enter your password" id="password" name="password" class="input-xlarge" required/>
									</div>
								</div>
                                                         <div class="g-recaptcha" data-sitekey="6LfTwkAUAAAAAMABvEoSZugEUGDjct3oEDDkaId-"></div>
                                                        </fieldset>
                                                        </br>
                                                        <center><div class="control-group">
                                                                    <input tabindex="3" class="btn btn-inverse large" type="submit" id="submit" name="submit" value="Sign into your account">
								<div class="g-signin2" data-onsuccess="onSignIn"></div>	
                                                                    <hr>
                                                                        <p class="reset">Recover your Username or Password<a tabindex="4" href="forgot.php" title="Recover your username or password"> Buyer</a> or<a tabindex="4" href="forgot_seller.php" title="Recover your username or password"> Seller</a></p>
                                                            </div></center>
							
						</form>				
					</div>
									
				</div>
                           
			</section>			
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="nav">
                                                    <li><a href="./index.php">Homepage</a></li>  
							<li><a href="./#">About Us</a></li>
							<li><a href="./#">Contac Us</a></li>
							<li><a href="./#">Your Cart</a></li>
							<li><a href="./register.php">Register</a></li>							
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
		</script>		
    </body>
</html>