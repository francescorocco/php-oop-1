<?php

require __DIR__ . '/Models/mouvies.php';


$the_wolf_of_wall_street = new Mouvies('The Wolf of Wall Street', 2013, 180);

$focus = new Mouvies('Focus', 2015, 104);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css"/>
    <title>OOP</title>
</head>
<body>
    <main>
        <div class="container">
            <?php
            echo $the_wolf_of_wall_street->getFullMouvieInformation();
            echo $focus->getFullMouvieInformation();
            ?>
        </div>
    </main>
</body>
</html>


<!--è definita una classe ‘Movie’
all’interno della classe sono dichiarate delle variabili d’istanza
all’interno della classe è definito un costruttore
all’interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ 
e stampati a schermo i valori delle relative proprietà -->
