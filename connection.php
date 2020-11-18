<?php
session_start();

$con=mysqli_connect("localhost", "root", "Samp@123", "bsm");
if(mysqli_connect_errno()){
    echo "Connection Fail".mysqli_connect_error();

}
?>


