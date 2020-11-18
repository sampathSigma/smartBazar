<?php 
include ("connection.php");
$id = $_REQUEST['edit'];
//print_r($id);
$select="select * from address WHERE AddressID=$id";
//echo $select;
if($result=mysqli_query($con,$select))
{
    if(mysqli_num_rows($result)>0)
    {
        while($row = mysqli_fetch_array($result))
        {
            $addressid=$row['AddressID'];
            $address=$row['Address'];
            $country=$row['Country'];
            $state=$row['State'];
            $city=$row['City'];
            //$zip=$row['Zip'];

        }
    }
}
if(isset($_REQUEST['update']))
{
    $data=array('Address'=>$_REQUEST['Address'],'Country'=>$_REQUEST['Country'],'State'=>$_REQUEST['State'],'City'=>$_REQUEST['City']);
     //print_r($data);

    $query="update address set Address='$data[Address]',Country='$data[Country]',State='$data[State]',City='$data[City]' where AddressID='$addressid' ";
   // echo $query;
    if($con->query($query))
    {
        ?><script>alert("Data Updated");
        location.href="account.php";

    </script><?php
    }
    else
    {
        ?><script>alert("Not Updated");</script><?php
    }
}

?>





<form method="post" action="#" >

    <input type="hidden" name="id" value="<?php echo $id; ?>"

    <div class="input-group">
        <label>Country</label>
        <input type="text" name="Country" value="<?php echo $country; ?>">
    </div>
    <div class="input-group">
        <label>State</label>
        <input type="text" name="State" value="<?php echo $state; ?>">
    </div>

    <div class="input-group">
        <label>Address</label>
        <input type="text" name="Address" value="<?php echo $address; ?>">
    </div>

    <div class="input-group">
        <label>City</label>
        <input type="text" name="City" value="<?php echo $city; ?>">
    </div>

    <div class="input-group">
        <button class="btn" type="submit" name="update" style="background: #556B2F;">update</button>
        
        
<!--        --><?php //if ($update == true):
//
//            if (isset($_POST['update'])) {
//                $id = $_POST['id'];
//                $UserCountry = $_POST['country'];
//                $UserState = $_POST['state'];
//                $UserAddress = $_POST['address'];
//                $UserCity = $_POST['city'];
//
//                mysqli_query($con, "UPDATE address SET Country='$UserCountry', State='$UserState',Address='$UserAddress',City='$UserCity' WHERE AddressID=$id");
//                $_SESSION['message'] = "Address updated!";
//                header('location: account.php');
//            }
//
//            ?>
<!--            <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>-->
<!--        --><?php //else:
//
//
//            ?>
<!--            <button class="btn" type="submit" name="save" >Save</button>-->
<!--        --><?php //endif ?>
    </div>


</form>