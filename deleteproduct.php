<?php
include ("config.php");

if(isset($_POST['removeProduct'])){
    $id = $_POST['product_id'];

    $sql = "DELETE FROM order_details WHERE product_id = '$id'";

    $result = $conn->query($sql);


    if($result === TRUE){
        header("location:index.php");
        exit();
    }
    else{
echo "<script>
alert('Product didnt added succesfully');
      </script>
    ";;    
}
};
?>
