
<?php
include 'db.php';
if (!isset($_SESSION["username"])) {
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
        <div id="divToPrint" >
            <?php include_once("analyticstracking.php") ?>
            <div id="top-bar" class="container">
                <div class="row">

                    <div class="span12">
                        <div class="account pull-right">
                            <ul class="user-menu">	
                                <!--                                                        <li><a href="index.php">Home</a></li>-->
                                <li><a href="sellerhome.php">Back</a></li>
                                <li><a href onclick="PrintDiv();"><img src="photo/dwn.png" style="width:30px;"></a></li>
                                <!--							<li><a href="#">My Account</a></li>
                                                                                        <li><a href="cart.html">Your Cart</a></li>-->


                                <!--<li><a href="signout.php">Logout</a></li>-->

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="wrapper" class="container">

                <section class="main-content">
                    <form action="#" name="myform" method="POST" class="form-inline">
                        <input type="date" name="mydate" id="mydate" class="input-medium" />
                        <input type="submit" class="btn-primary" name="myday" value="Search" id='myday' /></form>
                    <div class="row">

                        <div class="span12">					
                            <center><h4 class="title"><span class="text"><strong>DETAILS OF PURCHASE</strong></span></h4></center>
                            <!--<form action="#" method="post" class="form-stacked" enctype="multipart/form-data">-->
                            <!--<form name="sregister" class="form-stacked" id="form" method="POST" action="#" enctype="multipart/form-data" onSubmit="return valid()">-->
                            <div class="span5"></div>


                            <?php
                            if (isset($_POST['myday'])) {
                                $mydate = $_POST["mydate"];
//                                echo $mydate;
                                $qry1 = "select c.username,p.product_name,b.date as date from bill b,product p,customer c,seller where b.product_id=p.product_id and p.userid=$_SESSION[userid] and b.userid=c.userid and seller.userid=$_SESSION[userid]";
//                                echo $qry1;
                                $result1 = mysqli_query($con, $qry1);
                                ?>
                                <table >
                                    <tr>
                                        <td >&nbsp;</td>
                                        <td >
                                    <tr>

                                        <th></th> 
                                        <th></th>
                                        <th></th> 
                                        <th></th>
                                        <th></th>
                                        <th>Customer</th>
                                        <th>Product</th>
                                        <th>Date of Purchase</th>

                                        <th></th>

                                    </tr>
                                    <?php
                                    while ($row = mysqli_fetch_array($result1)) {
                                        $d=$row['date'];
//                                        echo $d;
                                        $date=substr($d, 0, 10);
//                                        echo $date;
                                        if ($date==$mydate) {
//                                            echo $date;
                                            ?>
                                            <!--<form action="#" method="post">-->
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><?php echo $row['username']; ?></td>
                                                <td><?php echo $row['product_name']; ?></td>
                                                <td><?php echo $row['date']; ?></td>

                                                <td><input class="txt" type="hidden" name="userid" value="<?php echo $row['userid']; ?>"></td>
                                                <!--<td><input type="submit" name="delete" class="btn btn-inverse large" value="BLOCK"></td>-->

                                            </tr>
                                            <!--</form>-->

                                            <?php }
                                            }
                                            ?></table><?php
                                    } else {
//$qry="select * from login,role where login.role_id=role.role_id";
//$qry="select * from bill,product,customer,seller where bill.product_id=product.product_id and product.userid=$_SESSION[userid] and bill.userid=customer.userid and seller.userid=$_SESSION[userid]";
                                        $qry = "select c.username,p.product_name,b.date from bill b,product p,customer c,seller where b.product_id=p.product_id and p.userid=$_SESSION[userid] and b.userid=c.userid and seller.userid=$_SESSION[userid]";
                                        $result = mysqli_query($con, $qry);
                                        ?>
                                        <table >
                                            <tr>
                                                <td >&nbsp;</td>
                                                <td >
                                            <tr>

                                                <th></th> 
                                                <th></th>
                                                <th></th> 
                                                <th></th>
                                                <th></th>
                                                <th>Customer</th>
                                                <th>Product</th>
                                                <th>Date of Purchase</th>

                                                <th></th>

                                            </tr>
                                            <?php
                                            while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                <!--<form action="#" method="post">-->
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><?php echo $row['username']; ?></td>
                                                    <td><?php echo $row['product_name']; ?></td>
                                                    <td><?php echo $row['date']; ?></td>

                                                    <td><input class="txt" type="hidden" name="userid" value="//<?php echo $row['userid']; ?>"></td>
                                                    <!--<td><input type="submit" name="delete" class="btn btn-inverse large" value="BLOCK"></td>-->

                                                </tr>
                                                <?php
                                            }
                                        }
                                        ?>
                                </table>
                                                                        <!--<center>      <input type="button" value="print" onclick="PrintDiv();" class="btn btn-inverse large" style="margin-left:550px; margin-top:20px; float:left;" /></center>-->

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
                        <script type="text/javascript">
                            function PrintDiv() {
                                var divToPrint = document.getElementById('divToPrint');
                                var popupWin = window.open('', '_blank', 'width=1200,height=800');
                                popupWin.document.open();
                                popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
                                popupWin.document.close();
                            }
                        </script>
                        </html>
