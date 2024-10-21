<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Handling</title>
    <style>
        .bold-text {
            color: #00008B;
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php
function swap(&$a,&$b){
    $temp=$a;
    $a=$b;
    $b=$temp;
}

function sxTang ($arr)
{
    for($i=0;$i<count($arr)-1;$i++)
        for($j=$i+1;$j<count($arr);$j++)
            if($arr[$i] > $arr[$j]) swap($arr[$i],$arr[$j]);
    return $arr;
}
function sxGiam ($arr)
{
    for($i=0;$i<count($arr)-1;$i++)
        for($j=$i+1;$j<count($arr);$j++)
            if($arr[$i] < $arr[$j]) swap($arr[$i],$arr[$j]);
    return $arr;
}
$text = null;
    if(isset($_POST["submit"])){
        $text = $_POST["dayso"];
        $array = explode(",", $text);
        $result_decre = implode(",",sxGiam($array));
        $result_incre = implode(",",sxTang($array));
    }
?>

<form method="POST" action="">
    <table align="center" bgcolor="#7fffd4">
        <tr>
            <td colspan="3" align="center" class="bold-text"> <h1> Nhập và Tìm kiếm trên dãy số</h1> </td>
        </tr>
        <tr>
            <td class="bold-text">Nhập dãy số</td>
            <td><input type="text" name="dayso" size="50" value="<?php echo $text; ?>"></td>
            <td style="color: #ff0a07">*</td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="submit" value="Xap Xep Tang Giam">
            </td>
        </tr>
        <tr>
        <td style="color: red"> <b>Sau khi sap xep</b></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>Tang Dan</td>
        <td>
            <input type="text" value="<?php if (isset($result_incre)) echo  $result_incre;?>" size="35">
        </td>
        <td></td>
    </tr>
    <tr>
        <td>Giam Dan</td>
        <td>
            <input type="text" value="<?php if (isset($result_decre)) echo  $result_decre;?>" size="35">
        </td>
        <td></td>
    </tr>
        <tr>
            <td colspan="3" align="center" class="bold-text"> (*) Các số được nhập cách nhau bằng dấu "," </td>
        </tr>
    </table>
</form>

</body>
</html>