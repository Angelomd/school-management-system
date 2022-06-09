<?php

include 'smisconnect.php';
if(isset($_POST['submit'])){
$fname=$_POST['first_name'];
$oname=$_POST['other_name'];
$gender=$_POST['gender'];
$dateOfBirth=$_POST['dateOfBirth'];
$postalAddress=$_POST['postalAddress'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$guidian=$_POST['guidian'];
$guidianPhone=$_POST['guidianPhone'];
$course=$_POST['course'];
$kcseGrade=$_POST['kcseGrade'];
$educationLevel=$_POST['educationLevel'];
$schoolAttended=$_POST['schoolAttended'];
$yrFromYrTo=$_POST['yrFromYrTo'];

// $join_date=$_POST['join_date'];

$sql = "insert into registration (first_name, other_name,gender,date_of_birth,postal_address, phone, email,
guidian,guidian_phone,course,KCSE_grade,education_level,school_attended,yr_from_yr_to)
values('$fname', '$oname','$gender','$dateOfBirth','$postalAddress', '$phone', '$email','$guidian','$guidianPhone',
 '$course', '$kcseGrade','$educationLevel','$schoolAttended','$yrFromYrTo')";

$result = mysqli_query($cons,$sql);
if($result){
 header('location:displayRegistration.php');
}else{
  die("Error inserting");
  }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>users application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
   
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="bootstrap/js/popper.js"></script>
    <link rel="shortcut icon" href="./img/techstrap.png" type="image/x-icon">

    <style>
       .my-btn{
            width: 9em;
            height: 2.3em;
            border-radius: 1em;
            border: none;
            text-align: center;
            justify-content: center;
        }
        .my-btn:hover{
            background-color: transparent;
            border: 2px solid black;
            color: black;
        }
        #input-field{
            height: 2em;
            border: 1px solid lightgrey;
            border-radius: 1em;
            background-color: white;
          }
        li{
            list-style: none;
        }
        label{
          color: white;
        }
    </style>
</head>
<body style="background-color: lightgray;">
<nav class="navbar navbar-expand-sm bg-primary navbar-fixed-top navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="index.html">techStrap.org</a>

  <!-- Links -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" href="staff.php">STAFFS</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="users.php">USERS</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="registration.php">REGISTRATION</a>
    </li>
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
      <a class="nav-link" href="contact.html">Contact</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item">
       <a class="nav-link" href="courses.html">Feature Courses</a>
    </li>
  </ul>


  <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <form class="form-inline" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit">Search</button>
  </form>
</nav>
</nav>

<div class="intro" style="text-align: center; margin-top: 2em; margin-bottom: 2em;">
  <h1 class="text-center">Add a new student</h1>
</div>


   <div class="container bg-secondary"style="margin-top: 3rem; margin-bottom: 4rem;">
   <div class="row">
    <div class="col-md-2">




    </div>
    <div class="col-md-8">

   <form method="post" action=""  style="padding-top: 3rem; padding-bottom: 4rem;" >
  
  <!-- <div class="mb-3">
    <label for="name" class="form-label">STUFF ID</label>
    <input type="text" name="id" class="form-control" id="ID">
  </div> -->
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">FIRST NAME</label>
    <input type="text" name="first_name" class="form-control" id="firstname" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">OTHER NAME</label>
    <input type="text" name="other_name" class="form-control" id="firstname" aria-describedby="emailHelp">
  </div>
  
  <div class="mb-3">
    <label for="gender" class="form-label">GENDER</label>
    <input type="text" name="gender" class="form-control" id="gender">
  </div>
  <div class="mb-3">
    <label for="dateofbirth" class="form-label">DATE OF BIRTH</label>
    <input type="date" name="dateOfBirth" class="form-control" id="dateofbirth">
  </div>
  <div class="mb-3">
    <label for="postalAddress" class="form-label">POSTAL ADDRESS</label>
    <input type="text" name="postalAddress" class="form-control" id="postalAddress">
  </div>

  
  <div class="mb-3">
    <label for="phone" class="form-label">PHONE</label>
    <input type="number" name="phone" class="form-control" id="phone">
  </div>
  
  <div class="mb-3">
    <label for="email" class="form-label">EMAIL</label>
    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="guidian" class="form-label">GUIDIAN</label>
    <input type="text" name="guidian" class="form-control" id="guidian" aria-describedby="guidianHelp">
  </div>
  <div class="mb-3">
    <label for="guidianPhone" class="form-label">GUIDIAN PHONE</label>
    <input type="number" name="guidianPhone" class="form-control" id="guidianPhone" aria-describedby="phoneHelp">
  </div>

  <div class="mb-3">
    <label for="course" class="form-label">COURSE</label>
    <input type="text" name="course" class="form-control" id="course">
  </div>
  <div class="mb-3">
    <label for="kcseGrade" class="form-label">KCSE MEAN GRADE</label>
    <input type="text" name="kcseGrade" class="form-control" id="kcseGrade">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">EDUCATION LEVEL</label>
   <select name="educationLevel" class="form-control" id="user_group">
     <option value="primary school">primary school</option>
     <option value="high school">high school</option>
     <option value="college/univerrsity">college/univerrsity</option>
   </select>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">PREVIOUS SCHOOL ATTENDED</label>
    <input type="text" name="schoolAttended" class="form-control" id="schoolAttended" aria-describedby="phoneHelp">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">YEAR FROM/YEAR TO</label>
    <input type="text" name="yrFromYrTo" class="form-control" id="yrFromYrTo" aria-describedby="phoneHelp">
  </div>
 
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  &nbsp;
  &nbsp;
  &nbsp;
  <a href="displayRegistration.php" class="btn btn-primary">view registration report</a>
