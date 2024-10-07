<?php 
    require 'adminConfig.php';

    // Get the Response_ID from the URL
    $responseId = $_GET['id'];

    // Fetch data from the database using Response_ID
    $query = "SELECT * FROM responses WHERE Response_ID = '$responseId'";
    $result = $con->query($query);

    // Check if the response exists
    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        $ticketId = $row['Ticket_ID'];  // Fetch the Ticket ID as well
        $fname = $row['Name'];
        $pnum = $row['Phone'];
        $mail = $row['Email'];
        $resp = $row['Response'];
    } else {
        echo "Response not found!";
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionFix</title>
    <link rel="stylesheet" href="src/css/admin777.css">
    <link rel="stylesheet" href="src/css/cm.css">
    <script src="src/js/script.js"></script>
    <script src="src/js/adminComplaintsManaging.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
<?php 
 include("src/adminHeader.html");
?>
<div class="hhh">
    <div class="pannel">
        <div class="adminimg">
            <img src="src/img/admin.png" alt="admin">
        </div>
    </div>
    <div class="fff">
        <!-- Display fetched details in the form for editing -->
        <form method="post" action="responsesUpdate.php" onsubmit="return validation()">
            <input type="hidden" name="responseId" value="<?php echo $responseId; ?>" /> <!-- Hidden field for Response_ID -->
            
            Ticket ID: <br />
            <input type="text" name="ticketid" value="<?php echo $ticketId; ?>" id="tid" readonly><br><br>
            
            Name: <br />
            <input type="text" name="fullName" value="<?php echo $fname; ?>" id="fname" required><br /><br />
            
            Phone: <br />
            <input type="text" name="phone" value="<?php echo $pnum; ?>" id="pnumber" required><br /><br />
            
            E-mail: <br />
            <input type="email" name="email" value="<?php echo $mail; ?>" id="mail" required><br /><br />
            
            Response: <br />
            <textarea cols="50" rows="5" name="response" id="comp"><?php echo $resp; ?></textarea><br /><br />
            
            <input type="submit" value="Update">
        </form>
    </div>
</div>

<?php
include("src/adminFooter.html");
?>
</body>
</html>
