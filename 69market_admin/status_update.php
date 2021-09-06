<?php include "ConnectDB/ConnectDB.php"; ?>
<html>

<head>
    <meta charset="UTF-8">
    <title>edit</title>
    <link rel="stylesheet" href="ostyles.css">
</head>
<?php
$oid = intval($_POST["oid"]);
$status = $_POST["status"];

$sql_update = "UPDATE `order` SET `status`='" . $status . "' WHERE oid = $oid;";

$result_update = mysqli_query($conn, $sql_update);
if ($result_update) {
    echo "<h3 class='border2'>Success</h3>";
    echo "<br><a href='admin_order.php'><button class='center'>back</button></a>";
} else {
    echo "<h3 class='border'>Failed</h3>" . $result_update;
    echo "<br><a href='admin_order.php'><button class='center'>back</button></a>";
}
?>