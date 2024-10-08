<?php
include('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionFix-Driver Account</title>
    
    <link rel="stylesheet" href="src/css/driveraccount.css">
    <link rel="stylesheet" href="src/css/driver.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

     
</head>
<body>
    <?php
    include ("src/header_driver.html");
    ?>

     <div class="bodyall">
        
     <div class="propic">
            <img src="src/img/propic.png" alt="profile picture" width="100" height="100">
     </div>
     <div class="widthall">
         <div class="drivInfo">
             <h1>Account Information</h1>
             <table>
                 <tr>
                     <th>Driver ID</th>
                     <td>
                         <?php 
                         $sql = "SELECT * FROM driver LIMIT 1";
                         $result = $conn->query($sql);
                         if ($result->num_rows > 0) {
                             $row = $result->fetch_assoc();
                             echo $row['driver_ID'];
                         }
                         ?>
                     </td>
                     
                    
                 <tr>
                     <th>First Name</th>
                     <td><?php echo $row['fname']; ?></td>
                     <td><a href="deleteDdetails.php?id=<?php echo $row['driver_ID']; ?>&field=fname" class="dele">delete</a></td>
                     

                 </tr>
                 <tr>
                     <th>Last Name</th>
                     <td><?php echo $row['lname']; ?></td>
                     <td><a href="deleteDdetails.php?id=<?php echo $row['driver_ID']; ?>&field=lname" class="dele">delete</a></td>
                     
                 </tr>
                 <tr>
                     <th>Password</th>
                     <td><?php echo $row['Npassword']; ?></td>
                     <td><a href="deleteDdetails.php?id=<?php echo $row['driver_ID']; ?>&field=Password" class="dele">delete</a></td>
                 </tr>
                 <tr>
                     <th>Age</th>
                     <td><?php echo $row['Age']; ?></td>
                     <td><a href="deleteDdetails.php?id=<?php echo $row['driver_ID']; ?>&field=Age" class="dele">delete</a></td>
                 </tr>
                 <tr>
                     <th>Address</th>
                     <td><?php echo $row['adress']; ?></td>
                     <td><a href="deleteDdetails.php?id=<?php echo $row['driver_ID']; ?>&field=adress" class="dele">delete</a></td>
                 </tr>
                 <tr>
                     <th>Contract Number</th>
                     <td><?php echo $row['contNo']; ?></td>
                     <td><a href="deleteDdetails.php?id=<?php echo $row['driver_ID']; ?>&field=contNo" class="dele">delete</a></td>
                 </tr>
                 <tr>
                     <th>Email</th>
                     <td><?php echo $row['Email']; ?></td>
                     <td><a href="deleteDdetails.php?id=<?php echo $row['driver_ID']; ?>&field=Email" class="dele">delete</a></td>
                 </tr>
                 <tr>
                     <th>Bank Account Number</th>
                     <td><?php echo $row['acc_no']; ?></td>
                     <td><a href="deleteDdetails.php?id=<?php echo $row['driver_ID']; ?>&field=acc_no" class="dele">delete</a></td>
                 </tr>
                 <tr>
                     <th>Bank Account Username</th>
                     <td><?php echo $row['acc_name']; ?></td>
                     <td><a href="deleteDdetails.php?id=<?php echo $row['driver_ID']; ?>&field=acc_name" class="dele">delete</a></td>
                 </tr>
                 <tr>
                     <th>Bank Name</th>
                     <td><?php echo $row['bname']; ?></td>
                     <td><a href="deleteDdetails.php?id=<?php echo $row['driver_ID']; ?>&field=bname" class="dele">delete</a></td>
                 </tr>
                 <tr>
                    <td class="none"><button id="up"><a href="updateDdetailes.php?id=<?php echo $row['driver_ID']; ?>">Update</a></button>
                    <button id="de"><a href="driverlogout.php?id=<?php echo $row['driver_ID']; ?>">logout</a></button></td>
                
                </tr>
             </table>

         </div>
     </div>
    </div>

<?php
mysqli_close($conn); 
include("src/footer_driver.html");
?>
<script>
    
    var anc = document.getElementsByClassName("dele");
    var logo = document.getElementById("de");

    for (var i = 0; i < anc.length; i++) {
        anc[i].addEventListener("click", conFirm);
    }

    function conFirm(event) {
    
        var response = confirm("Are you sure?");

        if (response === true) {
        
        } else {
            alert("Deleting data canceled");
            event.preventDefault();  
        }
    }

    logo.addEventListener("click", Logiout);

    function Logiout(event) {
        var rePonse = confirm("Are you sure?");

        if (rePonse === true) {
    
        }
        else {
            alert("Logout was cancelled");
            event.preventDefault();
        }
    }

</script>


</body>
</html>
