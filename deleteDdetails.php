<?php
include('config.php');

if (isset($_GET['id']) && isset($_GET['field'])) {
    $driver_id = $_GET['id'];
    $field = $_GET['field'];

    
    $valid_fields = ['fname', 'lname', 'Npassword', 'Age', 'adress', 'contNo', 'Email', 'acc_no', 'acc_name', 'bname'];
    if (!in_array($field, $valid_fields)) {
        echo "<script>
            alert('Invalid field specified.');
            window.location.href = 'driver_account.php';
        </script>";
        exit;
    }

    $sql = "UPDATE driver SET $field = '' WHERE driver_ID = '$driver_id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>
            alert('Field deleted successfully!');
            window.location.href = 'driver_account.php'; 
        </script>";
    } else {
        echo "<script>
            alert('Error deleting the field.');
            window.location.href = 'driver_account.php';
        </script>";
    }
} else {
    echo "<script>
        alert('Driver ID or field is missing.');
        window.location.href = 'driver_account.php';
    </script>";
}

mysqli_close($conn);
?>


