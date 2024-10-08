<?php 
    require 'adminConfig.php';

    $responseId = $_GET['id'];

    $query = "SELECT * FROM responses WHERE Response_ID = '$responseId'";
    $result = $con->query($query);

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        $ticketId = $row['Ticket_ID'];  
        $fname = $row['Name'];
        $pnum = $row['Phone'];
        $mail = $row['Email'];
        $resp = $row['Response'];
    } else {
        echo "Response not found!";
        exit;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionFix</title>
    <link rel="stylesheet" href="src/css/admin111.css">
    <link rel="stylesheet" href="src/css/cm.css">

    <script src="src/js/adminComplaintsManaging.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
<?php 
 include("src/adminHeader1.html");
?>

<div class="sidebar" id="sidebar" style="margin-top: -6px;">
    <div class="admin-profile">
        <img src="src/img/admin.png" alt="Admin Profile" class="profile-pic">
        <h2>Barry Allen</h2>
        <p>Administrator</p>
    </div>

        <ul class="menu">
            <li><a href="admin.php">Dashboards</a></li>
            <ul class="submenu">
                <li><a href="orderDetailssss.php">Orders</a></li>
                <li><a href="#">Accounts</a></li>
                <li><a href="driverDetails.php">Drivers</a></li>
                <li><a href="userDetails.php">Customers</a></li>
                <li><a href="customerComplaints.php">Complaints</a></li>
                <li><a href="responses.php">Responses</a></li>
            </ul>
        </ul>
</div>

<div class="hhh" style="margin-top: 150px;
                        margin-bottom: 150px">
    <!-- <div class="pannel">
        <div class="adminimg">
            <img src="src/img/admin.png" alt="admin">
        </div>
    </div> -->

    <h1 style="text-align: center;">Update Responses Details</h1>

    <div class="fff">
        <form method="post" action="responsesUpdate.php" onsubmit="return validation()">
            <input type="hidden" name="responseId" value="<?php echo $responseId; ?>" /> 
            
            Ticket ID: <br />
            <input type="text" name="ticketid" value="<?php echo $ticketId; ?>" id="tid" readonly><br><br>
            
            Name: <br />
            <input type="text" name="fullName" value="<?php echo $fname; ?>" id="fname" required><br /><br />
            
            Phone: <br />
            <input type="text" name="phone" value="<?php echo $pnum; ?>" id="pnumber" required><br /><br />
            
            E-mail: <br />
            <input type="email" name="email" value="<?php echo $mail; ?>" id="mail" required><br /><br />
            
            Response: <br />
            <textarea cols="50" rows="5" name="response" id="comp"><?php echo $resp; ?></textarea><br /><br />
            
            <input type="submit" value="Update">
        </form>
    </div>
</div>

<?php
include("src/adminFooter.html");
?>

<script>
                window.onload = function() {
                const sidebar = document.getElementById('sidebar');
                const isActive = localStorage.getItem('sidebarActive') === 'true';

                if (isActive) {
                    sidebar.classList.add('active');
                }

                adjustTablePosition(isActive);
            }

            function toggleSidebar() {
                const sidebar = document.getElementById('sidebar');
                sidebar.classList.toggle('active');

                localStorage.setItem('sidebarActive', sidebar.classList.contains('active'));

                adjustTablePosition(sidebar.classList.contains('active'));
            }
</script>

</body>
</html>
