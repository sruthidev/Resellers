

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
<form name="sregister" class="form-stacked" id="form" method="POST" action="#" onSubmit="return valid()">
                                                    <div class="span5"></div>
							<fieldset>
                                                              
								<div class="control-group">
                                                                    <label class="control-label"><b>First Name:</b></label>
									<div class="controls">
                                                                            <input type="text" placeholder="Enter your first name" id="fname" name="fname" class="input-xlarge" required/>
									</div>
								</div>
                                                            <div class="control-group">
									<label class="control-label"><b>Last Name:</b></label>
									<div class="controls">
                                                                            <input type="text" placeholder="Enter your last name" id="lname" name="lname" class="input-xlarge" required/>
									</div>
								</div>
                                                            <div class="control-group">
									<label class="control-label"><b>Mobile Number:</b></label>
									<div class="controls">
                                                                            <input type="tel" pattern="[789][0-9]{9}" placeholder="Enter your mobile number" id="mobilenumber" name="mobilenumber"  class="input-xlarge" required/>
									</div>
								<div class="control-group">
									<label class="control-label"><b>Email address:</b></label>
									<div class="controls">
                                                                            <input type="email" placeholder="Enter your email" id="email" name="email" class="input-xlarge" required/>
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
			
    </body>
</html>