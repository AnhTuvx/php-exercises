<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= <form name="StudentInfor" action="" method="post">
    <title>Document</title>
</head>
<?php
   $name=$family=$address=$msg="";  
   require "config.php";
    if(isset($_POST["gui"])){
        $family = $_POST["family"];
        $address = $_POST["address"];
        $name= $_POST["name"];
        $class= $_POST["class"];
        $query = "INSERT INTO `thongtinsv`(`Ho`, `Ten`, `DiaChi`, `MaLop`) 
        VALUES ('$family','$name','$$address','$class')";
        $result = mysqli_query($conn,$query);
        if(!$result){
            die("fail");
        }else{
            $msg="ghi du lieu thanh cong";
        }

    }
?>
<body>
<table align="center" bgcolor="#faebd7">
        <tr>
            <td colspan="2" align="center">
                <h4 style="color: darkblue;">Nhap Thong Tin SV</h4>
            </td>
        </tr>
        <tr>
            <td>Ten</td>
             <td>
                <input type="text" name="name" size="40" value="<?php echo $name;?>">  
             </td>   
        </tr>
        <tr>
            <td>Ho</td>
             <td>
                <input type="text" name="family" size="40" value="<?php echo $family;?>">  
             </td>   
        </tr>
        <tr>
            <td>Dia chi</td>
             <td>
                <input type="text" name="address" size="40" value="<?php echo $address;?>">  
             </td>   
        </tr>
        <tr>
            <td>Lop</td>
            <td>
                <label for="class">Chon ten lop</label>
                <select name="class" id="class">
                    <?php 
                    $query = "SELECT * FROM `thongtinlop`;";
                    $result = mysqli_query($conn,$query);
                    if(mysqli_num_rows($result)!=0){
                        while($row = mysqli_fetch_array($result)){
                            $str = "<option value='".$row["MaLop"]."'>".$row["TenLop"]."</option>";
                            echo $str; 
                        }
                    }
                    ?> 
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="gui" value="Gui">
                <input type="submit" name="xoa" value = "Xoa">
                <input type="submit" name="xem" value ="Xem Ket Qua">
            </td>  
        </tr>
        <tr>
            <td colspan="2" align="center">
              <?php
               echo "<h5 style=\"color:red\">$msg</h5>" 
              ?>
            </td>  
        </tr>
    </table>
</body>
</html>