<?php include "connectDB/connectDB.php"; ?>

<meta charset="utf-8">
<title>69market_dev</title>
<link rel="stylesheet" href="ostyles.css">

<head>
    <h1><b>69MARKET.DEV<br>PRODUCT DELETE</b></h1>
</head>
<?php
$pid = $_GET["pid"];

$sql_del = "DELETE FROM product WHERE pid = $pid;";
$result_del = mysqli_query($conn, $sql_del);

if ($result_del) {
    echo "<h3 class='border2'>Success</h3>";
    echo "<br><a href='admin_product.php'><button class='center button'>กลับ</button></a>";
} else {
    echo "<h3 class='border'>Failed</h3>" . $result_del;
    echo "<br><a href='admin_product.php'><button class='center button'>กลับ</button></a>";
}
?>