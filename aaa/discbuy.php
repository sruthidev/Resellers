<?php
include 'db.php';
if (!isset($_SESSION["username"])) {
    header("location: ./");
}

if (session_status() == PHP_SESSION_NONE) {
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

                </div>
                <div class="span8">
                    <div class="account pull-right">
                        <ul class="user-menu">	
                            <!--                                                        <li><a href="index.php">Home</a></li>-->
                            <li><a href="buyerhome.php">Back</a></li>
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
                                        
                                        
<!--                                        
                                         <?php
//					 $f=$row['seller_id'];
	
	 $results=mysqli_query($con,"select * from product,discount where product.userid=discount.seller_id");
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
                                        -->
                                        <div class="active item">
                                            <center><h4 class="title"><span class="text"><strong>DISCOUNT PRODUCTS</strong></span></h4></center>
                                            <ul class="thumbnails">	


<?php
$cid = $_SESSION['userid'];
$qr="select * from product,discount1 where product.product_id=discount1.product_id";
$query = mysqli_query($con, $qr);
//echo $qr;
while ($row2 = mysqli_fetch_array($query)) {
//    $placeid = $row2['place_id'];
//                                              $qry="select DISTINCT image,product_name,selling_price,book_id from booking,product where product.product_id=booking.product_id and product.status1=1 and booking.userid=$_SESSION[userid] GROUP BY product_name";
//$qry="select DISTINCT image,product_name,selling_price from product,seller where seller.userid=product.userid and seller.place_id=$placeid and product.status1=1";
//    $qry = "select DISTINCT image,product_name,selling_price from product,seller,customer,bill where product.product_id=bill.product_id and bill.payment_type=2 and bill.userid=$cid";
//    $results = mysqli_query($con, $qry);
//
//    $i = 0;
//    while ($row = mysqli_fetch_array($results)) {
//        $i++;
//        if ($i % 6 == 1) {
//            echo "<tr>";
//        }
        ?>											
                                                        <li class="span3">
                                                            <form action="mr3.php" method="post">
                                                                <div class="product-box">
                                                                    <span class="sale_tag"></span>

        <?php
//	  $bid=$row['book_id'];
        ?>
                                                                    <p><img src="<?php echo $row2['image'] ?>" style="width: 300px; height: 300px; " alt=""></p>
                                                                    <div class="category">

        <?php echo $row2['product_name']; ?><br>

                                                                        <!--<img src="Indian_Rupee_symbol.png" height="9px" width="9px"><?php echo $row2['selling_price']; ?><br>-->
                                                                        <!--<a href="del2.php?book_id=<?php echo $row2['book_id']; ?>" style="color: orangered">Cancel Booking</a>-->
                                                                        <input type="hidden" value="<?php echo $row2['product_id'] ?>" name="pid" />
 <button class="button button1" name="submit">More Details</button>

                                                                    </div></form>
        <?php
    }

?>


                                                </li>

                                            </ul>
                                        </div>

                                    </div>							
                                </div>
                            </div>						
                        </div>




                        <br/>

                    </div>				
                </div></section>
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


