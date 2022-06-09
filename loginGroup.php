<?php 

session_start(); 

include "smisconnect.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['uname']);

    $password = validate($_POST['password']);

    $uGroup = validate($_POST['ugroup']);

    if (empty($uname)) {

        header("Location: login.php?error=Username is required");

        exit();

    }else if(empty($password)){

        header("Location: login.php?error=Password is required");

        exit();

    }else if(empty($uGroup)){

        header("Location: login.php?error=User Group is required");

        exit();

    }else{

        $sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$password' AND user_group='$uGroup'";

        $result = mysqli_query($cons, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['user_name'] === $uname && $row['password'] === $password && $row['user_group'] === "System Administrator") {

                echo "Logged in!";

                $_SESSION['user_name'] = $row['user_name'];

                $_SESSION['password'] = $row['password'];

                $_SESSION['user-group'] = $row['user-group'];


                $_SESSION['id'] = $row['id'];

                header("Location: dashboard.html");

                exit();

            }else if ($row['user_name'] === $uname && $row['password'] === $password && $row['user_group'] === "Administrator") {

                echo "Logged in!";

                $_SESSION['user_name'] = $row['user_name'];

                $_SESSION['password'] = $row['password'];

                $_SESSION['user-group'] = $row['user-group'];


                $_SESSION['id'] = $row['id'];

                header("Location: admin_dashboard.html");

                exit();

            }else if ($row['user_name'] === $uname && $row['password'] === $password && $row['user_group'] === "Accounts") {

                echo "Logged in!";

                $_SESSION['user_name'] = $row['user_name'];

                $_SESSION['password'] = $row['password'];

                $_SESSION['user-group'] = $row['user-group'];


                $_SESSION['id'] = $row['id'];

                header("Location: account_dashboard.html");

                exit();

            }else if ($row['user_name'] === $uname && $row['password'] === $password && $row['user_group'] === "Front Office") {

                echo "Logged in!";

                $_SESSION['user_name'] = $row['user_name'];

                $_SESSION['password'] = $row['password'];

                $_SESSION['user-group'] = $row['user-group'];


                $_SESSION['id'] = $row['id'];

                header("Location: frontOffice_dashboard.html");

                exit();

            }else if ($row['user_name'] === $uname && $row['password'] === $password && $row['user_group'] === "Management") {

                echo "Logged in!";

                $_SESSION['user_name'] = $row['user_name'];

                $_SESSION['password'] = $row['password'];

                $_SESSION['user-group'] = $row['user-group'];

                $_SESSION['id'] = $row['id'];

                header("Location: management_dashboard.html");

                exit();

            }else{

                header("Location: login.php?error=Incorrect Username, password or user group");

                echo "wrong password, or username or user group";

                exit();

            }

        }else{

            header("Location: login.php?error=Incorrect Username, password or user group");

            echo "wrong password, or username or user group";

            exit();

        }

    }

}else{

    header("Location: login.php");

    echo "wrong password, or username or user group";

    exit();

}