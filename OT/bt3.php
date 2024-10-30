<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=for, initial-scale=1.0">
    <title>Document</title> 
</head>

<?php

if(isset( $_POST["submit"] )){
    $n = $_POST["num"];
    $array = Taomang( $n );
    $xuatmang = xuat_mang($array);
    $max = tim_max($array);
    $min = tim_min($array);
    $tongmang = tong_mang($array);
}

function Taomang($n){
    $array = [];
   for($i = 0; $i < $n; $i++){
    $array[] = rand(1,20);
   }
   return $array;
}
function xuat_mang($array){
    return implode(" ",$array);
}

function tim_max($array){
   $max = $array[0];
   foreach($array as $value){
     if($value > $max){
        $max = $value;
     }
   }
   return $max;
}
function tim_min ($array){
    $min = $array[0];
    foreach($array as $value){
        if($value < $min){
            $min = $value;
        }
    }
    return $min;
}
function tong_mang($array){
    $sum =0;
    foreach($array as $value){
        $sum += $value;
    }
    return $sum;
}
?>

<body>
    <form method="POST" action="">
        <table style="background-color: aquamarine;" align="center" >
            <tr>
                <td style="text-align: center;background-color: blueviolet;" colspan="3">
                <h1>PHAT SINH MANG VA TINH TOAN</h1>
                </td>
            </tr>
            <tr style="background-color: pink;">
                <td>
                    Nhap so phan tu
                </td>
                <td>
                    <input type="text" name="num" value="<?php  echo isset($_POST["num"])?$_POST["num"]: '' ?>">
                </td>
            </tr>
            <tr style="background-color: pink;">
                <td>
                </td>
                <td>
                    <input type="submit" name="submit" value="Phat sinh va tinh toan">
                </td>
            </tr>
            <tr >
                <td>
                    Mang
                </td>
                <td>
                    <input type="text" name="Mang" value="<?php echo isset($array)? xuat_mang($array): " " ?>" readonly>
                </td>
            </tr>
            <tr >
                <td>
                    GTLN
                </td>
                <td>
                    <input  style="background-color: pinkwhite;" type="text" name="gtln" value="<?php echo isset($max)? $max:" "?>" readonly>
                </td>
            </tr>
            <tr >
                <td>
                    GTNN
                </td>
                <td>
                    <input type="text" name="gtnn" value="<?php echo isset($min)? $min:" "?>" readonly>
                </td>
            </tr>
            <tr>
                <td>
                    Tong Mang
                </td>
                <td>
                    <input type="text" name="tongmang" value="<?php echo isset($tongmang)? $tongmang:" "?>" readonly>
                </td>
            </tr>
            <tr >
                <td>
                    (Ghi chu: Cac phan tu trong mang se co gia tri 0 den 20)
                </td>
            </tr>
        </table>
    </form>
</body>
</html>