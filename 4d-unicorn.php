<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unicorn</title>
</head>
<body>
<form method="get" action="">
    <label for="gender">Are you a human, a cat or a unicorn ?</label>
    <input type="text" name="gender">
    <input type="submit" name="submit" value="Submit">
</form>
    <?php
         $hello = ($_GET["gender"] == "human" OR $_GET["gender"] == "cat" OR $_GET["gender"] == "unicorn") ?
         (($_GET["gender"] == "human") ?  '<img src="https://media.giphy.com/media/l0HUbSfeYwlCjZW9y/giphy.gif" alt="human">' : (($_GET["gender"] == "unicorn") ?
          '<img src="https://media.giphy.com/media/213IPKhfpSguY/giphy.gif" alt="unicorn">' : '<img src="https://media.giphy.com/media/12PA1eI8FBqEBa/giphy.gif" alt="cat">' )) : "There is only 3 genders";
        echo $hello;
    ?>
</body>
</html>