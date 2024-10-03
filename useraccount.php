
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
        include ("config.php");
    
        $sql = 
        "   SELECT user_signin.User_Id, user_signin.username, user_signin.email, user_details.first_name, 
                user_details.last_name, user_details.address, user_details.phone_number
            FROM user_signin
            INNER JOIN user_details ON user_signin.User_Id = user_details.User_Id;
        ";

$result = mysqli_query($conn, $sql);

        if($result) {
            
            while($row = mysqli_fetch_assoc($result)) {
   
                $id = $row['User_Id'];
                $username = $row['username'];
                $fName = $row['first_name'];
                $lName = $row['last_name'];
                $address = $row['address'];
                $cNo = $row['phone_number'];
                $email = $row['email'];
    
        echo "   
        <form action ='' method = 'post'>
            <tr>
                <th>Account Information</th>
            </tr>
            <tr>
                <td>User Id</td>
                <td><input type='text' name='User_Id' placeholder='$id'></td>
            </tr>                       
            <tr>
                <td>Username</td>
                <td><input type='text' name='username' placeholder='$username'></td>
            </tr>
            <tr>
                <td>First Name</td>
                <td><input type='text' name='first_name' placeholder='$fName'></td>
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
                <button name='update'>Update</button>
                </td>


                <td>
                <button name ='delete'>Delete</button>
                </td>
".

include ("config.php");
if(isset($_POST['update']) )
{
    $username = $_POST['username'];
    $fName = $_POST['first_name'];
    $lName = $_POST['last_name'];
    $address = $_POST['address'];
    $cNo = $_POST['phone_number'];
    $email = $_POST['email'];

    $sql = "UPDATE user_details SET username='$username', first_name='$fName',last_name='$lName', address ='$address' ,email='$email',phone_number='$cNo' WHERE User_Id = '$id'";    
    $sql1 = "UPDATE user_signin SET username='$username',email='$email' WHERE User_Id = '$id'";

    $result = $conn->query($sql);
    $result2 = $conn->query($sql1);

    if($result === TRUE AND $result2 === TRUE)    
    {
    }
    else{
        echo ("meka wada nh");
    }

}else{}
if(isset($_POST['delete'])){
    $id = $_POST['User_Id'];

    $sql = "DELETE FROM user_details,user_signin WHERE user_details.User_Id = '$id' AND user_signin.User_Id = '$id";

    $result = $conn->query($sql);

    if($result === TRUE){
        echo("meka wada");
    }
    else{
echo("mwka wada nhh 2 pw"   );    
}
};"
            </tr>
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