<?php
 include ("connection.php");

if(isset($_REQUEST['query'])) {
    $inputText=$_POST['query'];
//  echo "in";
    //$query = $_REQUEST['query'];
    $selectquery = "SELECT * FROM products WHERE ProductName  LIKE '%" . $inputText . "%' OR ProductSKU  LIKE '%" . $inputText . "%' ";
    $result = $con->query($selectquery);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
           // echo $row['ProductName'];
            echo "<a href='#' class='list-group-item list-group-item-action border-1'>". $row['ProductName'] ."</a>";
        }
        }
}else{
    echo "<p class ='list-group-item border-1'>No Record> </p>";

}
/*echo " <a href='#' class='list-group-item list-group-item-action border=1'> ".$row['ProductName']."</a>";*/
/*  echo "<a href='#'class='list-group-item' > ".$row['ProductName']."</a>";
}
}
else
{
echo "<p class='list-group-item border-1'>No Record</p>";
}
}
else
{
echo "failed";
}
