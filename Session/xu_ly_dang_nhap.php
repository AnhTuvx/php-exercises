<?php
session_start();
$username = $_POST['user'];
$_SESSION['save_user_2_trang'] = $username;
header("Location:./welcome.php");
?>