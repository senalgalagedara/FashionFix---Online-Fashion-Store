
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin LogIn - FashionFix</title>
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
<div style="margin-top: 100px;">
    <form class="signinbox" style="height: 450px;" method="post" action="authenticatedriver.php" onsubmit="return validateEmail()">
        <h2 class="headd">Driver Login</h2>
        <p class="signpara">Enter your E-mail and Password</p>

        <p class="signparaa">E-mail</p>
        <input class="inputbox" type="text" id='email' name="email" id="">
        <script>
            function validateEmail(){
                const email = document.getElementById("email").value;

                const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailPattern.test(email)) {
                    alert("Please enter a valid email address.");
                    return false; // Prevent form submission
                }
            }
             
        </script>

        <p class="signparaa">Password</p>
        <input class="inputbox" type="password" name="passwordd" id="">

        
        <p class="signpara marginpara">
        </p>

        <button type="submit" class="submitbtn" name="driverloginbtn">Login</button>

    </form>
</div>
</body>
</html>