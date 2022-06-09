<?php

include 'smisconnect.php';
if(isset($_POST['submit'])){
$fname=$_POST['first_name'];
$mname=$_POST['middle_name'];
$lname=$_POST['last_name'];
$department=$_POST['department'];
$uname=$_POST['uname'];
$password=$_POST['password'];
$ugroup=$_POST['ugroup'];

// $join_date=$_POST['join_date'];

$sql = "insert into users (first_name, middle_name, last_name, department, user_name, password, user_group)
values('$fname', '$mname', '$lname', '$department', '$uname', '$password', '$ugroup')";

$result = mysqli_query($cons,$sql);
if($result){
 //header('location:displayUsers.php');
 echo "user registered successfully";
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
    <title>registration application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
   
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="bootstrap/js/popper.js"></script>
    <link rel="shortcut icon" href="./img/techstrap.png" type="image/x-icon">

    <style>
       
        label{
          color: white;
        }
    </style>
</head>
<body style="background-color: lightgray;">


<div class="intro" style="text-align: center; margin-top: 2em; margin-bottom: 2em;">
  <h1 class="text-center">new user? Register</h1>
</div>


   <div class="container bg-secondary"style="margin-top: 3rem; margin-bottom: 4rem;">
   <div class="row">
    <div class="col-md-2">




    </div>
    <div class="col-md-8">

   <form method="post" action="" style="padding-top: 3rem; padding-bottom: 4rem;">
  
  <!-- <div class="mb-3">
    <label for="name" class="form-label">STUFF ID</label>
    <input type="text" name="id" class="form-control" id="ID">
  </div> -->
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">FIRST NAME</label>
    <input type="text" name="first_name" class="form-control" id="firstname" aria-describedby="emailHelp">
  </div>
  
  <div class="mb-3">
    <label for="middle_name" class="form-label">MIDDLE NAME</label>
    <input type="text" name="middle_name" class="form-control" id="middle_name">
  </div>

  <div class="mb-3">
    <label for="last_name" class="form-label">LAST NAME</label>
    <input type="text" name="last_name" class="form-control" id="last_name">
  </div>
 
  <div class="mb-3">
    <label for="department" class="form-label">DEPARTMENT</label>
    <input type="text" name="department" class="form-control" id="department">
  </div>
  
  <div class="mb-3">
    <label for="uname" class="form-label">USER NAME</label>
    <input type="text" name="uname" class="form-control" id="uname" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="password" class="form-label">PASSWORD</label>
    <input type="password" name="password" class="form-control" id="password">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">USER GROUP</label>
   <select name="ugroup" class="form-control" id="user_group">
     <option value="System Administrator">System Administrator</option>
     <option value="Administrator">Administrator</option>
     <option value="Front Office">Front Office</option>
     <option value="Accounts">Accounts</option>
     <option value="Management">Management</option>
   </select>
  </div>
 
  
  <button type="submit" name="submit" class="btn btn-primary">Register</button>
  &nbsp;
  &nbsp;
  &nbsp;
  Already have an account<a href="login.php" class="text-white">&nbsp;&nbsp; Login</a>
</form>

</div>
    <div class="col-md-2"></div>
   </div>
   </div>


   
</body>
</html>