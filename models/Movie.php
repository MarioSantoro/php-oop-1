<?php
class Movie
{
    public $id;
    public $title;
    public $genres;
    public $description;
    public $vote;

    function __construct(array $movies)
    {
        $this->title = $movies['title'];
        $this->id = $movies['id'];
        $this->genres = $movies['genres'];
        $this->description = $movies['description'];
        $this->vote = $movies['vote'];
    }

    function getTitle()
    {
        return $this->title;
    }
    function getId()
    {
        return $this->id;
    }
    function getGenres()
    {
        $generi = [];
        for ($i = 0; $i < count($this->genres); $i++) {
            $generi[] = $this->genres[$i];
            echo $generi[$i] . ' , ';
        };
    }
    function getDescription()
    {
        return $this->description;
    }
    function getVote()
    {
        return $this->vote;
    }
}
