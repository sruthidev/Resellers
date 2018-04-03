<?php

include_once 'db.php';
if (!isset($_SESSION["username"])) {
    header("location: ./");
}
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$b=$_SESSION['userid'];
if(isset($_POST['edit']))
{
//$b=$_POST['drop'];
$a=$_POST['add'];
$res=mysqli_query($con,"UPDATE `seller` SET `store_name`='$a' WHERE userid='$b'");
}
if(isset($_POST['edit1']))
{
//$b=$_POST['drop'];
$a=$_POST['class1'];
$res=mysqli_query($con,"UPDATE `seller` SET `mobile_number`='$a' WHERE userid='$b'");
}
//if(isset($_POST['edit2']))
//{
////$b=$_POST['drop'];
//$a=$_POST['classno'];
//$res=mysqli_query($con,"UPDATE `seller` SET `mobno`='$a' WHERE email='$b'");
//}?>
<html>
<head>
<style>
div.new {
    float: right;
	width: 50%;
    height: 20px;
    border: 3px solid red;
}
div.d {
   background-color: lightgrey;
    margin-top: 20px;
    margin-bottom: 50px;
    margin-right: 20px;
    margin-left: 20px;
    width: 100%;
    
   
}
div.absolute {
  background-color: white;
  text-align: right;
    position: absolute;
    top: 150px;
    right: 50;
    width: 50%;
    height: 50px;
}
div.sis1 {
  background-color: white;
    position: absolute;
    top: 300px;
    width:100%;
    height: 500px;
}
div.sis3{
  background: transparent ;
    position: absolute;
    top: 450px;
    right: 100px;
    width: 20%;
    height: 150px;
       
}
div.sis2 {
  background: transparent ;
    position: absolute;
    top: 330px;
    right: 0;
 margin-left:70px;
    margin-right:0px;
    width: 20%;
    height: 150px;
       
}
div.aa
{	
	
	position:absolute;
    	width:1250;
	height:300px;
	top:400px;
	left:70px;
	background-color:rgba(0,0,0,0.3);
	margin: 0 auto;
	margin-top:40px;
	padding-top:10px;
	padding-left:20px;
	border-radius:15px;
	-webkit-border-radius:15px;
	-o-border-radius:15px;
	-moz-border-radius:15px;
	color:white;
	font-weight:bolder;
}
.aa input[type="text"]
{
	width:200px;
	height:35px;
	border:0px;
	border-radius:5px;
	webkit-border-radius:5px;
	-o-border-radius:5px;
	padding-left:5px;
	-moz-border-radius:5px;
}
.aa input[type="password"]
{
	width:200px;
	height:35px;
	border:0px;
	border-radius:5px;
	webkit-border-radius:5px;
	-o-border-radius:5px;
	padding-left:5px;
	-moz-border-radius:5px;
}
.aa input[type="submit"]
{
	width:100px;
	height:35px;
	border:0px;
	border-radius:5px;
	-webkit-border-radius:5px;
	-o-border-radius:5px;
	-moz-border-radius:5px;
	background-color:skyblue;
	font-weight:bolder;
	box-shadow:inset -4px -4px rgb(0,0,0,0.3);
	font-size:18px;
}
       

img.i
{
float:right;
 top: 150px;
    right: 70px;
}

</style>

<title>STUDENT HOME</title>
<link rel="stylesheet" href="saps.css" type="text/css">


</head>
<body style="background-image:url(.jpg); background-size:cover; backgorund-">
<br>
<div style="color:#555555;font-family:Agency FB;font-size:351%;margin-right:0px;">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<img src="IMM.jpg" height="100px" width="750px">
<BR>
<span style="color:black;font-family:Calibri Light (Headings);font-size:40%;"><b><pre></PRE></b></span></div>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 
  <ul>
  <li><a class="" href="userhome.php">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp;
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp;
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp;
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspHOME</a></li>
    <li><a href="useredit.php">EDIT</a></li>
	<li><a href="new.php">CHANGE PASSWORD</a></li>
  
  <li><a href="newlogin.php">LOGOUT</a></li>
  


  
<li><a href="adminlogin.php">LOGOUT</a></li>
</ul>
<br><br>
<center>
<div class="bb">

<div class="aa">

<form action="#" method="post" name="a">
<table align="center">
<tr><td>ADDRESS</td><td>
<input type="text" name="add">
<input type="submit" value="edit" name="edit"></td>
<tr><td>STATE</td><td>
<input type="text" name="class1">
<input type="submit" value="edit" name="edit1"></tr></tr>
<tr><td>PHNO</td><td>
<input type="text" name="classno">
<input type="submit" value="edit" name="edit2"></tr></tr>

</form>
</div>
</div>


</body>
</html>