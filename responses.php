<?php 
    require 'adminConfig.php';
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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>
<body>
<?php 
 
 include("src/adminHeader1.html");

    if (isset($_GET['delete_response_id'])) {
        $response_id = $_GET['delete_response_id'];

        if (!empty($response_id) && is_numeric($response_id)) {

            $sql = "DELETE FROM responses WHERE Response_ID = ?";
            if ($stmt = $con->prepare($sql)) {
                $stmt->bind_param("i", $response_id); 

                if ($stmt->execute()) {
                    echo "<p style='text-align: center; color: green;'>Complaint with Response ID $response_id deleted successfully.</p>";
                } else {
                    echo "<p style='text-align: center; color: red;'>Error deleting complaint: " . $con->error . "</p>";
                }

                $stmt->close();
            }
        } else {
            echo "<p style='text-align: center; color: red;'>Invalid Response ID.</p>";
        }
    }

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



  <div class="hhh">
        <div class="pannel">
            <div class="adminimg">
                
           </div>
        </div>

        <h1 style="margin-top: 100px; text-align: center;">Responses Details</h1>

        <div class = "fff"> 
                <form method = "post" action="responsesInsert.php" onsubmit="return validation()">
                            Ticket ID: <br />
                            <input type="text" name="ticketid" placeholder="ticket ID" id=tid required><br> <br>
                            Name: <br />
                            <input type="text" name="fullName" placeholder="Full Name" id="fname" required><br /><br />

                            Phone: <br />
                            <input type="phone" name="phone" placeholder="Phone Number" id="pnumber" required><br /><br />

                            E-mail: <br />
                            <input type="email" name="email" placeholder="E-mail" id="mail" required ><br /><br />

                            Response: <br />
                            <textarea cols="50" rows="5" placeholder="" name="response" id="comp"></textarea><br /><br />

                            <input type="submit" value="Submit">
                            
                </form>
                        
        </div>
    </div>

    <div class="main-container">

        <div class="sidebar" id="sidebar">
            <div class="admin-profile">
                <img src="src/img/admin.png" alt="Admin Profile" class="profile-pic">
                <h2>Barry Allen</h2>
                <p>Administrator</p>
            </div>

            <ul class="menu">
                <li><a href="#">Dashboards</a></li>
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

        <div class="customer-complaints" style="margin-right: 200px">

            <?php
              
                $sql = "SELECT Response_ID, Ticket_ID, Name, Phone, Email, Response FROM responses";
                $result = $con->query($sql);

                if ($result->num_rows > 0) {
                    echo "<table class='cc-table'>";
                    echo "<caption>Responses Summary</caption>";
                    echo "<thead>
                            <tr>
                                <th>Response ID</th>
                                <th>Ticket ID</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Response</th>
                                <th>Actions</th>
                            </tr>
                        </thead>";
                    echo "<tbody>";

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>".$row["Response_ID"]."</td>";
                        echo "<td>".$row["Ticket_ID"]."</td>";
                        echo "<td>".$row["Name"]."</td>";
                        echo "<td>".$row["Phone"]."</td>";
                        echo "<td>".$row["Email"]."</td>";
                        echo "<td>".$row["Response"]."</td>";
                        echo "<td>
                                <div class='action-buttons'>
                                    <button class='btn-action' onclick='updateComplaint(".$row["Response_ID"].")'>Update</button>
                                    <button class='btn-action' onclick='deleteComplaint(".$row["Response_ID"].")'>Delete</button>
                                </div>
                            </td>";
                        echo "</tr>";
                    }

                    echo "</tbody></table>";
                } else {
                    echo "<p style='text-align: center; color: black;'>No Results Found</p>";
                }

                $con->close();
            ?>
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


        function deleteComplaint(id) {
                if (confirm("Are you sure you want to delete this complaint?")) {
                  
                    window.location.href = "admin.php?delete_response_id=" + id;
        
                }
        }

        function updateComplaint(id) {
            window.location.href = "updateResponses.php?id=" + id;
        }
</script>
    
    
</body>
</html>