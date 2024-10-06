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

    echo "<p style='color:black;font-size:16px; margin:0px; '> You're logged in as $email</p>";
} else {

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment - FashionFix</title>
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
<h3>Add payment details</h3>
<?php
include("config.php");

$userId = $_SESSION['User_Id']; 

$sql = "
    SELECT payment_details.User_Id, payment_details.card_number, payment_details.card_name, 
           payment_details.exp_date, payment_details.exp_month, payment_details.security_no, 
           payment_details.email
    FROM payment_details
    INNER JOIN user_details ON payment_details.User_Id = user_details.User_Id
    WHERE payment_details.User_Id = $userId;
";

$result = mysqli_query($conn, $sql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['User_Id'];
        $cardNo = $row['card_number'];
        $cname = $row['card_name'];
        $exdate = $row['exp_date'];
        $exmonth = $row['exp_month'];
        $csc = $row['security_no'];
        $email = $row['email'];


        echo "
<form action='paymentupdate.php' method='post'>
<h2>Choose your payment method</h2>

<p>Card Number</p>
<input type='number' name='User_Id'  value='$id' readonly>
<input type='number' name='card_number'  placeholder='$cardNo'>

<p>Expire Date</p>
<input type='number' name='exp_date'  placeholder='$exdate'>
<p>Expire Month</p>
<input type='number' name='exp_month'  placeholder='$exmonth'>


<p>Name on card</p>
<input type='text' name='card_name'  placeholder='$cname'>

<p>Card security code</p>
<input type='number' name='security_no'  placeholder='$csc'>

<input type='email' name='email'  placeholder='$email'>
<button type='submit' name='update'>Update</button>
</form>
    ";}
} else {
    echo "Error fetching details.";
}
?>

<a href="checkout.php"><button>back to checkout</button></a>

<?php
    include("src/footer.html");
    ?>

</body>
</html>