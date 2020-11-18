<?php
session_start();
include "connection.php";


// initialize variables

//
//$UserCountry = "";
//$UserState = "";
//$UserAddress ="";
//$UserCity ="";
//$id = 0;
//$update = false;

//if (isset($_POST['save'])) {
//    $UserCountry = $_POST['country'];
//    $UserState = $_POST['state'];
//    $UserAddress = $_POST['address'];
//    $UserCity = $_POST['city'];
//
?>

    <head>
        <title> </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>


<form method="post" action="#" >

    <input type="hidden" name="id" value="<?php echo $id; ?>"

    <div class="input-group">
        <label>Country</label>
        <input type="text" name="Country" value="">
    </div>
    <div class="input-group">
        <label>State</label>
        <input type="text" name="State" value="">
    </div>

    <div class="input-group">
        <label>Address</label>
        <input type="text" name="Address" value="">
    </div>

    <div class="input-group">
        <label>City</label>
        <input type="text" name="City" value="">
    </div>

    <div class="input-group">

        <button class="btn" type="submit" name="save" style="background: #556B2F;">Insert</button>

</div>
</form>

<?php

    if (isset($_POST['save'])) {
        $UserCountry = $_POST['Country'];
        $UserState = $_POST['State'];
        $UserAddress = $_POST['Address'];
        $UserCity = $_POST['City'];
        $id = $_REQUEST['insert'];

       if(mysqli_query($con, "INSERT INTO address (Country,State,Address,City,UserID) VALUES ('$UserCountry','$UserState','$UserAddress','$UserCity','$id')"))

        {

    ?>   <script>alert(" Data Inserted "); window.location.href="account.php"; </script>

            <?php
   }
else
 {

    ?>   <script>alert("Data Not Inserted");</script> <?php

   }
  }
    ?>