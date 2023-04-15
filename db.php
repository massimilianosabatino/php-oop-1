<?php

require_once __DIR__. '/Model/Movie.php';

//crea instanze per film da classe Movie
$superman = new Movie ('Superman', 'Un orfano proveniente da un altro pianeta arriva sulla Terra, dove crescerà e diventerà un super-eroe', 1978, 'Azione','Avventura','Fantascienza');

$mario = new Movie ('Super Mario Bros - Il film', 'Un idraulico di nome Mario viaggia attraverso un labirinto sotterraneo con suo fratello Luigi, cercando di salvare una principessa catturata.', 2023, 'Animazione', 'Avventura', 'Commedia', 'Per famiglie', 'Fantastico');

$all_movie = [];
$all_movie[] = $superman;
$all_movie[] = $mario;