</form>

</div>
    <div class="col-md-2"></div>
   </div>
   </div>

   
   <div class="container">
  <div class="row">
    <div class="card card-responsive" style="width:345px; height: 600px; background-color: #dfe1e3; border: none; margin: 1em;">
        <div style="margin-left: 40px; border: none; background-color: #dfe1e3;" class="card">
        <h4 style="padding: 1em;" class="card-title">Popular Courses</h4>
        <li><a href="#">Online essentials</a></li>
         <li><a href="#">social media Marketing</a></li>
         <li><a href="#">Online Marketing</a></li>
         <li><a href="#">Spreadsheets</a></li>
         <li><a href="#">web design</a></li>
         <li><a href="#">Graphic design</a></li>
         <li><a href="#">Digital Marketing</a></li>
         <li><a href="#">Computer Repair</a></li>
         <li><a href="#">Mobile Repair</a></li>
         <li><a href="#">Mechine learning</a></li>
         <li><a href="#">Artificial Inteligience</a></li>
         <li><a href="#">Data science</a></li>
         <li><a href="#">Graphic design</a></li>
         <li><a href="#">reactjs</a></li>
         <li><a href="#">react native</a></li>
        </div>
         <button style="margin-top: 40px; margin-left: 30px; justify-content: center;" class="my-btn btn-success btn-block">begin today</button>
      </div>
 
    <div class="card card-responsive" style="width:345px; height: 600px; background-color: #dfe1e3; border: none; margin: 1em;">
        <div style="margin-left: 40px; background-color: #dfe1e3; border: none;" class="card">
            <h4  style="padding: 1em;" class="card-title">Tutorials</h4>
            <li><a href="#">html-5</a></li>
            <li><a href="#">css-4</a></li>
            <li><a href="#">bootstrap 4&5</a></li>
            <li><a href="#">java</a></li>
            <li><a href="#">javascript</a></li>
            <li><a href="#">django</a></li>
            <li><a href="#">python</a></li>
            <li><a href="#">spring boot</a></li>
            <li><a href="#">servlet</a></li>
            <li><a href="#">Mechine learning</a></li>
            <li><a href="#">data science</a></li>
            <li><a href="#">web design</a></li>
            <li><a href="#">Graphic design</a></li>
            <li><a href="#">reactjs</a></li>
            <li><a href="#">react native</a></li>
        </div> 
        <button style="margin-top: 40px; margin-left: 30px; justify-content: center;" class="my-btn btn-success btn-block">Join us for free</button>
      </div>

    <div class="card card-responsive" style="width:345px; height: 600px; margin: 1em; background-color: #dfe1e3; border: none; border-radius: 5px;">
        <div style="margin-left: 40px; border: none; background-color: #dfe1e3;" class="card">
        <h4  style="padding: 1em;" class="card-title">Web Courses</h4>
        <li><a href="#">html-5</a></li>
       <li><a href="#">css-4</a></li>
       <li><a href="#">bootstrap 4&5</a></li>
       <li><a href="#">java</a></li>
       <li><a href="#">javascript</a></li>
       <li><a href="#">django</a></li>
       <li><a href="#">flask</a></li>
       <li><a href="#">spring boot</a></li>
       <li><a href="#">servlet</a></li>
       <li><a href="#">Mechine learning</a></li>
       <li><a href="#">data science</a></li>
       <li><a href="#">web design</a></li>
       <li><a href="#">Graphic design</a></li>
       <li><a href="#">reactjs</a></li>
       <li><a href="#">react native</a></li>
    </div>
         <button style="margin-top: 40px; margin-left: 30px; justify-content: space-around;" class="my-btn btn-success btn-block">claim certificate</button>
      </div>
  </div>
</div>



