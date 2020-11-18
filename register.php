<?php

   include "header.php";

   include('connection.php');

    if(isset($_POST['Submit']))
    {

    $fname = ($_POST["fname"]);
    $lname = ($_POST["lname"]);
    $email = ($_POST["email"]);

    $phone = ($_POST["phone"]);

    $password = ($_POST["password"]);
    $confirmPassword = ($_POST["Cpassword"]);
        $time = date ("H:i:s");





        if ($_POST['password'] !== $_POST['Cpassword'])
        {
            echo "<script> alert('Password and Confirm password should match!')</script>";
            echo "<script> document.location.href='register.php'</script>";
            exit();
        }
        $duplicate=mysqli_query($con,"select * from `users` where `UserEmail`='$email'");
        if (mysqli_num_rows($duplicate)>0)
        {
            echo "<script> alert ('the email or contact number already associated with another account Try to login')</script>";
            header("Location: login.php");

        }
        else{
            $sql = "INSERT INTO `users`( `UserFirstName`,`UserLastName`,`UserPhone`, `UserEmail`, `UserPassword`,`loggedin_time`) 
		VALUES ('$fname','$lname','$phone','$email','$password','$time')";
            if (mysqli_query($con, $sql)) {
                echo "<script>alert('You have successfully registered');</script>";
                echo "<script > document.location ='login.php'; </script>";


            }
            else {
                echo "<script>alert('Something Went Wrong. Please try again');</script>";
                echo "<script > document.location =SSignin.html </script>";


            }
        }
        mysqli_close($con);


          /*  $ret = mysqli_query($con, "select UserEmail from users where UserPhone='$phone' || UserEmail='$email' ");
            $result = mysqli_fetch_array($ret);

    if($result>0)
    {
        echo "<script> alert ('the email or contact number already associated with another account Try to login')</script>";
        echo "<script> window.location.herf='login.php'</script>";

    }
    else{


        $query = mysqli_query($con, "insert into users (UserFirstName, UserLastName, UserEmail,  UserPhone, UserPassword) values('$fname', '$lname', '$email', '$phone','$password')");




        echo $query;
        if ($query)
        {

            echo "<script>alert('You have successfully registered');</script>";
            echo "<script> window.location.herf='login.php'</script>";
        }
        else
        {


            echo "<script>alert('Something Went Wrong. Please try again');</script>";
            echo "<script> window.location.href='siSignin.html/script>";
        }
    }*/

}
?>

<!--/*include('connection.php');-->
<!--if(isset($_POST['submit'])) {-->
<!--    $fname = $_POST['fname'];-->
<!--    $lname = ($_POST["lname"]);-->
<!--    $mnumber = $_POST['phone'];-->
<!--    $emailid = $_POST['email'];-->
<!--    $password = $_POST['password'];-->
<!--    $cpassword = $_POST['Cpassword'];-->
<!---->
<!--    if ($_POST['password'] !== $_POST['Cpassword']) {-->
<!--        echo('Password and Confirm password should match!');-->
<!--    }-->
<!---->
<!---->
<!---->
<!--        $ret = mysqli_query($con, "select UserEmail from users where UserEmail='$emailid' || UserPhone='$mnumber' ");-->
<!--        $result = mysqli_fetch_array($ret);-->
<!---->
<!---->
<!--        if ($result > 0) {-->
<!--            echo "<script> alert ('the email or contact number already associated with another account')</script>";-->
<!--        } else {-->
<!---->
<!--            $query = mysqli_query($con, "insert into users (UserFirstName, UserLastName, UserEmail,  UserPhone, UserPassword) values('$fname', '$lname', '$emailid', '$mnumber','$password')");-->
<!---->
<!--           /* if ($query) {-->
<!--                $to = $email;-->
<!--                $subject = "My subject";-->
<!--                $txt = "hello World";-->
<!--                $header = "from : webmaster@example.com" . "\r\n" . "CC: Somebodyelse@example.com";-->
<!--                mail($to, $subject, $txt, $header);-->
<!--                echo "<script>alert('sucessfully mail sent');</script>";-->
<!--                echo "<script> window.location.href('login.php')</script>";-->
<!--            }-->
<!---->
<!--            if ($query) {-->
<!---->
<!--                echo "<script>alert('You have successfully registered');</script>";-->
<!--                echo "<script> window.location.herf='login.php'</script>";-->
<!--            } else {-->
<!---->
<!---->
<!--                echo "<script>alert('Something Went Wrong. Please try again');</script>";-->
<!--                echo "<script> window.location.href='index.php'</script>";-->
<!--            }-->
<!--        }-->
<!---->
<!---->
<!--}*/-->






