<?php

//session_start();
$con=mysqli_connect("localhost","root","","reseller1");


$pdid=$_POST['pdid'];
$dsct=$_POST['dst'];

//$pdid=4;
//$dsct=10;

$qry4 = "select product_id from discount1 where product_id=$pdid";
$result4 = mysqli_query($con, $qry4);
echo $qry4;
$row8 = mysqli_fetch_array($result4);
if(isset($row8))
{
    $a=$row8['product_id'];
//    echo $a;
//    if ($pdid==$a) {
        $qry1="update discount1 set percentage=$dsct where product_id=$a";
        $result1 = mysqli_query($con, $qry1);
        echo $qry1;
    }
    else{
        $qry="INSERT INTO `discount1`(`product_id`, `percentage`) VALUES ('$pdid','$dsct')";
        $sql= mysqli_query($con, $qry);
        echo $qry;
    }
//}
?>