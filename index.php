<?php
require_once "./class/Movies.php";


$Il_colore_della_libertà = new Movies ('Il colore della libertà', 'drammatico' ,'Bille August');
$Famiglia_Mostruosa = new Movies('Famiglia Mostruosa','commedia, fantasy','Volfango De Biasi');
$Resident_Evil = new Movies('Resident Evil: Welcome to Raccoon City', 'horror, drammatico', 'Johannes Roberts');


var_dump($Il_colore_della_libertà);

var_dump($Il_colore_della_libertà->getTitolo());





$AllDataFilms = [$Il_colore_della_libertà, $Famiglia_Mostruosa, $Resident_Evil];

var_dump($AllDataFilms);