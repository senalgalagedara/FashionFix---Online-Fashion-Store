<?php
include ("config.php");

if(isset($_POST['update']) )
{
    $fName = $_POST['card_number'];
    $lName = $_POST['card_name'];
    $address = $_POST['exp_date'];
    $city = $_POST['exp_month'];
    $district = $_POST['security_no'];
    $email = $_POST['email'];

    $sql = "UPDATE payment_details SET card_number='$fName',card_name= '$lName',exp_date ='$address', exp_month = '$city',security_no='$district' WHERE email = '$email'";

    $result = $conn->query($sql);


    if($result === TRUE)    
    {
        header ("location:payment.php");
    }
    else{
        echo ("meka wada nh");
    }

}else{ echo ("meka wada nh2");}

?>