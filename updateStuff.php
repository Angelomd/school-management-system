

<?php

include 'smisconnect.php';
 $id = $_GET['updateid'];
$sql = "SELECT * FROM stuffs WHERE id=$id";
$result = mysqli_query($cons,$sql);
$row = mysqli_fetch_array($result);
$fname=$row['first_name'];
$mname=$row['middle_name'];
$lname=$row['last_name'];
$gender=$row['gender'];
$position=$row['position'];
$department=$row['department'];
$join_date=$row['join_date'];
if(isset($_POST['submit'])){
   
$fname=$_POST['first_name'];
$mname=$_POST['middle_name'];
$lname=$_POST['last_name'];
$gender=$_POST['gender'];
$position=$_POST['position'];
$department=$_POST['department'];
$join_date=$_POST['join_date'];

$sql = "update stuffs set id=$id,first_name='$fname',middle_name='$mname',last_name='$lname',position='$position',department='$department',join_date='$join_date' where id=$id";

$result = mysqli_query($cons,$sql);
if($result){
  header('location:displayStuff.php');

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
  <h1 class="text-center">Add a new stuff's details</h1>
</div>


   <div class="container bg-secondary">

   <form method="post" action="" style="padding: 2em">
  
  <div class="mb-3">
    <label for="first_name" class="form-label">FIRST NAME</label>
    <input type="text" name="first_name" class="form-control" id="first_name" value="<?php echo $fname;?>">
  </div>
  
  <div class="mb-3">
    <label for="middle_name" class="form-label">middle NAME</label>
    <input type="text" name="middle_name" class="form-control" id="middle_name" value="<?php echo $mname;?>">
  </div>
  
  <div class="mb-3">
    <label for="last_name" class="form-label">last NAME</label>
    <input type="text" name="last_name" class="form-control" id="last_name" value="<?php echo $lname;?>">
  </div>
  
  <div class="mb-3">
    <label for="gender" class="form-label">EMAIL ADDRESS</label>
    <input type="text" name="gender" class="form-control" id="gender" aria-describedby="emailHelp" value="<?php echo $gender;?>">
  </div>

  <div class="mb-3">
    <label for="position" class="form-label">POSITION</label>
    <input type="text" name="position" class="form-control" id="position" value="<?php echo $position;?>">
  </div>

  <div class="mb-3">
    <label for="department" class="form-label">DEPARTMENT</label>
    <input type="text" name="department" class="form-control" id="department" value="<?php echo $department;?>">
  </div>
  <div class="mb-3">
    <label for="localtime" class="form-label">JOIN DATE</label>
    <input type="datetime-local" name="join_date" class="form-control" id="datetime-local" value="<?php echo $join_date;?>">
  </div>
 
  
  <button type="submit" name="submit" class="btn btn-primary">Update stuff</button>
  &nbsp;
  &nbsp;
  <a href="stuff.php" class="btn btn-success">Add new stuff</a>
  &nbsp;
  &nbsp;
  <a href="displayStuff.php" class="btn btn-danger">Delete existing stuff</a>
  &nbsp;
  &nbsp;
</form>

   </div>
</body>
</html>