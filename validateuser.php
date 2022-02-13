<?php
    session_start();
    $email=$_POST['email'];
    $password=$_POST['password'];
    if ($email=='jrsaija@gmail.com' && $password=='Jenil@53645!176') {
        $_SESSION['data']=10;
        header('location:index.php');
    }
    else {
        header('location:Login.php');
    }
?> 