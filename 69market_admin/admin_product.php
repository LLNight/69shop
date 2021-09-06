<?php include "connectDB/ConnectDB.php"; ?>
<html>

<head>
    <meta charset="utf-8">
    <title>69market_dev</title>
    <link rel="stylesheet" href="ostyles.css">
    <script>
        function really() {
            confirm("Are you sure to delete this product?");
        }
    </script>
</head>

<body>
    <h1><b>69MARKET.DEV<br>PRODUCT MANAGER</b></h1>
    <p>&nbsp;</p>
    <marquee behavior="scroll" direction="left" scrollamount="100">Hello</marquee>
    <marquee behavior="scroll" direction="right" scrollamount="10">Hello!!</marquee>
    <marquee behavior="scroll" direction="left" scrollamount="20">Good day!!!</marquee>
    <marquee behavior="scroll" direction="right" scrollamount="50">Hi!!!!</marquee>
    <p>&nbsp;</p>
</body>
<?php
$sql = "SELECT * FROM product";
$result = mysqli_query($conn, $sql);
$n = 0;

echo '<table class="center">
                    <tr>
                        <th>รหัสสินค้า</th>
                        <th>ชื่อสินค้า</th>
                        <th>รายละเอียดสินค้า</th>
                        <th>ราคา</th>
                        <th>ไฟล์รูป</th>
                        <th>EDIT</th>
                    </tr>';
while ($row = mysqli_fetch_array($result)) {
    echo "<tr class='cen'><td>" . $row['pid'] . "</td>";
    echo "<td>" . $row['pname'] . "</td>";
    echo "<td>" . $row['pdetail'] . "</td>";
    echo "<td>" . $row['price'] . "</td>";
    echo "<td>" . $row['pic'] . "</td>";
    echo "<td><a href='product_edit.php?pid=" . $row['pid'] . "'><button>EDIT</button></a></td></tr>";

    /*echo "<td><a href='product_edit.php?pid=" . $row['pid'] . "'><button>EDIT</button></a>"; <--DELETE OPTION
    echo "<a href='product_delete.php?pid=" . $row['pid'] . "'><button>DELETE</button></a></td></tr>";*/
    ++$n;
}
if (mysqli_num_rows($result) == $n) {
    echo "<form action='product_insert.php' method='post'>
    <tr class='cen'><td><input type='number' name='pid'></td>
    <td><input type='text' name='pname'></td>
    <td><textarea name='pdetail' rows='1' cols='100'></textarea></td>
    <td><input type='number' name='price'></td>
    <td><input type='text' name='pic'></td>
    <td><input type='submit' class='button' value='ADD'></td></form>";
}
?>