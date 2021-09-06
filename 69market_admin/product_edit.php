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
    $pid = $_GET["pid"];
    $sql = "SELECT * FROM product WHERE pid = $pid";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_array($result)) {
        $pid = $row['pid'];
        $pname = $row['pname'];
        $pdetail = $row['pdetail'];
        $price = $row['price'];
        $pic = $row['pic'];
    } ?>
    <p>
    <form action="product_update.php" method="post">
        ID: <input type="number" name="pid" value="<?= $pid ?>"><br>
        ชื่อสินค้า: <input type="text" name="pname" value="<?= $pname ?>"><br>
        รายละเอียดสินค้า: <br>
        <textarea name="pdetail" rows="3" cols="40"><?= $pdetail ?></textarea><br>
        ราคา: <input type="number" name="price" value="<?= $price ?>"><br>
        ชื่อไฟล์รูปภาพ(.jpg): <input type="text" name="pic" value="<?= $pic ?>"><br>
        <input type="button" class="button" value="BACK" onclick="history.back()">
        <input type="submit" value="EDIT">
    </form>
    </p>
</body>

</html>