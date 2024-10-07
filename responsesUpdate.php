<?php
    require 'adminConfig.php';

    $responseId = $_POST["responseId"]; 
    $tickId = $_POST["ticketid"];
    $fname = $_POST["fullName"];
    $pnum = $_POST["phone"];
    $mail = $_POST["email"];
    $resp = $_POST["response"];

    if(empty($responseId) || empty($tickId) || empty($fname) || empty($pnum) || empty($mail) || empty($resp)){
        echo "All fields are required!";
    } else {
        
        $sql = "UPDATE responses SET Ticket_ID = '$tickId', Name = '$fname', Phone = '$pnum', Email = '$mail', Response = '$resp' WHERE Response_ID = '$responseId'";

        if($con->query($sql)){
            echo "Updated successfully!";
            echo "<script>alert('Updated successfully!'); window.location.href='admin.php';</script>"; 
        } else {
            echo "Failed to update!";
            echo "<script>alert('Failed to update!');</script>";
        }
    }
?>
