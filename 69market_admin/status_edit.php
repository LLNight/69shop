<?php include "ConnectDB/ConnectDB.php";?>
<html>
<head>
    <meta charset="UTF-8">
    <title>edit</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<h3>EDIT</h3>
    <?php
    $oid = $_GET["oid"]; 
    $sql = "SELECT * FROM `order` WHERE `oid` = $oid";
            $result = mysqli_query($conn,$sql);
            $num = mysqli_num_rows($result);
             
        while($row = mysqli_fetch_array($result)){
            $status = $row['status'];
        }?>

    <form action ="update_status.php" method="post">
        <select name="status">
            <option value="wait">wait</option>
            <option value="paid">paid</option>
            <option value="sent">sent</option>
            <option value="cancel">cancel</option>
        </select>
        <input name="oid" value="<?=$oid?>" hidden>
        <input type="submit" value="done">
    </form>
</body>
</html>