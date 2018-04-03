<!DOCTYPE html>
<?php
    include_once "db.php";
if(session_status()==PHP_SESSION_NONE)
{
session_start();
}
if(!isset($_SESSION["username"]))
{
header("location: ./");
}

?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Shopper </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="images/favicon.ico">
        <link href="css/mystyle.css" rel="stylesheet" type="text/css" />
        
    </head>
    <body>
        <?php
        
            if(isset($_GET['product_id'])){
                if(isset($_SESSION['utype'])){
                    if($_SESSION['utype']==='S'){
                        $id=$_REQUEST['item_id'];
                        $cnt=0;
                        $sql1=mysqli_query($con,"SELECT * FROM `items` WHERE item_id='$id' and status=1 order by item_name;");
                            $records1=mysqli_fetch_array($sql1)
        ?>
        <div class="gl_main_item_details_containet">
            <div class="gl_item_product_container">
                <div class="item_img_container">
                    <img src="<?php echo "{$records1['img']}"; ?>" width="500px" height="500px"/>
                </div>
                <div class="item_details_container">
                    <center>
                    <p class="item_name_p">
                        <?php echo ucfirst("{$records1['item_name']}"); ?>
                   </p>
                   <form action="#" method="POST" name="gl_add_to_cart" onsubmit="return addTocart()" enctype="multipart/form-data" >
                    <table cellpadding="2px" style="font-size:20px;">
              
                        <tr>
                            <?php
                                if($records1['stock']<1){
                                    echo "<p color='red'>Out of Stock></p>";
                                } else {
                                    echo "<p style='color:green; font-weight:bold; font-size:20px;'>In Stock</p>";
                                }
                                $sql3=mysqli_query($con,"select * from wallet where uname={$_SESSION['uname']} and status=1 ;");
                                $records3= mysqli_fetch_array($sql3);
                                $balance=$records3['balance'];
                                //echo $balance;
                            ?>
                        </tr>
                        <tr>
                            <td colspan="2" >
                                <p>
                                     <?php echo "{$records1['description']}"; ?>
                                </p>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>REQUIRED QUANTITY:</td>
                            <td><input type="number" name="gl_req_quantity" id="gl_req_quantity" placeholder="Number of Items" min="1" max="<?php echo "{$records1['quantity']}"; ?>" Required value="0"></td>
                        </tr>
                        <tr>
                            <td>PRICE:</td>
                            <td><input type="text" name="gl_price" id="gl_price" value=" <?php echo "{$records1['price']}"; ?>" readonly></td>
                        </tr>
                        <tr>
                            <td>TOTAL COST:</td>
                            <td><input type="text" name="gl_total" id="gl_total" Required readonly value="0" ></td></td>
                        </tr>
                        <input type="hidden" name="balance_hide" id="balance_hide" value="<?php echo "{$records3['balance']}"; ?>"/>
                        <input type="hidden" name="item_id" id="item_id" value="<?php echo "{$records1['product_id']}"; ?>"/>
                        <tr>
                            <td colspan="2">
                        <center>
                            <button type="submit" class="gl_edit_button" id="gl_add_to_cart" name="gl_add_to_cart" style="vertical-align:middle"  onclick="" style="width:auto;"><span>Add to Cart</span></button>
                        </center>   
                            </td>
                        </tr>
                         
                    </table>
                   </form>
                    </center>
                </div>
                
                
            </div>
            
            <div class="gl_item_related_container">
                <h2 style="color:black;">Related Items</h2>
                <table border="0" cellpadding="20px">
                    <tr>
                         <?php
                                            $cnt=0;
                                            $sql2=mysqli_query($con,"SELECT * FROM `items` WHERE status=1 order by item_name;");
                                                while($records2=mysqli_fetch_array($sql2))
                                                    {
                                                        $cnt++;
                                                        if($cnt%4==0)
                                                        echo "</tr>";
                        ?>
                        <td>
                            <table class="gl_item_view_container" style="border:2px solid black;" >
                                <tr>
                                    <td><img src="<?php echo "{$records2['img']}"; ?>" height="125px" width="125pxs"/></td>
                                </tr>
                                <tr>
                                    <td><p><?php echo ucfirst("{$records2['item_name']}"); ?> </p></td>
                                </tr>
                                <tr>
                                    <td><p> <?php echo $ar['price'] ?></p></td>
                                </tr>
         
                                <tr>
                                    <td><a href=<?php echo "itemdetails.php?item_id={$records2['item_id']}" ?> >MORE</a>
                                </tr>
                            </table>
                </td>
                                <?php 
                                
                                    }
                                ?>
                </table>
<!--                </td>

                </table>-->
                
                
            </div>
            
            
        </div>    
      
    </body>
    <?php            
                    }
                                    
                }
                                    
            }
            
    ?>
    <script src="js/jqueryori.min.js"></script>
    <script>
    $(document).ready(function(){
      $("#gl_req_quantity").on("change",function() {
        $index=$('#gl_req_quantity').val();
        $price=$('#gl_price').val();
        $total=$index*$price;
        $("#gl_total").val($total);
      })
    })
    </script>
    <script>
//        function addTocart(){
//            var balanc= document.gl_add_to_cart.balance_hide.value;
//            alert(balanc);
//        }
        document.getElementById("gl_req_quantity").onchange = function() {walletCheck()};
        function walletCheck(){
            var amt= document.getElementById("gl_total").value;
            var balance=parseInt(document.getElementById("balance_hide").value);
            if(amt>balance){
                alert("Insufficient Balance"+amt+">"+balance);
            }
            
        }
    </script>
    
    <?php
        if(isset($_POST["gl_add_to_cart"])){
            $gl_req_quantity=htmlspecialchars($_POST['gl_req_quantity']);
            $item_id=htmlspecialchars($_POST['item_id']); 
            $uname=$_SESSION['uname'];
            $gl_total=htmlspecialchars($_POST['gl_total']);
            $sql5=mysqli_query($con,"select * from cart where item_id=$item_id and status=1 and uname={$_SESSION['uname']};");
            $records5= mysqli_fetch_array($sql5);
            $tqty=$gl_req_quantity + $records5['qty'];
            $tprice=$gl_total + $records5['total_price'];
            //echo $tqty;
            //echo $tprice;
            $count= mysqli_num_rows($sql5);
            //echo $count;
            if ($count < 1){
            $sql4="INSERT INTO `cart`(`uname`, `item_id`,`qty`, `total_price`, `status`) 
                VALUES($uname,$item_id,$gl_req_quantity,$gl_total,1);";
                if (mysqli_query($con,$sql4) > 0){
                    echo "<script> alert('Addded to cart'); </script>";
                }
                else{
                    echo "<script> alert ('Try Again!'); </script>";
                }
            }
            else{
            $sql6="UPDATE `cart` SET `qty`=$tqty,`total_price`=$tprice WHERE item_id=$item_id and status=1 and uname={$_SESSION['uname']};";
            $result3=mysqli_query($con,$sql6);
                echo "<script> alert('Cart Updated'); </script>";
            
            }
            
        }
    
    ?>
    
</html>
