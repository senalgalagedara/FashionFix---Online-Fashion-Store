<?php 
    require 'adminConfig.php';
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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>
<body>
<?php 
 include("src/adminHeader.html")
?>
  <div class="hhh">
        <div class="pannel">
            <div class="adminimg">
                <img src="src/img/admin.png" alt="admin">
           </div>
        </div>
        <div class = "fff"> 
                <form method = "post" action="responsesDelete.php">
                            Ticket ID: <br />
                            <input type="text" name="ticketid" placeholder="ticket ID" id=tid required><br> <br>
                            Name: <br />
                            <input type="text" name="fullName" placeholder="Full Name" id="fname" required><br /><br />

                            <input type="submit" value="Delete">
                            
                </form>
                        
        </div>
    </div>
<?php

  include("src/adminFooter.html")

?>
    
    
</body>
</html>