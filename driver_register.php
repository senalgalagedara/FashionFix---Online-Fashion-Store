<?php
include('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionFix-Driver_register Form</title>
    <link rel="stylesheet" href="src/css/driver_form.css">
    <link rel="stylesheet" href="src/css/style.css">
    <script src="src/js/driver_register.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

</head>
<body>

    <h1>Welcome to FashionFix</h1>
    <form action="submitDdetailes.php" method="post">
    <h3>Personal information</h3>
        <fieldset class="p.info">
            
            <div class="p.info" id="Fname">
                <label for="fname">First Name</label>
                <input type="text" name="fname" id="fname" placeholder="First name" >
            </div>

        <div class="p.info" id="Lname">
            <label for="lname">Last Name</label>
            <input type="text" name="lname" id="lname" placeholder="Last name" >
        </div>

        <div class="p.info" id="Password">
            <label for="Password">Password</label>
            <input type="password" name="Password" id="Password" >
        </div>  
        
        <div class="p.info" id="cPassword">
            <label for="CPassword">Confirm Password</label>
            <input type="password" name="CPassword" id="CPassword" >
        </div>  
        
        <div class="p.info" id="age">
            <label for="age">Age</label>
            <input type="text" name="Age" id="age" >
        </div>
        
        <div class="p.info" id="Adress">
            <label for="adress">Adress</label>
            <textarea name="adress" id="adress" cols="20" rows="5"></textarea>
        </div>

        <div class="p.info" id="num"></div>
            <label for="No">Contract number</label>
            <input type="tel" name="contNo" id="contNo" >
        </div>

        <div class="p.info" id="email"></div>
            <label for="Email">Email</label>
            <input type="email" name="Email" id="Email" >
        </div>

        <h3>Driving Information</h3>
        </fieldset>
        <fieldset class="D.info">
            

            <div class="D.info" id="Lno">
                <label for="lno">Valid Driving Licence Number</label>
                <input type="text" name="licenceNo" id="licenceNo" >
            </div>

        </fieldset>
        <h3>Bank Details</h3>
        <fieldset class="B.info">
            
            
            <div class="B.info" id="Account_No">
                <label for="acc_no">Account Number</label>
                <input type="text" name="acc_no" id="acc_no" >
            </div>

            <div class="B.info" id="Account_Name"></div>
                <label for="acc_name">Account Name</label>
                <input type="text" name="acc_name" id="acc_name" >
            </div>

            <div class="B.info" id="Bname"></div>
                <label for="bname">Bank name</label>
                <input type="text" name="bname" id="bname" >
            </div>
        </fieldset>   

        <div class="submit-button">
            <a href="submitdriverdetail.php"><input type="submit" value="Submit" id="Sbutton"></a>
        </div>
    </form>

</body>
</html>