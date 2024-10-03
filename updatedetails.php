<?php
include ("config.php");

if(isset($_POST['update']) )
{
    $id = $_POST['User_Id'];
    $username = $_POST['username'];
    $fName = $_POST['first_name'];
    $lName = $_POST['last_name'];
    $address = $_POST['address'];
    $cNo = $_POST['phone_number'];
    $email = $_POST['email'];

    $sql = "UPDATE user_details SET username='$username', first_name='$fName',last_name='$lName', address ='$address' ,email='$email',phone_number='$cNo' WHERE User_Id = '$id'";    
    $sql1 = "UPDATE user_signin SET username='$username',email='$email' WHERE User_Id = '$id'";

    $result = $conn->query($sql);
    $result2 = $conn->query($sql1);

    if($result === TRUE AND $result2 === TRUE)    
    {
        header("location:useraccount.php");
    }
    else{
        echo ("meka wada nh");
    }

}else{ echo ("meka wada nh2");}

?>