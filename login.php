


<?php 

include "smisconnect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
   
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="bootstrap/js/popper.js"></script>

    <link rel="shortcut icon" href="./img/techstrap.png" type="image/x-icon">


    
</head>
<body style="background-color: lightgray;">


<div class="intro" style="text-align: center; margin-top: 2em; margin-bottom: 2em;">
  <h1 class="text-center">LOGIN</h1>
</div>


   <div class="container bg-secondary"style="margin-top: 3rem; margin-bottom: 4rem;">
   <div class="row">
    <div class="col-md-2">




    </div>
    <div class="col-md-8">

   <form method="post" action="loginGroup.php" style="padding-top: 3rem; padding-bottom: 4rem;">

   <?php
   //include "loginGroup.php";
   ?>
   <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
  
  <div class="mb-3">
    <label for="uname" class="form-label text-white">USER NAME</label>
    <input type="text" name="uname" placeholder="username" class="form-control" id="uname" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="password" class="form-label text-white">PASSWORD</label>
    <input type="password" name="password" placeholder="user password" class="form-control" id="password">
  </div>

  <label for="" class="form-label text-white">SELECT USER GROUP</label>
                    <select required class="form-control" name="ugroup" id="">
                        <?php
                       
                        $sql = "select distinct user_group from users";
                        $result = $cons->query($sql);
                        if(mysqli_num_rows($result) > 0){
                            while($row = $result->fetch_assoc()){
                                ?>
                                <option value="<?php echo $row['user_group'];?>"><?php echo $row['user_group'];?></option>
                                <?php
                            }
                        }
                        mysqli_close($cons);
                        ?>
                    </select>

 
  <br><br>
  <button type="submit" name="submit" class="btn btn-primary">login</button>
  &nbsp;
  &nbsp;
  &nbsp;
  don't have an account?<a href="usersRegister.php" class="text-white">&nbsp;&nbsp; register</a>
</form>

</div>
    <div class="col-md-2"></div>
   </div>
   </div>


</body>
</html>