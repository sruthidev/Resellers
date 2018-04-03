<?php

include_once 'db.php';
if (isset($_POST['index'])) {
    $index = $_POST['index'];
    $q = mysqli_query($con, "SELECT place_id,place_name FROM place where district_id='" . $index . "' and status=1");
    //var_dump($q);
    $str = "";
    while ($row = mysqli_fetch_array($q)) {
        
        $str .=$row['place_id'].":" . $row['place_name'] . ",";
        
    }
    echo rtrim($str,",");
}
?>