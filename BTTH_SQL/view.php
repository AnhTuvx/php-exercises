<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xem Thong Tin Sinh Vien</title>
</head>

<body>
    <table align="center" > 
        <tr>
            <th colspan="5" style="text-align:center">Thong Tin Sinh Vien</th>
        </tr>
    </table>
    <table style="width:400px" align="center">
    <tr style="border: none">
        <td colspan="5"><a href="index.php">Tro ve trang truoc</a></td>
    </tr> 
    </table>
    <table align="center" style="boder-collapse: collapse" border="1" style="width:100px">
        <tr>
            <td>STT</td>
            <td>Ho</td>
            <td>Ten</td>
            <td>DiaChi</td>
            <td>Lop</td>
        </tr>
        <?php
        require "config.php";
        $query = "SELECT * FROM `ThongTinSV` WHERE MaLop=1;";
        $result = mysqli_query($conn, $query);
        if(!$result) die("\n Query failed");
        $num_files = mysqli_num_fields($result);
        $stt = 1;
        if(mysqli_num_rows($result) != 0){
            while($row = mysqli_fetch_array($result)){
                if($stt%2==0) echo "<tr bgcolor='red' > ";
                else echo "<tr bgcolor='green'>";
                echo "<td>".$stt++."</td>";
                for($i =1;$i<$num_files-1;$i++){
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