<?php
include("config.php");
session_start(); 

if(!isset($_SESSION)){
    echo "Session has not been started!";
    exit();
}

if(isset($_SESSION['email'])){
    $sql = "SELECT * FROM user_signin WHERE email =?;";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, 's', $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    $row = mysqli_fetch_assoc($result);

    $email = $_SESSION['email'];
    $id = $_SESSION['User_Id'];

} else {

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="src/css/stylen.css">
    <link rel="stylesheet" href="src/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

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

    <div class="box1" style="margin-top: 0px;">
        <div class="box2">
            <div class="boxlg">
                <h3>Shipping Address</h3>
                <p>Fill the following fileds according to where the order to be delivered</p>
                <?php
include("config.php");

$userId = $_SESSION['User_Id'];
$sql = "
    SELECT shipping_details.User_Id, shipping_details.first_name, shipping_details.last_name, shipping_details.address, 
           shipping_details.city, shipping_details.district, shipping_details.country
    FROM shipping_details
    INNER JOIN user_details ON shipping_details.User_Id = user_details.User_Id
    WHERE shipping_details.User_Id = '$userId';
";


$result = mysqli_query($conn, $sql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['User_Id'];
        $fName = $row['first_name'];
        $lName = $row['last_name'];
        $address = $row['address'];
        $city = $row['city'];
        $district = $row['district'];
        $country = $row['country'];

 echo "
       
                <form action = 'updatecheckout.php' method = 'post'>
                    <div >
                      UserID  <input type='text' class='textbox2' id='' name='User_Id' value='$id' readonly> 
                      First Name   <input type='text' class='textbox2' id='' name='first_name'  placeholder=' $fName'>
                      Last Name  <input type='text' class='textbox2' name='last_name' id='' placeholder='$lName'>
                      Address  <input type='text' class='textbox2' name='address' id='' placeholder='$address'>
                    </div>
                    <div>
                      City  <input type='text' class='textbox2' name='city' id='' placeholder='$city'> 
                      District  <input type='text' class='textbox2' name='district' id='' placeholder='$district'>
                      Country  <input type='text' class='textbox2' name='country' id='' placeholder='$country'>
                        
                    </div>
                   <button type='submit' name='update'>Update</button>

                </form>

                <div >
        
</div>
            ";}
        } else {
            echo "meka wada nh";
        }
?>                

    
            </div>
        </div>
        <?php
include("config.php");

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
        <form action='' method='get'>
            <table>
    <tr>
        <th>Product</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Total</th>
    </tr>
    <tr>
        <th>$id</td>
        <th>$price</td>
        <th>$quentity</td>
        <th>$total</td>
    </tr>
            </table>
        </form>";
    }
} else {
    echo "Error fetching details.";
}
?>
        
    </div>
    <div class="box4">
        <button class="retcart" >
            <a href="orderdetails.php">Return To Cart</a>
        </button>
        <button class="retcart2" >
            <a href="payment.php">Continue To Shipping and Payment</a>
        </button>

    </div>
    


    <?php
    include("src/footer.html");

?>
</body>
</html>