<html>

<head>
    <!--logo heading-->
    <div style="background-color:black;color:white;padding:20px;">
        <img src='p_picture/69market_logo.jpg' width='400' alt="logo" />
    </div>
    <meta charset="utf-8">
    <title>69market</title>
    <link rel="stylesheet" href="styles.css">
</head>
<?php include "connectDB/connectDB.php";

$pid = intval($_POST["pid"]);
$cusname = $_POST["cusname"];
$address = $_POST["address"];
$qty = $_POST["qty"];
$bank = $_POST["bank"];
$sum = $_POST["sum"];

if (isset($_POST["send"])) {

    $sql2 = "INSERT INTO `order`(`pid`, `qty`, `sum`, `cusname`, `address`, `bank`, `status`)
                            VALUES ('$pid','$qty','$sum','$cusname','$address','$bank','wait')";
    $result2 = mysqli_query($conn, $sql2);

    if ($result2) {
        echo '<h1>สั่งซื้อสำเร็จ</h1><br>';
        echo '<h3 class="border2">โปรดโอนเงินจำนวน ' . $sum . ' บาท<br>
                        มาที่บัญชี 0201****9963 ธนาคารออมสิน</h3><br>';
        //echo $pid, $cusname, $address, $qty, $bank, $sum;
        echo "<a href='index.php'><button class='center button'>กลับ</button></a><p>&nbsp;</p>";
        echo "<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>";
    } else {
        echo '<h1>สั่งซื้อไม่สำเร็จ</h1><br>';
        echo "<a href='index.php'><button class='center button'>กลับ</button></a><p>&nbsp;</p>";
        echo "<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>";
    }
}
?>
<div id='bottom' style='background-color:black;color:black;'>
    <div>
        <p class='white'>Copyright © 2021 69Market Co. All rights reserved.</p>
    </div>
</div>

</html>