<?php
include('connection.php');

if(isset($_POST['SUBMIT'])){
    $data =$_POST['search'];
    $sql="SELECT CategoryName FROM productcategories WHERE CategoryName ='$data'";
    $result=$con->query($sql);
    $row=$result->fetch_assco();

    echo "ID :".$row['id']."</br>";
        


}