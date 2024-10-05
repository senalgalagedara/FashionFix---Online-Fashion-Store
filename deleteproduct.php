<?php
include ("config.php");

if(isset($_POST['removeProduct'])){
    $id = $_POST['product_id'];

    $sql = "DELETE FROM order_details WHERE product_id = '$id'";

    $result = $conn->query($sql);


    if($result === TRUE){
        header("location:orderdetails.php");
        exit();
    }
    else{
echo("mwka wada nhh 2 pw");    
}
};
?>
