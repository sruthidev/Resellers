<?php 
include 'db.php';
if(!isset($_SESSION["username"]))
{
header("location: ./");
}
if(isset($_POST['sub']))
{
$pid=$_POST['product_id'];
$uid=$_SESSION["userid"];
$qty=$_POST["quantity"];
$qry="insert into booking (userid,product_id,quantity,status) values('$uid','$pid','$qty','1')";
$result=mysqli_query($con,$qry) or die(mysqli_error($con));
$q=mysqli_query($con,"update product set quantity=quantity-$qty where product_id=$pid");
header('location:buyerhome.php');
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

/*div.img {
    margin: 5px;
    border: 3px solid #006600;
    position :absolute;
	left:100;
	top:450px;
    width: 300px;
	background-color:#4CAF50;
	height:230px;
	border-radius:13px 13px 13px 13px;
}
.button1 {	width:100px;

	background-color:#33FF99;
	border-radius:13px;
	cursor: pointer;
}*/


 .cat {
   
    color: black   ; 
    font-size: 18px;
    font-weight: bold;
    font-family: verdana;
    
/*     margin: 5px;
    border: 3px solid #006600;*/
    position :absolute;
	left:220px;
	top:740px;
        text-decoration: line-through;
    width: 600px;
/*	background-color:#4CAF50;*/
	height:230px;
	border-radius:8px 8px 8px 8px;
  
}

.cats {
   
    color: black   ; 
    font-size: 18px;
    font-weight: bold;
    font-family: verdana;
    
/*     margin: 5px;
    border: 3px solid #006600;*/
    position :absolute;
	left:170px;
	top:760px;
/*        text-decoration: line-through;*/
    width: 600px;
/*	background-color:#4CAF50;*/
	height:230px;
	border-radius:8px 8px 8px 8px;
  
}




 .category {
   
    color: black   ; 
    font-size: 18px;
    font-weight: bold;
    font-family: verdana;
    
/*     margin: 5px;
    border: 3px solid #006600;*/
    position :absolute;
	left:720px;
	top:430px;
    width: 600px;
/*	background-color:#4CAF50;*/
	height:230px;
	border-radius:8px 8px 8px 8px;
  
}

.button {
    background-color: orange;
    border: none;
    color: white;
    border-radius:13px 13px 13px 13px;
    padding: 16px 32px;
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
                    
                    
<?php $pid= $_POST['pid']; 
//$qry="select * from product where product_id=$pid";
 $qry="select * from product,seller where product.userid=seller.userid and product_id=$pid";
//$qry="select * from properties,login where properties.userid=login.userid and pid=$pid";
$result=mysqli_query($con,$qry);
while($row=mysqli_fetch_array($result)){

?>
<div style="border:0">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="<?php echo $row['image']?>" alt="tor" style=" border:3px solid white; border-radius:30px;width:350px;height: 350px;">
<div class="cat">
<table><tr><td> Cost Price: </td>
        
        <td> <?php echo $row['cost_price']?> </td>
    </tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr></table></div>
<div class="cats">
<table><tr><td> Selling Price(In Rs): </td>
        <td> <?php echo $row['selling_price']?> </td>
</tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr></table></div>
<p>&nbsp;</p>
  <table width="1217" >
    <tr>
      <td width="524">&nbsp;</td>
      <td width="271"> 
      <div class="category">
      <table>
     
    	
        <tr>
        <td> Product Name: </td>
        <td> <?php echo $row['product_name']?> </td>
        </tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
        <tr>
        <td> Description: </td>
        <td> <?php echo $row['description']?> </td>
        </tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
<!--        <tr>
        <td> Quantity: </td>
        <td> <?php echo $row['quantity']?> </td>
        </tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>-->
    <tr>
        <td> Seller Name: </td>
        <td> <?php echo $row['first_name']?> </td>
        </tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
        <td> Contact Number: </td>
        <td> <?php echo $row['mobile_number']?> </td>
        </tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
        <td> Email Id: </td>
        <td> <?php echo $row['email']?> </td>
        </tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
        <tr>
        <td> Store Name: </td>
        <td> <?php echo $row['store_name']?> </td>
        </tr>
       
          
        
    </table>
      <form id="form2" name="form2" method="post" action="">
        <br> <label class="control-label" style="color: black   ; 
    font-size: 18px;
    font-weight: bold;
    font-family: verdana;"><b>Quantity to Book:</b></label>
									<div class="controls">
                                                                            <!--<input type="text" placeholder="Enter your state" id="state" name="state" class="input-xlarge" required/>-->
                                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                  
                                       <select class="form-control" name="quantity" id="quantity" required/>
                                                                        <option value="1" selected>1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4">4</option>
                                                                        <option value="5">5</option>
                                                                        <option value="6">6</option>
                                                                        <option value="7">7</option>
                                                                        <option value="8">8</option>
                                                                        <option value="9">9</option>
                                                                        <option value="10">10</option>
                                                                        
                                                                        </select>
									</div>
      <input type="hidden" name="product_id" value="<?php echo $row['product_id']?>" />
      <input name="sub" type="submit" class="button button1" id="submit" value="Book" onclick="alert('Booked..!we will contact you soon..!');"/>
      </form></div>
      <p>&nbsp;</p></td>
      
    </tr>
  </table>
  </div>
<?php } ?>
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