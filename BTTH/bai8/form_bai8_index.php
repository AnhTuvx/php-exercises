<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Information Form</title>
</head>
<body>
<h1>Customer Information</h1>
<form action="form_bai8_config.php" method="post">
    <label for="fullname">Full Name:</label>
    <input type="text" id="fullname" name="fullname" required><br><br>

    <label for="address">Address:</label>
    <input type="text" id="address" name="address" required><br><br>

    <label for="phone">Phone:</label>
    <input type="text" id="phone" name="phone" required><br><br>

    <label>Gender:</label>
    <input type="radio" id="male" name="gender" value="Male" required>
    <label for="male">Male</label>
    <input type="radio" id="female" name="gender" value="Female" required>
    <label for="female">Female</label><br><br>

    <label for="country">Country:</label>
    <select id="country" name="country" required>
        <option value="Vietnam">Vietnam</option>
        <option value="USA">USA</option>
        <option value="UK">UK</option>
        <option value="Japan">Japan</option>
    </select><br><br>

    <label>Study:</label>
    <input type="checkbox" id="php" name="study[]" value="Web Development">
    <label for="web">PHP & MySQL</label>
    <input type="checkbox" id="aspnet" name="study[]" value="Data Science">
    <label for="data">ASP.NET</label>
    <input type="checkbox" id="CCNA" name="study[]" value="AI">
    <label for="ai">CCNA</label>
    <input type="checkbox" id="security" name="study[]" value="Data Science">
    <label for="data">Securiry+</label><br><br>

    <label for="note">Note:</label><br>
    <textarea id="note" name="note" rows="4" cols="50"></textarea><br><br>

    <input type="submit" value="Gửi">
    <input type="reset" value="Hủy">
</form>
</body>
</html>
