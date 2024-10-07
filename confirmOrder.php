<?php
include ("config.php");


$sql= "TRUNCATE TABLE order_details;";

$result = $conn->query($sql);

if($result === TRUE)    
{
    header("location: index.php");
}
else{
    echo ("meka wada nh");
}


?>