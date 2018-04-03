    <?php
include 'db.php';

function send($sms, $to) {
    
        $sms = urlencode($sms);
      
            $url = 'http://sms.safechaser.com/httpapi/httpapi?token=2751b86a6a4babda36a62c1b04377a84&sender=crushe&number='.$to.'&route=2&type=1&sms='.$sms;
        
            
            
            $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_TIMEOUT, 50);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 50);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $datares = curl_exec($ch);
        curl_close($ch);
        return $datares;
    }




function encryptIt($q){
                $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
                $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
                return( $qEncoded );
            }
if(isset($_POST['submit1']))
{
$a=$_POST["fname"];
//echo "<script> alert('hai');</script>";
$b=$_POST["lname"];
$d=$_POST["mobilenumber"];
$e=$_POST["email"];
$g=$_POST["country_select"];
$h=$_POST["state_select"];
$i=$_POST["district_select"];
$j=$_POST["place_select"];
$k=$_POST["username"];
$password=$_POST["password"];
 $p = $_POST["password1"];
 $encrypted = encryptIt($p);
  
 
 
 if ($p == $password) {
$sql1="INSERT INTO `login`(`username`, `password`,`role_id`,`status`) VALUES ('$k','$encrypted','3',1)";
$result1=mysqli_query($con,$sql1);

$logid="SELECT `userid` FROM `login` WHERE `username`='$k'";
$result2=mysqli_query($con,$logid);
while($row=mysqli_fetch_array($result2))
{

  $l=$row["userid"];
  $sql2="INSERT INTO `customer`(`userid`,`first_name`, `last_name`, `mobile_number`, `email`,`place_id`,`username`, `Password`, `status`) VALUES ($l,'$a','$b','$d','$e','$j','$k','$p',1)";
        
        $res = mysqli_query($con, $sql2);
//        or die(mysqli_error($con))
}

//$sql="INSERT INTO `seller`(NULL,`first_name`, `last_name`, `store_name`, `mobile_number`, `email`, NULL, `gst_no`, `username`, `password`,1) VALUES ('$a','$b','$c','$d','$e','$f','$j','$k','$l')";
//$result3=mysqli_query($con,$sql);

//echo"<script>alert('Registration Successful Please Login');</script>)";
if($res==1)
{
	echo"<script>alert('Registration Successful Please Login');</script>";
          $msg="Hai $a your username is $k password is $p -Enjoy shopping with us..!";
send($msg, $d);
}
else
{
	echo"<script>alert('Sorry email or username is already in use..Please choose a different one..! ');</script>)";
}

}else {

        echo '<script language="javascript">';
        echo 'alert("Your password does not match")';
        echo '</script>';
}}

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
	
        
        
     <style>
	     .error{
	  color:red;
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
                                                        <li><a href="index.php">Home</a></li>
<!--							<li><a href="#">My Account</a></li>
							<li><a href="cart.html">Your Cart</a></li>-->
							
							<li><a href="register.php">Are You a Seller?</a></li>					
                                                        <li><a href="login.php">Already have an Account?</a></li>		
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
                                            <center><h4 class="title"><span class="text"><strong>Register</strong></span></h4></center>
<!--                                                <form action="#" method="post" class="form-stacked">-->
<form name="sregister" class="form-stacked" id="sregister" method="POST" action="#" onsubmit="return">
                                                    <div class="span5"></div>
							<fieldset>
                                                              
								<div class="control-group">
                                                                    <label class="control-label"><b>First Name:</b></label>
									<div class="controls">
                                                                            <input type="text" placeholder="Enter your first name" id="fname" name="fname" class="input-xlarge" required onChange="return gName()"/>
																			<span class="error" id="fname_error"></span>

									</div>
								</div>
                                                            <div class="control-group">
									<label class="control-label"><b>Last Name:</b></label>
									<div class="controls">
                                                                            <input type="text" placeholder="Enter your last name" id="lname" name="lname" class="input-xlarge" required onChange="return glName()"/>
								                                                												<span class="error" id="lname_error"></span>

								</div>
								</div>
                                                            <div class="control-group">
									<label class="control-label"><b>Mobile Number:</b></label>
									<div class="controls">
                                                                            <input type="tel" pattern="[789][0-9]{9}" placeholder="Enter your mobile number" id="mobilenumber" name="mobilenumber"  class="input-xlarge"  onChange="return gPhone()" required/>
																												<span class="error" id="mobilenumber_error"></span>

									</div>
								<div class="control-group">
									<label class="control-label"><b>Email address:</b></label>
																												

									<div class="controls">
                                                                            <input type="email" placeholder="Enter your email" id="email" name="email" class="input-xlarge" onChange="return gEmail()" required/>
<span class="error" id="email_error"></span>
									</div>
								</div>
                                                            
                                                            
								</div><div class="control-group">
									<label class="control-label"><b>Country:</b></label>
									<div class="controls">
                                                                            <!--<input type="text" placeholder="Enter your country"  class="input-xlarge" required/>-->
                                                                            <select class="form-control" name="country_select" id="country_select" required/>
                  <option value="-1">select</option>
                           
            <?php
            $q = mysqli_query($con, "SELECT country_id,country_name FROM country where status=1");
            //var_dump($q);

            while ($row = mysqli_fetch_array($q)) {
                echo '<option value=' . $row['country_id'] . '>' . $row['country_name'] . '</option>';
            }
            ?>
              </select>
									</div>
								</div><div class="control-group">
									<label class="control-label"><b>State:</b></label>
									<div class="controls">
                                                                            <!--<input type="text" placeholder="Enter your state" id="state" name="state" class="input-xlarge" required/>-->
                                                                            <select class="form-control" name="state_select" id="state_select" required/><option value="-1">select</option></select>
									</div>
								</div><div class="control-group">
									<label class="control-label"><b>District:</b></label>
									<div class="controls">
                                                                            <!--<input type="text" placeholder="Enter your district" id="district" name="district" class="input-xlarge" required/>-->
									<select class="form-control" name="district_select" id="district_select" required/>
                        <option value="-1">select</option></select>
                                                                        </div>
								</div><div class="control-group">
									<label class="control-label"><b>City:</b></label>
									<div class="controls">
                                                                            <!--<input type="text" placeholder="Enter your town" id="town" name="town" class="input-xlarge" required/>-->
                                                                            <select class="form-control" name="place_select" id="place_select" required/>
                        <option value="-1">select</option></select>
                                                                        </div>
								</div>
                                                                <div class="control-group">
									<label class="control-label"><b>Username</b></label>
									<div class="controls">
                                                                            <input type="text" placeholder="Enter your username" id="username" name="username" class="input-xlarge" required/>
									<span class="error" id="username_error"></span>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label"><b>Password:</b></label>
									<div class="controls">
                                                                            <input type="password" placeholder="Enter your password" id="password" name="password" class="input-xlarge" required/>
									<span class="error" id="password_error"></span>
									</div>
								</div>	
                                                            
                                                             <div class="control-group">
                                                                 <label class=" control-label"><b>Confirm Password:</b></label>
            <div class="controls">
                <input id="password1" name="password1" type="password" placeholder="Confirm password"   class="input-xlarge" required onChange="return gPwd()"/>
<span class="error" id="password1_error"></span>
            </div>
        </div>
								</fieldset>
                                                    <center><hr>
                                                                <div class="actions"><input tabindex="9" class="btn btn-inverse large" type="submit" id="submit1" name="submit1" value="Create your account"></div>
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
				  <script src="js/jquery-3.2.1.js"></script>
    <script src="js/sregistration.js"></script>
    <script>
			$(document).ready(function() {
				$('#checkout').click(function (e) {
					document.location.href = "checkout.html";
				})
			});
                        
                        
                        
                               $('body').on('change', '#country_select', function () {
//            alert("countryslected");
            $index = $('#country_select').val();
           
            $.ajax({
            type:'post',
                    url:'get_state.php',
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
                    $('#state_select').html($str);
                }
                    });
                    
    });
      $('body').on('change', '#state_select', function () {
//            alert("countryslected");
            $index = $('#state_select').val();
           
            $.ajax({
            type:'post',
                    url:'get_district.php',
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
                    $('#district_select').html($str);
                }
                    });
                    
    });
                    
                  
          $('body').on('change', '#district_select', function () {
//            alert("countryslected");
            $index = $('#district_select').val();
            $index_id=$('#district_select option selected').val();
           
            $.ajax({
            type:'post',
                    url:'get_town.php',
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
                    $('#place_select').html($str);
                }
                    });
                    
    });
                    
   

$('body').on('change', '#place_select', function () {
//            alert("countryslected");
            $index = $('#place_select').val();
            $index_id=$('#place_select option selected').val();
            $('#place_select option:selected').val();
           
            $.ajax({
            type:'post',
//                    url:'get_town.php',
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
//                    $('#place_select').html($str);
                }
                    });
                    
    });
                        
                        
                        
		</script>
    </body>
</html>