<?php
$id=$_REQUEST['book_id'];
include 'db.php';
$s=mysqli_query($con,"select * from booking where book_id=$id");
if($rw=mysqli_fetch_array($s))
{
$pid=$rw['product_id'];
//$q=mysqli_query($con,"update product set status='0' where product_id=$pid");
$q=mysqli_query($con,"update product set quantity=quantity+1 where product_id=$pid");
$q1=mysqli_query($con,"update product set status1=1 where product_id=$pid");
}
$sql="delete from booking where product_id=$pid";
$results=mysqli_query($con,$sql);
if($results>0)
{
//	echo "item deleted";
	header('location:seller_booked.php');
}

?>