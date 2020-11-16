<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ternary Operators</title>
</head>
<body>
<?php
// 10. Ternary operators.
// 11. Ternary exercises.
if (isset($_GET["gender"])) $hello = $_GET["gender"] != "male" ? "Hello Miss" : "Hello Mister";
echo $hello;
?>
<form method="get" action="">
    <input type="radio" id="gender" name="gender" value="male">
    <label for="gender">male</label>
    <input type="radio" id="gender" name="gender" value="female">
    <label for="gender">female</label>
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>