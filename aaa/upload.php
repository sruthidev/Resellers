<!DOCTYPE HTML>
<?php
include 'Connect.php';
?>
<html>
<?php
if(isset($_POST["submit"])){
	
  $fileName=$_FILES["notes"]["name"];
  $fileSize=$_FILES["notes"]["size"]/1024;
  $fileType=$_FILES["notes"]["type"];
  $fileTmpName=$_FILES["notes"]["tmp_name"];
  if(($fileType=="application/msword")||($fileType=="application/pdf")){
   

    
      $random=rand(1111,9999);
      $newFileName=$random.$fileName;

      //File upload path
      $uploadPath="./notes/".$newFileName;

      //function for upload file
      if(move_uploaded_file($fileTmpName,$uploadPath)){
        echo "Successful"; 
        echo "File Name :".$newFileName; 
        echo "File Size :".$fileSize." kb"; 
        echo "File Type :".$fileType; 
      }
    }
    
  
  else{
    echo "You can only upload a Word doc file.";
  }  
}
?> 
	

<head>
		<title>Upload Notes</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		
		
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','../www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-93229448-1', 'auto');
	  ga('send', 'pageview');
	
	</script>
		
		<script src="jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#branch').on('change',function(){
        var branchID = $(this).val();
        if(branchID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'branch_id='+branchID,
                success:function(html){
                    $('#semester').html(html);
                    $('#subject').html('<option value="">Select Semester first</option>'); 
                }
            }); 
        }else{
            $('#semester').html('<option value="">Select Branch first</option>');
            $('#subject').html('<option value="">Select Semester first</option>'); 
        }
    });
    
    $('#semester').on('change',function(){
        var semesterID = $(this).val();
        if(semesterID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'semester_id='+semesterID,
                success:function(html){
                    $('#subject').html(html);
                }
            }); 
        }else{
            $('#subject').html('<option value="">Select semester first</option>'); 
        }
    });
});
</script>
		
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1><a href="index.php">Class<b> <span style="color:#5379fa !important;"> Master</span></b></a></h1>
					<nav id="nav">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="contact.html">Contact</a></li>
							<li><a href="about.html">About</a></li>
						</ul>
					</nav>
				</header>					
					<div class="row"  style="background-image:url(images/img1.jpg);">
						<div class="12u">

							<!-- Form -->
								<section class="box">
									<center>
									Upload Notes<br>
									<h3>Class<span style="color:#5379fa !important;"> Master</span></h3>
									</center> <hr>
									
<form method="POST" action="#" enctype="multipart/form-data">
										
										
<div class="container mainbody">
<div class="select-boxes">
        <select name="branch" id="branch">
        <option value="">Select Branch</option>
        <option value="1">MCA</option><option value="2">Computer Science Engineering</option><option value="4">Electrical & Electronics Engineering</option><option value="3">Electronics & Communication Engineering</option><option value="5">Mechanical Engineering</option>    </select>
    
	<br>
	
    <select name="semester" id="semester">
        <option value="">Select Branch first</option>
    </select>
    
	<br>
	
    <select name="subject" id="subject">
        <option value="">Select semester first</option>
    </select>
	
	<br>
	
	<select name="module" id="module">
		<option value="0">Module</option>
		<option value="1">Module1</option>
		<option value="2">Module2</option>
		<option value="3">Module3</option>
		<option value="4">Module4</option>
		<option value="5">Module5</option>
		<option value="6">Module6</option>
	</select>
	
	<br>
	<table>
		<tr>
			<td>
			
			
			<center><h4>
			While uploading,please don't minimize or close this page before the message Upload sucessful is shown.</h4></center><br>
			
			<center> <input type="file" name="notes"></a> </center>
			</td>
		</tr>
	</table>
	
    
	
</div>
</div>
  	
	<div class="row uniform">
		<div class="12u">
			<ul class="actions fit">
				<li><input type="submit" value="Upload" name="submit" class="button special fit" /></li>
			</ul>
		</div>
	</div>
</form>

<hr />

<center><h5>Disclaimer:We Have The Right To Use The Notes Uploaded By You</h5></center>

</section>

	</div>
</div>
					
						

			<!-- Footer -->
				<footer id="footer">
                
					<ul class="icons"><br/>
						<li><a href="https://www.facebook.com/vishnuskumar95" class="icon fa-facebook">
						<span class="label">Facebook</span></a></li>
						<li><a href="https://www.instagram.com/vishnus_/" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						
					</ul>
					
					<ul class="copyright">
						<li>&copy; VISHNU. All rights reserved.</li><li>Design: <a href="about.html">VISHNU</a></li>
					</ul>
				</footer>
					

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>


</html>