<?php
include ("db.php");

if(isset($_POST['searchq']) && $_POST['searchq'] != "")
{
    if(isset($_POST['searchopt']) && $_POST['searchopt'] != "")
    {
        $escsearch = mysqli_real_escape_string($conn, $_POST['searchq']);
        $searchval = preg_replace('#[^a-z 0-9]#i', '', $escsearch);
        $opt = $_POST['searchopt'];

        switch($opt)
        {
            case "Product":
            $query = "SELECT * FROM product where product_name LIKE '%$searchval%'";
            $res = mysqli_query($con, $query) or die(mysqli_error());
            $count = mysqli_num_rows($res);
            if($count > 1)
            {
                $output .= "$count results for <strong>$escsearch</strong>.";

                while($row = mysqli_fetch_array($res))
                {
                    $name = $row['product_name'];
                    $pos = $row['description'];
                    $fac = $row['quantity'];
                    $email = $row['cost_price'];
                    $int = $row['selling_price'];

                    echo "<table>
                            <tr>
                                <td>Name</td>
                                <td>Position</td>
                                <td>Faculty</td>
                                <td>E-mail</td>
                                <td>Research Interests</td>
                            </tr>
                            <tr>
                                <td>$name</td>
                                <td>$pos</td>
                                <td>$fac</td>
                                <td>$email</td>
                                <td>$int</td>
                            </tr>
                         </table>
                         <?php";
                }
            }else{
                $output = "<p>No records found.</p>"; 
            }
            break;
        }
    }
}?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
