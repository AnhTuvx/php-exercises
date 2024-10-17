<?php
session_start();
if(isset($_SESSION['save_user_2_trang']))
    echo "<h1 align='center'> Hi ".$_SESSION['save_user_2_trang']." . Welcome to my site! </h1>";
else header("Location:login.php");
?>