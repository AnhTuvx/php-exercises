<!DOCTYPE html>
<html>
<head>
    <title>Form Tính Tiền</title>
</head>
<body>
<?php
$tongTien = null;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form và chuyển đổi thành đối tượng DateTime
    $gioBatDau = new DateTime($_POST["gioBatDau"]);
    $gioKetThuc = new DateTime($_POST["gioKetThuc"]);

    // Khởi tạo thời điểm bắt đầu và kết thúc của các khung giờ
    $gioBatDauKhung1 = new DateTime('10:00:00');
    $gioKetThucKhung1 = new DateTime('17:00:00');
    $gioBatDauKhung2 = new DateTime('17:00:00');
    $gioKetThucKhung2 = new DateTime('24:00:00');

    // Kiểm tra xem thời gian có nằm trong khung giờ nào không
    if ($gioBatDau >= $gioBatDauKhung1 && $gioKetThuc <= $gioKetThucKhung1) {
        // Nếu nằm trong khung giờ 1
        $tongSoGiay = $gioKetThuc->getTimestamp() - $gioBatDau->getTimestamp();
        $donGiaGio1 = 20000 / 3600; // Đơn giá cho khung giờ 10h-17h
        $tongTien = $tongSoGiay * $donGiaGio1;
    } elseif ($gioBatDau >= $gioBatDauKhung2 && $gioKetThuc <= $gioKetThucKhung2) {
        // Nếu nằm trong khung giờ 2
        $tongSoGiay = $gioKetThuc->getTimestamp() - $gioBatDau->getTimestamp();
        $donGiaGio2 = 45000 / 3600; // Đơn giá cho khung giờ 17h-24h
        $tongTien = $tongSoGiay * $donGiaGio2;
    } elseif ($gioBatDau < $gioKetThucKhung1 && $gioKetThuc > $gioBatDauKhung2) {
        // Nếu thời gian bắt đầu trước 17h và kết thúc sau 17h
        $soGiayKhung1 = ($gioKetThucKhung1->getTimestamp() - $gioBatDau->getTimestamp());
        $soGiayKhung2 = ($gioKetThuc->getTimestamp() - $gioBatDauKhung2->getTimestamp());

        $donGiaGio1 = 20000 / 3600;
        $donGiaGio2 = 45000 / 3600;

        $tongTien = ($soGiayKhung1 * $donGiaGio1) + ($soGiayKhung2 * $donGiaGio2);
    } else {
        // Nếu thời gian không nằm trong khung giờ hoạt động
        echo "Quán không hoạt động.";
    }
}
?>

<form action="" name="MyForm_RECT" method="post">
        <table style= "background-color:lightpink" align="center">
            <tr>
                <td style="background-color:DeepPink" align="center" colspan="2"><h3>TINH TIEN KARAOK</h3></td>
            </tr>
                <td><label for="gioBatDau">Giờ bắt đầu:</label></td>
                <td>
                <input type="time" id="gioBatDau" name="gioBatDau" required>
                </td>
            </tr>
            <tr>
                <td><label for="gioKetThuc">Giờ kết thúc:</label></td>
                <td>
                <input type="time" id="gioKetThuc" name="gioKetThuc" required>
                </td>
            </tr>
            <tr>
                <td>Ket Qua</td>
                <td>
                    <input type="text" name="tongTien" value="<?php echo $tongTien; ?>" size="30" style="background-color: antiquewhite;" readonly>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="tinh" value="Xem Ket Qua">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>