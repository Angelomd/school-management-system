<?php
include 'smisconnect.php';


if (isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM registration WHERE id = '$id'";

    $result = mysqli_query($cons, $sql);
    if ($result){
        header('location:displayRegistration.php');
    }
    else{
        die(mysqli_error($cons));
    }
}



?>