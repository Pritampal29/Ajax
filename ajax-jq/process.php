<?php

include('dbcon.php');

if(isset($_GET['uname']) && isset($_GET['lname'])) {

    $uname = $_GET['uname'];
    $lname = $_GET['lname'];

    // echo "Name: $uname and Surname: $lname";

    $insert = "INSERT into `data`(`uname`,`lname`) VALUES('$uname','$lname')";

    $query = mysqli_query($conn,$insert);

    if($query) {
        echo "Successful";
    } else {
        echo "Failed";
    }
}

?>