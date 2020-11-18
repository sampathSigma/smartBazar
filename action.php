<?php
include('connection.php');
If(isset($_POST['Search'])){
    $inpText=$_POST['query'];
    $query="SELECT CategoryName FROM productcategories WHERE CategoryName = '%$inpText%'
";
    $result = $con->query($query);
    if($result->num_rows>0){
        while ($row=$result->fetch_assoc()){
            echo "<a href='#' class='list-group-item list-group-item-action border-1'>".$row['CategoryName']."</a>" ;
        }
    }
    else{
        echo "<script>alert('No Related Products ');</script>";

    }
}