

<?php
include 'db.php';

if(isset($_POST['submit1']))
{
$a=$_POST["fname"];
//echo "<script> alert('hai');</script>";
$b=$_POST["lname"];
$c=$_POST["storename"];
$d=$_POST["mobilenumber"];
$e=$_POST["email"];
$f=$_POST["gstnumber"];

$j=$_POST["place_select"];

$k=$_POST["username"];
$o=$_POST["password"];
$p = $_POST["password1"];

if ($p == $o) {
$sql1="INSERT INTO `login`(`username`, `password`,`role_id`) VALUES ('$k','$p','2')";
$result1=mysqli_query($con,$sql1);

$logid="SELECT `userid` FROM `login` WHERE `username`='$k'";
$result2=mysqli_query($con,$logid);
while($row=mysqli_fetch_array($result2))
{

  $l=$row["userid"];
  $sql="INSERT INTO `seller`( `userid`,`first_name`, `last_name`, `store_name`, `mobile_number`, `email`,`place_id`, `gst_no`, `username`, `password`, `status`) VALUES ($l,'$a','$b','$c','$d','$e','$j','$f','$k','$p',1)";
$result3=mysqli_query($con,$sql);

//echo"<script>alert('Data Entered Successfully');</script>)";

}

if($result3==1)
{
	echo"<script>alert('Registration Successful Please Login');</script>";
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
                
                
                <script>
   function valid()
{
	if(isNaN(document.sregister.gstnumber.value))
    {
     alert("using only numbers");
	 document.sregister.gstnumber.focus();
	 return false;
   }
 if(document.sregister.fname.value=="")
  {
       var val_fname= /^[A-Za-z]+$/;
      $f_name= document.getElementById('fname').value;
      if(!val_fname.test($f_name)){
     alert("enter name");
     document.getElementById('fname').value='';
	 document.sregister.fname.focus();
         $("#f_name").focus();
	 return false;
  }}
  if(!document.sregister.fname.value.match(/^[a-z A-Z]+$/))
  {
     alert("alphabets only");
	 document.sregister.fname.focus();
	 return false;
   }
	 if(!document.sregister.lname.value.match(/^[a-z A-Z]+$/))
   {
      alert("alphabets only");
 	 document.sregister.lname.focus();
 	 return false;
    }
//   if(document.sregister.dob.value=="")
//   {
//      alert("enter your date of birth");
//	 document.sregister.dob.focus();
//	 return false;
//	}

//	if((document.sregister.gender[0].checked==false)&&(document.sregister.gender[1].checked==false))
//	{
//	   alert("please select the gender");
//	   return false;
//	 }
	 if(document.sregister.mobilenumber.value=="")
   {
      alert("enter your mobile number");
	 document.sregister.mobilenumber.focus();
	 return false;
	}
	if(isNaN(document.sregister.mobilenumber.value))
    {
     alert("using only numbers");
	 document.sregister.mobilenumber.focus();
	 return false;
   }
   var mobile=document.sregister.mobilenumber.value;
   if(mobile.length!=10)
   {
     alert("mobile number contain 10 digit");
		 document.sregister.mobilenumber.focus();
	 return false;
	}
	if(document.sregister.email.value=="")
   {
      alert("enter the mail address");
	 document.sregister.email.focus();
	 return false;
	}

//	if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.sregister.email.value)))
//	{
//		alert("you have entered an invalid email address:");
//		return false;
//	}
//	if(isNaN(document.sregister.pin.value))
//		{
//		 alert("using only numbers");
//	 document.sregister.pin.focus();
//	 return false;
//	 }

	if (document.sregister.password.value=="")
	 {
		 alert("provide password");
		 document.sregister.password.focus();
		 return false;
	 }
//	 if(!document.sregister.hname.value.match(/^[a-z A-Z]+$/))
//   {
//      alert("alphabets only");
// 	 document.sregister.hname.focus();
// 	 return false;
//    }
//		if(!document.sregister.place.value.match(/^[a-z A-Z]+$/))
//	  {
//	     alert("alphabets only");
//		 document.sregister.place.focus();
//		 return false;
//	   }
}
</script>
                
                
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
                                                        <li><a href="cusregister.php">Are You Looking for Something?</a></li>					
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
                                                <!--<form action="#" method="post" class="form-stacked">-->
                                                    <form name="sregister" class="form-stacked" id="form" method="POST" action="#" onSubmit="return valid()">
                                                    <div class="span5"></div>
							<fieldset>
                                                              
								<div class="control-group">
                                                                    <label class="control-label"><b>First Name:</b></label>
									<div class="controls">
                                                                            <input type="text" placeholder="Enter your first name" id="fname" name="fname" class="input-xlarge"  data-rule="maxlen:4" required >
								<div class="validation"></div>
									</div>
								</div>
                                                            <div class="control-group">
									<label class="control-label"><b>Last Name:</b></label>
									<div class="controls">
                                                                            <input type="text" placeholder="Enter your last name" id="lname" name="lname" class="input-xlarge" required/> 
								<div class="validation"></div>
									</div>
								</div>
                                                            <div class="control-group">
									<label class="control-label"><b>Store Name:</b></label>
									<div class="controls">
                                                                            <input type="text" placeholder="Enter your store name" id="storename" name="storename" class="input-xlarge" required/>
									</div>
								</div><div class="control-group">
									<label class="control-label"><b>Mobile Number:</b></label>
									<div class="controls">
                                                                            <input type="text" placeholder="Enter your mobile number" id="mobilenumber" name="mobilenumber"  class="input-xlarge" required/>
									</div>
								<div class="control-group">
									<label class="control-label"><b>Email address:</b></label>
									<div class="controls">
                                                                            <input type="email" placeholder="Enter your email" id="email" name="email" class="input-xlarge" data-rule="email" required/> 
								<div class="validation"></div>
									</div>
								</div>
                                                            
                                                            
								</div><div class="control-group">
									<label class="control-label"><b>GST Number:</b></label>
									<div class="controls">
                                                                            <input type="text" placeholder="Enter your GST Number" id="gstnumber" name="gstnumber" class="input-xlarge" required/>
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
									</div>
								</div>
								<div class="control-group">
									<label class="control-label"><b>Password:</b></label>
									<div class="controls">
                                                                            <input type="password" placeholder="Enter your password" id="password" name="password" class="input-xlarge" required/>
									</div>
								</div>	
                                                            <div class="control-group">
                                                                 <label class=" control-label"><b>Confirm Password:</b></label>
            <div class="controls">
                <input id="password1" name="password1" type="password" placeholder="Confirm password"   class="input-xlarge" required="">

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