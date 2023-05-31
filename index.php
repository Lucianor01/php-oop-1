<?php

class Movie
{
    public $titolo;
    public $genere;
    public $regista;
    public $anno;

    public function __construct($titolo, $genere, $regista, $anno)
    {
        $this->titolo = $titolo;
        $this->genere = $genere;
        $this->regista = $regista;
        $this->anno = $anno;
    }
}

$joker = new Movie('Joker', 'Thriller/Drammatico', 'Todd Phillips', '2019');

// $joker->titolo = 'Joker';
// $joker->genere = 'Thriller/Drammatico';
// $joker->regista = 'Todd Phillips';
// $joker->anno = '2019';

var_dump($joker);

$the_Batman = new Movie('The Batman', 'Azione/Giallo', 'Matt Reeves', '2022');

// $the_Batman->titolo = 'The Batman';
// $the_Batman->genere = 'Azione/Giallo';
// $the_Batman->regista = 'Matt Reeves';
// $the_Batman->anno = '2022';

var_dump($the_Batman);
