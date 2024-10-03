<?php
include("config.php");

if(isset($_POST['addproduct'])){
    $colour = $_POST['colour'];
    $size = $_POST['size'];
    $quentity = $_POST['quentity'];
    $price = $_POST['price'];

    $sql = "INSERT INTO order_details(product_id,colour,size,quentity,price) VALUES ('','$colour','$size','$quentity','$price')";

    $result = $conn->query($sql);

    if($result === TRUE)
    {
        header("location:index.php");
    }
    else{
        die(mysqli_error($conn));
    }
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Hustle Men's Short Sleeve Over Size Casual Tee - FASHION HUB</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

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
include("src/header.html");

?>

<section class="product" style="margin-top: 50px;">
    <div class="main">
        <div class="productimg">
                <img src="img/men/product1.webp">
        </div>

        <form class="productbuy" action="" method="post">
            <p class="productname">Hustle Men's Short Sleeve Over Size Casual Tee
                <input type="text" name="product_id"  value="101" disabled></p>
            <p class="brandname">Hustle</p>

            <hr class="line">

            <p class="productprice">
                <span class="text">Colour : </span></p>
                <input class="color" name="colour" value="pink">
                
            <p class="productprice"><span class="text">Size : </span></p>
            <div class="sizebtn">
            <input type="radio" class="size" name="size" value="small">S</input>
            <input  type="radio" class="size" name="size" value="mediam">M</input>
            <input  type="radio" class="size" name="size" value="large">L</input> 
            </div>
            <p class="productprice">
                <span class="text">Price : </span>
                <input type="number" name="price" value="Rs.2350.00" disabled>
            </p>
            <p class="productprice">
                <span class="text">Quantity : </span>
                <input type="number" name="quentity" class="Quantity">
            </p>
            <button class="btn" name="addproduct" >
                <a href="orderdetails.php">Add to cart</a>
            </button>
        </form>
        <div>
            
        </div>
    </div>
    <div class="productdetails" >
        <p class="description">Description</p>
        <br><hr>
        <span class="text">FABRIC - Heavy Jersy </span>
        <hr><br><hr>
        <span class="text">FOT - Related</span>
        <hr><br><hr>
        <span class="text">Neck - Crew</span>
        <hr>
    </div>

</section>


<hr> 
<?php
include("src/footer.html");

?>
    
</body>