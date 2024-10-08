<?php
    $con = new mysqli("localhost", "root", "", "fashionfix");

    if($con->connect_error){
        die("Connection Failed".$con->connect_error);
    }else{
        echo "<script>console.log('Successfull');</script>";
    }
?>