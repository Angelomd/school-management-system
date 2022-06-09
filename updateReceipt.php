

<?php

include 'smisconnect.php';

 $id = $_GET['updateid'];
$sql = "SELECT * FROM receipt WHERE id=$id";
$result = mysqli_query($cons,$sql);
$row = mysqli_fetch_array($result);
$fname=$row['first_name'];
$lname=$row['last_name'];
$course=$row['course'];
$tuitionFees=$row['tuition_fees'];
$registrationFees=$row['registration_fees'];
$hostelFees=$row['hostel_fees'];
$libraryFees=$row['library_fees'];
$amountPaid=$row['amount_paid'];

if(isset($_POST['submit'])){
   
$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
$course=$_POST['course'];
$tuitionFees=$_POST['tuitionFees'];
$registrationFees=$_POST['registrationFees'];
$hostelFees=$_POST['hostelFees'];
$libraryFees=$_POST['libraryFees'];
$amountPaid=$_POST['amountPaid'];


$sql = "update receipt set id=$id,first_name='$fname',last_name='$lname',course='$course',tuition_fees='$tuitionFees',registration_fees='$registrationFees',hostel_fees='$hostelFees',library_fees='$libraryFees',amount_paid='$amountPaid' where id=$id";

$result = mysqli_query($cons,$sql);
if($result){
    header('location:displayReceipt.php');

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
 <h1 class="text-center">update Receipt Information details</h1>
</div>



   <div class="container">

   <form method="post" action="" style="margin-top: 2em; margin-bottom: 3em;">
  
  <div class="mb-3">
    <label for="first_name" class="form-label">FIRST NAME</label>
    <input type="text" name="first_name" class="form-control" id="first_name" value="<?php echo $fname;?>">
  </div>
  
  <div class="mb-3">
    <label for="last_name" class="form-label">LAST NAME</label>
    <input type="text" name="last_name" class="form-control" id="last_name" value="<?php echo $lname;?>">
  </div>
  
  <div class="mb-3">
    <label for="course" class="form-label">COURSE</label>
    <input type="text" name="course" class="form-control" id="course" aria-describedby="emailHelp" value="<?php echo $course;?>">
  </div>

  <div class="mb-3">
    <label for="tuitionFees" class="form-label">TUITION FEES</label>
    <input type="text" name="tuitionFees" class="form-control" id="tuitionFees" value="<?php echo $tuitionFees;?>">
  </div>
  <div class="mb-3">
    <label for="registrationFees" class="form-label">REGISTRATION FEES</label>
    <input type="text" name="registrationFees" class="form-control" id="registrationFees" value="<?php echo $registrationFees;?>">
  </div>
  <div class="mb-3">
    <label for="hostelFees" class="form-label">HOSTEL FEES</label>
    <input type="text" name="hostelFees" class="form-control" id="hostelFees" value="<?php echo $hostelFees;?>">
  </div>
  <div class="mb-3">
    <label for="libraryFees" class="form-label">LIBRARY FEES</label>
    <input type="text" name="libraryFees" class="form-control" id="libraryFees" value="<?php echo $libraryFees;?>">
  </div>

  <div class="mb-3">
    <label for="amountPaid" class="form-label">AMOUNT PAID</label>
    <input type="text" name="amountPaid" class="form-control" id="amountPaid" value="<?php echo $amountPaid;?>">
  </div>

  
 
  
  <button type="submit" name="submit" class="btn btn-primary">Update Receipt</button>
  &nbsp;
  &nbsp;
  <a href="receipt.php" class="btn btn-success">Add new new Receipt</a>
  &nbsp;
  &nbsp;
  <a href="displayReceipt.php" class="btn btn-danger">Delete existing Receipt</a>
  &nbsp;
  &nbsp;
</form>

   </div>
</body>
</html>