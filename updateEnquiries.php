

<?php

include 'smisconnect.php';
 $id = $_GET['updateid'];
$sql = "SELECT * FROM enquiries WHERE id=$id";
$result = mysqli_query($cons,$sql);
$row = mysqli_fetch_array($result);
$fname=$row['first_name'];
$oname=$row['other_name'];
$phone=$row['phone'];
$email=$row['email'];
$course=$row['course'];
$hdyku=$row['hdyku'];
$comment=$row['comment'];
if(isset($_POST['submit'])){
   
  $date=$_POST['date'];
  $fname=$_POST['first_name'];
  $oname=$_POST['other_name'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $course=$_POST['course'];
  $hdyku=$_POST['hdyku'];
  $comment=$_POST['comment'];


$sql = "update enquiries set id=$id,date='$date',first_name='$fname',other_name='$oname',phone='$phone',email='$email',course='$course',hdyku='$hdyku',comment='$comment' where id=$id";

$result = mysqli_query($cons,$sql);
if($result){
    header('location:displayEnquiries.php');

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
 <h1 class="text-center">update enquiry details</h1>
</div>



   <div class="container">

   <form method="post" action="" style="margin: 3em">
  
  <div class="mb-3">
    <label for="" class="form-label">Date</label>
    <input type="date" name="date" class="form-control" id="date" value="<?php echo $date;?>">
  </div>
  <div class="mb-3">
    <label for="first_name" class="form-label">FIRST NAME</label>
    <input type="text" name="first_name" class="form-control" id="first_name" value="<?php echo $fname;?>">
  </div>
  
  <div class="mb-3">
    <label for="other_name" class="form-label">OTHER NAME</label>
    <input type="text" name="other_name" class="form-control" id="other_name" value="<?php echo $oname;?>">
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
    <label for="course" class="form-label">COURSE</label>
    <input type="text" name="course" class="form-control" id="course" value="<?php echo $course;?>">
  </div>


  <div class="mb-3">
    <label for="" class="form-label">HOW DID YOU KNOW US?</label>
   <select name="hdyku" class="form-control" id="" value="<?php echo $comment;?>">
     <option value="newspapers">newspapers</option>
     <option value="television">television</option>
     <option value="friends">friends</option>
     <option value="alumni">alumni</option>
     <option value="students">students</option>
     <option value="stuff member">stuff member</option>
     <option value="social media">social media</option>
   </select>
  </div>
  

  <div class="mb-3">
    <label for="comment" class="form-label">COMMENT</label>
    <input type="text" name="comment" class="form-control" id="comment" value="<?php echo $comment;?>">
  </div>
 
  
  <button type="submit" name="submit" class="btn btn-primary">Update enquiries</button>
  &nbsp;
  &nbsp;
  <a href="enquiries.php" class="btn btn-success">Add new enquiries</a>
  &nbsp;
  &nbsp;
  <a href="displayEnquiries.php" class="btn btn-danger">Delete existing enquiry</a>
  &nbsp;
  &nbsp;
</form>

   </div>
</body>
</html>