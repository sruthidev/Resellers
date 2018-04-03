<?php

include_once 'db.php';
if (isset($_POST['index'])) {
    $index = $_POST['index'];
    $q = mysqli_query($con, "SELECT district_id,district_name FROM district where state_id='" . $index . "' and status=1");
    //var_dump($q);
    $str = "";
    while ($row = mysqli_fetch_array($q)) {
        
        $str .=$row['district_id'].":" . $row['district_name'] . ",";
        
    }
    echo rtrim($str,",");
}
?>