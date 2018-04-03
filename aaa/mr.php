<?php
include 'db.php';
if (!isset($_SESSION["username"])) {
    header("location: ./");
}
if (isset($_POST['sub'])) {
    $pid = $_POST['pid'];
    $sid = $_POST['sid'];
    $uid = $_SESSION["userid"];
    $qty = $_POST["quantity"];

    $c1 = "select * from product where subcategory_id=$sid";
    $ress1 = mysqli_query($con, $c1);
    $row71 = mysqli_fetch_array($ress1);
    $c = "select * from product where product_id=$pid";
    $ress = mysqli_query($con, $c);
    $row7 = mysqli_fetch_array($ress);
    $s = $row7['selling_price'];
    $amount = $qty * $s;
//echo $amount;
//echo $qty;
//echo $s;
    $qry4 = "select * from booking where product_id='$pid' and status1=0 and status2=0 and status4=0 and userid='$uid'";
    $result4 = mysqli_query($con, $qry4);
    $row8 = mysqli_fetch_array($result4);
    if (count($row8) == 0) {


        $qry = "insert into booking (userid,product_id,quantity,amount,status) values('$uid','$pid','$qty','$amount','1')";
        $result = mysqli_query($con, $qry) or die(mysqli_error($con));
        $qry2 = "INSERT INTO `bill`(`userid`, `product_id`, `payment_type`) VALUES('$uid','$pid','2')";
        $result2 = mysqli_query($con, $qry2) or die(mysqli_error($con));
        $a = "select quantity from product where product_id=$pid";
        $res = mysqli_query($con, $a);
        while ($row6 = mysqli_fetch_array($res)) {
            $b = $row6['quantity'];

            if (($b - $qty) >= 0) {
                $q = mysqli_query($con, "update product set quantity=quantity-$qty where product_id=$pid");
//onclick="alert('Booked..!we will contact you soon..!');"
//       echo"<script>alert('Added to your Cart!');</script>";
                header('location:cart.php');
            } else {
                echo"<script>alert('Sorry $qty products are not available!!Please select a lower quantity!!');</script>";
            }
        }
    } elseif (count($row8) > 0) {
        $bookid = $row8['book_id'];
        $qty1 = $row8['quantity'];
        $totalquantity = $qty1 + $qty;
        $qry3 = "INSERT INTO `bill`(`userid`, `product_id`, `payment_type`) VALUES('$uid','$pid','2')";
        $result3 = mysqli_query($con, $qry3) or die(mysqli_error($con));
        $q1 = mysqli_query($con, "update booking set quantity=$totalquantity where book_id=$bookid");
        $a = "select quantity from product where product_id=$pid";
        $res = mysqli_query($con, $a);
        while ($row6 = mysqli_fetch_array($res)) {
            $b = $row6['quantity'];

            if (($b - $qty) >= 0) {
                $q = mysqli_query($con, "update product set quantity=quantity-$qty where product_id=$pid");
//onclick="alert('Booked..!we will contact you soon..!');"
//       echo"<script>alert('Added to your Cart!');</script>";
                header('location:cart.php');
            } else {
                echo"<script>alert('Sorry $qty products are not available!!Please select a lower quantity!!');</script>";
            }
        }
    }
}
if (isset($_POST['subm'])) {
    $pid = $_POST['pid'];
    $sid = $_POST['sid'];
    $uid = $_SESSION["userid"];
    $qty = $_POST["quantity"];
    $c1 = "select * from product where subcategory_id=$sid";
    $ress1 = mysqli_query($con, $c1);
    $row71 = mysqli_fetch_array($ress1);
    $c = "select * from product where product_id=$pid";
    $ress = mysqli_query($con, $c);
    $row7 = mysqli_fetch_array($ress);
    $s = $row7['selling_price'];
    $amount = $qty * $s;
//echo $amount;
//echo $qty;
//echo $s;
    $qry4 = "select * from booking where product_id='$pid' and status1=0 and status2=0 and status4=0 and userid='$uid'";
    $result4 = mysqli_query($con, $qry4);
    $row8 = mysqli_fetch_array($result4);
    if (count($row8) == 0) {


        $qry = "insert into booking (userid,product_id,quantity,amount,status3) values('$uid','$pid','$qty','$amount','1')";
        $result = mysqli_query($con, $qry) or die(mysqli_error($con));
        $qry5 = "INSERT INTO `bill`(`userid`, `product_id`, `payment_type`) VALUES('$uid','$pid','2')";
        $result5 = mysqli_query($con, $qry5) or die(mysqli_error($con));
        $a = "select quantity from product where product_id=$pid";
        $res = mysqli_query($con, $a);
        while ($row6 = mysqli_fetch_array($res)) {
            $b = $row6['quantity'];

            if (($b - $qty) >= 0) {
                $q = mysqli_query($con, "update product set quantity=quantity-$qty where product_id=$pid");
//onclick="alert('Booked..!we will contact you soon..!');"
//       echo"<script>alert('Added to your Cart!');</script>";
                header('location:bkd_prd_cust.php');
            } else {
                echo"<script>alert('Sorry $qty products are not available!!Please select a lower quantity!!');</script>";
            }
        }
    } elseif (count($row8) > 0) {
        $bookid = $row8['book_id'];
        $qty1 = $row8['quantity'];
        $totalquantity = $qty1 + $qty;
        $qry6 = "INSERT INTO `bill`(`userid`, `product_id`, `payment_type`) VALUES('$uid','$pid','2')";
        $result6 = mysqli_query($con, $qry6) or die(mysqli_error($con));
        $q1 = mysqli_query($con, "update booking set quantity=$totalquantity where book_id=$bookid");
        $a = "select quantity from product where product_id=$pid";
        $res = mysqli_query($con, $a);
        while ($row6 = mysqli_fetch_array($res)) {
            $b = $row6['quantity'];

            if (($b - $qty) >= 0) {
                $q = mysqli_query($con, "update product set quantity=quantity-$qty where product_id=$pid");
//onclick="alert('Booked..!we will contact you soon..!');"
//       echo"<script>alert('Added to your Cart!');</script>";
                header('location:bkd_prd_cust.php');
            } else {
                echo"<script>alert('Sorry $qty products are not available!!Please select a lower quantity!!');</script>";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <style>
            .checked {
                color: orange;
            }
        </style>
        <meta charset="utf-8">
        <title>Shopper</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
        <!-- bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">		
        <link href="themes/css/bootstrappage.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- global styles -->
        <link href="themes/css/flexslider.css" rel="stylesheet"/>
        <link href="themes/css/main.css" rel="stylesheet"/>

        <!-- scripts -->
        <script src="themes/js/jquery-1.7.2.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>				
        <script src="themes/js/superfish.js"></script>	
        <script src="themes/js/jquery.scrolltotop.js"></script>
        <script>


            function gPhone() {
                var quantity = document.sregister.quantity.value;
                if (isNaN(quantity)) {

                    alert("Enter a Quantity");
                    document.sregister.quantity.focus();
                    return false;
                }

            }
            function  addUser() {


                var quantity = document.sregister.quantity.value;
                if (isNaN(quantity)) {
                    document.sregister.quantity.style.border = "1px solid red";
                    alert("Enter a valid Quantity");
                    document.sregister.quantity.focus();
                    return false;
                }
            }
        </script>
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


            .button11 {
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

            .button111 {
                background-color: white; 
                color: orangered    ; 
                border: 8px solid white;
            }

            .button111:hover {
                background-color: orangered;
                color: white;
            }


        </style>
        <style>

            .button1 {
                background-color: orange;
                border: none;
                color: white;
                border-radius:13px 13px 13px 13px;
                padding: 16px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                -webkit-transition-duration: 0.4s; /* Safari */
                transition-duration: 0.4s;
                cursor: pointer;
            }

            .button11 {
                background-color: white; 
                color: orangered    ; 
                border: 2px solid white;
            }

            .button11:hover {
                background-color: orangered;
                color: white;
            }




        </style>
    </head>

    <body>	
        1
        <?php include_once("analyticstracking.php") ?>
        <script>
            function myFunction() {
                document.getElementById("demo").style.color = "red";
            }
            function myFunction1() {
                document.getElementById("demo1").style.color = "red";
            }
            function myFunction2() {
                document.getElementById("demo2").style.color = "red";
            }
            function myFunction3() {
                document.getElementById("demo3").style.color = "red";
            }
            function myFunction4() {
                document.getElementById("demo4").style.color = "red";
            }
        </script>
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


            <?php
            $pi = $_POST['pid'];
            $sid = $_POST['sid'];

//$qry="select * from product where product_id=$pid";
            $qry1 = "select * from product,seller,place where product.userid=seller.userid and product_id=$pi and seller.place_id=place.place_id";
//$qry="select * from properties,login where properties.userid=login.userid and pid=$pid";
            $result1 = mysqli_query($con, $qry1);
            while ($row = mysqli_fetch_array($result1)) {
                $s = $row['selling_price'];
                ?>
                <div style="border:0">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="<?php echo $row['image'] ?>" alt="tor" style=" border:3px solid white; border-radius:30px;width:350px;height: 350px;">    
                    <div class="cat">
                        <table><tr><br><br><td> Cost Price:<img src="Indian_Rupee_symbol.png" height="9px" width="9px"> </td>

                            <td> <?php echo $row['cost_price'] ?> </td>
                        </tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr></table></div>
            <div class="cats">
                <table><tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Selling Price:<img src="Indian_Rupee_symbol.png" height="9px" width="9px"> </td>
                        <td> <?php echo $row['selling_price'] ?> </td>
                    </tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr></table></div>
            <p>&nbsp;</p>

            <table width="1217" height="56">
                <tr>
                    <td width="524">&nbsp;</td>
                    <td width="271"> 
                        <div class="category"><form><fieldset><legend>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRODUCT DETAILS</legend>
                                    <table>


                                        <tr>
                                            <td style="font-family:Arial Black;font-size: 22px;"> Product Name: </td>
                                            <td style="font-family:Arial;font-size: 22px;"> <?php echo $row['product_name'] ?> </td>
                                        </tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
                                        <tr>
                                            <td style="font-family:Arial Black;font-size: 22px;"> Description: </td>
                                            <td style="font-family:Arial;font-size: 22px;"> <?php echo $row['description'] ?> </td>
                                        </tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
                                <!--        <tr>
                                        <td> Quantity: </td>
                                        <td> <?php echo $row['quantity'] ?> </td>
                                        </tr>-->
                                        <?php $quant = $row['quantity'] ?>

                                        <tr>
                                            <td style="font-family:Arial Black;font-size: 22px;"> Seller Name: </td>
                                            <td  style="font-family:Arial;font-size: 22px;"> <?php echo $row['first_name'] ?> </td>
                                        </tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
                                        <td style="font-family:Arial Black;font-size: 22px;"> Contact Number: </td>
                                        <td style="font-family:Arial;font-size: 22px;"> <?php echo $row['mobile_number'] ?> </td>
                                    </tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
                                <td style="font-family:Arial Black;font-size: 22px;"> Email Id: </td>
                                <td style="font-family:Arial;font-size: 22px;"> <?php echo $row['email'] ?> </td>
                            </tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
                        <tr>
                            <td style="font-family:Arial Black;font-size: 22px;"> Store Name: </td>
                            <td style="font-family:Arial;font-size: 22px;"> <?php echo $row['store_name'] ?> </td>
                        </tr>
                        <tr>
                            <td style="font-family:Arial Black;font-size: 22px;"> Location: </td>
                            <td style="font-family:Arial;font-size: 22px;"> <?php echo $row['place_name'] ?> </td>
                        </tr>



                    </table>
                    <?php
                    $pid = $_POST['pid'];

                    $querry = "SELECT `category_id` from subcategory,product WHERE product.product_id='$pid' and product.subcategory_id=subcategory.subcategory_id";
                    $result33 = mysqli_query($con, $querry);
                    $r = mysqli_fetch_array($result33);
                    ?>
                    <table width='200'><br>
          <!--              <td><p id="demo" onclick="myFunction()">S</p></td>
                        <td><p id="demo1" onclick="myFunction1()">M</p></td>
                        <td><p id="demo2" onclick="myFunction2()">L</p></td>
                        <td><p id="demo3" onclick="myFunction3()">XL</p></td>
                        <td><p id="demo4" onclick="myFunction4()">XXL</p></td>-->

                        <?php if ($r['category_id'] == 2) { ?> 
                            <tr>        
                                <td style="font-family:Arial Black;"><input type="radio" name="size" value="S">S</td>  
                                <td style="font-family:Arial Black;"><input type="radio" name="size" value="M">M</td>
                                <td style="font-family:Arial Black;"><input type="radio" name="size" value="L">L</td>
                                <td style="font-family:Arial Black;"><input type="radio" name="size" value="XL">XL</td>
                                <td style="font-family:Arial Black;"><input type="radio" name="size" value="XXL">XXL</td></tr>
                            <?php
                        } elseif ($r['category_id'] == 1) {
                            ?>
                            <tr>        
                                <td><input type="radio" name="size" value="S">8</td>  
                                <td><input type="radio" name="size" value="M">9</td>
                                <td><input type="radio" name="size" value="L">10</td>
                                <td><input type="radio" name="size" value="XL">11</td>
                                <td><input type="radio" name="size" value="XXL">12</td></tr> 
                        <?php } ?>
                    </table></fieldset></form>
            <form id="form2" name="form2" method="post" onsubmit="return addUser()" >
      <!--          <table width='500'><td><label class="control-label" style="color: black   ; 
          font-size: 18px;
          font-weight: bold;
          font-family: verdana;"><b>Quantity to Book:</b></label></td>
                                                                              <div class="controls">
                                                                                  <input type="text" placeholder="Enter your state" id="state" name="state" class="input-xlarge" required/>
                                                                              
                                             <td>      <select class="form-control" name="quantity" id="quantity" required/>
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
                                                                              
                                                                              </select></td>
                                                                              </div></table>-->

                <input type="number" name="quantity" id="quantity" placeholder="Quantity to Book" onChange="return gPhone()" min="1" required="">
                <input type="hidden" name="pid" value="<?php echo $row['product_id'] ?>" />
                <br>
                <input name="sub" type="submit" class="button button1" id="submit" value="ADD TO CART" />


                <input name="subm" type="submit" class="button button1" id="submit" value="BOOK" onclick="alert('Booked..!Please do get the product from our store..!');"/>

                <!--                       
                                       <input type="text area" name="fb" id="fb" placeholder="Feedback">
                                       <input name="fb" type="submit" class="btn btn-inverse large" id="fb" value="Submit" />-->



            </form>



            <table>
                <tr>
                    <td colspan="2" >
                        <?php
                        $idv = $row['product_id'];

                        $score = 0;

                        $sqlc = mysqli_query($con, "SELECT * FROM `feedback` WHERE product_id='$idv' and status=1 ");
                        $rowcount = mysqli_num_rows($sqlc);
                        //echo $rowcount;

                        if ($rowcount == 0) {
                            echo "<center>No feedbacks</center>";
                        } else {
                            $sqlf = mysqli_query($con, "SELECT * FROM `feedback` WHERE product_id='$idv' and status=1 ");
                            while ($recordsf = mysqli_fetch_array($sqlf)) {
                                $score = $score + $recordsf['score'];
                            }
                            $rating1 = $score / $rowcount;
                            //echo $rating;
                            $rating = round($rating1);
                            //echo $rating;
                            ?>
                    <center>
                            <?php
                            for ($a = 1; $a <= $rating; $a++) {
                                ?>

                            <span class="fa fa-star checked"></span> 

            <?php
        }
        ?>
                        (<?php echo $rowcount; ?> Votes)
                        <?php
                    }
                    ?>
                </center>    

                </td>
                </tr>

                <br><br><br>

<!--                &nbsp;&nbsp;&nbsp;&nbsp;     <a href=
                                                <p style="background-color: #3CBC3C;width: 80px;height: 20px;"     -->
                   <!--<button class="button button1" id="submit">Feedback</button></a></p>-->
                 
                   <?php 
						$ght=$row['product_id'];
					?>
                   
                   <button type="submit" class="button button1"  id="submit" name="gl_feedback" style="vertical-align:middle"  <?php if ($rowcount == '1'){  ?> disabled <?php   } ?>  onclick="window.location.href='feedback.php?product_id=<?php echo "$ght"; ?>'" style="width:auto;"><span>Feed Back</span></button>
        </table>    </div>
    <p>&nbsp;</p></td>

    </tr>
    </table>
    </div>
<?php } ?>
<br><br><br><br><br><br><br>    






						 <div class="gl_item_container">
                <h2 style="color:black;">View Feedback</h2>
                 <?php
//                 $id = $row['product_id'];
                 //$encrypt1=decrypt($enc,'dgafg12');
                $sqlfeed=mysqli_query($con,"select * from feedback where status=1 and product_id=$idv order by date;");
                    while($recordsfeed=mysqli_fetch_array($sqlfeed)){
                        $uname=$recordsfeed['username'];
						//echo $uname;
						$ads=" SELECT * from `login` where username='$uname'";
						//echo $ads;
                        $sqluser=mysqli_query($con,$ads);
						
						
              //$result=mysqli_query($con,"SELECT a.brand_name,d.model,d.price,d.reserve_qty,d.stock_id from `stock` as d  INNER JOIN mobile_brand as a ON a.brand_id=d.brand_id where d.shop_id=$r_id");
               //$id=$_REQUEST['shop_id'];
//                            while($recordsuser=mysqli_fetch_array($sqluser)){
//								$reg_=$recordsuser['reg_id'];
//								$fdv="select * from user_reg where status=0 and reg_id='$reg_' ";
//								//echo $fdv;
//								$sqlname=mysqli_query($con,$fdv);
                    while($recordsname=mysqli_fetch_array($sqluser)){
						
            
            ?>
                   <table cellpadding="3px" >
                               <tr>
                                   
                                   <td><p style="color: blue;"><b><?php echo ucfirst("{$recordsname['username']}"); ?></b></p></td>
                               </tr>
                               <tr>
                                    <td colspan="2" >
                                        <?php
//                                            $id = $row['product_id'];
                                            $rty="SELECT * FROM `feedback` WHERE product_id='$idv' and status=1 and username='$uname' ";
											//echo $rty;
                                            $sqlcc=mysqli_query($con,$rty);
                                            $recordscc=mysqli_fetch_array($sqlcc);
                                            $rating5=$recordscc['score'];
                                            
                                        ?>
                                <center>
                                     <?php
                                            for ($a=1;$a<=$rating5;$a++){
                                    ?>
                                        
                                        <span class="fa fa-star checked"></span> 

                                       <?php
                                            }
                                        ?>
                                       
                                </center>    
                                        
                                    </td>
                                </tr>
                               <tr>
                                   <td colspan="2"><p><?php echo ucfirst("{$recordsfeed['feedback']}"); ?></p></td>
                               </tr>
							   

                   </table>
                   
            
			 <?php
                         }
                    
                    }	
            
            ?>
		</div>
<section class="main-content">

    <div class="row">
        <div class="span12">													
            <div class="row">
                <div class="span12">

                    <div id="myCarousel" class="myCarousel carousel slide">
                        <div class="carousel-inner">

                            <div class="active item">
                                <center><h4 class="title"><span class="text"><strong>RELATED PRODUCTS</strong></span></h4></center>
                                <ul class="thumbnails">	


<?php
$pi = $_POST['pid'];
//$sid = $_POST['id'];

$sid = $_POST['sid'];

//$qry="select * from product where product_id=$pid";
$qry1 = "select * from product where subcategory_id=$sid";

//$qry="select * from properties,login where properties.userid=login.userid and pid=$pid";
$result1 = mysqli_query($con, $qry1);
while ($row = mysqli_fetch_array($result1)) {

    $i = 0;
    while ($row = mysqli_fetch_array($result1)) {
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

                                                        <p style="font-size:20px;font-family: helvetica;"><?php echo $row['product_name'] ?></p>

                                                        <p style="font-size:20px;font-family: helvetica;"><img src="Indian_Rupee_symbol.png" height="9px" width="9px" > <?php echo $row['selling_price'] ?></p>

                                                        <input type="hidden" value="<?php echo $row['product_id'] ?>" name="pid" />
                                                        <input type="hidden" value="<?php echo $row['subcategory_id'] ?>" name="sid" />

                                                        <!--                                        <div class="button button1">
                                                                                                    <input type="submit" value="More Details" 
                                                        name="submit" class="button1"/></div>-->

                                                        <button class="button1 button11" name="submit">More Details</button>

                                                    </div></form>
        <?php
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
    </div></section>
    <?php 
				$cid = $_SESSION['userid'];
//				echo $cid;
                                $pid = $_POST['pid'];
//                                $idv = $row['product_id'];
//                                echo $pid;
				$weuser="select * from wishlist where userid='$cid' and product_id='$pid'";
//				$rweuser=setData($weuser);
				$res123 = mysqli_query($con, $weuser);
				$count1=mysqli_num_rows($res123);
				echo $count1;
				if($count1==1){
					$updt="update `wishlist` SET count=count + 1 where userid='$cid' and product_id='$pid'";
					$res1234 = mysqli_query($con, $updt);
				}else{
				
				$qwe="INSERT INTO `wishlist`(`userid`, `product_id`, `count`, `status`) VALUES ($cid,$pid,1,1)";
//				echo $qwe;
                                $res12 = mysqli_query($con, $qwe);
//				$res12=setData($qwe);
				}
                                
                                ?>

<br><br><br><br>

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