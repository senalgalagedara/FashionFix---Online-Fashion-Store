
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details - FashionFix</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,800;1,800&family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Silkscreen&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap" rel="stylesheet">

    <link rel='stylesheet' type='text/css' media='screen' href='src/css/product.css'>
    <link rel="stylesheet" href="src/css/style.css">
    <script src='main.js'></script>
</head>
<body>
<?php
include("src/header.php");

?>

<h1>
    My Shopping Cart
</h1>


    <?php
include("config.php");

$userId = $_SESSION['User_Id'];

$sql = "
    SELECT * FROM order_details;
";

$result = mysqli_query($conn, $sql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['product_id'];
        $colour = $row['colour'];
        $size = $row['size'];
        $quentity = $row['quentity'];
        $price = $row['price'];

        $total = $price*$quentity;
        echo "
        <form action='deleteproduct.php' method='post'>
            <table>
    <tr>
        <th>Product</th>
        <th>Price</th>
        <th>Size</th>
        <th>Quantity</th>
        <th>Total</th>
        <th>Delete</th>
    </tr>
    <tr>
        <td><input type='text' name='product_id' value='$id' readonly></td>
        <td>$price</td>
        <td>$size</td>
        <td>$quentity</td>
        <td>$total</td>

        <td><button type='submit' class='submitbtn' name='removeProduct'>detete</button></td>
    </tr>
            </table>
        </form>";
    }
} else {
    echo "Error fetching details.";
}
?>
</table>

<h3>Sub total: </h3>

<button type="submit"><a href="checkout.php">PROCEED TO CHECKOUT</a></button>


    <?php
    include("src/footer.html");
    ?>
</body>
</html>