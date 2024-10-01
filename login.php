<?php 
session_start();
 include "db_conn.php";
 if (isset($_POST['uname']) && isset($_POST['password'])) 
 {    
    function validate($data)
    {       
        $data = trim($data);       
        $data = stripslashes($data);       
        $data = htmlspecialchars($data);       
        return $data;    
    }    
    $uname = validate($_POST['uname']);    
    $pass = validate($_POST['password']);   

    if (empty($uname)) 
    {        
        header("Location: index.php?error=User Name is required");
        exit();    
    }
        else if(empty($pass))
        {        
            header("Location: index.php?error=Password is required");
            exit();    
        }else{
            $sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";
            $result = mysqli_query($conn, $sql); 

           if (mysqli_num_rows($result) === 1) 
           {           
            $row = mysqli_fetch_assoc($result);  

            if ($row['user_name'] === $uname && $row['password'] === $pass) 
            {                
                echo "Logged in!";                
                $_SESSION['user_name'] = $row['user_name'];               
                $_SESSION['name'] = $row['name'];                
                $_SESSION['id'] = $row['id'];                
                header("Location: home.php");                
                exit();            
            }else{                
                header("Location: index.php?error=Incorect User name or password");                
                exit();            
            }        
        }else{            
            header("Location: index.php?error=Incorect User name or password");            
            exit();        
        }    }}else{    
            header("Location: index.php");    
            exit();}

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
    <div class="signinbox" style="height: 450px;">
        <h2 class="headd">Login to my Account</h2>
        <p class="signpara">Enter your E-mail and Password</p>

        <p class="signparaa">E-mail</p>
        <input class="inputbox" type="text" name="" id="">

        <p class="signparaa">Password</p>
        <input class="inputbox" type="password" name="" id="">

        
        <p class="signpara marginpara">
            <input class="checkbox" type="checkbox" name="" id="">Remember Login.
        </p>

        <button type="submit" class="submitbtn">Login</button>
        <p class="para" style="text-align: center; margin-top: 20px;">
            New Customer?
            <a href="signin.php" style="color: blue;">Create your account</a>
        </p>
    </div>
</div>
<?php
    include("src/footer.html")
    ?>
</body>
</html>