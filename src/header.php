<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionFix</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="src/js/script.js"></script>

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
            <div class="headerbox" style="width: 20%;">
                
                <a href="index.php"><img src="src/logo1.png" alt="fashionfix logo" class="logoimg" style="    width: 70%; 
"></a>
            </div>
            <div class="searchbox" style="cursor: pointer;">
                <span class="material-symbols-outlined">
                search
                </span>
                <input type="text" name="searchbox" id="input-box" class="Stext" placeholder="Search Products...">
                <div class="result-box"></div>
                <script src="js/siteindex.js"></script>
             </div>
            <div class="headerboxs" style="width: 40%;">
                <span class="material-symbols-outlined shape" >
                    favorite
                </span>
                <a href="orderdetails.php"><span class="material-symbols-outlined shape">
                    shopping_cart
                </span></a>
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
                <a href="index.php" class="nostyle"><li class="nostyle">MEN</li></a>
                <a href="" class="nostyle" style="display: block;"><li class="nostyle">WOMEN</li></a>
                <a href="" class="nostyle"><li class="nostyle">KIDS</li></a>
                <a href="faq.php" class="nostyle"><li class="nostyle">FAQ</li></a>
                <a href="aboutUs.php" class="nostyle"><li class="nostyle">AboutUs</li></a>
                <a href="contactUs.php" class="nostyle"><li class="nostyle">CONTACT US</li></a>
                <a href="needhelp.php" class="nostyle"><li class="nostyle">NEED HELP?</li></a>
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
    <hr>

    <header>
        <container class="slide">
            <img src="src/img/.jpg" alt="">
        </container>
        <container class="slide"></container>
        <container class="slide"></container>
        <container class="slide"></container>
        <container class="slide"></container>
    </header>


    
</body>
</html>