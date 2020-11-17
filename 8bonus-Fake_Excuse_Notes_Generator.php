<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fake Excuse Notes Generator</title>
</head>
<body>
<h1>Fake Excuse Notes Generator</h1>
    <form method="GET" action="">
        <p>Identity:</p>
        <label for="name">Name of student: </label>
        <input type="text" name="name"/>

        <input type="radio" name="gender" value="boy"/>
        <label for="boy">Boy</label>
        <input type="radio" name="gender" value="girl"/>
        <label for="girl">Girl</label>

        <p>Teacher:</p>
        <label for="name">Name of the teacher: </label>
        <input type="text" name="teacher"/>
        <input type="radio" name="genderT" value="mister"/>
        <label for="mister">Mister</label>
        <input type="radio" name="genderT" value="miss"/>
        <label for="miss">Miss</label>

        <p>Reason for the absence:</p>
        <input type="radio" name="excuse" value="illness"/>
        <label for="illness">Illness</label>
        <input type="radio" name="excuse" value="deathPet"/>
        <label for="deathPet">Death of the pet</label>
        <input type="radio" name="excuse" value="extraActivity"/>
        <label for="extraActivity">Extra-curricular activity</label>
        <input type="radio" name="excuse" value="covid"/>
        <label for="covid">Covid-19</label>
        <input type="submit" name="submit"/>
    </form>

    <h1>Your generated fake excuse note :</h1>
    <div>
        <?php
        if(isset($_GET['submit'])){
            $name = $_GET['name'];
            $_GET['gender'] == "boy" ? $gender="Il" : $gender="Elle";
            $_GET['genderT'] == "mister" ? $genderT="Monsieur" : $genderT="Madame";
            $teacher = $_GET['teacher'];
            $date = date("d/m/Y");

            function random(){
                return rand(0,4);
            }

            $excuseArray=array(
                "illness" => array(
                    "$name, élève dans votre école, ne viendra pas assister aux cours donnés en ce jour.
                    $gender souffre en effet de température et doit rester au chaud pendant quelques jours.",
                    "$name, élève dans votre école, ne viendra pas assister aux cours donnés en ce jour.
                    $gender souffre en effet de vomissements et doit rester aux toilettes pendant quelques jours.",
                    "$name, élève dans votre école, ne viendra pas assister aux cours donnés en ce jour.
                    $gender souffre en effet d'une sévère toux et doit rester au sec pendant quelques jours.",
                    "$name, élève dans votre école, ne viendra pas assister aux cours donnés en ce jour.
                    $gender souffre en effet de migraines et doit rester dans le noir pendant quelques jours.",
                    "$name, élève dans votre école, ne viendra pas assister aux cours donnés en ce jour.
                    $gender souffre en effet de crampes et doit arrêter toutes activités pendant quelques jours."),
            
                "deathPet"=> array(
                    "$name, élève dans votre école, ne viendra pas assister aux cours donnés en ce jour.
                    $gender a perdu sa grand-mère et n'est donc pas dans son assiette. Veuillez l'excuser aujourd'hui.",
                    "$name, élève dans votre école, ne viendra pas assister aux cours donnés en ce jour.
                    $gender a perdu son poisson rouge dans les toilettes et n'est donc pas dans son assiette. Veuillez l'excuser aujourd'hui.",
                    "$name, élève dans votre école, ne viendra pas assister aux cours donnés en ce jour.
                    $gender a perdu son hamster dans l'estomac du chien du voisin et n'est donc pas dans son assiette. Veuillez l'excuser aujourd'hui.",
                    "$name, élève dans votre école, ne viendra pas assister aux cours donnés en ce jour.
                    $gender a perdu son escargot dans le jardin et n'est donc pas dans son assiette. Veuillez l'excuser aujourd'hui.",
                    "$name, élève dans votre école, ne viendra pas assister aux cours donnés en ce jour.
                    $gender a perdu une vie dans Mario et n'est donc pas dans son assiette. Veuillez l'excuser aujourd'hui."),
            
                "extraActivity"=> array(
                    "$name, élève dans votre école, ne viendra pas assister aux cours donnés en ce jour.
                    $gender a eu un match fort éprouvant physiquement hier (triple entorse du genou). Veuillez l'excuser pendant une semaine.",
                    "$name, élève dans votre école, ne viendra pas assister aux cours donnés en ce jour.
                    $gender a gagné un voyage en Russie suite à sa victoire en finale des espoirs d'échecs. Veuillez l'excuser pendant 15 jours.",
                    "$name, élève dans votre école, ne viendra pas assister aux cours donnés en ce jour.
                    $gender a hacké les servers de la NASA et la police est venue frapper à notre porte. $gender est donc reparti menotté avec la police. Veuillez l'excuser pendant je ne sais pas combien de temps...",
                    "$name, élève dans votre école, ne viendra pas assister aux cours donnés en ce jour.
                    $gender a une hernie discale à cause de sa vocation d'écologiste à ramasser les déchets des autres chaque fois qu'$gender en voit. Veuillez l'excuser le temps que son dos aille mieux.",
                    "$name, élève dans votre école, ne viendra pas assister aux cours donnés en ce jour.
                    $gender a trouvé un ticket gagnant au Lotto et a décidé de ne plus assister aux cours afin de commencer sa nouvelle vie. Veuillez l'excuser indéfiniment."),
            
                "covid"=>array(
                    "$name, ne viendra pas aux cours pendant le confinement car $gender a peur de contracter la Covid-19. Veuillez l'excuser pendant la pandémie.",
                    "$name, ne viendra pas aux cours pendant le confinement car $gender a contracté la Covid-19. Veuillez l'excuser pendant son hospitalisation.",
                    "$name, ne viendra pas aux cours pendant le confinement car $gender a peut-être la Covid-19. Veuillez l'excuser pendant sa quarantaine.",
                    "$name, ne viendra pas aux cours pendant le confinement car $gender s'est exilé sur l'île de Pâques afin d'échapper au coronavirus. Veuillez l'excuser pendant la pandémie.",
                    "$name, ne viendra pas aux cours pendant le confinement car $gender a perdu tout sa famille à cause du coronavirus. Veuillez l'excuser pendant son deuil (qui sera sans doute plus long car il n'a pas pu assister aux obsèques à cause du confinement).")
            );

            echo "<div><p>$genderT $teacher,</p><p>Le $date,</p></div>";

            switch ($_GET['excuse']){
                case "illness":
                    echo $excuseArray["illness"][random()];
                    break;
                case "deathPet":
                    echo $excuseArray["deathPet"][random()];
                    break;
                case "extraActivity":
                    echo $excuseArray["extraActivity"][random()];
                    break;
                case "covid":
                    echo $excuseArray["covid"][random()];
                    break;
            }
            echo "<p>Cordialement,</p>";
        }
        ?>
    </div>
</body>
</html>