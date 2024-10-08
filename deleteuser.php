<?php
include ("config.php");

if(isset($_POST['delete'])){
    $id = $_POST['User_Id'];

    $sql = "DELETE FROM user_signin WHERE User_Id = '$id'";
    $sql2 = "DELETE FROM user_details WHERE User_Id = '$id'";
    $sql3 = "DELETE FROM shipping_details WHERE User_Id = '$id'";
    $sql4 = "DELETE FROM payment_details WHERE User_Id = '$id'";



    $result = $conn->query($sql);
    $result1 = $conn->query($sql2);
    $result2 = $conn->query($sql2);
    $result3 = $conn->query($sql2);



    if($result === TRUE AND $result1 === TRUE AND $result2 === TRUE AND $result3 === TRUE){
        session_start();
        session_destroy();
        header("location:index.php");
        exit();
    }
    else{
        echo "<script>
        alert('User id not deleted');
              </script>
            ";    
}
};
?>
