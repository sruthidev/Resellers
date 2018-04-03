
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
                
                                <style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
    font-size: 14px;
    font-weight: bold;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #EE680D;
    color: white;
    font-size: 16px;
    font-family: helvetica;
    font-weight: bolder;
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
                                                       <li><a href="admin_home.php">Back</a></li>
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
                                            <center><h4 class="title"><span class="text"><strong>SELLERS</strong></span></h4></center>
                                            <!--<form action="#" method="post" class="form-stacked" enctype="multipart/form-data">-->
                                            <!--<form name="sregister" class="form-stacked" id="form" method="POST" action="#" enctype="multipart/form-data" onSubmit="return valid()">-->
                                            <div class="span5"></div>
                 <?php
//$qry="select * from login,role where login.role_id=role.role_id";
      $qry="select * from seller,login,place where seller.userid=login.userid and seller.place_id=place.place_id and seller.status=1";
$result=mysqli_query($con,$qry);
if(isset($_POST['delete']))
{

$l=$_POST["userid"];
$sql2="UPDATE `seller` SET `status`='0' WHERE `userid`='$l'";
$result2=mysqli_query($con,$sql2) or die("error");
$sql3="UPDATE `login` SET `status`='0' WHERE `userid`='$l'";
$result3=mysqli_query($con,$sql3) or die("error");
echo "<script> alert('delete successfull');</script>";
header("location:admin_seller_view.php");
}
?>
<table >
  <tr>
    <td >&nbsp;</td>
    <td >
      <tr>
        
        <th>Username</th>
        <th>First Name</th>
         <th>Last Name</th>
        <th>Store Name</th>
        <th>Mobile Number</th>
        <th>Email</th>
        
        <th>Place Name</th>
        <th>Gst Number</th>
        <th></th>
        <th></th>
      </tr>
 <?php
while($row=mysqli_fetch_array($result)){
?><form action="#" method="post">
      <tr>
        
        <td><?php echo $row['username'];?></td>
        <td><?php echo $row['first_name'];?></td>
         <td><?php echo $row['last_name'];?></td>
        <td><?php echo $row['store_name'];?></td>
        <td><?php echo $row['mobile_number'];?></td>
        <td><?php echo $row['email'];?></td>
        
        <td><?php echo $row['place_name'];?></td>
        <td><?php echo $row['gst_no'];?></td>
         <td><input class="txt" type="hidden" name="userid" value="<?php echo $row['userid'];?>"></td>
        <td><input type="submit" name="delete" class="btn btn-inverse large" value="BLOCK"></td>
        
      </tr></form>
      <?php
}
?>
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
		</script>		
    </body>
</html>
