<?php

include_once 'db.php';
if (isset($_POST['index'])) {
    $index = $_POST['index'];
    $q = mysqli_query($con, "SELECT subcategory_id,subcategory_name FROM subcategory where category_id='" . $index . "' and status=1");
    //var_dump($q);
    $str = "";
    while ($row = mysqli_fetch_array($q)) {
        
        $str .= $row['subcategory_id'].":" .$row['subcategory_name'] . ",";
        
    }
     echo rtrim($str,",");
    
}
?>

