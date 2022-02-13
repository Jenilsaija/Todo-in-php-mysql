<?php
    session_start();
    unset($_SESSION['data']);
    header('location:index.php');
?> 
