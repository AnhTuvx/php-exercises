<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xu ly cookies tren 2 trang</title>
</head>
<body>
<?php
session_start();
if (isset($_SESSION['save_user_2_trang'])){
    header('Location:./welcome.php');
}
?>
<form method="post" action="./xu_ly_dang_nhap.php">
    <table align="center" border="" style="border-collapse: collapse">
        <tr>
            <td colspan="2" align="center">Login Form</td>
        </tr>
        <tr>
            <td>User</td>
            <td><input type="text" name="user" size="30"></td>
        </tr>
        <tr>
            <td>pass</td>
            <td><input type="password" name="password" size="30"></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="submit" value="Login">
            </td>
        </tr>
    </table>
</form>
</body>
</html>