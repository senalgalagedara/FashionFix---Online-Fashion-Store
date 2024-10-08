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
    $sql3 = "UPDATE  shipping_details SET first_name='$fName',last_name= '$lName',address ='$address'WHERE User_Id = '$id'";
    $sql4 = "UPDATE  payment_details SET email='$email' WHERE User_Id = '$id'";

    $result = $conn->query($sql);
    $result2 = $conn->query($sql1);
    $result3 = $conn->query($sql3);
    $result4 = $conn->query($sql4);



    if($result === TRUE AND $result2 === TRUE AND $result3 === TRUE AND $result4 === TRUE)    
    {
        header("location:useraccount.php");
    }
    else{
        echo "<script>
    alert('details not complete');
          </script>
        ";
    }

}else{ echo "<script>
    alert('details not complete');
          </script>
        ";}

?>