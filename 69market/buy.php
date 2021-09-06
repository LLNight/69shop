<?php include "connectDB/connectDB.php"; ?>
<html>

<head>
    <meta charset="utf-8">
    <title>69market</title>
    <link rel="stylesheet" href="styles.css">
    <!--logo heading-->
    <div style="background-color:black;color:white;padding:20px;">
        <img src='p_picture/69market_logo.jpg' width='400' alt="logo" />
    </div>
</head>
<h1>คำสั่งซื้อ</h1>

<body>
    <?php
    if (!empty($_GET)) {
        $pid = $_GET['pid'];
        $sql = "SELECT * FROM product WHERE pid = '$pid' ";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)) {
            echo '<table class="center">
                    <tr>
                        <td rowspan = "3"><img src ="p_picture/' . $row["pic"] . '.jpg" width="150"></td>
                        <td><h1>' . $row["pname"] . '</h1></td>
                    </tr>

                    <tr>
                        <td>รายละเอียดสินค้า: ' . $row["pdetail"] . '</td>
                    </tr>

                    <tr>
                        <td>ราคา: ' . $row["price"] . ' บาท</td>
                    </tr>
                </table>';
        }
    }
    ?>
</body>
<!-- form -->

<body>
    <h2>กรอกรายละเอียดเพื่อทำการสั่งซื้อ-จัดส่ง</h2>
    <?php
    echo '<form action ="confirm.php?pid=' . $pid . '" method="post">
            ชื่อผู้รับ:<br><input type="text" name="cusname" required><br>
            <br>
            สถานที่จัดส่ง:<br>
            <textarea name="address" rows="3" cols="40" required></textarea><br>

            เลขบัญชี 4 หลักสุดท้าย:<br><input type="text" pattern="\d{4}" maxlength="4" name="bank" required><br>

            จำนวน:<br>
            <input type="number" name="qty" required min="1" max="100"><br>
            <br>
            <input type="button" class="button" value="กลับ" onclick="history.back()">
            <input type="submit" class="button" value="สั่งซื้อ">
        </form><p>&nbsp;</p>';
    ?>
</body>

<div id='bottom' style='background-color:black;color:black;'>
    <div>
        <p class='white'>Copyright © 2021 69Market Co. All rights reserved.</p>
    </div>
</div>

</html>