<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=!, initial-scale=1.0">
    <title>Conditional Structures</title>
</head>
<body>
<?php
/**
 * Series of exercises on PHP conditional structures.
*/
// // 1. Clean your room!
// // 1.1 Clean your room Exercise.
// $room_is_filthy = true;
// if( $room_is_filthy == true ){
// 	echo "Yuk, Room is dirty : let's clean it up !";
// 	cleanup_room();
// 	echo "<br>Room is now clean!";
// 	$room_is_filthy = false;
// } else {
// 	echo "<br>Nothing to do, room is neat.";
// }

// // 1.2 Clean your room Exercise, improved.
// // Create the array of possible states:
// // When testing, change the index value to navigate to the possible array values.
// $possible_states = array("health hazard", "filthy", "dirty", "clean", "immaculate");
// $room_filthiness = $possible_states[0]; 
// if( $room_filthiness == "health hazard" ){
// 	echo "Yuk, Room is Disgusting! Let's clean it up !";
// } else if( $room_filthiness == "filthy" ){
// 	echo "Yuk, Room is filthy : let's clean it up !";
// } else if( $room_filthiness == "dirty" ){
//     echo "Yuk, Room is dirty : let's clean it up !";
// } else if( $room_filthiness == "clean" ){
//     echo "Yuk, Room is clean : let's clean it up (just a bit)!";
// } else {
// 	echo "<br>Nothing to do, room is neat as a diamond.";
// }

// // 2. Display a different greeting message depending on the time of the day.
// // 2. "Different greetings according to time" Exercise
// date_default_timezone_set("Europe/Brussels");
// $now = (time() - strtotime("today")) / 60; // How to get the current time in PHP ? Google is your friend ;-)
// Test the value of $now and display the right message according to the specifications.
// if(300 <= $now && $now <= 540){
//     echo "<br>Good morning !";
// }
// else if(541 <= $now && $now <= 720){
//     echo "<br>Good day !";
// }
// else if(721 <= $now && $now <= 960){
//     echo "<br>Good afternoon !";
// }
// else if(961 <= $now && $now <= 1260){
//     echo "<br>Good evening !";
// }
// else{
//     echo "<br>Good night !";
// }

// 3. "Different greetings according to age" Exercise
// if (isset($_GET["age"])){
// 	if ($_GET["age"]<12){
//         echo "Hello kiddo!";
//     } else if ($_GET["age"]>=12 && $_GET["age"]<18){
//         echo "Hello Teenager !";
//     } else if ($_GET["age"]>=18 && $_GET["age"]<115){
//         echo "Hello Adult !";
//     } else {
//         echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
//     }
// }
// <form method="get" action="">
// 	<label for="age">...</label>
// 	<input type="" name="age">
// 	<input type="submit" name="submit" value="Greet me now">
// </form>

// 4. Display a different greeting according to the user's age and gender.
// if (isset($_GET["age"],$_GET["gender"])){
//     if ($_GET["age"]<12){
//         if ($_GET["gender"] == male){
//             echo "Hello Mister Kiddo!";
//         } else {
//             echo "Hello Miss Kiddo!";
//         }
//     } else if ($_GET["age"]>=12 && $_GET["age"]<18){
//         if ($_GET["gender"] == male){
//             echo "Hello Mister Teenager!";
//         } else {
//             echo "Hello Miss Teenager!";
//         }
//     } else if ($_GET["age"]>=18 && $_GET["age"]<115){
//         if ($_GET["gender"] == male){
//             echo "Hello Mister Adult!";
//         } else {
//             echo "Hello Miss Adult!";
//         }
//     }
// }
//  <form method="get" action="">
//  	<label for="age">Age</label>
//  	<input type="" name="age">
//      <input type="radio" id="gender" name="gender" value="male">
//      <label for="gender">male</label>
//      <input type="radio" id="gender" name="gender" value="female">
//      <label for="gender">female</label>
//      <input type="submit" name="submit" value="Submit">
//  </form>

