<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Structure</title>
</head>
<body>
<?php
// 9. The "Switch" structure. Do the previous exercise with a switch structure instead of if.
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
if (isset($_GET["note"])){
    switch ($_GET["note"]) {
        case '1':
        case '2':
        case '3':
        case '4':
            echo "This work is really bad. What a dumb kid!";
            break;
        case '5':
        case '6':
        case '7':
        case '8':
        case '9':
            echo "This is not sufficient. More studying is required.";
            break;
        case '10':
            echo "barely enough!";
            break;
        case '11':
        case '12':
        case '13':
        case '14':
            echo "Not bad!";
            break;
        case 15:
        case 16:
        case 17:
        case 18:
            echo "Bravo, bravissimo!";
            break;
        case 19:
        case 20:
            echo "Too good to be true : confront the cheater!";
            break;
    }
}
?>
<form method="get" action="">
    <label for="note">Note 1->20</label>
    <input type="" name="note">
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>