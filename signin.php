<?php
include("config.php");

if(isset($_POST['submitsignin'])){
    $uname = $_POST['username'];
    $uemail = $_POST['email'];
    $pw = $_POST['passwordd'];

    $sql = "INSERT INTO user_signin(User_Id,username,email,passwordd) VALUES('','$uname','$uemail','$pw')";

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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin - FashionFix</title>
    <link rel="stylesheet" href="src/css/style.css">
    <script src="src/js/script.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>
<?php 
 include("src/header.html")
?>
<div class="bodysite">
    <form class="signinbox" action="" method="post">
        <h2 class="headd">Create Account</h2>
        <p class="signpara">Please fill in the information below to create an account</p>
        
        <p class="signparaa">Name</p>
        <input class="inputbox" type="text" name="username" id="">

        <p class="signparaa">E-mail</p>
        <input class="inputbox" type="text" name="email" id="">

        <p class="signparaa">Password</p>
        <input class="inputbox" type="password" name="passwordd" id="">

        
        <p class="signpara marginpara">
            <input class="checkbox" type="checkbox" name="" id="">By clicking this you agree to our terms & conditions.
        </p>

        <button type="submit" name="submitsignin" class="submitbtn">Create An Account</button>
        <p class="para" style="text-align: center; margin-top: 20px;">
            Already have an account?
            <a href="login.php" style="color: blue;">Login here</a>
        </p>
    </form>
</div>
    <?php
    include("src/footer.html")
    ?>
</body>
</html>