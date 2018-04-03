<?php
include 'db.php';
$_SESSION["username"]=$username;

echo "<script>alert(hgfh:$username);</script>";
if (!isset($_SESSION["username"])) {
    header("location: ./");
}
?>
<?php
//$id=$_REQUEST['restid'];
//$rid2=$_SESSION["rid"];
//INSERT INTO `feedback`(`fid`, `regid`, `restid`, `rat`, `msg`, `status`) VALUES 
if(isset($_POST['sub']))
{
$msg=$_POST["msg"];
$rate=$_POST["rate"];
$sql12="INSERT INTO `feedback`(`email`,  `rat`, `msg`, `status`) VALUES ('$rid2','$rate','$msg','0')";
$result=mysqli_query($con,$sql12);
}
?>
<!--DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : CrossWalk
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140216

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
<div id="wrapper">
	<div id="header" class="container">

		<div id="menu">
			<ul>
				<li  class="current_page_item"><a href="" accesskey="2" title="">RATING</a></li>
				<li><a href="user.php" accesskey="1" title="">HOMEPAGE</a></li>


			</ul>
		</div>
</div>

<?php


//SELECT `fid`, `regid`, `rat`, `msg`, `status` FROM `feedback` WHERE
$sql1="SELECT * FROM `feedback`"; //value querried from the table
	$res1=mysqli_query($con,$sql1);  //query executing function
	$cnt=0;
	while($fetch1=mysqli_fetch_array($res1))
	{
$cnt=$cnt+1;
$rid=$fetch1['email'];
$sql2="SELECT * FROM `registration` WHERE `email`='$rid'"; //value querried from the table
$res2=mysqli_query($con,$sql2);  //query executing function
$fetch2=mysqli_fetch_array($res2);

//$sql3="SELECT * FROM `resturant` WHERE `restid`='$id'"; //value querried from the table
//$res3=mysqli_query($con,$sql3);  //query executing function
//$fetch3=mysqli_fetch_array($res3);
//$rname=$fetch3['restnm'];
if($cnt==4)
{
	break;
}

?>
<div style="width:60%; height:20%; margin-left:20%; margin-top:2%;">
<input type="textarea" value="<?php echo $fetch1['msg'] ?>" disabled style="color:green; border:none; background-color:white; width:60%; height:50%;"></br>

<?php
for($i=0;$i<$fetch1['rat'];$i++)
{
?>
<img src="images/Star.png" width=15 height=15></img>
<?php
}
?>
<input type="text" value="<?php echo $fetch2['fname'] ?>" disabled style=" margin-left:83%; margin-top:-3%;color:red; font-size:150%; border:none; background-color:white;"></br>


</div>
<?php
	}
?>
 
<div id="copyright" style="background-color: #990066;">
 <form name="rating" action="#" method="post"id="form1">
<h2>RATE YOUR RESTAURT</h2></br>
<input type="textarea" placeholder="Enter your comments" name="msg" id="msg" value=""style="border-radius:5px; margin-left:80%; height:10%;"><br/><br/>
<select name="rate" class="form-control" style="margin-left:80%; border-radius:5px;">
							<option style="color:red;" value=5>excellent</option>
							<option style="color:red;" value=4>very good</option>
							<option style="color:red;" value=3>good</option>
							<option style="color:red;" value=2>fair</option>						
							<option style="color:red;" value=1>poor</option>
				        </select></br></br>
  <input type='submit' value='Send' name="sub" style="border-radius:5px; margin-left:80%;">
  </form>
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
</html>
