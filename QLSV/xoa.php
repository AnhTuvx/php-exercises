<?php
$svid = $_GET["sid"];
// echo $id
require_once 'ketnoi.php';
$xoa_sql ="DELETE FROM sinhvien WHERE id=$svid";
mysqli_query($conn,$xoa_sql);
header("Location: lietke.php");
?>