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

    echo "<p style='color:black;font-size:13px;'> You're logged in as $email  $id</p>";
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
<body>
<?php
include("src/header.html");
?>
<div class="bodyall">
    <div class="widthall">
        <div class="cdetails">
            <h2>Customer details</h2>
            <p>Username</p>
            <p>Logout</p>
            <img src="" alt="Profile pic">
        </div>
        <div class="accinfo">
<table>
    <tr>
    <tbody>
    <?php
include("config.php");

$userId = $_SESSION['User_Id'];  // Make sure session is started and the user is authenticated

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
        <form action='updatedetails.php' method='post'>
            <table>
                <tr>
                    <th colspan='2'>Account Information</th>
                </tr>
                <tr>
                    <td>User Id</td>
                    <td><input type='text' name='User_Id' value='$id' readonly></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type='text' name='username' value='$username'></td>
                </tr>
                <tr>
                    <td>First Name</td>
                    <td><input type='text' name='first_name' value='$fName'></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><input type='text' name='last_name' value='$lName'></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input type='text' name='address' value='$address'></td>
                </tr>
                <tr>
                    <td>Phone Number</td>
                    <td><input type='text' name='phone_number' value='$cNo'></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type='text' name='email' value='$email'></td>
                </tr>
                <tr>
                    <td>
                        <button type='submit' name='update'>Update</button>
                    </td>
                    <td>
                        <button type='submit' name='delete' formaction='deleteuser.php'>Delete</button>
                    </td>
                    <td>
                    <button type='submit' name='logout' formaction='logout.php'>log out</button>
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