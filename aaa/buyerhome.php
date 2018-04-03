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
                  
<script async="async" src="https://www.google.com/adsense/search/ads.js"></script>

<!-- other head elements from your page -->

<script type="text/javascript" charset="utf-8">
(function(g,o){g[o]=g[o]||function(){(g[o]['q']=g[o]['q']||[]).push(
  arguments)},g[o]['t']=1*new Date})(window,'_googCsa');
</script>

        
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


            input[type=text] {
                width: 130px;
                box-sizing: border-box;
                border: 2px solid #ccc;
                border-radius: 4px;
                font-size: 16px;
                background-color: white;

                background-position: 10px 10px; 
                background-repeat: no-repeat;
                /*padding: 12px 20px 12px 40px;*/
                -webkit-transition: width 0.4s ease-in-out;
                transition: width 0.4s ease-in-out;
            }

            input[type=text]:focus {
                width: 80%;
            }


        </style>


    </head>
    <body>	
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ab1e34f4b401e45400de876/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
            }
        </script>

        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        <?php include_once("analyticstracking.php") ?>
        <div id="top-bar" class="container">
            <div class="row">
                <div class="span3">
                    <form method="POST" class="">
                        <input type="text" name="search" id="search" class="input-block-level search-query" Placeholder="eg. Shirt" style="color:black;">


                        <input type="submit" name="srch" class="button button1" value="Go" >
                    </form> 
                </div>
                <div class="span8"><div id="google_translate_element"></div></div>
                <div class="span1">
                    <ul class="user-menu">
                        <li style="float:left; color:red; font-weight: bolder; font-size: 14px">
                            <?php echo $_SESSION["username"]; ?></li></ul></div>
            </div>
            <div class="row">
                <div class="span12">
                    <div class="account pull-right">
                        <ul class="user-menu">	
                            <!--                                                        <li><a href="index.php">Home</a></li>-->
                            <li><a href="cart.php">My Cart</a></li>
                            <!--							<li><a href="#">My Account</a></li>
                                                                                    <li><a href="cart.html">Your Cart</a></li>-->

                            <li><a href="changepwdcust.php">Change Password</a></li>

                            <li><a href="edit_buyer_profile.php">Edit Profile</a></li>
                            <li><a href="usvbook.php">Ordered Products</a></li>
                            <li><a href="bkd_prd_cust.php">Booked Products</a></li>
                            <li><a href="bought_products.php">Bought Products</a></li>
                            <li><a href="cancelled_cust.php">Cancelled Products</a></li>
                            <li><a href="maps_test1.html">Map</a></li>
                            <li><a href="discbuy.php">Discount Products</a></li>
                            <!--<li><a href="other_products.php">Other Places</a></li>-->
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
            </section><table><tr>

                    <td>
                        <div class="controls">
                            <form action="" method="post">
                          <!--<input type="text" placeholder="Enter your state" id="state" name="state" class="input-xlarge" required/>-->
                                <br>   <select class="form-control" name="orderby" id="orderby"/>
                                <option value="" selected>--search--</option>
                                <option value="selling_price ASC">Lowest Price First</option>
                                <option value="selling_price DESC">Highest Price First</option>



                                </select>



                                <input type="submit" class="button button1" name="go" value="GO"> </td>



                                <td>       

                                    <select name="opt" >
                                        <option>--select category--</option>
                                        <?php
                                        $qry1 = "SELECT * FROM `subcategory`";
                                        $res1 = mysqli_query($con, $qry1);
                                        $i = 0;
                                        while ($ar1 = mysqli_fetch_array($res1)) {
                                            ?>
                                            <option><?php echo $ar1['subcategory_name']; ?></option>

                                            <br />

                                            <?php
                                        }
                                        ?> </select>
                                    <input type="submit" class="button button1" name="submit" value="GO">
                                </td>

                                <td>       

                                    <select name="opti" >
                                        <option>--select different place--</option>
                                        <?php
                                        $qry1 = "SELECT * FROM `place`";
                                        $res1 = mysqli_query($con, $qry1);
                                        $i = 0;
                                        while ($ar1 = mysqli_fetch_array($res1)) {
                                            ?>
                                            <option><?php echo $ar1['place_name']; ?></option>

                                            <br />

    <?php
}
?> </select>
                                    <input type="submit" class="button button1" name="plc" value="GO" >
                            </form></td>
                </tr>

            </table>


            <section class="header_text sub">
                <img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" >

                <h4><span></span></h4>
            </section>

          
<div id='afscontainer1'></div>

<script type="text/javascript" charset="utf-8">

  var pageOptions = {
    "pubId": "pub-9616389000213823", // Make sure this the correct client ID!
    "query": "shopping",
    "adPage": 1
  };

  var adblock1 = {
    "container": "afscontainer1",
    "width": "1300",
    "number": 2
  };

  _googCsa('ads', pageOptions, adblock1);





