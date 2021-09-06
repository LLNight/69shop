<?php include "connectDB/ConnectDB.php"; ?>
<html>

<head>
    <meta charset="utf-8">
    <title>69market_dev</title>
    <link rel="stylesheet" href="ostyles.css">
</head>

<body>
    <h1><b>69MARKET.DEV<br>PRODUCT EDITOR</b></h1>
    <p>&nbsp;</p>

    <?php
    $pid = $_POST["pid"];
    $pname = $_POST["pname"];
    $pdetail = $_POST["pdetail"];
    $price = $_POST["price"];
    $pic = $_POST["pic"];

    $sql_update = "UPDATE product 
    SET pid = $pid, pname = '" . $pname . "', pdetail = '" . $pdetail . "', price = $price, pic = '" . $pic . "' 
    WHERE pid = $pid;";
    $result_update = mysqli_query($conn, $sql_update);
    if ($result_update) {
        echo "<h3 class='border2'>Success</h3>";
        echo "<br><a href='admin_product.php'><button class='center button'>กลับ</button></a>";
    } else {
        echo "<h3 class='border'>Failed</h3>" . $result_update;
        echo "<br><a href='admin_product.php'><button class='center button'>กลับ</button></a>";
    }
    ?>
</body>
<html>