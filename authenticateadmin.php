<?php 

include("config.php");


if(isset($_POST['adminloginbtn'])){
    $email = $_POST['email'];
    $pass = $_POST['passwordd'];
    
    if(empty($email) || empty($pass)){
        echo "Enter valid details";
        exit();
    }

    if($email == "vindiya@gmail.com" AND $pass=="admin")
    {header("Location:admin.php");}

     if ($email == "yashodi@gmail.com" AND $pass =="admin")
    {
        header("Location:DeliveryDetails.php");
    }
} else {
    header("Location: signin.php");
    exit();
}
?>
