<!DOCTYPE html>
<?php
   include 'db.php';
if (!isset($_SESSION["username"])) {
    header("location: ./");
} 
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
	<title>RESELLER </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="images/favicon.ico">

	<!-- CSS -->
        <link href="css/mystyle.css" rel="stylesheet" type="text/css" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
        
<!--        <script type="text/javascript">
            function goBack() {
                window.history.back();
            }

     </script>-->
    </head>
    <body >
        
        <?php
           $id=$_REQUEST['product_id'];
           echo $id;
        
                    //echo $id;
                    //echo "<script> alert('Thanks $id'); </script>";
                    $sql3=mysqli_query($con,"SELECT  * FROM `product` where product_id=$id and status=1 ");
                        if($row= mysqli_fetch_array($sql3)){
        
        
        if(isset($_POST["gl_item_addbtn"])){
            $comments= htmlspecialchars($_POST['comments']);
            $sel = $_POST['experience'];
            $idd=$_SESSION['username'];
            echo $idd;
            
                $sql1="INSERT INTO `feedback`(`username`, `score`, `feedback`, `product_id`, `status`) VALUES('$idd','$sel','$comments',$id,1)";
               echo $sql1;
                if (mysqli_query($con,$sql1) > 0){
                    
                    

                    echo "<script> alert('Thanks for your Feedback'); </script>";
                }

                else{
                        echo "<script> alert ('Failed !'); </script>";
                }
            }
        
        
            ?>
                
        <div class="container">
            <div class="imagebg"></div>
            <div class="row " style="margin-top: 50px">
                <div class="col-md-6 col-md-offset-3 form-container">
                    
                    <h2>Feedback</h2> 
                    <p> Please provide your feedback below: </p>
                    <form role="form" method="post" id="feedback">
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>How do you rate your overall experience?</label>
                                <p>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="1"  required>
                                        Poor 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="2" required>
                                        Bad 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="3" required>
                                        Average 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="4" required >
                                        Good 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="5" required >
                                        Excellent 
                                    </label>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="comments"> Comments:</label>
                                <textarea class="form-control" type="textarea" name="comments" id="comments" placeholder="Your Comments" maxlength="6000" rows="7" required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">

                                <button type="submit" class="btn btn-lg btn-warning btn-block" name="gl_item_addbtn" >Post </button>
                              
                            </div>
                              <button type="" class="btn btn-lg btn-warning btn-block" onclick="window.location.href='buyerhome.php?product_id=<?php echo "$id"; ?>'" >Back </button>
                        </div>
                    </form>
                    <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Posted your feedback successfully!</h3> </div>
                    <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
                </div>
            </div>
        </div>
        <?php
        }else{
        ?>
                        
        <?php
                }
          
        
        
        ?>
    </body>
</html>