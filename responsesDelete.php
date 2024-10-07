<?php

    require 'adminConfig.php';

    $tickId = $_POST["ticketid"];
    $fname = $_POST["fullName"];

    $sql = "DELETE FROM responses WHERE Ticket_ID = '$tickId' AND Name = '$fname'";

    if($con->query($sql)){
        echo "Deleted";
        echo "<script>alert('Deleted')</script>";
    }else{
        echo "Not Success";
        echo "<script>alert('Not Success')</script>";
    }
?>