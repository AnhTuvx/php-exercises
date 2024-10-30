<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xem thong tin sinh vien</title>
</head>
<body>
<table align="center">
    <tr >
        <th colspan="5" style="text-align: center">THONG TIN SINH VIEN</th>
    </tr>
</table>

<table style="width:400px" align="center">
    <tr style="border: none">
        <td colspan="5"><a href="NhapThongTinSV.php">Tro ve trang truoc</a></td>
    </tr>
</table>

<table align="center" style="border-collapse: collapse" border="1" style="width:100px">
    <tr >
        <td>STT</td>
        <td>Ten</td>
        <td>Lop</td>
        <td>Dia chi</td>
        <td>Lop</td>
    </tr>
    <?php
    require "config.php";
    $query = "SELECT * FROM `ThongTinSV` WHERE MaLop=1;";
    $result = mysqli_query($conn, $query);
    if (!$result ) die ('<br> <b>Query failed</b>');
    $num_files = mysqli_num_fields($result);
    $stt = 1;
    if(mysqli_num_rows($result)!=0){
        while ($row = mysqli_fetch_array($result)){
            if($stt%2==0) echo "<tr bgcolor='#faebd7' > ";
            else echo "<tr bgcolor='#ff00ff'>";
            echo "<td>".$stt++."</td>";
            for ($i=1; $i<$num_files-1; $i++)
            {
                echo "<td>".$row[$i]."</td>";
            }
            if($row[$i]==1) echo "<td>"."63cntt1"."</td>";
            else if($row[$i]==2) echo "<td>"."63cntt2"."</td>";
            else if($row[$i]==3) echo "<td>"."63cntt3"."</td>";
            else echo "<td>"."Khong thay lop"."</td>";
            echo "</tr>";
        }
    }
    ?>
</table>

</body>
</html>
