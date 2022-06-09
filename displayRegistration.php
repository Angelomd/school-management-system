<?php


include 'smisconnect.php';
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration display</title>
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
 <h1 class="text-center">Analyze registration details</h1>
</div>


<div class="container-fluid">
       
       <table class="table">
  <thead>
    <tr>
      <th scope="col">S/N</th>
      <th scope="col">join date</th>
      <th scope="col">first name</th>
      <th scope="col">other Name</th>
      <th scope="col">gender</th>
      <th scope="col">date of birth</th>
      <th scope="col">postal address</th>
      <th scope="col">phone</th>
      <th scope="col">email</th>
      <th scope="col">guidian</th>
      <th scope="col">guidian's phone</th>
      <th scope="col">course</th>
      <th scope="col">KCSE mean grade</th>
      <th scope="col">educational level</th>
      <th scope="col">school attended</th>
      <th scope="col">year from/year to</th>
      <th scope="col">operations</th>
      
    </tr>
  </thead>
  <tbody>


  <?php

    $sql = "SELECT * FROM registration";

    $result = mysqli_query($cons,$sql);
    if ($result){
       
        while( $row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $jdate = $row['join_date'];
            $fname=$row['first_name'];
            $oname=$row['other_name'];
            $gender=$row['gender'];
            $dateOfBirth=$row['date_of_birth'];
            $postalAddress=$row['postal_address'];
            $phone=$row['phone'];
            $email=$row['email'];
            $guidian=$row['guidian'];
            $guidianPhone=$row['guidian_phone'];
            $course=$row['course'];
            $kcseGrade=$row['KCSE_grade'];
            $educationLevel=$row['education_level'];
            $schoolAttended=$row['school_attended'];
            $yrFromYrTo=$row['yr_from_yr_to'];

            echo '<tr>
            <th scope="row">' . $id .'</th>
            <th scope="row">' . $jdate .'</th>
            <td>'. $fname . '</td>
            <td>'. $oname . '</td>
            <td>'. $gender . '</td>
            <td>'. $dateOfBirth . '</td>
            <td>'. $postalAddress . '</td>
            <td>'. $phone . '</td>
            <td>'. $email . '</td>
            <td>'. $guidian . '</td>
            <td>'. $guidianPhone . '</td>
            <td>'. $course . '</td>
            <td>'. $kcseGrade . '</td>
            <td>'. $educationLevel . '</td>
            <td>'. $schoolAttended . '</td>
            <td>'. $yrFromYrTo . '</td>
           
            <td><a class="btn btn-primary"href="updateRegistration.php? updateid='.$id.'">update</a></td>
            <td><a class="btn btn-danger"href="deleteRegistration.php? deleteid='.$id.'">Delete</a></td>

          </tr>';
        }
    }
  ?>
  
  </tbody>
  
</table>
<a href="registration.php" class="btn btn-primary">Add student</a>
    </div>
</body>
</html>