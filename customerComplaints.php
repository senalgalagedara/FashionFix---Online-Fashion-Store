<?php 
    require 'adminConfig.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionFix - Admin Dashboard</title>

    
    <link rel="stylesheet" href="src/css/admin111.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700" />
</head>
<body>

    <?php 
        include("src/adminHeader1.html"); 

        if (isset($_GET['delete_complaint_id'])) {
            $complaint_id = $_GET['delete_complaint_id'];

            
            if (!empty($complaint_id) && is_numeric($complaint_id)) {

                
                $sql = "DELETE FROM complaints WHERE Ticket_ID = ?";
                if ($stmt = $con->prepare($sql)) {
                    $stmt->bind_param("i", $complaint_id); 

                    if ($stmt->execute()) {
                        echo "<p style='text-align: center; color: green;'>Complaint with Response ID $complaint_id deleted successfully.</p>";
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

        <div class="customer-complaints">

                <?php
                  
                    $sql = "SELECT Ticket_ID, Name, Phone, Email, Complaint FROM complaints";
                    $result = $con->query($sql);

                 
                    if ($result->num_rows > 0) {
                        echo "<table class='cc-table'>";
                        echo "<caption>Customer complaints Summary</caption>";
                        echo "<thead>
                                <tr>
                                    <th>Ticket ID</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Complaint</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>";
                        echo "<tbody>";

                       
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>".$row["Ticket_ID"]."</td>";
                            echo "<td>".$row["Name"]."</td>";
                            echo "<td>".$row["Phone"]."</td>";
                            echo "<td>".$row["Email"]."</td>";
                            echo "<td>".$row["Complaint"]."</td>";
                            echo "<td>
                                    <div class='action-buttons'>
                                        
                                        <button class='btn-action' onclick='deleteComplaint(".$row["Ticket_ID"].")'>Delete</button>
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

        
    </div>

    <?php include("src/adminFooter.html"); ?>

    
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

        function adjustTablePosition(isActive) {
            const admintables = document.querySelectorAll('.customer-complaints');
            admintables.forEach(table => {
                if (isActive) {
                    table.classList.remove('centered');
                } else {
                    table.classList.add('centered');
                }
            });
        }

        function deleteComplaint(id) {
            if (confirm("Are you sure you want to delete this complaint?")) {
                
                window.location.href = "admin.php?delete_complaint_id=" + id;
            }
        }

        function updateComplaint(id) {
            window.location.href = "updateResponses.php?id=" + id;
        }
    </script>

</body>
</html>
