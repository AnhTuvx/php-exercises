<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$ketqua = null;
$str = null;
       if(isset( $_GET["tinh"] ) ){
        $str =$_GET["dayso"];
        $arr = explode(",",$str);
        $ketqua =  array_product($arr);
       }

 ?>
    
    <form action="" name="MyForn_RECT" method="get">
        <table style="background-color: antiquewhite;" align="center">
            <tr>
                <td style=" background-color: orange;" colspan="2"><h3>Tinh Tich Day So</h3></td>
            </tr>
            <tr>
                <td>Day So</td>
                <td>
                    <input type="text" name="dayso" value="<?php echo $str; ?>" size="30" placeholder="cac phan tu khong duoc de trong">
                </td>
            </tr>
            <tr>
                <td>Ket qua</td>
                <td>
                    <input type="text" name="tich" value="<?php echo $ketqua; ?>" size="30" style="background-color: lightpink;" readonly>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="tinh" value="Tinh">
                    <input type="submit" name="xoa" value="xoa">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>