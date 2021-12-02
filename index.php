<?php
require_once "./class/Movies.php";


$Il_colore_della_libertà = new Movies('Il colore della libertà', 'drammatico', 'Bille August');
$Famiglia_Mostruosa = new Movies('Famiglia Mostruosa', 'commedia, fantasy', 'Volfango De Biasi');
$Resident_Evil = new Movies('Resident Evil: Welcome to Raccoon City', 'horror, drammatico', 'Johannes Roberts');

/* 
var_dump($Il_colore_della_libertà);

var_dump($Il_colore_della_libertà->getTitolo()); */





$AllDataFilms = [$Il_colore_della_libertà, $Famiglia_Mostruosa, $Resident_Evil];

/* var_dump($AllDataFilms); */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main>
    <div class="container">
            <?php

                $Resident_Evil->setGenere(" noioso (inserito con 'set') ");

                foreach ($AllDataFilms as $film) { ?>

                    <div class="film">

                        <h2> Titolo: <?php echo $film -> getTitolo() ?></h2>
                        <p> Genere: <?php echo $film -> getGenere() ?></p>
                        <h3> Regista: <?php echo $film -> getRegista() ?></h3>
                        
                    </div>
            <?php } 
            
            ?>
        </div>

    </main>

</body>

</html>