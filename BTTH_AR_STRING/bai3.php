<!DOCTYPE html>
<html>
<head>
    <title>Form Handling</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST["numElements"];
    $array = tao_mang($n);
    $mang_kq = xuat_mang($array);
    $tong = tinh_tong($array);
    $min = tim_min($array);
    $max = tim_max($array);
}

function tao_mang($n) {
    $array = [];
    for ($i = 0; $i < $n; $i++) {
        $array[] = rand(0, 20);
    }
    return $array;
}

function xuat_mang($array) {
    foreach ($array as $value) {
        echo $value ." ";
    }
}

function tinh_tong($array) {
    $sum = 0;
    foreach ($array as$value) 
        {
            $sum+=$value;
        }
        return $sum;
}

function tim_min($array) {
        $min = $array[0];
        foreach ($array as $value){
            if($value<$min){
                $min = $value;
            }
        }
    return $min; 
}

function tim_max($array) {
    $max = $array[0];
    foreach ($array as $value){
        if($value>$max){
            $max = $value;
        }
    }
return $max; 
}
?>

<form method="POST" action="">
    <table align="center" >
        <tr>
            <td colspan="3" align="center" bgcolor="#990099" > <h1> PHÁT SINH MẢNG VÀ TÍNH TOÁN</h1> </td>
        </tr>
        <tr>
            <td bgcolor="#990099">Nhập số phần tử</td>
            <td><input type="text" name="numElements" size="50" value="<?php echo isset($_POST['numElements']) ? $_POST['numElements'] : ''; ?>"></td>
            <td style="color: #ff0a07">*</td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="generate" value="Phát sinh và tính toán">
            </td>
        </tr>
          <tr>
            <td>Mảng</td>
            <td><input type="text" name="mang" value="<?php echo isset($array) ? xuat_mang($array) : ''; ?>" readonly></td>
            <td></td>
        </tr>
        <tr>
            <td>GTLN</td>
            <td><input type="text" name="gtln" value="<?php echo isset($max) ? $max : ''; ?>" readonly></td>
            <td></td>
        </tr>
        <tr>
            <td>GTNN</td>
            <td><input type="text" name="gtnn" value="<?php echo isset($min) ? $min : ''; ?>" readonly></td>
            <td></td>
        </tr>
        <tr>
            <td>Tổng Mảng</td>
            <td><input type="text" name="tong" value="<?php echo isset($tong) ? $tong : ''; ?>" readonly></td>
            <td></td>
        </tr>
        <tr>
            <td colspan="3" align="center"> (Ghi chú:Các phần tử trong mảng sẽ có giá trị từ 0 tới 20)</td>
        </tr>
    </table>
</form>
</body>
