<?php
include ("config.php");

if(isset($_POST['update']) )
{   
    $id = $_POST['User_Id'];
    $cardNo = $_POST['card_number'];
    $cname = $_POST['card_name'];
    $exdate = $_POST['exp_date'];
    $exmonth = $_POST['exp_month'];
    $csc = $_POST['security_no'];
    $email = $_POST['email'];

    $sql = "UPDATE payment_details SET 
    card_number='$cardNo',
    card_name= '$cname',
    exp_date ='$exdate',
    exp_month = '$exmonth',
    security_no='$csc'
    WHERE User_Id = '$id'";

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