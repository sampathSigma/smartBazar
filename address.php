<?php
//// include database connection file
//require_once'connection.php';
//
//// Code for record deletion
//if(isset($_REQUEST['del']))
//{
////Get row id
//    $uid=intval($_GET['del']);
////Qyery for deletion
//    $sql = "delete from users WHERE  UserID=:id";
//// Prepare query for execution
//    $query = $con->prepare($sql);
//// bind the parameters
//    $query-> bindParam(':id',$uid, PDO::PARAM_STR);
//// Query Execution
//    $query -> execute();
//// Mesage after updation
//    echo "<script>alert('Address Updated successfully');</script>";
//// Code for redirection
//    echo "<script>window.location.href='address.php'</script>";
//}
//
//
//?>
<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="utf-8">-->
<!--    <title> </title>-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">-->
<!--    <style type="text/css">-->
<!---->
<!--    </style>-->
<!--    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>-->
<!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>-->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
<!--    <script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>-->
<!--</head>-->
<!--<body>-->
<!--<div class="container">-->
<!--    <div class="row">-->
<!--        <div class="col-md-12">-->
<!--            <h3>Add Your Address</h3> <hr />-->
<!--            <a href="insert.php"><button class="btn btn-primary"> Add your address</button></a>-->
<!--            <div class="table-responsive">-->
<!--                <table id="mytable" class="table table-bordred table-striped">-->
<!--                    <thead>-->
<!---->
<!--                    <th>#</th>-->
<!--                    <th>UserAddress</th>-->
<!--                    <th>UserCountry</th>-->
<!--                    <th>UserState</th>-->
<!--                    <th>UserCity</th>-->
<!--                    <th>UserPhone</th>-->
<!---->
<!--<!--                    <th>Posting Date</th>-->-->
<!--                    <th>Edit</th>-->
<!--                    <th>Remove</th>-->
<!--                    </thead>-->
<!--                    <tbody>-->
<!---->
<!--                    --><?php
//                    $sql = "SELECT UserAddress,UserCountry,UserState,UserCity,UserPhone,UserID from users";
//                    //Prepare the query:
//                    $query = $con->prepare($sql);
//                    //Execute the query:
//                    $query->execute();
//                    //Assign the data which you pulled from the database (in the preceding step) to a variable.
//                    $results=$query->fetchAll(PDO::FETCH_OBJ);
//                    // For serial number initialization
//                    $cnt=1;
//                    if($query->rowCount() > 0)
//                    {
////In case that the query returned at least one record, we can echo the records within a foreach loop:
//                        foreach($results as $result)
//                        {
//                            ?>
<!--                            <tr>-->
<!--                                <td>--><?php //echo htmlentities($cnt);?><!--</td>-->
<!--                                <td>--><?php //echo htmlentities($result->UserAddress);?><!--</td>-->
<!--                                <td>--><?php //echo htmlentities($result->UserCountry);?><!--</td>-->
<!--                                <td>--><?php //echo htmlentities($result->UserState);?><!--</td>-->
<!--                                <td>--><?php //echo htmlentities($result->UserCity);?><!--</td>-->
<!--                                <td>--><?php //echo htmlentities($result->UserPhone);?><!--</td>-->
<!--<!--                                <td>-->--><?php ////echo htmlentities($result->PostingDate);?><!--<!--</td>-->-->
<!---->
<!--                                <td><a href="update.php?id=--><?php //echo htmlentities($result->id);?><!--"><button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></a></td>-->
<!---->
<!--                                <td><a href="address.php?del=--><?php //echo htmlentities($result->id);?><!--"><button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><span class="glyphicon glyphicon-trash"></span></button></a></td>-->
<!--                            </tr>-->
<!---->
<!---->
<!--                            --><?php
//// for serial number increment
//                            $cnt++;
//                        }} ?>
<!--                    </tbody>-->
<!--                </table>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>-->
<!--<!-- textaddneww -->-->
<!--<ins class="adsbygoogle"-->
<!--     style="display:inline-block;width:728px;height:15px"-->
<!--     data-ad-client="ca-pub-8906663933481361"-->
<!--     data-ad-slot="3318815534"></ins>-->
<!--<script>-->
<!--    (adsbygoogle = window.adsbygoogle || []).push({});-->
<!--</script>-->
<!--</body>-->
<!--</html>-->



<?php  include('server.php');

	if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $update = true;
        $record = mysqli_query($con, "SELECT * FROM users WHERE UserID=$id");

        if (count($record) == 1 ) {
            $n = mysqli_fetch_array($record);
            $phone = $n['phone'];
            $address = $n['address'];
        }
    }
?>
<html>
<head>
    <title>CRUD: CReate, Update, Delete PHP MySQL</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<body>
<?php if (isset($_SESSION['message'])): ?>
    <div class="msg">
        <?php
        echo $_SESSION['message'];
        unset($_SESSION['message']);
        ?>
    </div>
<?php endif ?>
<form method="post" action="server.php">
    <?php $results = mysqli_query($con, "SELECT * FROM users"); ?>

    <table>
        <thead>
        <tr>
            <th>Phone</th>
            <th>Address</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>

        <?php while ($row = mysqli_fetch_array($results)) { ?>
            <tr>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td>
                    <a href="address.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
                </td>
                <td>
                    <a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>

    <form>
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <div class="input-group">
        <label>Phone</label>
        <input type="number" name="phone" value="<?php echo $phone; ?>">
    </div>
    <div class="input-group">
        <label>Address</label>
        <input type="text" name="address" value="<?php echo $address; ?>">
    </div>
    <div class="input-group">
        <button class="btn" type="submit" name="save" >Save</button>
        <?php if ($update == true): ?>
            <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
        <?php else: ?>
            <button class="btn" type="submit" name="save" >Save</button>
        <?php endif ?>

    </div>
</form>
</body>
</html>
