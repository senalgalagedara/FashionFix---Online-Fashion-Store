<?php
include ('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionFix-Orders</title>
    
    <link rel="stylesheet" href="src/css/driveraccount.css">
    <link rel="stylesheet" href="src/css/driver.css">
    <link rel="stylesheet" href="src/css/orderdetails.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
     
</head>

<body>
    <?php
    include ("src/header_driver.html");
    ?>

    <form action="orderinsert.php" method="post">
    <button id="reresh" name="rerresh">Refresh</button>

</form>

    <div>
        <table>
            <tr>
            <th>Order ID</th>
            <th>Custormer Name</th>
            <th>Adress</th>
            <th>Email</th>
            <th></th>
            <th></th>
            </tr>
            
            <?php
            $sql_order = "SELECT * FROM orderdetails";
            $result_order = $conn -> query($sql_order);
            
            if ($result_order->num_rows > 0){
                if ($row = $result_order->fetch_assoc()){
                    echo "<tr><td>".$row["user_Id"]."</td><td>".$row["First_name"]." " .$row["Last_name"]."</td><td>".$row["Adress"]." ".$row["City"]." ".$row["District"]."</td><td>".$row["Email"]."</td>";

                    echo "<td><button><a href='''>Accept</a></button></td>";

                    echo "<td><a href='deleteOrderdetails.php?id=" . $row['user_Id'] . "'>delete</a></td></tr>";


                }}?>
        </table>
    </div>
    

<?php
include("src/footer_driver.html");
?>
</body>
</html>