<?php
include 'db.php';

$login_id=$_SESSION['username'];
//echo $id;
//$id=$_SESSION['email'];

//echo $login_id;
$sql2="SELECT username from login where `username`='$login_id'";
$res=mysqli_query($con,$sql2);
if(isset($_POST['submit']))
{
$login_id=$_POST["username"];

$newpass=$_POST["new"];
$conpass=$_POST["con"];
$sql="UPDATE `login` SET `password`='$conpass' WHERE `username`='$login_id'";
 
mysqli_query($con,$sql);
$sql="UPDATE `seller` SET `password`='$conpass' WHERE `username`='$login_id'";
 
mysqli_query($con,$sql);
 echo"<script>alert('Password Changed Successfully!');</script>";

}
?>	
 <script>
function validation()
{
     if (document.changepassword.old.value==document.changepassword.new.value)
	 {
		 alert("Please Choose a Different Password!!");
		 document.changepassword.new.focus();
		 return false;
	 }

if (document.changepassword.new.value=="")
	 {
		 document.changepassword.new.focus();
		 alert("provide a new password");
		 return false;
	 }
if (document.changepassword.con.value=="")
	 {
		 	 alert("provide confirm password");
		 document.changepassword.new.focus();
		 return false;
	 }
	 if (document.changepassword.new.value!=document.changepassword.con.value)
	 {
		 alert("Mismatch password");
		 document.changepassword.con.focus(); 
		 return false;
	 }
         
         
}

</script>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
		<!-- BASICS -->
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
       <title>Shopper</title>
        <meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--<link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />-->	
		<!--<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />-->
		<link rel="stylesheet" href="css/bootstrap.css">
		<!--<link rel="stylesheet" href="css/bootstrap-theme.css">-->
		<!--<link href="css/responsive-slider.css" rel="stylesheet">-->
		<!--<link rel="stylesheet" href="css/animate.css">-->
        <!--<link rel="stylesheet" href="css/style.css">-->
		<!--<link rel="stylesheet" href="css/font-awesome.min.css">-->
		<!-- skin -->
		<!--<link rel="stylesheet" href="skin/default.css">-->
             
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<!--<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">-->      
		<!--<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">-->		
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
    background-color: orange;
    border: none;
    color: white;
    border-radius:13px 13px 13px 13px;
    padding: 8px 16px;
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
     
    </head>
	 
    <body>
        1
<?php include_once("analyticstracking.php") ?>
	<div id="top-bar" class="container">
			<div class="row">
				
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">	
<!--                                                        <li><a href="index.php">Home</a></li>-->
<li><a href="sellerhome.php">Back</a></li>
<!--							<li><a href="#">My Account</a></li>
							<li><a href="cart.html">Your Cart</a></li>-->
							
												
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
                                            <center><h4 class="title"><span class="text"><strong>CHANGE PASSWORD</strong></span></h4></center>

        <!-- About Us Text -->
        <div class="about-us-container">
        	<div class="container">
	            <div class="row">
                <div class="col-sm-5">
                </div>
                
	                <div class="col-sm-3 about-us-text wow fadeInLeft">
              

				 <form name="changepassword" action="#" method="POST" id="changepassword" enctype="multipart/form-data" onSubmit="return validation()">
                                     <br>  	<div class="form-group">
														
	                  		<label for="contact-name">User Name</label>
	                       	<input type="text" name="username"  id="uname" class="contact-name form-control""contact-name" readonly value ='<?php echo $login_id ?> ' >
	                      </div>
<!--	                    	<div class="form-group">
	                    		<label for="contact-email">Old Password</label>
	                	<input type="password" name="old" id="old" class="contact-email form-control" id="contact-email">
	                        </div>-->
	                        <div class="form-group">
	                        	<label for="contact-subject">New Password</label>
	              	<input type="password" name="new" id="new" class="contact-subject form-control" id="contact-subject">
	                        </div>
	                        <div class="form-group">
	                        	<label for="contact-message">Confirm Password</label>
									<input type="password" name="con" id="con" class="contact-message form-control" id="contact-message">
	                        </div> 
						<br>	 	
  <center><button type="submit"  name="submit"  class="button button1" onClick="login.php">Change Password</button></center>								
						 	</form>    
                  </div>
	            </div>
	        </div>
        </div> 
		</div>
        </div> 
		</body>

</html>