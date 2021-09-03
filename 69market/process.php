<html>
    <head>
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

                if(isset($_POST["send"])){
                    
                    $sql2 = "INSERT INTO `order`(`pid`, `qty`, `sum`, `cusname`, `address`, `bank`, `status`)
                            VALUES ('$pid','$qty','$sum','$cusname','$address','$bank','wait')";
                    $result2 = mysqli_query($conn, $sql2);

                    if($result2){
                        echo '<h2>สั่งซื้อสำเร็จ</h2><br>';
                        echo '<h3 class="border2">โปรดโอนเงินจำนวน '.$sum.' บาท<br>
                        มาที่บัญชี 0201****9963 ธนาคารออมสิน</h3><br>';
                        //echo $pid, $cusname, $address, $qty, $bank, $sum;
                        echo "<a href='index.php'><button class='center'>กลับ</button></a>";
                    }else{
                        echo 'สั่งซื้อไม่สำเร็จ';
                        echo "<a href='index.php'><button class='center'>กลับ</button></a>";
                    }
                }
?>
</html>            