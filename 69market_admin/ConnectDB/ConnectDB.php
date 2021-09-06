<?php
    $sever = "localhost";
    $user = "root";
    $password = "";
    $db_name = "69market";
    $conn = mysqli_connect($sever,$user,$password,$db_name);

    if(!$conn){
        echo "ไม่สามารถเชื่อมฐานข้อมูลได้";
        exit;
    }
    mysqli_set_charset($conn, 'utf8');
?>