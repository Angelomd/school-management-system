

<?php

include 'smisconnect.php';
 $id = $_GET['updateid'];
$sql = "SELECT * FROM registration WHERE id=$id";
$result = mysqli_query($cons,$sql);
$row = mysqli_fetch_array($result);
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


if(isset($_POST['submit'])){
// $jdate=$_POST['date'];
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


$sql = "update registration set id=$id,first_name='$fname',other_name='$oname',date_of_birth='$dateOfBirth',
postal_address='$postalAddress',phone='$phone',email='$email',guidian='$guidian',guidian_phone='$guidianPhone',
course='$course',KCSE_grade='$kcseGrade',education_level='$educationLevel',school_attended='$schoolAttended',yr_from_yr_to='$yrFromYrTo' where id=$id";

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
    <title>Crud application</title>
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
     <a class="nav-link" href="displayStuff.php">stuff-report</a>
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
 <h1 class="text-center">update registration details</h1>
</div>



   <div class="container">

   <form method="post" action="" style="margin: 3em">
  
  <!-- <div class="mb-3">
    <label for="" class="form-label">JOIN DATE</label>
    <input type="timestamp" name="date" class="form-control" id="date" value="<?php echo $jdate;?>">
  </div> -->
  <div class="mb-3">
    <label for="first_name" class="form-label">FIRST NAME</label>
    <input type="text" name="first_name" class="form-control" id="first_name" value="<?php echo $fname;?>">
  </div>
  
  <div class="mb-3">
    <label for="other_name" class="form-label">OTHER NAME</label>
    <input type="text" name="other_name" class="form-control" id="other_name" value="<?php echo $oname;?>">
  </div>
  <div class="mb-3">
    <label for="gender" class="form-label">GENDER</label>
    <input type="text" name="gender" class="form-control" id="gender" value="<?php echo $gender;?>">
  </div>
  <div class="mb-3">
    <label for="dateOfBirth" class="form-label">DATE OF BIRTH</label>
    <input type="date" name="dateOfBirth" class="form-control" id="dateOfBirth" value="<?php echo $dateOfBirth;?>">
  </div>
  <div class="mb-3">
    <label for="postalAddress" class="form-label">POSTAL ADDRESS</label>
    <input type="text" name="postalAddress" class="form-control" id="postalAddress" value="<?php echo $postalAddress;?>">
  </div>
  
  <div class="mb-3">
    <label for="phone" class="form-label">PHONE</label>
    <input type="text" name="phone" class="form-control" id="phone" value="<?php echo $phone;?>">
  </div>
  
  <div class="mb-3">
    <label for="email" class="form-label">EMAIL</label>
    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" value="<?php echo $email;?>">
  </div>

  <div class="mb-3">
    <label for="guidian" class="form-label">GUIDIAN</label>
    <input type="text" name="guidian" class="form-control" id="guidian" value="<?php echo $guidian;?>">
  </div>
  <div class="mb-3">
    <label for="guidianPhone" class="form-label">GUIDIAN PHONE</label>
    <input type="text" name="guidianPhone" class="form-control" id="guidianPhone" value="<?php echo $guidianPhone;?>">
  </div>
  <div class="mb-3">
    <label for="course" class="form-label">COURSE</label>
    <input type="text" name="course" class="form-control" id="course" value="<?php echo $course;?>">
  </div>
  
  <div class="mb-3">
    <label for="kcseGrade" class="form-label">KCSE MEAN GRADE</label>
    <input type="text" name="kcseGrade" class="form-control" id="kcseGrade" value="<?php echo $kcseGrade;?>">
  </div>


  <div class="mb-3">
    <label for="" class="form-label">EDUCATIONAL LEVEL</label>
   <select name="educationLevel" class="form-control" id="" value="<?php echo $educationLevel;?>">
      <option value="primary school">primary school</option>
     <option value="high school">high school</option>
     <option value="college/univerrsity">college/univerrsity</option>
   </select>
  </div>
  
  <div class="mb-3">
    <label for="schoolAttended" class="form-label">PREVIOUS SCHOOL ATTENDED</label>
    <input type="text" name="schoolAttended" class="form-control" id="schoolAttended" value="<?php echo $schoolAttended;?>">
  </div>

  <div class="mb-3">
    <label for="yrFromYrTo" class="form-label">YEAR FROM/YEAR TO</label>
    <input type="text" name="yrFromYrTo" class="form-control" id="yrFromYrTo" value="<?php echo $yrFromYrTo;?>">
  </div>

 
  
  <button type="submit" name="submit" class="btn btn-primary">Update registration details</button>
  &nbsp;
  &nbsp;
  <a href="registration.php" class="btn btn-success">Add new student</a>
  &nbsp;
  &nbsp;
  <a href="displayRegistration.php" class="btn btn-danger">Delete existing student</a>
  &nbsp;
  &nbsp;
</form>

   </div>
</body>
</html>