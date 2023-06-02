<?php

class Movie
{
    public $titolo;
    public $poster;
    public $regista;
    public $anno;
    public $durata;
    public $genere;


    public function __construct(String $_titolo, String $_poster, String $_regista, Int $_anno, String $_durata, array $_genere)
    {
        $this->titolo = $_titolo;
        $this->poster = $_poster;
        $this->regista = $_regista;
        $this->anno = $_anno;
        $this->durata = $_durata;
        $this->genere = $_genere;
    }

    // public function setTitle()
    // {
    //     return $this->titolo;
    // }

}
