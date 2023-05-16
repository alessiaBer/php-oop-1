<?php 

include_once __DIR__ . '/Models/Movie.php';
include_once __DIR__ . '/Models/Genre.php';

/** TODO isRatedR */
$genres = [
    "action" => new Genre('Action'),
    "adventure" => new Genre('Adventure'),
    "anime" => new Genre('Anime'),
    "comedy" => new Genre('Comedy'),
    "dramatic" => new Genre('Dramatic'),
    "horror" => new Genre('Horror'),
    "mystery" => new Genre('Mystery'),
    "sciFi" => new Genre('Science Fiction'),
    "thriller" => new Genre('Thriller')
];

$movies = [
    new Movie('Spirited Away', 'Japanese', $genres["action"]),
    new Movie('The Ninth Gate', 'English', $genres["thriller"]),
    new Movie('Twin Peaks', 'English', $genres["mystery"]),
    new Movie('Interstellar', 'English',$genres["sciFi"]),
    new Movie('Blade Runner', 'English', $genres["sciFi"]),
    new Movie('Old Boy', 'Korean', $genres["thriller"])
];
