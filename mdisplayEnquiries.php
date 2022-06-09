<?php


include 'smisconnect.php';
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user operation</title>
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
        <a class="nav-link" href="mdisplayRegistration.php">REGISTRATION-REPORT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="mdisplayEnquiries.php">ENQUIRIES-REPORT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="mdisplayReceipt.php">RECEIPT-REPORT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="mdisplayBilling.php">BILLING-REPORT</a>
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
 <h1 class="text-center">Analyze enquiry's details</h1>
</div>


<div class="container-fluid">
       
       <table class="table">
  <thead>
    <tr>
      <th scope="col">S/N</th>
      <th scope="col">Date</th>
      <th scope="col">first name</th>
      <th scope="col">other Name</th>
      <th scope="col">phone</th>
      <th scope="col">email</th>
      <th scope="col">course</th>
      <th scope="col">how did you know us?</th>
      <th scope="col">comment</th>
      <th scope="col">operations</th>
      
    </tr>
  </thead>
  <tbody>


  <?php

    $sql = "SELECT * FROM enquiries";

    $result = mysqli_query($cons,$sql);
    if ($result){
       
        while( $row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $date = $row['date'];
            $fname = $row['first_name'];
            $oname = $row['other_name'];
            $phone = $row['phone'];
            $email = $row['email'];
            $course = $row['course'];
            $hdyku = $row['hdyku'];
            $comment = $row['comment'];

            echo '<tr>
            <th scope="row">' . $id .'</th>
            <th scope="row">' . $date .'</th>
            <td>'. $fname . '</td>
            <td>'. $oname . '</td>
            <td>'. $phone . '</td>
            <td>'. $email . '</td>
            <td>'. $course . '</td>
            <td>'. $hdyku . '</td>
            <td>'. $comment . '</td>
            <td><a class="btn btn-primary"href="updateEnquiries.php? updateid='.$id.'">update</a></td>
            <td><a class="btn btn-danger"href="deleteEnquiries.php? deleteid='.$id.'">Delete</a></td>

          </tr>';
        }
    }
  ?>
  
  </tbody>
  
</table>
<!-- <a href="enquiries.php" class="btn btn-primary">Add enquiry</a> -->
    </div>
</body>
</html>