</script>

        


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
                                            <center><h4 class="title"><span class="text"><strong>RECOMMENDED</strong></span></h4></center>
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
                                                                <form action="mr.php" method="post">
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
        echo $cid;
        $sql11 = "INSERT INTO `click`(`id`, `product_id`, `userid`, `count`) VALUES('$k','$encrypted','2',1)";
        $result1 = mysqli_query($con, $sql11);
    }
} elseif (isset($_POST['srch'])) {

    $b = $_POST['search'];
    $results = mysqli_query($con, "select * from product where product_name='$b'");
    while ($ar = mysqli_fetch_array($results)) {
        $i++;
        if ($i % 6 == 1) {
            echo "<tr>";
        }
        ?>
                                                        <td> <li class="span3">
                                                            <form action="mr.php" method="post">
                                                                <div class="product-box">
                                                                    <span class="sale_tag"></span>

                                                                    <p><img src="<?php echo $ar['image'] ?>" style="width: 500px; height: 300px; " alt=""></p>
                                                                    <div class="category">
                                                            <?php echo $ar['product_name'] ?>

                                                                        <br><?php echo $ar['description'] ?>
                                                                        <br><?php echo $ar['selling_price'] ?><br>
                                                                        <input type="hidden" value="<?php echo $ar['product_id'] ?>" name="pid" />
                                                                        <input type="submit" value="More Details" name="submit" class="button button1"/>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            </td>
                                                                    <?php
                                                                    }
                                                                } elseif (isset($_POST['plc'])) {

                                                                    $sbcd = $_POST['opti'];


//SELECT `subcategory_id`, `subcategory_name`, `catid` FROM `subcategory` WHERE
                                                                    $qry21 = "SELECT `place_id` FROM `place` WHERE `place_name`='$sbcd'";
                                                                    $res21 = mysqli_query($con, $qry21);
                                                                    $ar2 = mysqli_fetch_array($res21);
                                                                    $f = $ar2['place_id'];
                                                                    $qrye = "select * from product,seller WHERE product.status='1' and product.userid=seller.userid and seller.place_id=$f and seller.status=1";
                                                                    $rese = mysqli_query($con, $qrye);
                                                                    $i = 0;
                                                                    while ($ar = mysqli_fetch_array($rese)) {
                                                                        $i++;
                                                                        if ($i % 6 == 1) {
                                                                            echo "<tr>";
                                                                        }
                                                                        ?>
                                                        <td> <li class="span3">
                                                            <form action="mr.php" method="post">
                                                                <div class="product-box">
                                                                    <span class="sale_tag"></span>

                                                                    <p><img src="<?php echo $ar['image'] ?>" style="width: 500px; height: 300px; " alt=""></p>
                                                                    <div class="category">
                                                            <?php echo $ar['product_name'] ?>

                                                                        <br><?php echo $ar['description'] ?>
                                                                        <br><?php echo $ar['selling_price'] ?><br>
                                                                        <input type="hidden" value="<?php echo $ar['product_id'] ?>" name="pid" />
                                                                        <input type="submit" value="More Details" name="submit" class="button button1"/>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            </td>
                                                        <?php
                                                        }
                                                    } elseif (isset($_POST['submit'])) {

                                                        $sbc = $_POST['opt'];
                                                        $cid = $_SESSION['userid'];
                                                        $query = mysqli_query($con, "select * from customer where userid=$cid");
                                                        while ($row2 = mysqli_fetch_array($query)) {
                                                            $placeid = $row2['place_id'];
//SELECT `subcategory_id`, `subcategory_name`, `catid` FROM `subcategory` WHERE
                                                            $qry2 = "SELECT `subcategory_id` FROM `subcategory` WHERE `subcategory_name`='$sbc'";
                                                            $res2 = mysqli_query($con, $qry2);
                                                            $ar2 = mysqli_fetch_array($res2);
                                                            $f = $ar2['subcategory_id'];
                                                            $qry = "select * from product,seller WHERE `subcategory_id`='$f' and product.status='1' and product.userid=seller.userid and seller.place_id=$placeid and seller.status=1";
                                                            $res = mysqli_query($con, $qry);
                                                            $i = 0;
                                                            while ($ar = mysqli_fetch_array($res)) {
                                                                $i++;
                                                                if ($i % 6 == 1) {
                                                                    echo "<tr>";
                                                                }
                                                                ?>
                                                            <td> <li class="span3">
                                                                <form action="mr.php" method="post">
                                                                    <div class="product-box">
                                                                        <span class="sale_tag"></span>

                                                                        <p><img src="<?php echo $ar['image'] ?>" style="width: 500px; height: 300px; " alt=""></p>
                                                                        <div class="category">
                                                                <?php echo $ar['product_name'] ?>

                                                                            <br><?php echo $ar['description'] ?>
                                                                            <br><?php echo $ar['selling_price'] ?><br>
                                                                            <input type="hidden" value="<?php echo $ar['product_id'] ?>" name="pid" />
                                                                            <input type="submit" value="More Details" name="submit" class="button button1"/>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                                </td>
                                                            <?php
                                                            }
                                                        }
                                                    } else {
                                                        $cid = $_SESSION['userid'];
                                                        $qry = "select * from wishlist where userid=$cid order by count desc";
                                                        $res = mysqli_query($con, $qry);
                                                        while ($row = mysqli_fetch_array($res)) {
                                                            $prod = $row['product_id'];
                                                            //echo $prod;
                                                            $qry6 = " select * from product where product_id=$prod ";
                                                            //echo $qry6;
                                                             $res11 = mysqli_query($con, $qry6);
                                                            $i = 0;
                                                            while ($row = mysqli_fetch_array($res11)) {
                                                                $i++;
                                                                if ($i % 6 == 1) {
                                                                    echo "<tr>";
                                                                }
                                                                ?>											
                                                            <li class="span3">
                                                                <form action="mr.php" method="post">
                                                                    <div class="product-box">
                                                                        <span class="sale_tag"></span>

                                                                                    <p><img src="<?php echo $row['image'] ?>" style="width: 450px; height: 300px; " alt=""></p>
                                                                        <div class="category">
                                                                     <?php echo $row['product_name'] ?><br>
                                                                      
                                                                            <img src="Indian_Rupee_symbol.png" height="9px" width="9px"> <?php echo $row['selling_price'] ?>
                                                                            <input type="hidden" value="<?php echo $row['product_id'] ?>" name="pid" />
                                                                            <input type="hidden" value="<?php echo $row['subcategory_id'] ?>" name="sid" />
                                                                        </div>
                                                                        <!--                                        <div class="button button1">
                                                                                                                    <input type="submit" value="More Details" 
                                                                        name="submit" class="button1"/></div>-->
                                                                        <button class="button button1" name="submit">More Details</button>

                                                            </div>
                                                                 <!--<center><h4 class="title"><span class="text"><strong></strong></span></h4></center>-->
                                                                  <!--<center><h4 class="title"><span class="text"><strong></strong></span></h4></center>-->
                                                                </form><?php } }?>
                                                              
                                                                <?php
                                                                $cid = $_SESSION['userid'];
                                                                $query = mysqli_query($con, "select * from customer where userid=$cid");
                                                                while ($row2 = mysqli_fetch_array($query)) {
                                                                    $placeid = $row2['place_id'];
                                                                    $sql = "update product set status=0 where quantity<1";
                                                                    $results = mysqli_query($con, $sql);
                                                                    $qry = "select * from product,seller where product.status='1' and product.userid=seller.userid and seller.place_id=$placeid and seller.status=1";
                                                                    $res = mysqli_query($con, $qry);
                                                                    $i = 0;
                                                                    while ($ar = mysqli_fetch_array($res)) {
                                                                        $i++;
                                                                        if ($i % 6 == 1) {
                                                                            echo "<tr>";
                                                                        }
                                                                        ?>											
                                                                    <li class="span3">
                                                                        <form action="mr.php" method="post">
                                                                            <div class="product-box">
                                                                                <span class="sale_tag"></span>

                                                                                <p><img src="<?php echo $ar['image'] ?>" style="width: 450px; height: 300px; " alt=""></p>
                                                                                <div class="category">
                                                                                    <?php echo $ar['product_name'] ?><br>
                                                                                    <?php echo $ar['store_name'] ?><br>
                                                                                    <img src="Indian_Rupee_symbol.png" height="9px" width="9px"> <?php echo $ar['selling_price'] ?>
                                                                                    <input type="hidden" value="<?php echo $ar['product_id'] ?>" name="pid" />
                                                                                    <input type="hidden" value="<?php echo $ar['subcategory_id'] ?>" name="sid" />
                                                                                </div>
                                                                                <!--                                        <div class="button button1">
                                                                                                                            <input type="submit" value="More Details" 
                                                                                name="submit" class="button1"/></div>-->
                                                                                <button class="button button1" name="submit">More Details</button>

                                                                            </div></form>
                                                                        <?php
                                                                    }

//                                                             echo $cid;
//                                                             
//                                                            $sql11="INSERT INTO `click`(`product_id`, `userid`, `count`) VALUES({$ar['product_id']},'$cid',1)";
//                                                            $result1=mysqli_query($con,$sql11);
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
                    <!--                                                        <li><a href="index.php">Home</a></li>-->
                    <li><a href="cart.php">My Cart</a></li>
                    <!--							<li><a href="#">My Account</a></li>
                                                                            <li><a href="cart.html">Your Cart</a></li>-->

                    <li><a href="changepwdcust.php">Change Password</a></li>

                    <li><a href="edit_buyer_profile.php">Edit Profile</a></li>
                    <li><a href="usvbook.php">Ordered Products</a></li>
                    <li><a href="bkd_prd_cust.php">Booked Products</a></li>

                </ul>					
            </div>
            <div class="span4">
                <h4>Navigation</h4>
                <ul class="nav">
                    <li><a href="bought_products.php">Bought Products</a></li>
                    <li><a href="cancelled_cust.php">Cancelled Products</a></li>
                    <li><a href="maps_test1.html">Map</a></li>
                    <!--<li><a href="other_products.php">Other Places</a></li>-->
                    <li><a href="signout.php">Logout</a></li>
                    <li><a href="terms.php">Terms and Conditions</a></li>
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