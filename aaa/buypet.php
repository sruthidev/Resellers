<?php 
include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>

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
        
        
        
        
        <link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/slider.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.carouFredSel-6.1.0-packed.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tms-0.4.1.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script>
$(window).load(function () {
    $('.slider')._TMS({
        show: 0,
        pauseOnHover: false,
        prevBu: '.prev',
        nextBu: '.next',
        playBu: false,
        duration: 800,
        preset: 'fade',
        pagination: true, //'.pagination',true,'<ul></ul>'
        pagNums: false,
        slideshow: 8000,
        numStatus: false,
        banners: true,
        waitBannerAnimation: false,
        progressBar: false
    })
});
$(window).load(function () {
    $('.carousel1').carouFredSel({
        auto: false,
        prev: '.prev',
        next: '.next',
        width: 960,
        items: {
            visible: {
                min: 3,
                max: 3
            },
            height: 'auto',
            width: 300,
        },
        responsive: true,
        scroll: 1,
        mousewheel: false,
        swipe: {
            onMouse: true,
            onTouch: true
        }
    });
});
jQuery(document).ready(function () {
    $().UItoTop({
        easingType: 'easeOutQuart'
    });
});
</script>
        
        
        
	</head>
  	
    
    <body class="page1">
<header>
  <div class="container_12">
    <div class="grid_12">
      <h1><a href="index.html"><img src="images/logo.png" alt=""></a> </h1>
      <div class="menu_block">
        <nav>
          <ul class="sf-menu">
            <li class="current"><a href="buypet.php">Home</a></li>
            <!--<li class="with_ul"><a href="">your pet</a>
            	<ul>
               <li><a href="petadd.php">Add Your Pet</a></li>
               <li><a href="photoupload.php">Uplod Photos</a></li>
               <li><a href="services.html">View Album</a></li>
               </ul>
               </li>-->
           
               <li><a href="food.php">Food</a></li>
            <li><a href="services.php">Services</a></li>
            <!--<li><a href="gallery.php">Gallery</a></li>-->
        
               <li><a href="index.php">Logout </a></li>
           
            
          </ul>
        </nav>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</header>
<div>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Buy</title>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: right;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
.select{
	width:160px;
	height:20px;
	background-color:#333;
	 display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
	border-radius:13px;
}


div.img {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 180px;
	background-color:black;
	height:270px;
	border-radius:13px 13px 13px 13px;
}
div.img:hover span:after {
  position: relative;
  opacity: 0;
  top: 0;
  left:980px;
  transition: 0.5s;
}



div.img:hover span{
    border: 1px solid #777;
	padding-right: 0px;
}

div.img:hover span:after{
  opacity: 1;
  right: 0;
}

div.img img {
    height:180px;
	width:180px;
}

div.desc {
    padding: 15px;
    text-align: center;
	font-family:Benguiat Bk BT;
}
.button1 {	width:100px;
	background-color:#33FF99;
	border-radius:13px;
	cursor: pointer;
}

</style>
</head>

<body>

<form id="form1" name="form1" method="post" action="#">
<br />
<select name="opt" style="margin-left:17%">
<option>select category</option>
<?php
$qry1="SELECT * FROM `subcategory`";
$res1=mysqli_query($con,$qry1);
$i=0;
while($ar1=mysqli_fetch_array($res1))
{
?>
<option><?php echo $ar1['subcategory_name']; ?></option>

  <br />
  
  <?php
  }
  ?> </select>
  <input type="submit" name="submit">
  </form>
 
<center>
<table><?php 
if(isset($_POST['submit']))
{
$sbc=$_POST['opt'];
//SELECT `subcategory_id`, `subcategory_name`, `catid` FROM `subcategory` WHERE
$qry2="SELECT `subcategory_id` FROM `subcategory` WHERE `subcategory_name`='$sbc'";
$res2=mysqli_query($con,$qry2);
$ar2=mysqli_fetch_array($res2);
$f=$ar2['subcategory_id'];
$qry="select * from product WHERE `subcategory_id`='$f'";
$res=mysqli_query($con,$qry);
$i=0;
while($ar=mysqli_fetch_array($res))
{
	$i++;
	if($i % 6==1)
	{
		echo "<tr>";
	}
?>
    	<td>
			<form action="book.php" method="post">
        	<div class="img">
    				<span><img src="<?php echo $ar['image']?>" alt="Trolltunga Norway"></span>
  				<div class="desc">
    				<?php echo $ar['product_name']?>
                   
   					 <br><?php echo $ar['description']?>
   					 <br><?php echo $ar['selling_price']?><br>
					<input type="hidden" value="<?php echo $ar['pid']?>" name="pid" />
                    <input type="submit" value="More Details" name="submit" class="button1"/>
 				 </div>
			</div>
            </form>
		</td>
 <?php } 
 }
 else
 {
 
$query="select * from product";
$result=mysqli_query($con,$query);
$i=0;
while($array=mysqli_fetch_array($result))
{
	$i++;
	if($i % 6==1)
	{
		echo "<tr>";
	}
?>
    	<td>
			<form action="book.php" method="post">
        	<div class="img">
    				<span><img src="<?php echo $array['image']?>" alt="Trolltunga Norway"></span>
  				<div class="desc">
    				<?php echo $array['product_name']?>
                   
   					 <br><?php echo $array['description']?>
   					 <br><?php echo $array['selling_price']?><br>
					<input type="hidden" value="<?php echo $array['pid']?>" name="pid" />
                    <input type="submit" value="More Details" name="submit" class="button1"/>
 				 </div>
			</div>
            </form>
		</td>
 <?php } 
 }
 ?>
 </table>
 </center>
</body>
</html>
