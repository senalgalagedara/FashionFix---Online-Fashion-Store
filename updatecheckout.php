<?php
include ("config.php");

if(isset($_POST['update']) )
{
    $id = $_POST['User_Id'];
    $fName = $_POST['first_name'];
    $lName = $_POST['last_name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $district = $_POST['district'];
    $country = $_POST['country'];

    $sql = "UPDATE  shipping_details SET 
    first_name='$fName',
    last_name= '$lName',
    address ='$address',
    city = '$city',
    district='$district',
    country = '$country' 
     
     WHERE User_Id = '$id'";
    
 

    $result = $conn->query($sql);


    if($result === TRUE)    
    {
        header("location:checkout.php");
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