<footer style="width: 100%; background-color: #363535;">
<div class="container">
  <div class="row">
    <div class="card card-responsive" style="width:345px; height: 500px; background-color: transparent; border: none; margin: 1em;">
        <div style="margin-left: 40px; background-color: transparent; border: none; color: lightgrey;" class="card">
        <h3 style="padding: 1em;" class="card-title">About us</h3>
        <h4>Well, techstrap is a technological company base in the continent of Africa. it was founded on 1st Jan 2022 by the young African pioneers who dreamed and passioned for Africa. The company offers trainings that garantee jobs and well-equiped skills to open one's own company.</h4>
        </div>
      </div>
 

    <div class="card card-responsive" style="width:345px; height: 500px; background-color: transparent; border: none; margin: .12em;">
        <div style="margin-left: 20px; background-color: transparent; border: none; color: lightgrey;" class="card">
            <h4  style="padding: 1em;" class="card-title">SignUp to Newsletters</h4>
      <h5>Stay update with our latest</h5>
      <input style="width: 250px;" id="input-field" type="text" placeholder="name"><br><br>
      <input style="width: 250px;" id="input-field" type="email" placeholder="Email"><br><br>
      <input style="width: 250px;" id="input-field" type="password" placeholder="password"><br><br>
        </div> 
        <button style="margin-top: 40px; margin-left: 60px; justify-content: center; align-items: center;" class="my-btn btn-success btn-block">send</button>
      </div>


    <div class="card card-responsive" style="width:345px; height: 500px; margin: 1em; background-color: transparent; border: none; border-radius: 5px;">
        <div style="margin-left: 40px; background-color: transparent; border: none; color: lightgrey;" class="card">
        <h4  style="padding: 1em;" class="card-title">Follow us</h4>
        <h5>let us be social. Feel free to link with us on social media</h5>
       <div style="align-items: center; display: flex; justify-content: space-evenly; padding-top: 5em;" class="icons">
          <a id="a" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                </svg>
             </a>
              <a id="a" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                      <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                    </svg>
              </a>
            <a id="a" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                  <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                </svg>
            </a>
              <a id="a" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                      <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                    </svg>
              </a>
              <a id="a" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                      <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                    </svg>
              </a>
              <a id="a" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-skype" viewBox="0 0 16 16">
                      <path d="M4.671 0c.88 0 1.733.247 2.468.702a7.423 7.423 0 0 1 6.02 2.118 7.372 7.372 0 0 1 2.167 5.215c0 .344-.024.687-.072 1.026a4.662 4.662 0 0 1 .6 2.281 4.645 4.645 0 0 1-1.37 3.294A4.673 4.673 0 0 1 11.18 16c-.84 0-1.658-.226-2.37-.644a7.423 7.423 0 0 1-6.114-2.107A7.374 7.374 0 0 1 .529 8.035c0-.363.026-.724.08-1.081a4.644 4.644 0 0 1 .76-5.59A4.68 4.68 0 0 1 4.67 0zm.447 7.01c.18.309.43.572.729.769a7.07 7.07 0 0 0 1.257.653c.492.205.873.38 1.145.523.229.112.437.264.615.448.135.142.21.331.21.528a.872.872 0 0 1-.335.723c-.291.196-.64.289-.99.264a2.618 2.618 0 0 1-1.048-.206 11.44 11.44 0 0 1-.532-.253 1.284 1.284 0 0 0-.587-.15.717.717 0 0 0-.501.176.63.63 0 0 0-.195.491.796.796 0 0 0 .148.482 1.2 1.2 0 0 0 .456.354 5.113 5.113 0 0 0 2.212.419 4.554 4.554 0 0 0 1.624-.265 2.296 2.296 0 0 0 1.08-.801c.267-.39.402-.855.386-1.327a2.09 2.09 0 0 0-.279-1.101 2.53 2.53 0 0 0-.772-.792A7.198 7.198 0 0 0 8.486 7.3a1.05 1.05 0 0 0-.145-.058 18.182 18.182 0 0 1-1.013-.447 1.827 1.827 0 0 1-.54-.387.727.727 0 0 1-.2-.508.805.805 0 0 1 .385-.723 1.76 1.76 0 0 1 .968-.247c.26-.003.52.03.772.096.274.079.542.177.802.293.105.049.22.075.336.076a.6.6 0 0 0 .453-.19.69.69 0 0 0 .18-.496.717.717 0 0 0-.17-.476 1.374 1.374 0 0 0-.556-.354 3.69 3.69 0 0 0-.708-.183 5.963 5.963 0 0 0-1.022-.078 4.53 4.53 0 0 0-1.536.258 2.71 2.71 0 0 0-1.174.784 1.91 1.91 0 0 0-.45 1.287c-.01.37.076.736.25 1.063z"/>
                    </svg>
              </a>
              <a id="a" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                      <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                    </svg>
              </a>
       </div>
       <a id="a" href="clientele.html"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" style="border-radius: 50%; color: green; float: right; margin-top: 70px" fill="currentColor" class="bi bi-arrow-up-square-fill" viewBox="0 0 16 16">
          <path d="M2 16a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2zm6.5-4.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 1 0z"/>
        </svg></a>
    </div>
      </div>
  </div>
  <h4 style="padding-top: 40px; padding-bottom: 50px; color: lightblue;" class="text-center">
      Copyright ©2022 All rights reserved | made by
      <a href="./portfolio/admin.html" target="_black">Angelo MD</a>
  </h4>
</div>    
</footer>

<!-- -------------x------------- Footer --------------------x------------------- -->
</body>
</html>