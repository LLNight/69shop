<?php include "connectDB/connectDB.php";?>
<html>
    <head>
        <meta charset="utf-8">
        <title>69market</title>
        <link rel="stylesheet" href="styles.css">

    </head>
    <h2>ยืนยันการสั่งซื้อ</h2>
    <body>
        <p>
        <?php
            $pid = $_GET['pid'];
            $sql1 = "SELECT * FROM product WHERE pid = '$pid' ";
            $result1 = mysqli_query($conn,$sql1);
            $data = mysqli_fetch_array($result1);

            $cusname = $_POST["cusname"];
            $address = $_POST["address"];
            $qty = $_POST["qty"];
            $bank = $_POST["bank"];

            $sum = $qty * $data["price"];
            
            echo
            '<table class="center">
                    <tr>
                        <td rowspan = "2"><img src ="p_picture/'.$data["pic"].'.jpg" width="150"></td>
                        <td><h3 class="cen">สินค้า: '.$data["pname"].'</h3></td>
                    </tr>

                    <tr>
                        <td class="left">จำนวน: '.$qty.' ชิ้น<br>
                        ชื่อผู้สั่งซื้อ: '.$cusname.'<br>
                        สถานที่จัดส่ง: '.$address.'<br>
                        เลขบัญชี 4 หลักสุดท้าย: '.$bank.'<br>
                        </td>
                    </tr>
            </table>';
        ?>
        </p>

        <p>
        <?php
            echo "<h3 class='border'>จำนวนเงินที่ต้องชำระสุทธิ: ".$sum." บาท</h3>";
            //echo $pid
        ?>
        </p>

        <p>
            <form action ="process.php" method="post">
                <input name="pid" value="<?=$pid;?>" hidden>
                <input name="qty" value="<?=$qty;?>" hidden>
                <input name="sum" value="<?=$sum;?>" hidden>
                <input name="cusname" value="<?=$cusname;?>" hidden>
                <input name="address" value="<?=$address;?>" hidden>
                <input name="bank" value="<?=$bank;?>" hidden>
                <input type="button" value="กลับ" onclick="history.back()">
                <input type="submit" name="send" onClick="location.href='index.php'" value="ยืนยัน">
            </form>
        </p>
    </body>
</html>