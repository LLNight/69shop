<?php include "connectDB/ConnectDB.php"; ?>
<html>

<head>
    <meta charset="utf-8">
    <title>69market_dev</title>
    <link rel="stylesheet" href="ostyles.css">
</head>

<body>
    <h1><b>69MARKET.DEV<br>PRODUCT INSERT</b></h1>
    <p>&nbsp;</p>

    <?php
    $pid = $_POST["pid"];
    $pname = $_POST["pname"];
    $pdetail = $_POST["pdetail"];
    $price = $_POST["price"];
    $pic = $_POST["pic"];

    $sql = "INSERT INTO `product`(`pid`, `pname`, `pdetail`, `price`, `pic`)
            VALUES ('$pid','$pname','$pdetail','$price','$pic')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<h3 class='border2'>Success</h3>";
        echo "<br><a href='admin_product.php'><button class='center button'>กลับ</button></a>";
    } else {
        echo "<h3 class='border'>Failed</h3>" . $result;
        echo "<br><a href='admin_product.php'><button class='center button'>กลับ</button></a>";
    }
    ?>
</body>

</html>