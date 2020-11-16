<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
<?php

// Create array
$family = array( "Chantal", "Stéphane" , "Jonathan");
print_r($family);
$recipes = array( "Hamburger", "Pizza" , "Lasagnes");
var_dump($recipes);
$movies = array( "Super Mario Bros.", "Bilbo The Hobbit" , "Lord Of The Ring");
echo $movies[0];
$recipes[] = "Tiramisu";
print_r($recipes);

// Create array
$me = array("firstName" => "Jonathan",
            "yearsOld" => "34",
            "eyesColor" => "green",
            "hairLength" => "short"
        );
$me["hobbies"] = ["Coding", "playing video games", "reading mangas", "watching movies"];
$mother = array("firstName" => "Chantal",
                "yearsOld" => "57",
                "eyesColor" => "green",
                "hairLength" => "mid long",
                "hobbies" 	=> array("Cooking", "reading books", "watching movies")
            );

// Add mother array to me array
$me["mother"] = $mother;    

// Add/Change values into array
$me["hobbies"][] = "football";
$me["firstName"]="Duran";

// Display array
echo '<pre>';
    print_r($me);
echo '</pre>';

// Count number of hobbies into array
$motherHobbies = sizeof($mother["hobbies"]);
$meHobbies = sizeof($me["hobbies"]);
echo $motherHobbies+$meHobbies;

// Operations on array
$possible_hobbies_via_intersection = array_intersect($me["hobbies"], $mother["hobbies"]);
$possible_hobbies_via_merge = array_merge($me["hobbies"], $mother["hobbies"]);

echo '<pre>';
print_r($possible_hobbies_via_intersection);
print_r($possible_hobbies_via_merge);
echo '</pre>';

// More array exercises
$web_development=array(
    "frontend"=>[],
    "backend"=>[]);

array_push($web_development["frontend"],"xhtml");
array_push($web_development["backend"],"Ruby", "Rails");
array_push($web_development["frontend"],"CSS");
array_push($web_development["backend"],"flash");
array_push($web_development["frontend"],"JavaScript");
$index=array_search("xhtml",$web_development["frontend"]);
$web_development["frontend"][$index]="html";
$index=array_search("flash",$web_development["backend"]);
array_splice($web_development["backend"], $index, 1);

echo '<pre>';
print_r($web_development);
echo '</pre>';
?>
</body>
</html>