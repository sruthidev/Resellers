
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
				<div class="span4">
					<form method="POST" class="search_form">
						<input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">	
<!--                                                        <li><a href="index.php">Home</a></li>-->
<li><a href="seller_product.php">Back</a></li>
<!--							<li><a href="#">My Account</a></li>
							<li><a href="cart.html">Your Cart</a></li>-->
							
												
                                                         <li><a href="signout.php">Logout</a></li>
                                                       
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
                                            <center><h4 class="title"><span class="text"><strong>PRODUCTS</strong></span></h4></center>
<!--                                            <ul class="thumbnails">	-->
<?php
	if(isset($_GET['product_id'])){
                        $id=$_REQUEST['product_id'];
//                        $id=$_POST['product_id'];
                        
	$sql1=mysqli_query($con,"SELECT `product_id`, `product_name`, `description`, `quantity`, `cost_price`, `selling_price` FROM `product` where status=1 and product_id=$id;");
	
        while (($row=mysqli_fetch_array($sql1))){
?>
	<form action="#" method="POST" name="editForm" id="editForm">
       <table border="0" align="center" cellpadding="10px" style="font-size:22px; border-collapse: collapse; ">
           
                       <tr>
                                <td>Product Name</td><td><input type="text"  name="editname" value="<?php echo $row['product_name']; ?>" required/></td>
                            </tr>
                            <tr>
                                <td>Description</td><td><input type="text" name="editgender" value="<?php echo $row['description']; ?>" required/></td>
                            </tr>
                            <tr>
                                <td>Quantity</td> <td><input type="number" name="editage" value="<?php echo $row['quantity']; ?>" min="1" required/></td>
                            </tr>
                            <tr>
                               <td>Price</td> <td><input type="number" name="editprice" value="<?php echo $row['cost_price']; ?>" min="1" required/></td>
                            </tr>
                            <tr><td colspan="2" align="center">
                                    <input type="submit" name="editPets" id="editPets" class="button button1" value="SAVE"></td></tr>
                    <?php
					}   
                            }
						
						if(isset($_POST["editPets"])){
						$editname= htmlspecialchars($_POST['editname']);
						$editgender= htmlspecialchars($_POST['editgender']);
						$editage= htmlspecialchars($_POST['editage']);
						$editprice= htmlspecialchars($_POST['editprice']);
			
						$sql6="UPDATE `product` SET `product_name`='$editname',`description`='$editgender',`quantity`='$editage',`cost_price`='$editprice' WHERE status=1 and product_id=$id;";
						
						if (mysqli_query($con,$sql6) > 0){
						
							echo "<script> alert('Product Edited'); </script>";
						?>
							<script>
									window.location="seller_product.php";
							</script>
						<?php
						}
						
						else{
								echo "<script> alert ('Unsuccessfull !'); </script>";
							}
						}
    ?>
                   
                        </table>
                        </form>

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
