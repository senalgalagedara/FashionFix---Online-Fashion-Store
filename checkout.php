
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - FashionFix</title>
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


    <div class="box1" style="margin-top: 0px;">
        <div class="box2">
            <div class="boxlg">
                <h2 class="topic">Shipping Address</h2>
                <p class="para" style="text-align: center; font-size:16px; margin-top:30px;">Fill the following fileds according to where the order to be delivered</p>
          <div style=' margin:auto; width:100% display:flex;'>      <?php
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
<div style='width:90%; margin:auto;  display:block; padding:10px 20px; '>      
                <form action = 'updatecheckout.php' method = 'post' >
                <table style='width:60%; margin:auto; padding: 10px 50px;border-radius: 10px;  background-color:#ffddb0;  display:block; 
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'>
                <tr >
                <td class= 'accdetails' style='font-family: 'Fredoka', sans-serif;'>
UserID 
                 </td>
                 <td>
<input type='text' class='accint none' id='' name='User_Id' value='$id' readonly > 
                 </td>
                 </tr>
                 <tr>
                 <td class= 'accdetails'>
                      First Name   
                 </td>
                 <td>
                 <input type='text' class='accint ' id='' name='first_name'  placeholder=' $fName'>
                 </td>
                 </tr>
                 <tr>
                 <td class= 'accdetails'>    
                      Last Name  
                </td>  
                <td> 
                <input type='text' class='accint' name='last_name' id='' placeholder='$lName'>
                </td>
                </tr>
                <tr>
                <td class= 'accdetails'>
                      Address 
                </td>
                <td>
                 <textarea type='text' class='accint' name='address' id='' placeholder='$address'></textarea>
                </td>
</td>                 </tr> <tr>    
<td class= 'accdetails'> 
                      City
                      </td> 
                      <td> 
                      <input type='text' class='accint' name='city' id='' placeholder='$city'> 
     </td>
     </tr>
     <tr>
     <td class= 'accdetails'> 
                      District  
    </td>
    <td>
    <input type='text' class='accint' name='district' id='' placeholder='$district'>
    </td>
    </tr>
    <tr>
    <td class= 'accdetails'> 
    Country 
    </td>
    <td>
    <input type='text' class='accint' name='country' id='' placeholder='$country'>
    </td>  
    </tr>  
    <tr>
    <td>
    <button type='submit' class='updatebtnaa' name='update'>Update</button>
    </td>
    <td>
    </td>
    </tr>
                    </table>

                   

                </form>

<div >
        
</div>
            </div> ";}
        } else {
            echo "meka wada nh";
        }
?>                

    
            </div>
        </div>


        <table style='width:50%; margin:20px auto; font-size:20px;    font-family: "Fredoka", sans-serif;'>
    <tr style='background-color:#ffaf49;'>
        <th>Product</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Total</th>
    </tr>
    </table>

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
<table style='width:50%; padding-left: 50px; text-align:center; margin:auto; font-family: 'Poppins', sans-serif !important; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'>
    <tr style='font-family: 'Poppins', sans-serif !important; width:100%;' >
        <th style='text-align:center; padding-left: 10px; font-family: 'Poppins', sans-serif !important;'>$id</td>
        <th style='text-align:center; padding-left: 40px; font-family: 'Poppins', sans-serif !important;'>$price</td>
        <th style='text-align:center; padding-left: 30px; font-family: 'Poppins', sans-serif !important;'>$quentity</td>
        <th style='text-align:center; margin-left: 30px; font-family: 'Poppins', sans-serif !important;'>Rs.$total</td>
    </tr>
            </table>
        </form>";
    }
} else {
    echo "Error fetching details.";
}
?>
        </div>   
    </div>
    <div class="box4" style="margin-bottom: 50px;">
        <button class="retcart" style="    padding: 10px;
    left: 30px ;
    background-color: #29B6F6;
    position: absolute;
    border: none;
    font-family: 'Fredoka', sans-serif;
    font-weight: 400 !important;" >
            <a href="orderdetails.php">Return To Cart</a>
        </button>
        <button class="retcart2" style="    padding: 10px;
    right: 30px ;
    margin-bottom:10px;
    background-color: #ff9e22;
    position: absolute;
    border: none;
    font-family: 'Fredoka', sans-serif;
    font-weight: 400 !important;">
            <a href="payment.php">Continue To Shipping and Payment</a>
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