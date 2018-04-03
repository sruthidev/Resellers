
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
                
                <style>
                    .category {
   
    color: black   ; 
    font-size: 18px;
    font-weight: bold;
    font-family: verdana;
    
/*     margin: 5px;
    border: 3px solid #006600;*/
/*    position :absolute;
	left:720px;
	top:430px;*/
/*    width: 600px;*/
/*	background-color:#4CAF50;*/
/*	height:230px;*/
	border-radius:8px 8px 8px 8px;
  
}

.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
 
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
                    </style>

</head>
<body>		
    1
<?php include_once("analyticstracking.php") ?>
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
                                            <center><h4 class="title"><span class="text"><strong>PENDING PRODUCTS</strong></span></h4></center>
                                            
                                                
                                                <table width="100%"  align="center"   cellpadding="0" >




<tr>
    <th><p></p>
   </th>
 <th><p>Product Name</p>
   </th>
 
 <th><p>Description</p>
   </th>
 
 <th><p>Quantity</p>
   </th>
 
 <th><p>Price</p>
   </th>
</tr>
 


                                                <?php
                                                $totalprice=0;
                                              $qry="select DISTINCT image,product_name,description,selling_price,book_id,booking.quantity from booking,product where product.product_id=booking.product_id and booking.status1=1 and product.userid=$_SESSION[userid] GROUP BY product_name";
$results=mysqli_query($con,$qry);
                                                  
//                                                        $i = 0;
                                                        while ($row = mysqli_fetch_array($results)) {
                                                            $price=$row['selling_price'];
                                                            $totalprice+=$price;
                                                            
//                                                            $i++;
//                                                            if ($i % 6 == 1) {
//                                                                echo "<tr>";
//                                                            }
                                                            ?>											
                                                            

                                                                         <?php
	  $bid=$row['book_id'];?>
                                                                        
                                                                        
                                                                        <tr><form action="#" method="POST" name="items"><td><img src="<?php echo $row['image'] ?>"width="100px" height="80px" border="1" alt="no image found"/></td>    
     <td ><input type="text" name="artname" style="border-color:white;" id="artname" value='<?php echo $row['product_name'];?> '></td>
	 <td><input type="text" name="artcategory" style="border-color:white;"  id="artcategory" value='<?php echo $row['description'];?> '></td>
          <td ><input type="text" name="artname" style="border-color:white;" id="artname" value='<?php echo $row['quantity'];?> '></td>
           <td ><input type="text" name="artname" style="border-color:white;" id="artname" value='<?php echo $row['selling_price'];?> '></td>
            <!--<td ><input type="text" name="artname" style="border-color:white;" id="artname" value='<?php echo $row['product_name'];?> '></td>-->
<!--	 <td width="165" valign="center"><input type="text" name="artistname" style="border-color:white;"  id="artistname" value='<?php echo $fname." ".$lname ?> '></td>
	 <td width="165" valign="center"><input type="text" name="artdetails" style="border-color:white;"  id="artdetails" value='<?php echo $artdetails ?> '></td>

	 <td width="165" valign="center"><input type="text" name="size" style="border-color:white;"  id="size" value='<?php echo $size ?> '></td>
	 <td width="165" valign="center"><input type="text" name="price" style="border-color:white;"  id="price" value='<?php echo $price ?> '></td>-->
     <td width="165" valign="center">

          <a href="del1.php?book_id=<?php echo $row['book_id'];?>" style="color: orangered">Delivered</a>
          <input type="hidden" value="<?php echo $ar['pid']?>" name="pid" />
	 </td>
</form></tr>	
                                                </table>
                                                                        
                                                                        
    				
                                         
<!--   					 <img src="Indian_Rupee_symbol.png" height="9px" width="9px"><?php echo $row['selling_price'];?><br>
                                         <a href="del.php?book_id=<?php echo $row['book_id'];?>" style="color: orangered">Cancel Booking</a>
					<input type="hidden" value="<?php echo $ar['pid']?>" name="pid" />
                                                                         

                                                                    </div></form>-->
                                                                <?php
                                                            }
                                                        ?>
<!--                                   <form action="" method="POST">
                                       <table width='100%'> <tr><td></td><td></td><td></td><td></td><td></td><td></td> <td>
	
       Total: <input name="pay" type="text" placeholder="Payableamount" size="25" maxlength="50" value='<?php echo $totalprice ?>'>
      </td> 
           </tr>
                                             <tr>
                                                     <td>
                                             <center>  
                                                 
                                                 <button class="button" name="btn"   style="vertical-align:middle" > <a href="buyerhome.php" style="color:white;">CONTINUE SHOPPING</a></button>
                                                 <input type="button" name="btn" value="Continue Shopping" size="30" maxlength="50" class="button" style="vertical-align:middle">
     <button class="button" name="btn"   style="vertical-align:middle" > <a href="wallet.php" style="color:white;">PROCEED TO PAYMENT</a></button>
      
                                             </center>       </td></tr></table>  </form>  -->
                                                        
<!--                                                </li>

                                            </ul>
                                        </div>

                                    </div>							
                                </div>
                            </div>						
                        </div>




                        <br/>

                    </div>				
                </div></section>-->
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

