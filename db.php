<?php 

include __DIR__ . '/Models/Movie.php';
include __DIR__ . '/Models/Genre.php';

/** TODO isRatedR */

$movies = [
    new Movie('Spirited Away', 'Japanese', $anime),
    new Movie('The Ninth Gate', 'English', $thriller),
    new Movie('Twin Peaks', 'English', $mystery),
    new Movie('Interstellar', 'English',$sciFi),
    new Movie('Blade Runner', 'English', $sciFi),
    new Movie('Old Boy', 'Korean', $thriller)
];

$genres = [
    $action => new Genre('Action'),
    $adventure => new Genre('Adventure'),
    $anime => new Genre('Anime'),
    $comedy => new Genre('Comedy'),
    $dramatic => new Genre('Dramatic'),
    $horror => new Genre('Horror'),
    $mystery => new Genre('Mystery'),
    $sciFi => new Genre('Science Fiction'),
    $thriller => new Genre('Thriller')
];