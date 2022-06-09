<?php


include 'smisconnect.php';
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
   
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="bootstrap/js/popper.js"></script>
    <link rel="shortcut icon" href="./img/techstrap.png" type="image/x-icon">



</head>
<body style="background-color: lightgray;">


<nav class="navbar navbar-expand-sm bg-success navbar-fixed-top navbar-dark">
 <!-- Brand -->
 <a class="navbar-brand" href="index.html">techStrap.org</a>

 <!-- Links -->
 <ul class="navbar-nav ml-auto">
   <li class="nav-item">
     <a class="nav-link" href="displayRegistration.php">registration-report</a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="displayUsers.php">users-report</a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="displayStuff.php">staff-report</a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="displayEnquiries.php">enquiries-report</a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="displayReceipt.php">receipt-report</a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="displayBilling.php">Billing-report</a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="contact.html">Contact</a>
   </li>
</ul>
 <nav class="navbar navbar-expand-sm bg-success navbar-dark">
 <form class="form-inline" action="/action_page.php">
   <input class="form-control mr-sm-2" type="text" placeholder="Search">
   <button class="btn btn-primary" type="submit">Search</button>
 </form>
</nav>
</nav>


<div class="intro" style="text-align: center; margin-top: 2em; margin-bottom: 2em;">
  <h1 class="text-center">Analyze staff's details</h1>
</div>


   <div class="container-fluid">
       
       <table class="table">
  <thead>
    <tr>
      <th scope="col">S/N</th>
      <th scope="col">First Name</th>
      <th scope="col">Middle Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">gender</th>
      <th scope="col">Postion</th>
      <th scope="col">Department</th>
      <th scope="col">Join Date</th>
      <th scope="col">operations</th>
    </tr>
  </thead>
  <tbody>


  <?php

    $sql = "SELECT * FROM stuffs";

    $result = mysqli_query($cons,$sql);
    if ($result){
       
        while( $row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $fname = $row['first_name'];
            $mname = $row['middle_name'];
            $lname = $row['last_name'];
            $gender = $row['gender'];
            $position = $row['position'];
            $department = $row['department'];
            $join_date = $row['join_date'];

            echo '<tr>
            <th scope="row">' . $id .'</th>
            <td>'. $fname . '</td>
            <td>'. $mname . '</td>
            <td>'. $lname . '</td>
            <td>'. $gender . '</td>
            <td>'. $position . '</td>
            <td>'. $department . '</td>
            <td>'. $join_date . '</td>
            <td><a class="btn btn-primary"href="updateStuff.php? updateid='.$id.'">update</a></td>
            <td><a class="btn btn-danger"href="deleteStuff.php? deleteid='.$id.'">Delete</a></td>

          </tr>';
        }
    }
  ?>
  
  </tbody>
 
</table>
 <a href="staff.php" class="btn btn-primary">Add Stuff</a>
    </div>
</body>
</html>