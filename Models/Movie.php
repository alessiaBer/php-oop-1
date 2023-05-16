<?php 
include_once __DIR__ . '/Genre.php';

class Movie
{
    public $title;
    public $language;
    public $genre;
    public $isRatedR = false;
    public $type = "movie";
    public function __construct(String $title, String $language, Genre $genre)
    {
        $this->title = $title;
        $this->language = $language;
        $this->genre = $genre;
    }
    public function isRatedR($minAge)
    {
        if ($minAge >= 18) {
            $this->isRatedR = true;
        }
    }
};