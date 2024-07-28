<?php

include('config.php');


$range1 = isset($_POST['range1']) ? $_POST['range1'] : 100;
$range2 = isset($_POST['range2']) ? $_POST['range2'] : 10000;

// Prepare the SQL query with the range condition
$select = "SELECT * FROM `product` WHERE `amount` BETWEEN $range1 AND $range2";
$result = mysqli_query($conn, $select);

$output = '';

if(mysqli_num_rows($result)>0) {
    while($row = mysqli_fetch_assoc($result)) {
        $output .= "<div class='card'>
                        <h3>". $row['name'] ."</h3>
                        <h5 style='color:red'>₹ ". $row['amount'] ."</h5>
                    </div>";
    }
} else {
    $output .= "No Data Found";
}

echo $output;

?>