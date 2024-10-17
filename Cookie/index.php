<!DOCTYPE html>
<html>
<head>
    <title>Form Đăng Nhập</title>
</head>
<body>
    <?php
    // Kiểm tra xem cookie có tồn tại hay không
    if(isset($_COOKIE['user'])) {
        echo "Hi " . $_COOKIE['user'] . ". Welcome to my site!";
    } else {
    ?>
 <form method="post" action="login.php">
 <table style="background: white" align="center" border="">
    <tr>
        <td  colspan="2" align="center"> <h2>Login From</h2></td>
    </tr>

    <tr>
        <td>User</td>
        <td>
            <input type="text" name="username" size="30">
        </td>
    </tr>
    <tr>
        <td>Password</td>
        <td>
            <input type="password" name="password" size="30" >
        </td>
    </tr>
    <tr>
        <td colspan="2" align="center">
            <input type="submit" name="login" value="Login">
        </td>
    </tr>
    </table>  

</form>
    <?php } ?>
</body>
</html> 