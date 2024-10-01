<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "iwt";


    // Create connection
    $conn = new mysqli($servername, $username, $password,$db);

    //Check connection
    if ($conn) {
        //echo "Connected successfully";
    }
    else{
        die(mysqli_error($conn));
    }

    
?>