<?php 

include("config.php");
session_start(); // Start the session at the top

// Function to check if the email exists
function emailExist($conn, $email){
    $sql = "SELECT * FROM user_signin WHERE email =?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: signin.php?err=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, 's', $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    $result = mysqli_stmt_num_rows($stmt) > 0;

    mysqli_stmt_close($stmt);
    return $result;
}

// Function to handle user login
function login($conn, $email, $pass){
    $sql = "SELECT * FROM user_signin WHERE email =?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: index.php?err=stmtfailed");
        exit();
    }


    mysqli_stmt_bind_param($stmt, 's', $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if(!$row = mysqli_fetch_assoc($result)){
        mysqli_stmt_close($stmt);
        header("Location: index.php?err=usernull");
        exit();
    }

    $hashedPass = $row['passwordd'];
    if(!password_verify($pass, $hashedPass)){
        mysqli_stmt_close($stmt);
        header("Location: index.php?err=wrongpass");
        exit();
    }

    // Start session for successful login
    $_SESSION['email'] = $row['email'];
    $_SESSION['User_Id'] = $row['id'];

    mysqli_stmt_close($stmt);
    header("Location: inbox.php");
    exit();
}

// Main login logic
if(isset($_POST['loginbtn'])){
    $email = $_POST['email'];
    $pass = $_POST['passwordd'];
    
    if(empty($email) || empty($pass)){
        echo "Enter valid details";
        exit();
    }
    
    if(!emailExist($conn, $email)){
        echo "User not found";
        exit();
    }

    login($conn, $email, $pass);
} else {
    header("Location: signin.php");
    exit();
}
?>
