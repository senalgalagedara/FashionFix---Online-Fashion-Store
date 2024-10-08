<?php
include('config.php');

if (isset($_GET['id'])) {
    $driver_id = $_GET['id'];

    $sql = "SELECT * FROM driver WHERE driver_ID = '$driver_id'";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "No record found for the given driver ID.";
        exit;
    }
} else {
    echo "Driver ID is missing.";
    exit;
}


if (isset($_POST['update'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $Npassword = $_POST['Npassword'];  
    $age = $_POST['Age'];
    $address = $_POST['adress'];
    $contNO = $_POST['contNo'];
    $email = $_POST['Email'];
    $acc_no = $_POST['acc_no'];
    $acc_name = $_POST['acc_name'];
    $bname = $_POST['bname'];


    $sql = "UPDATE driver SET
                fname = '$fname',
                lname = '$lname',
                Npassword = '$Npassword',
                Age = '$age',
                adress = '$address',
                contNo = '$contNO',
                Email = '$email',
                acc_no = '$acc_no',
                acc_name = '$acc_name',
                bname = '$bname'
            WHERE driver_ID = '$driver_id'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('Record Updated Successfully');
        window.location.href = 'driver_account.php';</script>";
    } else {
        echo "<script>alert('Error updating record');</script>";
    }
}

mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Driver Details - FashionFix</title>
    <link rel="stylesheet" href="src/css/driver_form.css">
</head>
<body>

<form action="" method="POST">
    <h3>Update Personal Information</h3>

    <label for="fname">First Name:</label>
    <input type="text" name="fname" id="fname" value="<?php echo $row['fname']; ?>" >

    <label for="lname">Last Name:</label>
    <input type="text" name="lname" id="lname" value="<?php echo $row['lname']; ?>">

    <label for="Password">Password:</label>
    <input type="password" name="Npassword" id="Password" value="<?php echo $row['Npassword']; ?>" >

    <label for="Age">Age:</label>
    <input type="number" name="Age" id="Age" value="<?php echo $row['Age']; ?>" >

    <label for="adress">Address:</label>
    <textarea name="adress" id="adress" cols="20" rows="5" ><?php echo $row['adress']; ?></textarea>

    <label for="contNo">Contract Number:</label>
    <input type="tel" name="contNo" id="contNo" value="<?php echo $row['contNo']; ?>" >

    <label for="Email">Email:</label>
    <input type="email" name="Email" id="Email" value="<?php echo $row['Email']; ?>" >

    <h3>Update Bank Details</h3>

    <label for="acc_no">Bank Account Number:</label>
    <input type="text" name="acc_no" id="acc_no" value="<?php echo $row['acc_no']; ?>" >

    <label for="acc_name">Bank Account Username:</label>
    <input type="text" name="acc_name" id="acc_name" value="<?php echo $row['acc_name']; ?>" >

    <label for="bname">Bank Name:</label>
    <input type="text" name="bname" id="bname" value="<?php echo $row['bname']; ?>" >

    <input type="submit" value="Update" name="update" id="sub">
</form>

<!-- <script>
    var sub = document.getElementById("sub");
    var Changeage = document.getElementById("Age").value;
    
    sub.addEventListener("click", checkage);

    function checkage(event)
    {
        if (Changeage < 18){
            alert("Please Input value over 18");
            event.preventDefault();
        }
    }
</script> -->
</body>
</html>
