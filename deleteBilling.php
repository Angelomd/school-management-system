<?php
include 'smisconnect.php';


if (isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM billing WHERE id = '$id'";

    $result = mysqli_query($cons, $sql);
    if ($result){
        header('location:displayBilling.php');
    }
    else{
        die(mysqli_error($cons));
    }
}



?>