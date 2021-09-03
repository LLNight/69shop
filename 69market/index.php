<?php include "connectDB/ConnectDB.php"; ?>
<html>
    <head>
        <meta charset="utf-8">
        <title>69market</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
    <h1>69market</h1>
    <p>ยินดีต้อนรับ</p>

    <p>เลือกสินค้าที่ต้องการสั่งซื้อ<br>
    กรอกรายละเอียดเพื่อทำการสั่งซื้อ<br>
    และโอนเงินมาที่บัญชี 0201****9963 ธนาคารออมสิน
    </p>
    <hr size="3">
    <p>&nbsp;</p>
    </body>
</html>
<?php
    include "connectDB/ConnectDB.php";
    $sql = "SELECT * FROM product";
    $result = mysqli_query($conn, $sql);

        echo '<table class="center">
                    <tr>
                        <th>รหัสสินค้า</th>
                        <th>ชื่อสินค้า</th>
                        <th>รายละเอียดสินค้า</th>
                        <th>ราคา</th>
                        <th>รูปภาพสินค้า</th>
                    </tr>';
            while($row = mysqli_fetch_array($result)){
                echo "<tr class='cen'><td>".$row['pid']."</td>";
                echo "<td>".$row['pname']."</td>";
                echo "<td>".$row['pdetail']."</td>";
                echo "<td>".$row['price']."</td>";
                echo "
                <td><img src='p_picture/".$row['pic'].".jpg' width='150'><br>
                <a href='buy.php?pid=".$row['pid']."'>สั่งซื้อ</a></td></tr>";
            }
?>