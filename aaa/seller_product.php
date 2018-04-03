
<?php
include 'db.php';
if (!isset($_SESSION["username"])) {
    header("location: ./");
}

//if (isset($_POST['btn_discount'])) {
//
////$k=$_POST["username"];
//    $us_id = $_SESSION['userid'];
//    $a = $_POST["disc_amount"];
////$b=$_POST["date2"];
////echo"<script>alert('$us_id');</script>";
//
//
//
//    $sql1 = "INSERT INTO `discount`(`seller_id`, `percentage`) VALUES ($us_id,'$a')";
//    $result1 = mysqli_query($con, $sql1);
//    echo"<script>alert('Discount Created');</script>";
//}
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
            .category:hover {
                /*                background-color: orangered;*/
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
                            <!--<li><a href="dsc.php">Set Discount</a></li>-->
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
                                            <center><h4 class="title"><span class="text"><strong>PRODUCTS ADDED</strong></span></h4></center>



<?php
$qry = "select DISTINCT image,product_name,selling_price from product where userid=$_SESSION[userid] and quantity<6";
$results = mysqli_query($con, $qry);
$row = mysqli_fetch_array($results);
if ($row > 0) {
    ?>
                                                <font color="#FF4A3B" size="4" > 
                                                <marquee behavior="scroll" align="middle" direction="left" bgcolor="white"  scrollamount="4" onmouseover="this.stop()" onmouseout="this.start()">
                                                    <a href="out_of_stock.php">Some Products are Nearly Out of Stock!!!Click to View the Products</a>
                                                </marquee></font>



    <?php
}
?>

                                            <ul class="thumbnails">	




<?php
$qry = "select * from seller,product where seller.userid=product.userid and seller.userid=$_SESSION[userid]";
$result = mysqli_query($con, $qry);

$i = 0;
while ($row = mysqli_fetch_array($result)) {
    $id = $row['product_id'];

    $i++;
    if ($i % 6 == 1) {
        echo "<tr>";
    }
    ?>									<br>		
                                                    <li class="span3">
                                                        <form action="#" method="post">
                                                            <div class="product-box">
                                                                <span class="sale_tag"></span>

                                                                <p><img src="<?php echo $row['image'] ?>" style="width: 500px; height: 300px; " alt=""></p>
                                                                <!--<b><a href="editpets.php?id=<?php echo $t['id']; ?>"><?php echo $t['petnm']; ?> </a></b>--> 
                                                                <div class="category">
                                                                    <input type="hidden" value="<?php echo $row['product_id'] ?>" name="product_id" />

    <?php echo $row['product_name']; ?>

                                                                    Quantity:<?php echo $row['quantity']; ?><br>
                                                                    Cost Price:<img src="Indian_Rupee_symbol.png" height="9px" width="9px"><?php echo $row['cost_price']; ?><br>
                                                                    Selling Price:<img src="Indian_Rupee_symbol.png" height="9px" width="9px"><?php echo $row['selling_price']; ?><br>
                                                                    <b><a href="edit_products.php?product_id=<?php echo $row['product_id']; ?> " style="color:orangered;">Edit</a><br>

                                                                        <!-- Trigger the modal with a button -->

                                                                        <button type="button" class="btn btn-info btn-lg" data-pid="<?php echo $id; ?>" data-toggle="modal" id="bkbtn" data-target="#myModal">SET DISCOUNT</button>

                                                                        <!-- Modal -->
                                                                        <div class="modal fade" id="myModal" role="dialog">
                                                                            <div class="modal-dialog modal-sm">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                        <h4 class="modal-title"></h4>
                                                                                    </div>
                                                                                    <form action="#" method="post">
                                                                                        <div class="modal-body">
                                                                                            <input type="text" name="disc_amount" id="txt1" placeholder="Enter discount %">
                                                                                            
                                                                                            <br><br><br>
                                                                                            <!--<input type="date" name="date2">-->
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button type="submit" class="btn btn-default" id="btsend1" name="btn_discount">OK</button>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>


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
            $('body').on('click', '#bkbtn', function () {
                $phone = $(this).data('pid');
                $('#btsend1').val($phone);
               
                
                
            }
                    
            );
            </script>
        <script>
                                                $(document).ready(function () {
                                                    $('#checkout').click(function (e) {
                                                        document.location.href = "checkout.html";
                                                    })
                                                });
        </script>		
    </body>
</html>
