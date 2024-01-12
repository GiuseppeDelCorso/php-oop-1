<?php

require __DIR__ . '/modelli/moovie.php';


$film = new Moovie("SpiderMan", "PeeterPaker", "1h");

var_dump($film);
echo $film->nome;
echo $film->protagonista;
echo $film->durata;
