

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
if(isset($_POST['submit1']))
{
$a=$_POST["fname"];
//$k=$_POST["username"];
$us_id=$_SESSION['userid'];
//echo "<script> alert('hai');</script>";
//$b=$_POST["category_select"];
//$g=$_POST["subcategory_select"];
//    echo $us_id;
$e=$_POST["email"];
$f=$_POST["quantity"];
$cp=$_POST["cost_price"];
$sp=$_POST["selling_price"];
$sb=$_POST["subcategory_select"];

$m="photo/".time()."".htmlspecialchars($_FILES['photo']['name']);
              move_uploaded_file($_FILES['photo']['tmp_name'], $m);




$sql1="INSERT INTO `product`(`userid`, `subcategory_id`,`product_name`, `description`, `quantity`,`cost_price`, `selling_price`,`image`,`status`) VALUES ($us_id,$sb,'$a','$e','$f','$cp','$sp','$m',1)";
$result1=mysqli_query($con,$sql1);


//$logid="SELECT `userid` FROM `login` WHERE `username`='$k'";
//$result2=mysqli_query($con,$logid);
//while($row=mysqli_fetch_array($result2))
//{
//
//  $l=$row["userid"];
//}

//$sql="INSERT INTO `seller`(NULL,`first_name`, `last_name`, `store_name`, `mobile_number`, `email`, NULL, `gst_no`, `username`, `password`,1) VALUES ('$a','$b','$c','$d','$e','$f','$j','$k','$l')";
//$result3=mysqli_query($con,$sql);

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
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
                
                  <script>
                  
        
             
           
                     function gPhone(){
            var quantity=document.sregister.quantity.value;
                if(isNaN(quantity)){
                    
                    alert("Enter a Quantity");
                    document.sregister.quantity.focus();
                    return false;
                }
               
        }
        
         function gfPhone(){
            var cost_price=document.sregister.cost_price.value;
                if(isNaN(cost_price)){
                    
                    alert("Enter a valid Price");
                    document.sregister.cost_price.focus();
                    return false;
                }
               
        }
        
         function gnPhone(){
            var selling_price=document.sregister.selling_price.value;
                if(isNaN(selling_price)){
                    
                    alert("Enter a valid Price");
                    document.sregister.selling_price.focus();
                    return false;
                }
               
        }
          function fileCheckk(obj) {
            var fileExtension = ['jpg','png','jpeg'];
            if ($.inArray($(obj).val().split('.').pop().toLowerCase(), fileExtension) == -1){
                alert("Only '.jpg','.png','.jpeg' formats are allowed.");
				 document.getElementById('photo').value='';
				  $("#photo").focus();
				return false;
			}
                        
    }
        
        
         function  addUser(){
             
             
                var quantity=document.sregister.quantity.value;
                if(isNaN(quantity)){
                    document.sregister.quantity.style.border = "1px solid red";
                    alert("Enter a valid Quantity");
                    document.sregister.quantity.focus();
                    return false;
                }
                 var cost_price=document.sregister.cost_price.value;
                if(isNaN(cost_price)){
                    document.sregister.cost_price.style.border = "1px solid red";
                    alert("Enter a valid Price");
                    document.sregister.cost_price.focus();
                    return false;
                }
                 var selling_price=document.sregister.selling_price.value;
                if(isNaN(selling_price)){
                    document.sregister.selling_price.style.border = "1px solid red";
                    alert("Enter a valid Price");
                    document.sregister.selling_price.focus();
                    return false;
                }
               
                
                
                
                
             
         }
                    
                    </script>
                
	</head>
    <body>	
        1
<?php include_once("analyticstracking.php") ?>
		<div id="top-bar" class="container">
			<div class="row">
				
				<div class="span12">
					<div class="account pull-right">
						<ul class="user-menu">	
                                                        <!--<li><a href="index.php">Home</a></li>-->
							<!--<li><a href="#">My Account</a></li>-->
							<!--<li><a href="admin_seller_view.php">view</a></li>-->
                                                        <li><a href="changepwd.php">Change Password</a></li>

<li><a href="seller_product.php">Products Added</a></li>
<li><a href="seller_booked.php">Products Paid</a></li>
<li><a href="seller_bkd.php">Products Booked</a></li>
<li><a href="seller_cancelled.php">Products Cancelled</a></li>
<li><a href="seller_sold.php">Products Sold</a></li>
<li><a href="date.php">Purchases</a></li>
<!--<li><a href="seller_best_sold.php">Best Sold</a></li>-->
<!--<li><a href="status.php">Pending</a></li>-->
<li><a href="edit_seller_profile.php">Edit Profile</a></li>
<!--<li><a href="edit_seller_products.php">Edit Products</a></li>-->
                                                        <li><a href="products_nearby.php">Nearby Products</a></li>
                                                        <li><a href="signout.php">Logout</a></li>
                                                      <li style="float:left; color:red; font-weight: bolder; font-size: 14px">
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
<!--						<ul>
							<li><a href="./products.html">Woman</a>					
								<ul>
									<li><a href="./products.html">Lacinia nibh</a></li>									
									<li><a href="./products.html">Eget molestie</a></li>
									<li><a href="./products.html">Varius purus</a></li>									
								</ul>
							</li>															
							<li><a href="./products.html">Man</a></li>			
							<li><a href="./products.html">Sport</a>
								<ul>									
									<li><a href="./products.html">Gifts and Tech</a></li>
									<li><a href="./products.html">Ties and Hats</a></li>
									<li><a href="./products.html">Cold Weather</a></li>
								</ul>
							</li>							
							<li><a href="./products.html">Hangbag</a></li>
							<li><a href="./products.html">Best Seller</a></li>
							<li><a href="./products.html">Top Seller</a></li>
						</ul>-->
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
                                            <center><h4 class="title"><span class="text"><strong>PRODUCT DETAILS</strong></span></h4></center>
                                            <!--<form action="#" method="post" class="form-stacked" enctype="multipart/form-data">-->
                                            <form name="sregister" class="form-stacked" id="form" method="POST" action="#" enctype="multipart/form-data" onsubmit="return addUser()">
                                            <div class="span5"></div>
							<fieldset>
                                                              
								<div class="control-group">
                                                                    <label class="control-label"><b>Product Name:</b></label>
									<div class="controls">
                                                                            <input type="text" placeholder="Enter the name of your product" id="fname" name="fname" class="input-xlarge"  data-rule="maxlen:4" required onChange="return gName()" >
								<div class="validation"></div>
									</div>
								</div>
                                                            <div class="control-group">
									<label class="control-label"><b>Category:</b></label>
									<div class="controls">
                                                                            <!--<input type="text" placeholder="Enter your last name" id="lname" name="lname" class="input-xlarge" required/>--> 
								<select class="form-control" id="category_select" name="category_category"><option value="-1">select</option>
                        
                    <?php
            $q = mysqli_query($con, "SELECT category_id,category_name FROM category where status=1");
            //var_dump($q);

            while ($row = mysqli_fetch_array($q)) {
                echo '<option value=' . $row['category_id'] . '>' . $row['category_name'] . '</option>';
            }
            ?>
                    </select>
                                                                            <div class="validation"></div>
									</div>
								</div>
                                                            <div class="control-group">
									<label class="control-label"><b>Subcategory:</b></label>
									<div class="controls">
                                                                            <!--<input type="text" placeholder="Enter your store name" id="storename" name="storename" class="input-xlarge" required/>-->
									<select class="form-control" id="subcategory_select" name="subcategory_select"><option value="-1">select</option></select>
                                                                        </div>
								</div><div class="control-group">
									<label class="control-label"><b>Product Image:</b></label>
									<div class="controls">
                                                                            <input type="file" id="photo" name="photo" class="input-xlarge" required onchange="fileCheckk(this)"/>
									</div>
								<div class="control-group">
									<label class="control-label"><b>Description:</b></label>
									<div class="controls">
                                                                            <input type="text" placeholder="Describe your product" id="email" name="email" class="input-xlarge" data-rule="email" required onChange="return glName()"/> 
								<div class="validation"></div>
									</div>
								</div>
                                                                        <div class="control-group">
									<label class="control-label"><b>Quantity:</b></label>
									<div class="controls">
                                                                            <input type="number" placeholder="Enter the quantity" id="quantity" name="quantity" class="input-xlarge" min="1"  required onChange="return gPhone() /> 
								<div class="validation"></div>
									</div>
								</div>
                                                                         <div class="control-group">
									<label class="control-label"><b>Cost Price(per product in Rs):</b></label>
									<div class="controls">
                                                                        <input type="number" placeholder="Enter the cost price" id="cost_price" name="cost_price" class="input-xlarge" min="1"  required onChange="return gfPhone()"/> 
								<div class="validation"></div>
									</div>
								</div>
                                                                         <div class="control-group">
									<label class="control-label"><b>Selling Price(per product in Rs):</b></label>
									<div class="controls">
                                                                               <input type="number" placeholder="Enter the selling price" id="selling_price" name="selling_price" class="input-xlarge" min="1"  required onChange="return gnPhone()"/> 
								<div class="validation"></div>
									</div>
								</div>
                                                            
                                                                        <input type="hidden" value="username" name="username" id="username">
                                                                        <input type="hidden" value="<?php echo $ar['product_id'] ?>" name="pid" />
								</div>							                            
								</fieldset>
                                                    <center><hr>
                                                                <div class="actions"><input tabindex="9" class="btn btn-inverse large" type="submit" id="submit1" name="submit1" value="Add Product"></div>
                                                    </center>
						</form>					
					</div>				
				</div>
			</section>			
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
			$(document).ready(function() {
				$('#checkout').click(function (e) {
					document.location.href = "checkout.html";
				})
			});
                        
                        $('body').on('click', '#submit1', function () {
             $.ajax({
            type:'post',
                    url:'exec/data_save.php',
                    data:{context:'save_product'},
                    success:function(response)
                    {
//                        alert(response);
                    }});
         });
        
        $('body').on('change', '#category_select', function () {
//            alert("countryslected");
            $index = $('#category_select').val();
//            $index_id=$('#category_select option selected').val();
//            $('#category_select option:selected').val();
//              $index_id=$('#subcategory_select option selected').val();
//            $('#subcategory_select option:selected').val();
            $.ajax({
            type:'post',
                    url:'get_subcategory.php',
                    data:{index:$index},
                    success:function(response)
                    {
//                        alert(response);
                    console.log(response);
                    $ar = response.split(",");
                            $str = "<option value='-1' disabled hidden selected> </option>";
                            for (var i = 0; i < $ar.length; i++)
                    {
                        $ss=$ar[i].split(':');
                    $str += '<option value='+$ss[0]+'>' + $ss[1] + "</option>";
                    }
                    $('#subcategory_select').html($str);
                }
                    });
                    
    });
               
                    $('body').on('change', '#subcategory_select', function () {
//            alert("countryslected");
            $index = $('#subcategory_select').val();
          $index_id=$('#subcategory_select option selected').val();
            $('#subcategory_select option:selected').val();
            $.ajax({
            type:'post',
//                    url:'get_subcategory.php',
                    data:{index:$index},
                    success:function(response)
                    {
//                        alert(response);
                    console.log(response);
                    $ar = response.split(",");
                            $str = "<option value='-1' disabled hidden selected> </option>";
                            for (var i = 0; i < $ar.length; i++)
                    {
                        $ss=$ar[i].split(':');
                    $str += '<option value='+$ss[0]+'>' + $ss[1] + "</option>";
                    }
//                    $('#subcategory_select').html($str);
                }
                    });
                    
    });
         
               
                        
		</script>		
    </body>
</html>