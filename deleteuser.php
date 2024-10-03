<?php
include ("config.php");

if(isset($_POST['delete'])){
    $id = $_POST['User_Id'];

    $sql = "DELETE FROM user_signin WHERE User_Id = '$id'";
    $sql2 = "DELETE FROM user_details WHERE User_Id = '$id'";


    $result = $conn->query($sql);
    $result1 = $conn->query($sql2);


    if($result === TRUE AND $result1 === TRUE){
        session_start();
        session_destroy();
        header("location:index.php");
        exit();
    }
    else{
echo("mwka wada nhh 2 pw");    
}
};
?>
