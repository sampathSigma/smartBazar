<?php
/**
 * Created by PhpStorm.
 * User: sampathkumar
 * Date: 29/10/20
 * Time: 11:36 AM
 */
include('connection.php');
//$email= $_POST['submit'];
//$query = mysqli_query($con, "insert into users (UserEmail) values('$email')");
//if($query){
//    echo "<script> alert('you have been successfully added')</script>";
//
//}else{
//    echo "<script> alert('please enter the valid email')</script>";
//
//}

?>  <script>alert("You have successfully subscribed newsletter");</script><?php
if(isset($_REQUEST['Subscribe']))
{
    if(!empty($_REQUEST['email']))
    {
        ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );
        $from = "sampath.g@sigmainfo.net";
        $to=$_REQUEST['email'];
        $subject = "News Subscription";
        $message = "You have Subscibed News Subscription";
        $headers = "From:" . $from;

// echo $to;
        if(mail($to,$subject,$message, $headers))
        {
            ?>"<script>alert("You have successfully subscribed newsletter");</script>"<?php

// echo "The email message was sent.";
        }
        else {
            ?>
<!--            <script>alert("Failed");</script>--><?php
// echo "failed";
        }



    }



}