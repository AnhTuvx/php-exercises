<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tao_moi_db";

// Kết nối tới database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}

// Chuẩn bị câu truy vấn
$query = "INSERT INTO ttlop (id, TenLop, MaLop, CVHT) VALUES (NULL, '63.CNTT-2', '2', 'Nguyen Khac Cuong')";

// Thực thi câu truy vấn
$result = mysqli_query($conn, $query);

// Kiểm tra kết quả thực thi
if (!$result) {
    die("<br><b>Query failed: </b>" . mysqli_error($conn));
} else {
    echo "<br>Query executed successfully!";
}

// Đóng kết nối
mysqli_close($conn);
?>