<?php
include ('config.php');
?>

<?php

if (isset($_POST['reresh'])){
    $sql_select = "SELECT User_Id, first_name, last_name, address, city, district, email FROM shipping_details";
    $result = $conn->query($sql_select);
    
    if ($result->num_rows > 0){
        while ($row = $result->fetch_assoc()){
            $User_Id = $row['User_Id'];
            $first_name = $row['first_name'];
            $last_name = $row['last_name'];
            $address = $row['address'];
            $city = $row['city'];
            $district = $row['district'];
            $email = $row['email'];
            
            $sql_check = "SELECT * FROM order_details WHERE user_Id = $User_Id";
            $result_check = $conn->query($sql_check);
    
            if (!$result_check) {
                echo "Error checking record: " . $conn->error . "<br>";
                continue; 
            }
    
            if ($result_check->num_rows == 0){
               
                $sql_insert = "INSERT INTO order_details (user_Id, First_name, Last_name, Adress, City, District, Email) VALUES ('$User_Id', '$first_name', '$last_name', '$address', '$city', '$district', '$email')";
    
                if ($conn->query($sql_insert) !== True){
                    echo "Error inserting record: ". $conn->error . "<br>";
                }
            }
            else{
                echo "Record for user ID $User_Id already exists...!<br>";
            }
            
        }
       
    }
    else {
        echo "No records found...!";
    }

    header("Location: Driver_Order.php");
    exit();
}
header("Location: Driver_Order.php");

?>