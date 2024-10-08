<?php
include ("config.php");


$sql= "TRUNCATE TABLE order_details;";

$result = $conn->query($sql);

if($result === TRUE)    
{
    header("location: index.php");
}
else{
    echo "<script>
    alert('Order is not placed');
          </script>
        ";
}


?>