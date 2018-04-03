<?php
include_once 'db.php';

?>


<?php
if (isset($_POST['signup'])) {
    //$categoryid = $_POST['categoryid'];
    $subcategoryname = $_POST['subcategoryname'];
    $category_select = $_POST['category_select'];
  // echo $category_select;

    
    
   // if ($password1 == $password) {
        //$sql = "INSERT INTO `staff`(`staff_name`,  `mob_number`, `email`, `password`,`address`, `status`) VALUES ('$staff_name','$mob_number','$email','$password1''$address',1)";
 $sql4="select * from state";
      $result1 = mysqli_query($con,$sql4);
    $row8 = mysqli_fetch_array($result1);
    if($row8['state_name']!=$subcategoryname){
      
        $sql1="INSERT INTO `state`( `state_name`,`country_id`,`status`) VALUES ('$subcategoryname',$category_select,1)";
        
        $res = mysqli_query($con, $sql1)or die(mysqli_error($con));


        $p = "select max(state_id) as lgid from state";

        $q = mysqli_query($con, $p) or die(mysqli_error($con));
        $row = mysqli_fetch_array($q);
        $x = $row['lgid'];




        echo '<script> alert("State Added! ")</script>';
//    } else {
//
//        echo '<script language="javascript">';
//        echo 'alert("Your password does not match")';
//        echo '</script>';
//    }

        }
else{
     echo '<script> alert("State Already Added! ")</script>';
}
        
    }

?>

<head>
    <title>State Registration</title>
   <title>Shopper</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<!--<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">-->      
		<!--<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">-->		
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		<link rel="stylesheet" href="css/bootstrap.css">
		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
    <link rel="icon" href="photo/rrr.png" type="icon">
    <script src="js/jquery-3.2.1.min.js"></script>
    
    
    
    
    <script>

	
function fName(){
            var subcategoryname= form1.subcategoryname.value;
                if((subcategoryname===null)||(subcategoryname.length<3)){
                    
                    alert("Enter Correct Name");
                    form1.subcategoryname.focus();
                    return false;
                }
                var subcategoryname=/^[a-zA-Z]{3,20}$/;
                if(form1.subcategoryname.value.search(subcategoryname)==-1)
                 {
                      alert("Enter correct  Name");
                        form1.subcategoryname.focus();
                      form1.subcategoryname.style.border = "1px solid red";
                      return false;
                    
                    }
                if((subcategoryname.length>25)){
                   
                    alert("Name Must Not Exceed 24 Characters");
                  form1.subcategoryname.focus();
                    return false;
                }
              
                
        }
		
                
                 function  addUser(){
			
			
       var subcategoryname= form1.subcategoryname.value;
                if((subcategoryname===null)||(subcategoryname.length<3)){
                    form1.subcategoryname.style.border = "1px solid red";
                    alert("Enter Valid Name");
                    form1.subcategoryname.focus();
                    return false;
                }
                var subcategoryname=/^[a-zA-Z ]{4,25}$/;
                if(form1.subcategoryname.value.search(categoryname)==-1)
                 {
                      alert("Enter correct Name");
                      form1.subcategoryname.focus();
                      form1.subcategoryname.style.border = "1px solid red";
                      return false;
                    }
                if((subcategoryname.length>25)){
                    form1.subcategoryname.style.border = "1px solid red";
                    alert("Name Must Not Exceed 24 Characters");
                   form1.subcategoryname.focus();
                    return false;
                }
				
    }
               </script>
    
                    <style>
  .button {
    background-color: orange;
    border: none;
    color: white;
    border-radius:13px 13px 13px 13px;
    padding: 8px 16px;
    font-weight: bold;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 22px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
    background-color: white; 
    color: orangered    ; 
    border: 8px solid white;
}

.button1:hover {
    background-color: orangered;
    color: white;
}

                </style>
</head>

<script src="js/validation.js"></script>

