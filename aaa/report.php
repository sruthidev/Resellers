
<?php


	include 'db.php';
if(!isset($_SESSION["username"]))
{
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
    
<?php include_once("analyticstracking.php") ?>
		<div id="top-bar" class="container">
			<div class="row">
				
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">	
<!--                                                        <li><a href="index.php">Home</a></li>-->
<li><a href="admin_home.php">Back</a></li>
<!--							<li><a href="#">My Account</a></li>
							<li><a href="cart.html">Your Cart</a></li>-->
							
												
                                                         <li><a href="signout.php">Logout</a></li>
                                                          <li style="float:left; color:red; font-weight: bolder; font-size: 14px">
   </li>
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
                    <section class="main-content">
                            
                           
				<div class="row">
					
					<div class="span12">					
                                            <center><h4 class="title"><span class="text"><strong>REPORT</strong></span></h4></center>
                                            <!--<form action="#" method="post" class="form-stacked" enctype="multipart/form-data">-->
                                            <!--<form name="sregister" class="form-stacked" id="form" method="POST" action="#" enctype="multipart/form-data" onSubmit="return valid()">-->
                                            <div class="span5"></div>
                                         
  
  
									 <?php  
 function fetch_data()  
 {  
include 'db.php';

 
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "reseller1");  
	  
	   $r1=mysqli_query($connect,"select * from members where login_id='$id'"); 
			$r1=mysqli_fetch_array($r1);
			$m_id=$r1["m_id"];
			
      $sql = "select * from deposit where mem_id=$m_id";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {   
      $output .= '<tr>  
                          
                          <td>'.$row["amount"].'</td>  
                          <td>'.$row["date"].'</td>  
                     </tr>  
                          ';  
      }  
      return $output;  
 }  
 if(isset($_POST["create_pdf"]))  
 {  
      require_once('../tcpdf/tcpdf_include.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Statement");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 12);  
      $obj_pdf->AddPage();  
      $content = '';  
      $content .= '  
      <h3 align="center">Statement</h3><br /><br />  
      <table border="1" cellspacing="0" cellpadding="5">  
           <tr>  
                
                <th >amount</th>  
				<th >date</th>  
           </tr>  
      ';  
      $content .= fetch_data();  
      $content .= '</table>';  
      $obj_pdf->writeHTML($content);  
	  ob_end_clean();
      $obj_pdf->Output('sample.pdf', 'I');  
 }  
 ?>  


<form method="post">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    <input type="submit" name="create_pdf" class="btn btn-danger" value="Get statement" />
                 </form>

		</div>
		<script src="themes/js/common.js"></script>
		<script>
			$(document).ready(function() {
				$('#checkout').click(function (e) {
					document.location.href = "checkout.html";
				})
			});
		</script>		
    </body>
</html>
