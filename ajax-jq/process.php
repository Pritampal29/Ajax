<?php

if(isset($_GET['uname']) && isset($_GET['lname'])) {

    $uname = $_GET['uname'];
    $lname = $_GET['lname'];

    echo "Name: $uname and Surname: $lname";
}

?>