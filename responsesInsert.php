<?php
    require 'adminConfig.php'
?>

<?php
    $tickId = $_POST["ticketid"];
    $fname = $_POST["fullName"];
    $pnum = $_POST["phone"];
    $mail = $_POST["email"];
    $resp = $_POST["response"];

    $sql = "INSERT INTO responses VALUES ('', '$tickId', '$fname', '$pnum', '$mail', '$resp')";

    if($con->query($sql)){
        echo "<script>alert('Insert Successfull');
        window.location.href = 'admin.php';
        </script>";
    }else{
        echo "Error".$con->error;
        "<script>
            window.history.back();
        </script>";
    }

$con->close();
?>