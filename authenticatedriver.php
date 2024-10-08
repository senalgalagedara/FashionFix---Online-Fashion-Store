<?php 

include("config.php");

function login($conn, $email, $pass){
    $sql = "SELECT * FROM driver WHERE Email =?;";

    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
   // mysqli_stmt_prepare($stmt, $sql1);
    mysqli_stmt_bind_param($stmt, 's', $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    header("Location: driver_account.php");
    exit();
}

if(isset($_POST['driverloginbtn'])){
    $email = $_POST['email'];
    $pass = $_POST['passwordd'];
    
    if(empty($email) || empty($pass)){
        echo "Enter valid details";
        exit();
    }
    login($conn, $email, $pass);
} else {
    header("Location: signin.php");
    exit();
}
?>
