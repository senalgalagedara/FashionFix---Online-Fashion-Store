<?php 

include("config.php");
session_start(); 

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


function login($conn, $email, $pass){
    $sql = "SELECT * FROM user_signin WHERE email =?;";

    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
   // mysqli_stmt_prepare($stmt, $sql1);
    mysqli_stmt_bind_param($stmt, 's', $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

$row = mysqli_fetch_assoc($result);


    session_start();    
    $_SESSION['email'] = $row['email'];
    $_SESSION['User_Id'] = $row['User_Id'];
    $_SESSION['username'] = $row['username'];
    mysqli_stmt_close($stmt);
    header("Location: useraccount.php");
    exit();
}

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
