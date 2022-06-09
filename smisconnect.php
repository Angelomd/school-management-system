<?php
        $cons = mysqli_connect("localhost","root","","smis");
        if(!$cons){
            die("Database connection error : " . mysqli_connect_error());
        }