<?php
    require 'adminConfig.php'
?>

<?php
    $fname = $_POST["fullName"];
    $pnum = $_POST["phone"];
    $mail = $_POST["email"];
    $comp = $_POST["complaint"];

    $sql = "INSERT INTO complaints VALUES ('', '$fname', '$pnum', '$mail', '$comp')";

    if($con->query($sql)){
        echo "<script>alert('Insert Successfull')</script>";
    }else{
        echo "Error".$con->error;
    }

$con->close();
?>

<?php
    include ("src/header.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Need Help?</title>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
        <link href="https://fonts.google.com/specimen/Poppins?query=poppins" rel="stylesheet">
       <!-- <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> -->
        <link rel="stylesheet" href="src/css/style.css">
        <link rel="stylesheet" href="src/css/needhelp.css">
        <script src="src/js/adminComplaintsManaging.js"></script>
    </head>

    <body>
        
        <div class = "div1">
            <h1>Need Help?</h1>
            <hr>
            <p style = "text-align: justify;">At FashionFix, we value your feedback, questions, and concerns. Whether you need assistance with an order, 
                have a question about our products, or simply want to say hello, we're here to help!</p>
                <br />
                <div class="div1-div">
                   <!-- <div class = "div1-div1">
                        <h2>Contact Information</h2>
                        <p>Here is our contact details</p>
                        <br />

                        <div class="icon">
                            <i class='bx bxs-phone-call' ></i>
                            <p class="headers" style = "margin-left: 20px;">Call: </p>
                            
                        </div>
                        <p class="para" style = "margin-left: 70px;">+94 865492105</p> <br />
                        
                        <div class="icon">
                             <i class='bx bx-envelope' ></i>
                             <p class="headers" style = "margin-left: 20px;">Email: </p>
                        </div>
                        <p class="para" style = "margin-left: 70px;">info@example.com</p> <br />
                        
                        <div class = "icon">
                            <i class='bx bxs-location-plus' ></i>
                            <p class="headers" style = "margin-left: 20px;">Address: </p> 
                        </div>
                        
                        <p class="para" style = "margin-left: 70px;">221 B/ Baker's Street, North London</p> <br />

                        <div>
                            <p>Follow Us: </p>
                            <a href="https://www.instagram.com/"><i class='bx bxl-instagram ax'></i></a>
                            <a href="https://www.facebook.com/"><i class='bx bxl-facebook-circle ax' ></i></a>
                            <a href="https://www.youtube.com/"><i class='bx bxl-youtube ax' ></i></a>

                        </div>  
                    
                    </div>  -->
                    <div class = "div1-div2">
                        <h2 style="text-align: center;">Complaint has sent!</h2>
                    </div>
            
                </div>
                
        </div> <br> <br> <br>
<?php

    include("src/footer.html")
?>
    </body>
</html>