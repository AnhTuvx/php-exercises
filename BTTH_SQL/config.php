<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CSDLSV";
$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection faild". mysqli_connect_error());
}
?>