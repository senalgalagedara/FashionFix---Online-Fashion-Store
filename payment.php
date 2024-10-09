
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
                <?php
include("config.php");
session_start(); 

if(!isset($_SESSION)){
    echo "<div class='login'>
                   <span class='material-symbols-outlined' style='font-size: 20px;margin: auto; border: 2px solid white; border-radius: 20px; text-align: center;'>
                    person
                    </span> 
                    <a href='login.php' style='margin: auto; font-family: 'Roboto Condensed', sans-serif !important; font-size: 15px; font-weight: 500; padding-right: 3px; color: white; text-align: center;'>Log In</a>
                </div>";
    exit();
}

else if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
    $id = $_SESSION['User_Id'];
    echo "<div class='login'>
                   <span class='material-symbols-outlined' style='font-size: 20px;margin: auto; border: 2px solid white; border-radius: 20px; text-align: center;'>
                    person
                    </span> 
                    <a href='useraccount.php' style='margin: auto; font-family: 'Roboto Condensed', sans-serif !important; font-size: 15px; font-weight: 500; padding-right: 3px; color: white; text-align: center;'>Welcome $email</a>
                </div>";
} else {
    echo "<div class='login'>
    <span class='material-symbols-outlined' style='font-size: 20px;margin: auto; border: 2px solid white; border-radius: 20px; text-align: center;'>
     person
     </span> 
     <a href='login.php' style='margin: auto; font-family: 'Roboto Condensed', sans-serif !important; font-size: 15px; font-weight: 500; padding-right: 3px; color: white; text-align: center;'>Log In</a>
 </div>"; 
}
?>
                
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
<h1 class="topic">Add payment details</h1>
<h3 class='topic'>Choose your payment method</h3>

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
<form action='paymentupdate.php' method='post' onsubmit = 'return validatecarddetails()'>
<table style='width:60%; margin:10px auto; padding: 10px 50px;border-radius: 10px;  background-color:#ffddb0;  display:block; 
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'>
<tr>
<td>
<p>Card Number</p>
</td>
<td>
<input type='number'  name='User_Id'  value='$id' readonly style='display:none;'>
<input type='number' class='accint' id='cardnum' name='card_number'  placeholder='$cardNo'>
</td>
</tr>

<tr>
<td>
<p>Expire Date</p>
</td>
<td>
<input type='number' class='accint' id='expdate' name='exp_date'  placeholder='$exdate'>
</td>
</tr>

<tr>
<td>
<p>Expire Month</p>
</td>
<td>
<input type='number' class='accint' id='expmonth' name='exp_month'  placeholder='$exmonth'>
</td>
</tr>

<tr>
<td>
<p>Name on card</p>
</td>
<td>
<input type='text' class='accint' name='card_name'  placeholder='$cname'>
</td>
</tr>

<tr>
<td>
<p>Card security code</p>
</td>
<td>
<input type='number' class='accint' id='csc' name='security_no'  placeholder='$csc'>
</td>
</tr>

<input type='email' name='email'  placeholder='$email' style='display:none;'>
<tr>
<td>
<button type='submit' class='updatebtnaa' name='update'>Update</button>
</td>
</tr>
</table>
<script>
function validatecarddetails()
{
    const expmonth = document.getElementById('expmonth').value;
    const csc = document.getElementById('csc').value;
  const expdate = document.getElementById('expdate').value;
  const cardnumber = document.getElementById('cardnum').value;

if (cardnumber.length < 16) 
{
alert('Card number must have 16 digits');
return false; 
}
if(expdate>31)
    {
    alert('Enter valid date');
    return false; 
    }
        if(expmonth>12)
        {
        alert('Enter valid month');
        return false;
        }

                if(csc.length>4)
                {
                alert('Enter valid number');
                return false; 
                }
  return true;
    }
</script>
</form>
    ";}
} else {
    echo "Error fetching details.";
}
?>

<div class="box4" style="margin-bottom: 50px;">
        <button class="retcart" style="    padding: 10px;
    left: 30px ;
    background-color: #29B6F6;
    position: absolute;
    border: none;
    font-family: 'Fredoka', sans-serif;
    font-weight: 400 !important;" >
            <a href="checkout.php">Return To Cart</a>
        </button>
        <button class="retcart2" style="    padding: 10px;
    right: 30px ;
    margin-bottom:10px;
    background-color: #ff9e22;
    position: absolute;
    border: none;
    font-family: 'Fredoka', sans-serif;
    font-weight: 400 !important;">
            <a href="confirmOrder.php" name="payment">Confirm Order</abs>
        </button>

    </div>
    
<footer>
        <div class="footerboxes">
            <div class="footerbox">
                <img src="src/logo1.png" width="50" height="50" alt="">
                <p class="para">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.?
                </p>
                <i style="font-size:24px; color: #000;" class="fa">&#xf16d;</i>
                <i style="font-size:24px; color: #000; margin-left: 10px;" class="fa">&#xf09a;</i>
            </div>
            <div class="footerbox">
                <ul>
                    <li class="footerlinkCAP"><a href="">Men</a></li>
                    <li class="footerlink"><a href="">T Shirt</li>
                    <li class="footerlink"><a href="">Trousers</li>
                    <li class="footerlink"><a href="">Shirt</li>
                </ul>
            </div>
            <div class="footerbox">
                <ul>
                    <li class="footerlinkCAP"><a href="">WOMEN</a></li>
                    <li class="footerlink"><a href="">Tshirt</a></li>
                    <li class="footerlink"><a href="">Jeans</a></li>
                    <li class="footerlink"><a href="">Dresses</a></li>
                </ul>
            </div>
            <div class="footerbox">
                <ul>
                    <li class="footerlinkCAP"><a href="">KIDS</a></li>
                    <li class="footerlink"><a href="">Tshirt</a></li>
                    <li class="footerlink"><a href="">Pants</a></li>
                    <li class="footerlink"><a href="">Toys</a></li>
                </ul>
            </div>
            <div class="footerbox">
                <ul>
                    <li class="footerlinkCAP"><a href="">HOME & LIVING</a></li>
                    <li class="footerlink"><a href="">Decor</a></li>
                    <li class="footerlink"><a href="">Dining</a></li>
                    <li class="footerlink"><a href="">Pillow</a></li>
                </ul>
            </div>
            <div class="footerbox">
                <ul>
                    <li class="footerlinkCAP"><a href="">CONTACT US</a></li>
                    <li class="footerlink">0714983657</li>
                    <li class="footerlink">ADDress</li>
                    <li class="footerlink">fashionfix@gmail.com</li>
                </ul>
            </div>
        </div>
    
        <hr style="margin: 0px; color: white;">
        <div style="display: flex; background-color: #ffaf49;">
            <div class="width60">Copyright  2024 FashionFix. All rights reserverd.</div>
           <hr>
            <div class="width40"> Terms & Condition | Privacy Policy</div>
    
        </div>
                
    </footer>
</body>
</html>