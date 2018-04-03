<?php
include 'db.php';

if(!isset($_SESSION["username"]))
{
header("location: ./");
}

if(isset($_POST['btn_discount']))
{

//$k=$_POST["username"];
$us_id=$_SESSION['userid'];
$a=$_POST["disc_amount"];
$b=$_POST["date2"];

//echo"<script>alert('$us_id');</script>";



$sql1="INSERT INTO `discount`(`seller_id`, `percentage`,`end_date`) VALUES ($us_id,'$a','$b')";
$result1=mysqli_query($con,$sql1);
echo"<script>alert('Product Added');</script>";

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2></h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">SET DISCOUNT</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
          <form action="#" method="post">
        <div class="modal-body">
            <input type="text" name="disc_amount" placeholder="Enter discount %">
            <br><br><br>
            <input type="date" name="date2">
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-default" name="btn_discount">OK</button>
        </div>
          </form>
      </div>
    </div>
  </div>
</div>

</body>
</html>
