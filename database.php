<?php
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server,$username,$password);

    if(!$con){
        die("connection to this database failed due to" .mysqli_connect_error());

    }
    //echo "Success connecting to the db";

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phoneno= $_POST['phoneno'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $confirmpassword= $_POST['confirmpassword'];
    $sql = "INSERT INTO `probro`.`signup` (`firstname`, `lastname`, `phoneno`, `email`, `password`, `confirmpassword`) VALUES ('$firstname', '$lastname', '$phoneno', '$email', '$password', '$confirmpassword');";
    if($con->query($sql)==true){
        echo "successfully inserted";
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();

?>