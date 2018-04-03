<?php

include_once 'db.php';
if (isset($_POST['index'])) {
    $index = $_POST['index'];
    $q = mysqli_query($con, "SELECT state_id,state_name FROM state where country_id='" . $index . "' and status=1");
    //var_dump($q);
    $str = "";
    while ($row = mysqli_fetch_array($q)) {
        
        $str .= $row['state_id'].":" .$row['state_name'] . ",";
        
    }
     echo rtrim($str,",");
    
}
?>