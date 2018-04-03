<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 

include_once "db.php";
if(session_status()==PHP_SESSION_NONE)
{
session_start();
}
if(!isset($_SESSION["username"]))
{
header("location: ./");
}

if(isset($_POST['Submit'])){
$pw=$_POST["password"];
$conf=$_POST["password1"];

        $iid=$_SESSION['userid'];
//$pas=document.form.pass.value;

if($pw!=$conf)
{
	?> <script> alert("The password you have entered didnt match"); </script>
<?php
}
     

else{
  $r=mysqli_query($con,"update login set password='$pw' where userid=$iid") or die("Error is".mysqli_error());
      if($r){ $_SESSION['msg']="password changed  successfully..!";
        header('location:sellerhome.php');
	   }

}		}
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
.style1 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-style: italic;
}
.button {
    background-color: orange;
    border: none;
    color: white;
    border-radius:13px 13px 13px 13px;
    padding: 6px 16px;
    left: 0px;
    font-weight: bold;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 22px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
    background-color: white; 
    color: orangered    ; 
    border: 8px solid white;
}

.button1:hover {
    background-color: orangered;
    color: white;
}


</style>
<script>
    function gPwd(){
            var password= document.pass.password.value;
                var password1=document.pass.password1.value;
                if(password.length < 3 ){
                    document.pass.password.style.border = "1px solid red";
                    document.pass.password.focus();
                    alert("Password Should contain atleast 4 characters");
                    return false;
                }
                if(password !== password1){
                    document.pass.password1.style.border = "1px solid red";
                    document.pass.password1.focus();
                    alert("Mismatching Passwords");
                    return false;
                }
        }
        
        function  addUser(){
        var password= document.pass.password.value;
                var password1=document.pass.password1.value;
  
                
                if(password.length < 3 ){
                    document.pass.password.style.border = "1px solid red";
                    document.pass.password.focus();
                    alert("Password Should contain atleast 3 characters");
                    return false;
                }
                if(password !== password1){
                    document.pass.password1.style.border = "1px solid red";
                    document.pass.password1.focus();
                    alert("Mismatching Passwords");
                    return false;
                }
                var fpwd=/^[a-z0-9]{3,25}$/;
                if(document.pass.password.value.search(fpwd)==-1)
                 {
                      alert("Lowercase Letters,numbers(0-9) are allowed,Password Should not exceed 25 Characters");
                      document.pass.password.focus();
                      
                      return false;
                }
            }
    </script>
                </head>
<body>	
    1
<?php include_once("analyticstracking.php") ?>
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
<p>&nbsp;</p><form name="pass" id="pass" method="post" action="#" onsubmit="return addUser()>
<table width="400" height="183" border="0" align="center" cellpadding="0" cellspacing="0">
  
    <tr>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td><span class="style1">Password:</span></td>
      <td><input type="password"  name="password" required/></td>
    </tr>
    <br/>
    <tr>
      <td><span class="style1">Confirm password:</span></td>
      <td><input type="password"  name="password1" required onChange="return gPwd()"/></td>
    </tr>
    
    <td><colspan="2">
        <center>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input name="Submit" type="submit" class="button button1" value="Submit" />
        </center></td>
  
</table></form>
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
		</script>		
    </body>
</html>
