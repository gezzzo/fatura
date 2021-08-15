<?php

session_start();
include 'lib.php';

$res= unsubscripe($_SESSION['user']['id']);

if ($res == 1) {
    
    header("LOCATION:index.php");
    session_destroy();

    header("LOCATION:login_user.php");
}else {
    
    header("LOCATION:home.php");
    
}