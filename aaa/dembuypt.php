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
        <title>Bootstrap E-commerce Templates</title>
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
        <!--[if lt IE 9]>			
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
                <script src="js/respond.min.js"></script>
        <![endif]-->

        <style>
            .category {

                color: black   ; 
                font-size: 18px;
                font-weight: bold;
                font-family: verdana;

            }
            .category:hover {

                color: white;
            }
            .button {
                background-color: orange;
                border: none;
                color: white;
                border-radius:13px 13px 13px 13px;
                /*padding: 16px 32px;*/
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                -webkit-transition-duration: 0.4s; /* Safari */
                transition-duration: 0.4s;
                cursor: pointer;
            }

            .button1 {
                background-color: white; 
                color: orangered    ; 
                border: 2px solid white;
            }

            .button1:hover {
                background-color: orangered;
                color: white;
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
                            <li><a href="usvbook.php">Booked Products</a></li>
                            <!--							<li><a href="#">My Account</a></li>
                                                                                    <li><a href="cart.html">Your Cart</a></li>-->

                            <li><a href="change_password.php">Change Password</a></li>


                            <li><a href="signout.php">Logout</a></li>
                            <li style="float:left" class="style6">
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
            </section><table><tr><td>
                        <div class="controls">
                              <form action="" method="post">
                            <!--<input type="text" placeholder="Enter your state" id="state" name="state" class="input-xlarge" required/>-->
                            <select class="form-control" name="orderby" id="orderby"/>
                            <option value="selling_price ASC" selected>Price Asc</option>
                            <option value="selling_price DESC">Price Desc</option>
                            <option value="price asc">3</option>
                            <option value="price asc">4</option>
                            <option value="price asc">5</option>
                            <option value="price asc">6</option>
                            <option value="price asc">7</option>
                            <option value="price asc">8</option>
                            <option value="price asc">9</option>
                            <option value="price asc">10</option>

                            </select>
                        

                          
                        <input type="submit" class="button button1" name="go" value="GO"></td></tr>
                        </form>
            </table></td><td>



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
                                            <center><h4 class="title"><span class="text"><strong>Buyer Home</strong></span></h4></center>
                                            <ul class="thumbnails">	


                                                <?php
                                                if (isset($_POST['go'])) {
                                                    $cid = $_SESSION['userid'];
                                                    $query = mysqli_query($con, "select * from customer where userid=$cid");
                                                    while ($row2 = mysqli_fetch_array($query)) {
                                                        $placeid = $row2['place_id'];
                                                        $sql = "delete from product where quantity=0";
                                                        $results = mysqli_query($con, $sql);
                                                        $orderby = $_POST['orderby'];
                                                        $qry = "select * from product,seller where product.status='1' and product.userid=seller.userid and seller.place_id=$placeid order by $orderby";
                                                        $res = mysqli_query($con, $qry);
                                                        $i = 0;
                                                        while ($ar = mysqli_fetch_array($res)) {
                                                            $i++;
                                                            if ($i % 6 == 1) {
                                                                echo "<tr>";
                                                            }
                                                            ?>											
                                                            <li class="span3">
                                                                <form action="moredetails.php" method="post">
                                                                    <div class="product-box">
                                                                        <span class="sale_tag"></span>

                                                                        <p><img src="<?php echo $ar['image'] ?>" style="width: 500px; height: 300px; " alt=""></p>
                                                                        <div class="category">
                                                                            <?php echo $ar['product_name'] ?><br>
                                                                            <?php echo $ar['store_name'] ?><br>
                                                                            <?php echo $ar['selling_price'] ?>
                                                                            <input type="hidden" value="<?php echo $ar['product_id'] ?>" name="pid" /></div>
                                                                        <!--                                        <div class="button button1">
                                                                                                                    <input type="submit" value="More Details" name="submit" class="button1"/></div>-->
                                                                        <button class="button button1" name="submit">More Details</button>

                                                                    </div></form>
                                                                <?php
                                                            }
                                                        }
                                                    }
                                                    else{
                                                        $cid = $_SESSION['userid'];
                                                    $query = mysqli_query($con, "select * from customer where userid=$cid");
                                                    while ($row2 = mysqli_fetch_array($query)) {
                                                        $placeid = $row2['place_id'];
                                                        $sql = "delete from product where quantity=0";
                                                        $results = mysqli_query($con, $sql);
                                                        $qry = "select * from product,seller where product.status='1' and product.userid=seller.userid and seller.place_id=$placeid";
                                                        $res = mysqli_query($con, $qry);
                                                        $i = 0;
                                                        while ($ar = mysqli_fetch_array($res)) {
                                                            $i++;
                                                            if ($i % 6 == 1) {
                                                                echo "<tr>";
                                                            }
                                                            ?>											
                                                            <li class="span3">
                                                                <form action="moredetails.php" method="post">
                                                                    <div class="product-box">
                                                                        <span class="sale_tag"></span>

                                                                        <p><img src="<?php echo $ar['image'] ?>" style="width: 500px; height: 300px; " alt=""></p>
                                                                        <div class="category">
                                                                            <?php echo $ar['product_name'] ?><br>
                                                                            <?php echo $ar['store_name'] ?><br>
                                                                            <?php echo $ar['selling_price'] ?>
                                                                            <input type="hidden" value="<?php echo $ar['product_id'] ?>" name="pid" /></div>
                                                                        <!--                                        <div class="button button1">
                                                                                                                    <input type="submit" value="More Details" name="submit" class="button1"/></div>-->
                                                                        <button class="button button1" name="submit">More Details</button>

                                                                    </div></form>
                                                                <?php
                                                            }
                                                        }
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
                </div></section></div>
            




            <center>
                <table>


                </table>    
            </center>	
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
            $(document).ready(function () {
                $('#checkout').click(function (e) {
                    document.location.href = "checkout.html";
                })
            });
        </script>		
    </body>
</html>