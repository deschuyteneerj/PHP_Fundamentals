<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
<?php
$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');

foreach($pronouns as $pronoun){
    if ($pronoun == "He/She") {
        echo "$pronoun codes<br/>";
    } else {
        echo "$pronoun code<br/>";
    }
    //OR TERNARY:
    //$verb=($pronoun=="He/She") ? "codes" : "code";
    //echo "$pronoun $verb <br/>";
}

$number=1;
while($number<=120){
    echo "$number ";
    $number++;
}
echo "<br/>";
for($number=1;$number<=120;$number++){
    echo "$number ";
}
echo "<br/>";
$startUpMates=["riri", "fifi", "loulou", "picsou", "flagada jones", "tic", "tac", "goofy", "pluto"];
$length = count($startUpMates);
for($i=0;$i<=$length;$i++){
    echo "$startUpMates[$i] ";
}
echo "<br/>";
foreach($startUpMates as $teamMate){
    echo "$teamMate ";
}
?>
<br/>
<select name="country">
<?php
$country=["ARG"=>"Argentina", "BEL"=>"Belgium", "BR"=>"Brazil", "ENG"=>"England", "FRA"=>"France", "DEU"=>"Germany", "NL"=>"Netherlands", "IT"=>"Italy", "RUS"=>"Russia", "ESP"=>"Spain"];
define("MAX_OPTIONS",10);
foreach($country as $key => $value){
    echo "<option value='$key'>$value</option>";
}
?>
<br/>
<select name="country">
<?php
$country=["Argentina", "Belgium", "Brazil", "England", "France", "Germany", "Netherlands", "Italy", "Russia", "Spain"];
define("MAX_OPTIONS",10);
foreach($country as $key => $value){
    $keyForm= strtoupper(substr($value,0,3));
    echo "<option value='$keyForm'>$value</option>";
}
?>
</select>
</body>
</html>