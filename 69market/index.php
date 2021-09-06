<?php include "connectDB/ConnectDB.php"; ?>
<html>

<head>
    <meta charset="utf-8">
    <title>69market</title>
    <link rel="stylesheet" href="styles_index.css">

    <!--logo heading-->
    <div style="background-color:black;color:white;padding:20px;">
        <img src='p_picture/69market_logo.jpg' width='400' alt="logo" />
    </div>
</head>

<body>

    <marquee class="GeneratedMarquee" direction="left" scrollamount="20" behavior="scroll">
        ยินดีต้อนรับสู่ 69Market ตลาดมืดออนไลน์ที่ดีและปลอดภัยที่สุดในประเทศ ส่งของไวโดยทีมงานมืออาชีพ ปลอดภาษี
        ไม่เก็บข้อมูลส่วนตัว ปลอดภัยหายห่วง 100% โอนแล้วไม่ได้รับของยินดีคืนเงินสองเท่า!!! ดีขนาดนี้ รออะไรกันอยู่ มาใช้บริการกันเร็ว!!!</marquee>

    <p>&nbsp;</p>
    <div class="box box-3">
        <p>
        <h3>เลือกสินค้าที่ต้องการสั่งซื้อ<br>
            กรอกรายละเอียดเพื่อทำการสั่งซื้อ<br>
            และโอนเงินมาที่บัญชี 0201****9963 ธนาคารออมสิน</h3>
        </p>
    </div>
    <p>&nbsp;</p>
</body>

<?php
include "connectDB/ConnectDB.php";
$sql = "SELECT * FROM product";
$result = mysqli_query($conn, $sql);
$n = 0;

echo '<table class="center" id="t01">
                    <tr>
                        <th>รหัสสินค้า</th>
                        <th>ชื่อสินค้า</th>
                        <th>รายละเอียดสินค้า</th>
                        <th>ราคา</th>
                        <th>รูปภาพสินค้า</th>
                    </tr>';
while ($row = mysqli_fetch_array($result)) {
    echo "<tr class='cen'><td>" . $row['pid'] . "</td>";
    echo "<td>" . $row['pname'] . "</td>";
    echo "<td>" . $row['pdetail'] . "</td>";
    echo "<td>" . $row['price'] . "</td>";
    echo "
                <td><img src='p_picture/" . $row['pic'] . ".jpg' width='150'><br>
                <a href='buy.php?pid=" . $row['pid'] . "'><button class='center'>BUY NOW CLICK</button></a></td></tr>";
    ++$n;
}
if (mysqli_num_rows($result) == $n) {
    echo "<td colspan='5'>
            <div id='bottom' style='background-color:black;color:white;'>
              <div>
                <p class='white'>Copyright © 2021 69Market Co. All rights reserved.</p>
              </div>
            </div></td>";
}
?>