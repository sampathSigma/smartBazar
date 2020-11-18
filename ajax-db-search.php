<?php
//include("header.php");
//include("footer.php");

include("connection.php");
if(isset($_REQUEST['search_submit'])){
    $search = $_REQUEST['search'];
//    echo $search;
//    exit;
}

?>






<!DOCTYPE html>


<html>
<head>
    <style>
        .inline{
            display: inline-block;
            float: right;
            margin: 20px 0px;
        }

        input, button{
            height: 34px;
        }

        .pagination {
            display: inline-block;
        }
        .pagination a {
            font-weight:bold;
            font-size:18px;
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
            border:1px solid black;
        }
        .pagination a.active {
            background-color: pink;
        }
        .pagination a:hover:not(.active) {
            background-color: skyblue;
        }
    </style>
    <title> </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>



<?php
//$id = $_SESSION['USER_ID']; 
$per_page_record = 4;  // Number of entries to show in a page.
// Look for a GET variable page if not found default is 1.
if (isset($_GET["page"])) {
    $page  = $_GET["page"];
}
else {
    $page=1;
}

$start_from = ($page-1) * $per_page_record;
//echo $start_from ;

$results  = mysqli_query($con, "SELECT * FROM products WHERE ProductName  LIKE '%" . $search . "%' OR ProductSKU  LIKE '%" . $search . "%' LIMIT $start_from, $per_page_record ");
//print_r($results);
//exit;
?>


<table>

    <thead>
    <tr>
        <th>id</th>
        <th>Product Name</th>
        <th>Product Price</th>
        <th>Product Description</th>

    </tr>
    </thead>


    <?php while ($row = mysqli_fetch_array($results)) {
        //echo "<pre>";
        //print_r($row);

        ?>
        <tr>
            <td><?php echo $row['ProductSKU']; ?></td>
            <td><?php echo $row['ProductName']; ?></td>
            <td><?php echo $row['ProductPrice']; ?></td>
            <td><?php echo $row['ProductLongDesc']; ?></td>

        </tr>
    <?php } ?>
</table>

<div class="pagination">
    <?php
    $query = "SELECT COUNT(*) FROM products";
    $rs_result = mysqli_query($con, $query);
    $row = mysqli_fetch_row($rs_result);
    $total_records = $row[0];

    echo "</br>";
    // Number of pages required.
    $total_pages = ceil($total_records / $per_page_record);
    $pagLink = "";

    if($page>=2){
        echo "<a href='ajax-db-search.php?page=".($page-1)."'>  Prev </a>";
    }

    for ($i=1; $i<=$total_pages; $i++) {
        if ($i == $page) {
            $pagLink .= "<a class = 'active' href='ajax-db-search.php?page="
                .$i."'>".$i." </a>";
        }
        else  {
            $pagLink .= "<a href='ajax-db-search.php?page=".$i."'>   
                                                ".$i." </a>";
        }
    };
    echo $pagLink;

    if($page<$total_pages){
        echo "<a href='ajax-db-search.php?page=".($page+1)."'>  Next </a>";
    }

    ?>
</div>


<div class="inline">
    <input id="page" type="number" min="1" max="<?php echo $total_pages?>"
           placeholder="<?php echo $page."/".$total_pages; ?>" required>
    <button onClick="go2Page();">Go</button>
</div>
</div>
</div>
</center>
<script>
    function go2Page()
    {
        var page = document.getElementById("page").value;
        page = ((page><?php echo $total_pages; ?>)?<?php echo $total_pages; ?>:((page<1)?1:page));
        window.location.href = 'ajax-db-search.php?page='+page;
    }
</script>




</body>
</html>