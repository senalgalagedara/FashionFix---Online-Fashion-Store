<?php
include('config.php');

if (isset($_GET['id'])) {
    $driver_id = $_GET['id'];
  
    $sql = "DELETE FROM driver WHERE driver_ID = '$driver_id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>
            alert('Your Account Logout successfully!');
            window.location.href = 'driver_register.php'; 
        </script>";
    } else {
        echo "<script>
            alert('Error in Logout...!');
            window.location.href = 'driver_account.php';
        </script>";
    }

    mysqli_close($conn);
} else {
    echo "<script>
        alert('Driver ID is missing.');
        window.location.href = 'driver_account.php';
    </script>";
}
?>
