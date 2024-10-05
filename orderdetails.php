<?php
include("config.php");
session_start(); 

if(!isset($_SESSION)){
    echo "Session has not been started!";
    exit();
}

if(isset($_SESSION['User_Id'])){
    $sql = "SELECT * FROM shipping_details WHERE User_Id =?;";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, 's', $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    $row = mysqli_fetch_assoc($result);

    $email = $_SESSION['email'];
    $id = $_SESSION['User_Id'];

    echo "<p style='color:black;font-size:16px; margin:0px; '> You're logged in as $email</p>";
} else {

}
?>
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
<div>
        <div class="header">
            <div class="headerbox">
                <a href="index.php"><img src="src/logo1.png" alt="fashionfix logo" class="logoimg"></a></div>
            <div class="searchbox" style="cursor: pointer;">
                <span class="material-symbols-outlined">
                search
                </span>
                <input type="text" name="searchbox" id="" class="Stext" placeholder="Search Products...">
             </div>
            <div class="headerboxs">
                <span class="material-symbols-outlined shape" >
                    favorite
                </span>
                <span class="material-symbols-outlined shape">
                    shopping_cart
                </span>
                <div class="signin">
                    <a href="signin.php" class="signfont">Sign Up</a>
                </div>  
                
            </div>
        </div>
    
        <nav>
            <ol class="nav">
                <a href="index.php" class="nostyle"><li class="nostyle">HOME</li></a>
                <a href="" class="nostyle" style="display: block;"><li class="nostyle">MEN</li></a>
                <a href="" class="nostyle"><li class="nostyle">WOMEN</li></a>
                <a href="" class="nostyle"><li class="nostyle">KIDS</li></a>
                <a href="" class="nostyle"><li class="nostyle">HOME & LIVING</li></a>
                <a href="" class="nostyle"><li class="nostyle">CONTACT US</li></a>
                <a href="" class="nostyle"><li class="nostyle">NEED HELP?</li></a>
            </ol>
            <!--<div class="navbox" style="display: none;">
                <div class="nostyle">
                    <img src="src/.jpg" width="90px" height="200px" style="padding: 20px;" alt="">
                    <ul style="width: 30%;">
                        <li class="innernavCap">Clothing</li>
                        <li class="innernav">T Shirts</li>
                        <li class="innernav">Hoodies</li>
                        <li class="innernav">Casual Pants</li>
                        <li class="innernav">Shorts</li>
                        <li class="innernav">Formal Shirts</li>
                    </ul>
                    <ul style="width: 30%;">
                        <li class="innernavCap">Accessories</li>
                        <li class="innernav">Hats & Caps</li>
                        <li class="innernav">Watch</li>
                        <li class="innernav">Belt</li>
                        <li class="innernav">Wallet</li>
                        <li class="innernav">Footwear</li>
                    </ul>
                </div>-->
            </div>
        </nav>
</div>

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