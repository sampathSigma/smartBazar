<?php
include("connection.php");
?>

<?php // include('server.php');
//       if (isset($_GET['edit'])) {
//           $id = $_GET['edit'];
//           $update = true;

//           echo $id;
//           $record = mysqli_query($con, "SELECT * FROM address WHERE UserID=$id");
//           echo $record;
//       }
//
//            if (count($record) == 1 ) {
//                $n = mysqli_fetch_array($record);
//                $UserCountry = $n['country'];
//                $UserState = $n['state'];
//               $UserAddress = $n['address'];
//               $UserCity= $n['city'];
//
//
//        }
//?>





<!DOCTYPE html>


<html>
<head>
    <title> </title>
   <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php //if (isset($_SESSION['message'])): ?>
<!--    <div class="msg">-->
<!--        --><?php
//        echo $_SESSION['message'];
//        unset($_SESSION['message']);
//        ?>
<!--    </div>-->
<?php //endif ?>

<?php
$id = $_SESSION['USER_ID'];
$results  = mysqli_query($con, "SELECT * FROM address WHERE UserID='$id'");
//print_r($results);
?>

<button type="submit" name="insert" ><a href="server.php?insert=<?php echo $_SESSION['USER_ID'];?>">Insert </a> </button>
<table>

    <thead>
    <tr>
        <th>Country</th>
        <th>State</th>
        <th>Address</th>
        <th>City</th>
        <th colspan="2">Action</th>
    </tr>
    </thead>


    <?php while ($row = mysqli_fetch_array($results)) {
        //echo "<pre>";
        //print_r($row);

        ?>
        <tr>
            <td><?php echo $row['Country']; ?></td>
            <td><?php echo $row['State']; ?></td>
            <td><?php echo $row['Address']; ?></td>
            <td><?php echo $row['City']; ?></td>
            <td id="edit">
                <a href="update.php?edit=<?php echo $row['AddressID']; ?>" class="edit_btn" >Edit</a>
            </td>
            <td>
                <a href="delete.php?del=<?php echo $row['AddressID']; ?>" class="del_btn">Delete</a>
            </td>
        </tr>
    <?php } ?>
</table>




</body>
</html>