<?php
include 'db.php';
$us_id=$_SESSION['userid'];

if (!isset($_SESSION["username"])) {
    header("location: ./");
}
if(session_status()==PHP_SESSION_NONE)
{
session_start();
}

if(isset($_POST['btn_discount']))
{
echo "haiiii";
//$k=$_POST["username"];
$us_id=$_SESSION['userid'];
$a=$_POST["disc_amount"];
$b=$_POST["date2"];

//echo"<script>alert('$us_id');</script>";



$sql1="INSERT INTO `discount`(`seller_id`, `percentage`,`end_date`) VALUES ($us_id,'$a','$b')";
$result1=mysqli_query($con,$sql1);
echo"<script>alert('Product Added');</script>";

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
        
        
         <?php
					 $f=$ar['seller_id'];
	
	 $results=mysqli_query($con,"select * from discount where seller_id='$f'");
                  while($row=mysqli_fetch_array($results))
                  {
					$date_end = $row['end_date'];
					
					?>
        
    <script>
// Set the date we're counting down to
var countDownDate = new Date("<?php echo $date_end; ?>").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("clockdiv").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("clockdiv").innerHTML = "AUCTION STARTED";
    }
}, 1000);
</script>

 <input type="text" style="color:red;" value="Auction Starts in"><div id="clockdiv"><br>
					 <?php
				  }
                                  ?>
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
            .category:hover {
                /*                background-color: orangered;*/
                color: white;
            }
        </style>

    </head>
    <body>	
        
        <?php include_once("analyticstracking.php") ?>
        <div id="top-bar" class="container">
            <div class="row">
                <div class="span4">

                </div>
                <div class="span8">
                    <div class="account pull-right">
                        <ul class="user-menu">	
                            <li><a href="dsc.php">Set Discount</a></li>
                            <!--                                                        <li><a href="index.php">Home</a></li>-->
                            <li><a href="sellerhome.php">Back</a></li>
                            <!--							<li><a href="#">My Account</a></li>
                                                                                    <li><a href="cart.html">Your Cart</a></li>-->


                            <li><a href="signout.php">Logout</a></li>
                            <li style="float:left; color:red; font-weight: bolder; font-size: 14px">
                                <?php echo $_SESSION["username"]; ?></li>
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
                                            <center><h4 class="title"><span class="text"><strong>SET DISCOUNT</strong></span></h4></center>







<p style="color:red;position:absolute;right:300px;top:280px;">Auction Starts in</p>
<div id="clockdiv" style="color:red;position:absolute;right:100px;top:280px;">

</div>


                                            <form action="#" method="POST">
                                                <div>
                                                    <input type="text" name="disc_amount" id="disc_amount" placeholder="Enter discount %">
                                                    <br><br><br>
                                                    <input type="date" name="date2" id="date2">
                                                </div>
                                                <div >
                                                    <input type="submit" class="btn btn-default" name="btn_discount" id="btn_discount" value="OK">
                                                </div>
                                            </form>



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
                                            $(document).ready(function () {
                                                $('#checkout').click(function (e) {
                                                    document.location.href = "checkout.html";
                                                })
                                            });
                                        </script>		
                                        </body>
                                        </html>
