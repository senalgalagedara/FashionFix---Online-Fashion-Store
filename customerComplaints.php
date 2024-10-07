<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionFix - Admin Dashboard</title>

    <!-- External CSS Links -->
    <link rel="stylesheet" href="src/css/admin111.css"> <!-- Link your external CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700" />
</head>
<body>

    <?php 
        include("src/adminHeader1.html");
        require 'adminConfig.php'; // Include database configuration

        if (isset($_GET['delete_complaint_id'])) {
            $complaint_id = $_GET['delete_complaint_id'];

            // Ensure $response_id is valid (integer check)
            if (!empty($complaint_id) && is_numeric($complaint_id)) {

                // Prepare the delete query
                $sql = "DELETE FROM complaints WHERE Ticket_ID = ?";
                if ($stmt = $con->prepare($sql)) {
                    $stmt->bind_param("i", $complaint_id); // "i" for integer binding

                    // Execute the delete query
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

        <!-- Sidebar -->
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
                    // Query to fetch data from the "responses" table
                    $sql = "SELECT Ticket_ID, Name, Phone, Email, Complaint FROM complaints";
                    $result = $con->query($sql);

                    // If there are rows, display the table
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

                        // Fetch and display each row from the database
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

                    
                ?>
            </div>
        </div>

        <!-- Main Content -->
    </div>

    <!-- Include Footer -->
    <?php include("src/adminFooter.html"); ?>

    <!-- JavaScript functions for update and delete actions -->
    <script>
        // Load the sidebar state from localStorage
        window.onload = function() {
            const sidebar = document.getElementById('sidebar');
            const isActive = localStorage.getItem('sidebarActive') === 'true';

            if (isActive) {
                sidebar.classList.add('active');
            }

            // Adjust the customer complaints table based on the sidebar state
            adjustTablePosition(isActive);
        }

        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('active');

            // Update localStorage based on sidebar state
            localStorage.setItem('sidebarActive', sidebar.classList.contains('active'));

            // Adjust the customer complaints table
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

        // Delete function for specific row
        function deleteComplaint(id) {
            if (confirm("Are you sure you want to delete this complaint?")) {
                // Redirect to the same page with the response_id as a GET parameter to trigger the delete action
                window.location.href = "admin.php?delete_response_id=" + id;
                window.location.href = "admin.php?delete_complaint_id=" + id;
            }
        }

        function updateComplaint(id) {
            window.location.href = "updateResponses.php?id=" + id;
        }
    </script>

</body>
</html>
