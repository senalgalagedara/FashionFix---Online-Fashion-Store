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
    <script src="src/js/driver_register.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

</head>
<body>

    <h1>Welcome to FashionFix</h1>
    <form action="submitDdetailes.php" method="post" id="driverForm">
    <h3>Personal information</h3>
        <fieldset class="p.info">
            
            <div class="p.info" id="Fname">
                <label for="fname">First Name</label>
                <input type="text" name="fname" id="fname" placeholder="First name" required>
            </div>

        <div class="p.info" id="Lname">
            <label for="lname">Last Name</label>
            <input type="text" name="lname" id="lname" placeholder="Last name" required>
        </div>

        <div class="p.info" id="Password">
        <label for="Password">Password</label>
        <input type="password" name="Npassword" id="p1" required>
    </div>  

    <div class="p.info" id="cPassword">
        <label for="CPassword">Confirm Password</label>
        <input type="password" name="CPassword" id="p2" required>
    </div> 
        
        <div class="p.info" id="age">
            <label for="age">Age</label>
            <input type="number" name="Age" id="age" required >
        </div>
        
        <div class="p.info" id="Adress">
            <label for="adress">Adress</label>
            <textarea required name="adress" id="adress" cols="20" rows="5"></textarea>
        </div>

        <div class="p.info" id="num"></div>
            <label for="No">Contract number</label>
            <input type="tel" name="contNo" id="contNo" pattern="07[0-9]{8}" placeholder="07XXXXXXXX"required>
        </div>

        <div class="p.info" id="email"></div>
            <label for="Email">Email</label>
            <input type="email" name="Email" id="Email" required>
        </div>

        <h3>Driving Information</h3>
        </fieldset>
        <fieldset class="D.info">
            

            <div class="D.info" id="Lno">
                <label for="lno">Valid Driving Licence Number</label>
                <input type="text" name="licenceNo" id="licenceNo" required>
            </div>

        </fieldset>
        <h3>Bank Details</h3>
        <fieldset class="B.info">
            
            
            <div class="B.info" id="Account_No">
                <label for="acc_no">Account Number</label>
                <input type="text" name="acc_no" id="acc_no" required>
            </div>

            <div class="B.info" id="Account_Name"></div>
                <label for="acc_name">Account Name</label>
                <input type="text" name="acc_name" id="acc_name" required>
            </div>

            <div class="B.info" id="Bname"></div>
                <label for="bname">Bank name</label>
                <input type="text" name="bname" id="bname" required>
            </div>
        </fieldset>   

        <div class="submit-button">
        <input type="submit" value="Submit" id="sbutton"></a>
        </div>
    </form>

<script>
document.getElementById("driverForm").addEventListener("submit", check);

function check(event) {
    event.preventDefault();

    var password = document.getElementById("p1").value;
    var confirmPassword = document.getElementById("p2").value;
    var age = parseInt(document.getElementById("age").value);
    var licenceNo = document.getElementById("licenceNo").value;
    var accountNo = document.getElementById("acc_no").value;
    
    if (password != confirmPassword) {
        alert("Passwords do not match. Please try again.");
        return false;
    }

    if ( age > 18) { 
        alert("Sorry, you must be at least 18 years old to proceed. Please verify your age and try again.");
        return false;
    }

    if (!licenceNo || !accountNo) {
        alert("Please ensure all required fields are filled.");
        return false;
    }

    alert("Your information was submitted successfully");
    document.getElementById("driverForm").submit();  
}


</script>


</body>
</html>