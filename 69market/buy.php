<?php include "connectDB/connectDB.php";?>
<html>
    <head>
        <meta charset="utf-8">
        <title>69market</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <h2>คำสั่งซื้อ</h2>
    <body>
        <?php
        if(!empty($_GET)){
            $pid = $_GET['pid'];
            $sql = "SELECT * FROM product WHERE pid = '$pid' ";
            $result = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_array($result)){
                echo '<table class="center">
                    <tr>
                        <td rowspan = "3"><img src ="p_picture/'.$row["pic"].'.jpg" width="150"></td>
                        <td><h2>'.$row["pname"].'</h2></td>
                    </tr>

                    <tr>
                        <td>รายละเอียดสินค้า: '.$row["pdetail"].'</td>
                    </tr>

                    <tr>
                        <td>ราคา: '.$row["price"].' บาท</td>
                    </tr>
                </table>';
            }
        }
        ?>
    </body>
    <!-- form -->
    <body>
    <h3>กรอกรายละเอียดเพื่อทำการสั่งซื้อ-จัดส่ง</h3>
        <?php
        echo '<form action ="confirm.php?pid='.$pid.'" method="post">
            ชื่อผู้รับ:<br><input type="text" name="cusname" required><br>
            <br>
            สถานที่จัดส่ง:<br>
            <textarea name="address" rows="3" cols="40" required></textarea><br>

            เลขบัญชี 4 หลักสุดท้าย:<br><input type="text" pattern="\d{4}" maxlength="4" name="bank" required><br>

            จำนวน:<br>
            <input type="number" name="qty" required min="1" max="100"><br>
            <br>
            <input type="button" value="กลับ" onclick="history.back()">
            <input type="submit" value="สั่งซื้อ">
        </form>';
        ?>
    </body>
</html>