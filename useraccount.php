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
    <title>User Account  - FashionFix</title>
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>
<body style="background-image: url('img/userbg.jpg'); background-size:cover;;">
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
<div >
<h2 id="newarrivals" class="topic" style="margin-top: 40px;">Account Information</h2>
<table>
    <tr>
    <tbody>
    <?php
include("config.php");

$userId = $_SESSION['User_Id'];  

$sql = "
        SELECT user_signin.User_Id, user_signin.username, user_signin.email, 
            user_details.first_name, user_details.last_name, 
            user_details.address, user_details.phone_number
        FROM user_signin
        INNER JOIN user_details ON user_signin.User_Id = user_details.User_Id
        WHERE user_signin.User_Id = '$userId';
";

$result = mysqli_query($conn, $sql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['User_Id'];
        $username = $row['username'];
        $fName = $row['first_name'];
        $lName = $row['last_name'];
        $address = $row['address'];
        $cNo = $row['phone_number'];
        $email = $row['email'];

        echo "
        <form action='updatedetails.php' method='post'  style='height: 100vh;' onsubmit='return validateEmail()'>
            <table class='usertable'>
                <tr>
                    <th colspan='2'></th>
                </tr>
                <tr>
                    <td class= 'accdetails'>User Id</td>
                    <td ><input type='text' name='User_Id' value='$id' class='accint none' readonly></td>
                </tr>
                <tr>
                    <td class= 'accdetails'>Username</td>
                    <td><input type='text' name='username' class='accint ' value='$username'></td>
                </tr>
                <tr>
                    <td class= 'accdetails'>First Name</td>
                    <td><input type='text' name='first_name' class='accint ' value='$fName'></td>
                </tr>
                <tr>
                    <td class= 'accdetails'>Last Name</td>
                    <td><input type='text' name='last_name' class='accint ' value='$lName'></td>
                </tr>
                <tr>
                    <td class= 'accdetails'>Address</td>
                    <td><input type='text' name='address' class='accint ' value='$address'></td>
                </tr>
                <tr>
                    <td class= 'accdetails'>Phone Number</td>
                    <td><input type='text' name='phone_number' class='accint ' value='$cNo'></td>
                </tr>
                <tr>
                    <td class= 'accdetails'>Email</td>
                    <td><input type='text' name='email' class='accint' id='email' value='$email'></td>
                </tr>
                <script>
            function validateEmail(){
                const email = document.getElementById('email').value;

                const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailPattern.test(email)) {
                    alert('Please enter a valid email address.');
                    return false; // Prevent form submission
                }
            }
             
        </script>
                <tr>
                    <td>
                        <button type='submit' class='updatebtn' name='update'>Update</button>
                    </td>
                    <td>
                        <button type='submit' class='deletebtn' name='delete' formaction='deleteuser.php'>Delete</button>
                    </td>
                    <td>
                    <button type='submit' class='logout' name='logout' formaction='logout.php'>log out</button>
                    </td>
                </tr>
            </table>
        </form>";
    }
} else {
    echo "Error fetching details.";
}
?>

</tr>
</tbody>
</table>
        </div>
    </div>
</div>

            </div>
        </div>
    </div>

    <?php
    include("src/footer.html")
    ?>
</body>
</html>