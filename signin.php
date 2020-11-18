<?php
session_start();
error_reporting(0);
include('connection.php');



if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    $res=mysqli_query($con,"select * from users where (UserEmail='$email' OR UserPhone='$email') AND UserPassword='$password'");
    $check_user=mysqli_num_rows($res);
    if($check_user>0){
        $row=mysqli_fetch_assoc($res);
      //  echo $row['UserFirstName'];
        $_SESSION['USER_LOGIN']='yes';
        $_SESSION['USER_ID']=$row['UserID'];
        $_SESSION['USER_NAME']=$row['UserFirstName'];
        echo "<script > alert('Successfully login'); </script>";
       echo "<script > document.location ='welcome.php'; </script>";
    }else{
        echo "<script>alert('Invalid Details');</script>";
       echo "<script > document.location ='login.php'; </script>";
      
    }

//    $query = mysqli_query($con, "select * from users where (UserEmail='$email' OR UserPhone='$email') AND UserPassword='$password' ");
//
//
//    $ret=mysqli_fetch_array($query);
//    if($ret>0){
//        $row=mysqli_fetch_assoc($query);
//        $_SESSION['USER_LOGIN']='yes';
//        $_SESSION['USER_ID']=$row['UserID'];
//        $_SESSION['USER_NAME']=$row['UserFirstName'];
//       // echo $row['UserID'];
//     //   echo isset($_SESSION['USER_NAME']);
//      echo "<script > alert('Successfully login'); </script>";
//        echo "<script > document.location ='index.php'; </script>";
//
////        $_SESSION['USER_LOGIN']='yes';
////        $_SESSION['uid']=$ret['ID'];
////        echo "<script > alert('Successfully login'); </script>";
////        $_SESSION['UserId']=$email;
////
////        echo "<script > document.location ='index.php'; </script>";
//    }
//    else{
//        echo "<script>alert('Invalid Details');</script>";
//        echo "<script > document.location ='login.php'; </script>";
//    }
 /*   if(isset($_SESSION["uid"])) {
        if(!isLoginSessionExpired()) {
            echo "<script > document.location ='login.php'; </script>";
        } else {
            echo "<script > alert('expired'); </script>";
        }
    }
    function isLoginSessionExpired() {
        $login_session_duration = 10;
        $current_time = time();
        if(isset($_SESSION['loggedin_time']) and isset($_SESSION["uid"]))
        {
            if(((time() - $_SESSION['loggedin_time']) > $login_session_duration))
            {
                return true;
            }
        }
        return false;
    }*/

}

?>