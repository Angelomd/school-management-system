<?php
include 'smisconnect.php';


if (isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM users WHERE id = '$id'";

    $result = mysqli_query($cons, $sql);
    if ($result){
        header('location:displayUsers.php');
    }
    else{
        die(mysqli_error($cons));
    }
}



?>