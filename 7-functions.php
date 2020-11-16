<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
<?php

$str= "According to a researcher (sic) at Cambridge University, it doesn't matter in what order the letters in a word are, the only important thing is that the first and last letter be at the right place. The rest can be a total mess and you can still read it without problem. This is because the human mind does not read every letter by itself but the word as a whole.";
// Transform string into array of words (each word is separated from another by a space):
$str= explode(" ", $str);
// Loop to iterate through each word of the array:
foreach ($str as $word){
	// str_shuffle shuffles the letters of the word and concatenate them into a new word separated by a space before iterating through the following word with the loop:
	echo str_shuffle($word)." ";
}

echo "<br />";

$name = "émile";
function mb_ucfirst($name, $encoding = "UTF-8", $lower_str_end = false) {
    $first_letter = mb_strtoupper(mb_substr($name, 0, 1, $encoding), $encoding);
    $str_end = "";
    if ($lower_str_end) {
      $str_end = mb_strtolower(mb_substr($name, 1, mb_strlen($name, $encoding), $encoding), $encoding);
    }
    else {
      $str_end = mb_substr($name, 1, mb_strlen($name, $encoding), $encoding);
    }
    $name = $first_letter . $str_end;
    return $name;
  }
echo mb_ucfirst($name);

echo "<br />";

function year(){
    return date("Y");
}
echo year();

echo "<br />";

function todayTime(){
    return date("d-m-Y H:i:s");
}
echo todayTime();
  
echo "<br />";

function sum($x, $y){
    return (is_int($x) AND is_int($y)) ? $x+$y : "Error: argument is not a number.";
}
echo sum(1,19);
echo "<br />";
echo sum(a,19);

echo "<br />";

$str = "laugh out loud";
function acronym($str){
    $arrayWord= explode(" ",strtoupper($str));
    foreach($arrayWord as $letter){
        $acronym .= $letter[0];
    }
    return $acronym;
}
echo acronym($str);

echo "<br />";
$str1 = "microsphaera";
function replaceAE($str1){
    return preg_replace("/ae/i", "æ", $str1);
}
echo replaceAE($str1);

echo "<br />";
$str2 = "microsphæra";
function replaceÆ($str2){
    return preg_replace("/æ/i", "ae", $str2);
}
echo replaceÆ($str2);

echo "<br />";

$message = "Incorrect email address";
$class = "error";
function feedback($message, $class){
    $classMessage = ucfirst($class);
    return "<div class='$class'>$classMessage:$message</div>";
}
echo feedback($message, $class);

echo "<br />";
?>

<h1>Generated words
<?php
function getRandomWord($minimumLength, $maximumLength) {
    $length=rand($minimumLength, $maximumLength);
    $word = array_merge(range('a', 'z'), range('A', 'Z'));
    shuffle($word);
    return substr(implode($word), 0, $length);
}

if(array_key_exists('generate',$_POST)){
    echo getRandomWord(1,5) ." - ". getRandomWord(7,15); 
}

?>
</h1>
<form method="post">
<input type="submit" name="generate" value="generate">
</form>
<?php

echo "<br />";

$str3= "STOP YELLING I CAN'T HEAR MYSELF THINKING!!";
function deCapitalize($str){
    return strtolower($str);
}
echo deCapitalize($str3);

echo "<br />";

function volume($radius, $height){
    return $radius**2*pi()*$height*(1/3);
}

echo 'The volume of a cone which ray is 5 and height is 2 = ' . volume(5,2) . ' cm<sup>3</sup><br />';  
echo 'The volume of a cone which ray is 3 and height is 4 = ' . volume(3,4) . ' cm<sup>3</sup><br />'; 

?>
</body>
</html>