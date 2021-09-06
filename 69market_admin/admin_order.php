<?php include "connectDB/ConnectDB.php"; ?>
<html>

<head>
    <meta charset="utf-8">
    <title>69market_dev</title>
    <link rel="stylesheet" href="ostyles.css">
</head>

<body>
    <h1><b>69MARKET.DEV<br>ORDER LIST</b></h1>
    <p>&nbsp;</p>
    <marquee behavior="scroll" direction="left" scrollamount="100">Hello</marquee>
    <marquee behavior="scroll" direction="right" scrollamount="10">Hello!!</marquee>
    <marquee behavior="scroll" direction="left" scrollamount="20">Good day!!!</marquee>
    <marquee behavior="scroll" direction="right" scrollamount="50">Hi!!!!</marquee>
    <p>&nbsp;</p>
</body>

</html>
<?php
include "ConnectDB/ConnectDB.php";
$sql = "SELECT * FROM `order`";
$result = mysqli_query($conn, $sql);
echo '<table class="center">
                    <tr>
                        <th>รหัสคำสั่งซื้อ</th>
                        <th>รหัสสินค้า</th>
                        <th>จำนวนที่สั่งซื้อ(ชิ้น)</th>
                        <th>ราคารวม(บาท)</th>
                        <th>วันที่-เวลา</th>
                        <th>ชื่อผู้สั่ง</th>
                        <th>สถานที่จัดส่ง</th>
                        <th>เลขธนาคาร 4 ตัวหลัง</th>
                        <th>สถานะ</th>
                    </tr>';

while ($row = mysqli_fetch_array($result)) {
    echo "<tr class='cen'><td>" . $row['oid'] . "</td>";
    echo "<td>" . $row['pid'] . "</td>";
    echo "<td>" . $row['qty'] . "</td>";
    echo "<td>" . $row['sum'] . "</td>";
    echo "<td>" . $row['odate'] . "</td>";
    echo "<td>" . $row['cusname'] . "</td>";
    echo "<td>" . $row['address'] . "</td>";
    echo "<td>" . $row['bank'] . "</td>";

    //testing-------------
    //echo $row['status'];

    /*if($row['status'] == 'wait'){
                    echo "yes";
                }else{
                    echo "no";
                }*/


    if ($row['status'] == 'wait') {
        echo "<td><font color='#01a5ff'>wait</font><a href='status_edit.php?oid=" . $row['oid'] . "'>--o</a></td>";
        //echo "<td>wait</td>";
    } elseif ($row['status'] == "paid") {
        echo "<td><font color='#c902ff'>paid</font><a href='status_edit.php?oid=" . $row['oid'] . "'>--o</a></td>";
        //echo "<td>paid</td>";
    } elseif ($row['status'] == "sent") {
        echo "<td><font color='#01dd01'>sent</font><a href='status_edit.php?oid=" . $row['oid'] . "'>--o</a></td>";
        //echo "<td>sent</td>";
    } elseif ($row['status'] == "cancel") {
        echo "<td><font color='#ff0a00'>cancel</font><a href='status_edit.php?oid=" . $row['oid'] . "'>--o</a></td>";
        //echo "<td>cancel</td>";
    }
    //echo "<td>".$row['status']."<a href='status_edit.php?oid=".$row['oid']."'>--o</a></td>";*/
}
?>