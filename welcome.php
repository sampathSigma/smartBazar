<?php
////echo "hello </br>" ;
////echo " </br> welcome to your page ";
////echo "<br><a href='products.php'>Products</a></br> ";
////echo "<br><a href='logout.php'><input type='button' value='logout' name='logout'></a> ";
////session_start();
////include ('connection.php');
////
////$uid= $_SESSION['uid'];
////$query =  mysqli_query($con,"select UserFirstName from users where UserID= '$uid' ");
////
////    $row = mysqli_fetch_array($query);
////    $name = $row['UserFirstName'];
//
include "header.php";
include "footer.php"
//?>
<!---->
<?php
//session_start();
//include('connection.php');
//$uid=$_SESSION['uid'];
//$ret=mysqli_query($con,"select * from users where UserID='$uid'");
//$row=mysqli_fetch_array($ret);
//$email=$row['UserEmail'];
//$phone=$row['UserPhone'];
//$country=$row['UserCountry'];
//$address=$row['UserAddress'];
//$uid=$row1['UserID'];
//
////include ('header.php');
//?>
<!---->
<!---->
<!---->
<!--    <html>-->
<!--    <head>-->
<!--        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>-->
<!---->
<!--        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
<!--<!--        <style>-->-->
<!--<!--            .card {-->-->
<!--<!--                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);-->-->
<!--<!--                max-width: 300px;-->-->
<!--<!--                margin: auto;-->-->
<!--<!--                text-align: center;-->-->
<!--<!--                font-family: arial;-->-->
<!--<!--            }-->-->
<!--<!---->-->
<!--<!--            .title {-->-->
<!--<!--                color: grey;-->-->
<!--<!--                font-size: 18px;-->-->
<!--<!--            }-->-->
<!--<!---->-->
<!--<!--            button {-->-->
<!--<!--                border: none;-->-->
<!--<!--                outline: 0;-->-->
<!--<!--                display: inline-block;-->-->
<!--<!--                padding: 8px;-->-->
<!--<!--                color: white;-->-->
<!--<!--                background-color: #000;-->-->
<!--<!--                text-align: center;-->-->
<!--<!--                cursor: pointer;-->-->
<!--<!--                width: 100%;-->-->
<!--<!--                font-size: 18px;-->-->
<!--<!--            }-->-->
<!--<!---->-->
<!--<!--            a {-->-->
<!--<!--                text-decoration: none;-->-->
<!--<!--                font-size: 22px;-->-->
<!--<!--                color: black;-->-->
<!--<!--            }-->-->
<!--<!---->-->
<!--<!--            button:hover, a:hover {-->-->
<!--<!--                opacity: 0.7;-->-->
<!--<!--            }-->-->
<!--<!--        </style>-->-->
<!--    </head>-->
<!--    <body>-->
<!---->
<!--    <h2 style="text-align:center">User Profile Card</h2>-->
<!---->
<!--<!--    <div class="card" style="margin-bottom: 150px;">-->-->
<!--<!--        <img src="/w3images/team2.jpg" alt="John" style="width:100%">-->-->
<!--      --><?php //echo "<h1>$fname $lname!</h1>";
//        echo "<p>Phone Number: $phone</p>";
//        echo "<p>Email address: $email</p>";
//        echo "<p>Country: $country</p>";
//        echo "<p>Address: $address</p>";
//
//
//        ?>
<!---->
<!--        <p><button id="button">Update your address now</p>-->
<!---->
<!--        <br>-->
<!--        <!--<form  method="POST">-->
<!--         <div id="fn" hidden>Country :-->
<!--          <input type="text" name="country" />-->
<!--         </div>-->
<!--         <br>-->
<!--         <div id="ln" hidden>Address :-->
<!--          <input type="text" name="address"/>-->
<!--         </div>-->
<!--         <p><button  id="button2" hidden style="margin-top: 10px;" name="submit" >Save changes</button></p>-->
<!--        </form>-->
<!--        !-->-->
<!---->
<!--    </div>-->
<!--    <div id="wrapper">-->
<!---->
<!--        --><?php
//        include('connection.php');
//        $ret1=mysqli_query($con,"select * from Address where UserID='$uid'");
//
//        $cnt=1;
//        $rowz=mysqli_num_rows($ret1);
//        $row1=mysqli_fetch_array($ret1);
//        $AddressID=$row1['AddressID'];
//        ?>
<!---->
<!--        <table align="center" cellpadding="10" border="1" id="user_table">-->
<!--            <tr>-->
<!--                <th>Country</th>-->
<!--                <th>State</th>-->
<!--                <th>City</th>-->
<!--                <th>Address</th>-->
<!--                <th><a href="insert.php?id=--><?php //echo htmlentities($AddressID); ?><!--">-->
<!--                        <button class="btn btn-danger btn-xs" style="background-color: #fff">-->
<!--                            <span class="glyphicon glyphicon-pencil"></span></button>-->
<!--                    </a></th>-->
<!--            </tr>-->
<!--            <tbody>-->
<!--            --><?php
//
//            if($row1>0){
//                while ($row1=mysqli_fetch_array($ret1)) {
//
//                    ?>
<!--                    <!--Fetch the Records -->-->
<!--                    <tr>-->
<!---->
<!--                        <td>--><?php // echo $row1['Country'];?><!-- </td>-->
<!--                        <td>--><?php // echo $row1['State'];?><!--</td>-->
<!--                        <td>--><?php // echo $row1['City'];?><!--</td>-->
<!--                        <td> --><?php // echo $row1['Address'];?><!--</td>-->
<!--                        <td>-->
<!--                            <a href="update.php?id=--><?php //echo htmlentities($row1['AddressID']);?><!--" class="view" title="View" data-toggle="tooltip">update</a>-->
<!---->
<!--                            <a href="delete.php?delid=--><?php //echo htmlentities($row1['AddressID']);?><!--" class="delete" title="Delete" data-toggle="tooltip" onclick="return confirm('Do you really want to Delete ?');">Delete</a>-->
<!--                        </td>-->
<!--                    </tr>-->
<!--                    --><?php
//                } } else {?>
<!--                <tr>-->
<!--                    <th style="text-align:center; color:red;" colspan="6">No Record Found</th>-->
<!--                </tr>-->
<!--            --><?php //} ?>
<!---->
<!--            </tbody>-->
<!--        </table>-->
<!---->
<!--    </div>-->
<!---->
<!--    </body>-->
<!--    </html>-->
<!---->
<!---->
<?php
////include ('footer.php');
//?>