<div id="top-bar" class="container">
			<div class="row">
				
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">	
<!--                                                        <li><a href="index.php">Home</a></li>-->
<li><a href="admin_add.php">Back</a></li>
<!--							<li><a href="#">My Account</a></li>
							<li><a href="cart.html">Your Cart</a></li>-->
							
												
                                                         <li><a href="signout.php">Logout</a></li>
                                                        <li style="float:left" class="style6">
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
                                            <center><h4 class="title"><span class="text"><strong>ADD STATE</strong></span></h4></center>

<form name="form1" class="form-horizontal" method="post" action="" onsubmit="return">
    <fieldset>

 
        
       

<div class="form-group">
            <label class="col-md-4 control-label" for="street"> Country</label>  
            <div class="col-md-4">
                 
                        <select class="form-control" name="category_select" id="category_select">
                        <option value="-1">select</option> 
                     <?php
            $q = mysqli_query($con, "SELECT country_id,country_name FROM country where status=1");
            //var_dump($q);

            while ($row = mysqli_fetch_array($q)) {
                echo '<option value=' . $row['country_id'] . '>' . $row['country_name'] . '</option>';
            }
            ?></select>

            </div>
        </div>
               <div class="form-group">
            <label class="col-md-4 control-label" for="name">State</label>  
            <div class="col-md-4">
                <input id="subcategoryname" name="subcategoryname" type="text" placeholder="Enter State Name" class="form-control input-md" required onChange="return fName()">

            </div>
        </div>
               


        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label"></label>
            <div class="col-md-4">

               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <input type="submit" name="signup" value="ADD" id="signup" class="button button1">
                <!--<button class="button button1" id="btn_Product_reg" onclick="location.href = 'admin_add.php';" style="float: right;">BACK</button>-->
            </div>
        </div>

    </fieldset>
</form>
                                            
                                            
                                            
                                            
                                            <br>
<div class="span12">					
                                            <center><h4 class="title"><span class="text"><strong>ADDED STATES</strong></span></h4></center>
                                            <form >
                                                
                                                 <?php
//$qry="select * from login,role where login.role_id=role.role_id";
      $qry="select * from state";
$result=mysqli_query($con,$qry);

?>
 <?php
while($row=mysqli_fetch_array($result)){
?>
                                                <table style="margin-left: 550px;" ><form action="#" method="post">
       <tr></tr>     <tr>
          <td></td>
          <td style="font-size: 20px;font-family: arial black;"><?php echo $row['state_name'];?></td>
     
        
      </tr>
      <?php
}
?>
    </table></form>
<script>
             $('body').on('click', '#btn_Product_reg', function () {
             $.ajax({
            type:'post',
                    url:'data_save.php',
                    data:{context:'save_product'},
                    success:function(response)
                    {
                        alert(response);
                    }});
         });
        $('body').on('change', '#category_select', function () {
            $index = $('#category_select').val();
           
            $.ajax({
            type:'post',
                    url:'get_subcat.php',
                    data:{index:$index},
                    success:function(response)
                    {
                      
                    console.log(response);
                    $ar = response.split(",");
                            $str = "";
                            for (var i = 0; i < $ar.length; i++)
                    {
                        $ss=$ar[i].split(':');
                    $str += '<option value='+$ss[0]+'>' + $ss[1] + "</option>";
                    }
                    $('#subcategory_select').html($str);
                    }
                    });
        });


             
//        $(document).ready(function(){  
//        $("form#register").submit(function() {
//        // we want to store the values from the form input box, then send via ajax below  
//        var productname = $('#productname').val();  
//        var description = $('#description').val();
//        //var user_pass= $('#user_pass').val();
//        //$user_name = $('#user_name').val();
//        //$user_email = $('#user_email').val();
//        //$password = $('#password').val();
//        alert(productname);
//            $.ajax({  
//                type: "POST",  
//                url: "ajax.php",  
//                data: "produtname="+ productname +"&description="+ description ,  
//                success: function(){  
//                    $('form#register').hide(function(){$('div.success').fadeIn();});  
//                }  
//            });
//            //alert("ji");
//        return false;  
//        });  
//});


    </script>
