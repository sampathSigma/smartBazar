<?php
include ('connection.php');?>
<!--<script>alert("No active records");</script>-->

<h2>There are no recent orders to show.</h2>

<!DOCTYPE html>
<html>
<head>
    <title>Title of the document</title>
    <style>
        button {
            display: inline-block;
            background-color: #7b38d8;
            border-radius: 10px;
            border: 2px double #cccccc;
            color: #eeeeee;
            text-align: center;
            font-size: 23px;
            padding: 15px;
            width: 250px;

            cursor: pointer;
            margin: 5px;
        }
    </style>
</head>
<body>

<button type="submit" name="START SHOPPING" ><a href="products.php?START SHOPPING=<?php echo $_SESSION['USER_ID'];?>">START SHOPPING </a> </button>
</body>
</html>

