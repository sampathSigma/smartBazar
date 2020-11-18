<?php
//database connection  file
include('connection.php');
//Code for deletion

    $id = $_REQUEST['del'];
//   if(mysqli_query($con, "DELETE FROM address WHERE AddressID=$id"))
//
//   {
//
//    ?><!--   <script>alert("Data Deleted");</script> --><?php
//
//   }
//else
// {
//
//    ?><!--   <script>alert("no data");</script> --><?php
//
//   }
//   // $_SESSION['message'] = "Address deleted!";
//
//    header('location: account.php');
//?>
<?php

$query="DELETE FROM address WHERE AddressID=$id";
if($con->query($query))
    {

    ?>   <script>alert("Data Deleted"); window.location.href="account.php"; </script> <?php

}
else
{

    ?>   <script>alert("no data");</script> <?php

}
?>