<?php
include("config.php");

if(isset($_POST['addproduct'])){

    $colour = $_POST['colour'];
    $size = $_POST['size'];
    $quentity = $_POST['quentity'];

    $sql = "INSERT INTO order_details(product_id,colour,size,quentity,price) VALUES ('2','$colour','$size','$quentity','4290.00')";

    $result = $conn->query($sql);

    if($result === TRUE)
    {
        header("location:orderdetails.php");
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
    <title>Andina Women's Office Dress - FASHION HUB</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,800;1,800&family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Silkscreen&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap" rel="stylesheet">

    <link rel='stylesheet' type='text/css' media='screen' href='src/css/product.css'>
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="src/css/style1.css">

    <script src='main.js'></script>
</head>
<body>
    <?php
include("src/header.php");

?>

<section class="product" style="margin-top: -35px; background-color:#FFF3E0;">
    <div class="main">
        <div class="productimg">
                <img src="img/women/women1.jpg" style="width: 400px;">
        </div>

        <form class="productbuy" action="" method="post">
            <p class="productname">Andina Women's Office Dress</p>
            <p class="brandname">Andina</p>

            <p class="productprice">
                <span class="text">Colour : </span></p>
                            <input type="checkbox" class="colorrr" name="colour" value="pink">
                
            <p class="productprice">
                <span class="text">Size : </span>
            </p>
            <div class="sizebtn">
                                    <input type="radio" class="size" name="size" value="small">Small</input><br>    
                                    <input  type="radio" class="size" name="size" value="mediam">Mediam</input><br> 
                                    <input  type="radio" class="size" name="size" value="large">Large</input> 
            </div>
            <p class="productprice">
                <span class="text">Price : <span class="price" style="color: black; font-size:18px;">Rs. 4290.00</span></span>
                                    
            </p>
            <p class="productprice">
                <span class="text">Quantity : </span>
                                    <input type="number" name="quentity" class="Quantity">
            </p>
            <button class="btn" name="addproduct" >
                        Add to cart
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
        <hr>
    </div>

</section>


<?php
include("src/footer.html");

?>
    
</body>