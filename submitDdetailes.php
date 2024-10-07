<?php
include ('config.php');
?>

<?php

    $Fname = $_POST ["fname"];
    $Lname = $_POST ["lname"];
    $Npassword = $_POST ["Npassword"];
    $Age = $_POST ["Age"];
    $Adress = $_POST ["adress"];
    $Cno = $_POST ["contNo"];
    $email = $_POST ["Email"];
    $Licenceno = $_POST ["licenceNo"];
    $accountNo = $_POST ["acc_no"];
    $accountName = $_POST ["acc_name"];
    $Bname = $_POST ["bname"];

         
    $sql = "INSERT INTO driver (driver_ID , fname , lname , Npassword , Age , adress , contNo , Email , acc_no , acc_name , bname)
	VALUES ('' , '$Fname', '$Lname', '$Npassword' , '$Age' ,'$Adress' , '$Cno' , '$email' , '$accountNo' , '$accountName' , '$Bname')";

    if(mysqli_query($conn,$sql)){
        echo "<script>alert('Record inserted succesfully!')</script>";
        header ("Location: driver_account.php");
    }
    else{
        echo "<script>alert ('Insertation Fail !')</script>";
    }

    mysqli_close($conn);
?>