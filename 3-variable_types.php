<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=!, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
<?php
/**
 * Series of exercises on PHP variables.
*/
?>
<?php $name = "Jonathan";?> 
<?php $age = 34;?>
<?php $eyes_color = green;?>
<?php $family = array(0 => "Chantal", 1 => "Stéphane", 2 => "Jonathan");?>
<?php $hungry = false;?>
<p>Hi my name is <?php echo $name; ?>.</p>
<p>I am <?php echo $age; ?> years old.</p>
<p>My eyes are <?php echo $eyes_color; ?>.</p>
<p>The first person in my family is <?php echo $family[0]; ?>.</p>
<p>Am I hungry? <?php if ($hungry == false) echo "No" ?>.</p>
</body>
</html>