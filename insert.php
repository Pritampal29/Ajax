<?php
include('dbcon.php');

if(isset($_GET['uname']) && isset($_GET['email'])) {
    $name = $_GET['uname'];
    $email = $_GET['email'];

    // echo "Name: $name & Email: $email";
    if(!empty($name) && !empty($email)){
        $insert = "INSERT into `get_users_data` (`name`,`email`) VALUES ('$name','$email')";
        $query = mysqli_query($conn,$insert);

        if($query) {
            echo "Insertion Successful";
        }
    }
}