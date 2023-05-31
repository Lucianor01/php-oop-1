<?php

class Movie
{
    public $titolo;
    public $genere;
    public $regista;
    public $anno;
}

$joker = new Movie();

$joker->titolo = 'Joker';
$joker->genere = 'Thriller/Drammatico';
$joker->regista = 'Todd Phillips';
$joker->anno = '2019';

var_dump($joker);

$the_Batman = new Movie();

$the_Batman->titolo = 'The Batman';
$the_Batman->genere = 'Azione/Giallo';
$the_Batman->regista = 'Matt Reeves';
$the_Batman->anno = '2022';

var_dump($the_Batman);
