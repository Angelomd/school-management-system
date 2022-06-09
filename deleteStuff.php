<?php
include 'smisconnect.php';


if (isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM stuffs WHERE id = '$id'";

    $result = mysqli_query($cons, $sql);
    if ($result){
        header('location:displayStuff.php');
    }
    else{
        die(mysqli_error($cons));
    }
}



?>