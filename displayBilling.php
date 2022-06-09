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
        <a class="nav-link" href="enquiries.php">ENQUIRIES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="receipt.php">RECEIPTS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="billing.php">BILLINGS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="displayEnquiries.php">ENQUIRIES-REPORT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="displayReceipt.php">RECEIPT-REPORT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="displayBilling.php">BILLING-REPORT</a>
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
 <h1 class="text-center">Analyze Billing Information details</h1>
</div>


<div class="container-fluid">
       
       <table class="table">
  <thead>
    <tr>
      <th scope="col">invoice number</th>
      <th scope="col">Date</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">course</th>
      <th scope="col">tuition fees</th>
      <th scope="col">registration fees</th>
      <th scope="col">hostel fees</th>
      <th scope="col">library fees</th>
      <th scope="col">total amount</th>
      <th scope="col">operations</th>
      
    </tr>
  </thead>
  <tbody>


  <?php

    $sql = "SELECT * FROM billing";

    $result = mysqli_query($cons,$sql);
    if ($result){
       
        while( $row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $date = $row['date'];
            $fname=$row['first_name'];
            $lname=$row['last_name'];
            $course=$row['course'];
            $tuitionFees=$row['tuition_fees'];
            $registrationFees=$row['registration_fees'];
            $hostelFees=$row['hostel_fees'];
            $libraryFees=$row['library_fees'];
            $totalAmount=$row['total_amount'];

            echo '<tr>
            <th scope="row">' . $id .'</th>
            <td>'. $date . '</td>
            <td>'. $fname . '</td>
            <td>'. $lname . '</td>
            <td>'. $course . '</td>
            <td>'. $tuitionFees . '</td>
            <td>'. $registrationFees . '</td>
            <td>'. $hostelFees . '</td>
            <td>'. $libraryFees . '</td>
            <td>'. $totalAmount . '</td>
            <td><a class="btn btn-primary"href="updateBilling.php? updateid='.$id.'">update</a></td>
            <td><a class="btn btn-danger"href="deleteBilling.php? deleteid='.$id.'">Delete</a></td>

          </tr>';
        }
    }
  ?>
  
  </tbody>
  
</table>
<a href="billing.php" class="btn btn-primary">Add Billing</a>
    </div>
</body>
</html>