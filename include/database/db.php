<?php

include __DIR__ . '/../models/genre.php';
include __DIR__ . '/../models/movie.php';

$arrayMovies = [
    new Movie(
        'The Batman',
        'https://www.warnerbros.it/wp-content/uploads/2022/01/The-Batman_Poster-Italia.jpg',
        'Matt Reeves',
        2022,
        '2h 56m',
        [new Genere('Azione/'), new Genere('Giallo')]
    ),
    new Movie(
        'Joker',
        'https://www.warnerbros.it/wp-content/uploads/2018/08/Joker_Digital.jpg',
        'Todd Phillips',
        2019,
        '2h 2m',
        [new Genere('Thriller/'), new Genere('Drammatico')]
    ),
    new Movie(
        'The Flash',
        'https://www.warnerbros.it/wp-content/uploads/2023/02/The-Flash_Poster-Italia-1.jpg',
        'Andy Muschietti',
        2023,
        ' 2h 24m',
        [new Genere('Eroi/'), new Genere('Supereroi')]
    )
];
