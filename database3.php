<?php
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server,$username,$password);

    if(!$con){
        die("connection to this database failed due to" .mysqli_connect_error());

    }
    //echo "Success connecting to the db";

    $note = $_POST['note'];
    $sql = "INSERT INTO `probro`.`notepad` (`note`) VALUES ('$note');";
    if($con->query($sql)==true){
        echo "successfully inserted";
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();

?>