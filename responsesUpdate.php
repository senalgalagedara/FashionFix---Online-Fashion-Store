<?php
    require 'adminConfig.php';

    // Fetching values from the POST request
    $responseId = $_POST["responseId"]; // Now using Response_ID to identify the record
    $tickId = $_POST["ticketid"];
    $fname = $_POST["fullName"];
    $pnum = $_POST["phone"];
    $mail = $_POST["email"];
    $resp = $_POST["response"];

    // Check if any field is empty
    if(empty($responseId) || empty($tickId) || empty($fname) || empty($pnum) || empty($mail) || empty($resp)){
        echo "All fields are required!";
    } else {
        // Update the database with the new values based on Response_ID
        $sql = "UPDATE responses SET Ticket_ID = '$tickId', Name = '$fname', Phone = '$pnum', Email = '$mail', Response = '$resp' WHERE Response_ID = '$responseId'";

        // Execute the query and check if the update was successful
        if($con->query($sql)){
            echo "Updated successfully!";
            echo "<script>alert('Updated successfully!'); window.location.href='admin.php';</script>"; // Redirect to another page
        } else {
            echo "Failed to update!";
            echo "<script>alert('Failed to update!');</script>";
        }
    }
?>
