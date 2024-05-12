<?php
include('dbcon.php');

if(isset($_POST['uname']) && isset($_POST['email'])) {
    $name = $_POST['uname'];
    $email = $_POST['email'];

    if(!empty($name) && !empty($email)){
        $insert = "INSERT into `get_users_data` (`name`,`email`) VALUES ('$name','$email')";
        $query = mysqli_query($conn,$insert);

        if($query) {
            sleep(3);
            echo "Insertion Successful";
        }
    }
}