// 5. Display a different greeting according to the user's age, gender and motherTongue.
// if (isset($_GET["age"],$_GET["gender"])){
//     if ($_GET["age"]<12){
//         if ($_GET["gender"] == male){
//             if ($_GET["motherTongue"] == yes){
//                 echo "Hello Mister Kiddo!";
//             } else {
//                 echo "Aloha Mister Kiddo!";
//             }
//         } else {
//             if ($_GET["motherTongue"] == yes){
//                 echo "Hello Miss Kiddo!";
//             } else {
//                 echo "Aloha Miss Kiddo!";
//             }
//         }
//     } else if ($_GET["age"]>=12 && $_GET["age"]<18){
//         if ($_GET["gender"] == male){
//             if ($_GET["motherTongue"] == yes){
//                 echo "Hello Mister Teenager!";
//             } else {
//                 echo "Aloha Mister Teenager!";
//             }
//         } else {
//             if ($_GET["motherTongue"] == yes){
//                 echo "Hello Miss Teenager!";
//             } else {
//                 echo "Aloha Miss Teenager!";
//             }
//         }
//     } else if ($_GET["age"]>=18 && $_GET["age"]<115){
//         if ($_GET["gender"] == male){
//             if ($_GET["motherTongue"] == yes){
//                 echo "Hello Mister Adult!";
//             } else {
//                 echo "Aloha Mister Adult!";
//             }
//         } else {
//             if ($_GET["motherTongue"] == yes){
//                 echo "Hello Miss Adult!";
//             } else {
//                 echo "Aloha Miss Adult!";
//             }
//         }
//     }
// }
//  <form method="get" action="">
//  	<label for="age">Age</label>
//  	<input type="" name="age">
//      <input type="radio" id="gender" name="gender" value="male">
//      <label for="gender">male</label>
//      <input type="radio" id="gender" name="gender" value="female">
//      <label for="gender">female</label>
//      <label for="motherTongue">Do you speak English?</label>
//      <input type="radio" id="motherTongue" name="motherTongue" value="yes">
//      <label for="motherTongue">yes</label>
//      <input type="radio" id="motherTongue" name="motherTongue" value="no">
//      <label for="motherTongue">no</label>
//      <input type="submit" name="submit" value="Submit">
//  </form>

// 6. The Girl Soccer team.
// 7. Achieve the same, without the ELSE.
// $result = ($_GET["age"]>=21 && $_GET["age"]<=40 && $_GET["gender"]==female) ? "Welcome to the team!" : "Sorry you don't fit the criteria";
// echo $result;
// <form method="get" action="">
//     <label for="name">Name</label>
//     <input type="" name="name">
//     <label for="age">Age</label>
//     <input type="" name="age">
//     <input type="radio" id="gender" name="gender" value="male">
//     <label for="gender">male</label>
//     <input type="radio" id="gender" name="gender" value="female">
//     <label for="gender">female</label>
//     <input type="submit" name="submit" value="Submit">
// </form>

// 8. "School sucks!" Exercise.
// if (isset($_GET["note"])){
//     if ($_GET["note"]<=4){
//         echo "This work is really bad. What a dumb kid!";
//     } else if ($_GET["note"]>=5 && $_GET["note"]<=9){
//         echo "This is not sufficient. More studying is required.";
//     } else if ($_GET["note"]==10){
//         echo "barely enough!";
//     } else if ($_GET["note"]>=11 && $_GET["note"]<=14){
//         echo "Not bad!";
//     } else if ($_GET["note"]>=15 && $_GET["note"]<=18){
//         echo "Bravo, bravissimo!";
//     } else {
//         echo "Too good to be true : confront the cheater!";
//     }
// }
// <form method="get" action="">
//     <label for="note">Note 1->20</label>
//     <input type="" name="note">
//     <input type="submit" name="submit" value="Submit">
// </form>
?>
</body>
</html>