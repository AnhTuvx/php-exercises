<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liệt kê sinh viên</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>Danh sách sinh viên</h1>
        <a href="them.php" class="btn btn-success">Thêm Sinh Viên</a>
    <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>Mã Sinh Viên</th>
        <th>Họ Tên</th>
        <th>Lớp</th>
        <th>Thao Tác</th>
      </tr>
    </thead>
    <tbody>
    <?php
require_once 'ketnoi.php';
$lietke_sql = "SELECT * FROM sinhvien order by lop, hoten";
$result = mysqli_query($conn,$lietke_sql);
while($r = mysqli_fetch_assoc($result)){
    ?>
    <tr>
        <td><?php echo $r['masv'];?></td>
        <td><?php echo $r['hoten'];?></td>
        <td><?php echo $r['lop'];?></td>
        <td>
            <a href="edit.php?sid=<?php echo $r['id'];?>" class="btn btn-info">Sửa</a>
            <a onclick="return confirm('Bạn có chắc chắn muốn xóa sinh viên này không');" href="xoa.php?sid=<?php echo $r['id'];?>" class="btn btn-danger">Xóa</a>
        </td>
    </tr>
    <?php
}
?>
</tbody>
</table>
</div>
</body>
</html>
