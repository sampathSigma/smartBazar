<?php

include "header.php";
session_start();
error_reporting(0);
include('connection.php');

if(isset($_SESSION['fnmae']))
{
    session_destroy();
    echo "<script> location.href='login.php'</script>";
}else{
    echo "<script> location.href='login.php'</script>";
}