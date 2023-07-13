<?php
class Movie
{
    public $title;
    public $id;
    public $genres;
    public $description;
    public $vote;

    function __construct(String $title, int $id, String $genres, String $description, int $vote)
    {
        $this->title = $title;
        $this->id = $id;
        $this->genres = $genres;
        $this->description = $description;
        $this->vote = $vote;
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
        return $this->genres;
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

$movie1 = new Movie('My little Pony', 15, 'animazione', 'Strano , ma veramente', 7);
$movie2 = new Movie('Intestellar', 1, 'Fantascienza', 'Bellissimo , ma veramente', 10);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>

<body>
    <h1>Lista Dei Film</h1>
    <ul>
        <li>
            Title :
            <?php
            echo $movie1->getTitle();
            ?>
        </li>
        <li>
            ID :
            <?php
            echo $movie1->getId();
            ?>
        </li>
        <li>
            Genres :
            <?php
            echo $movie1->getGenres();
            ?>
        </li>
        <li>
            Description :
            <?php
            echo $movie1->getDescription();
            ?>
        </li>
        <li>
            Vote :
            <?php
            echo $movie1->getVote();
            ?>
        </li>
    </ul>

    <ul>
        <li>
            Title :
            <?php
            echo $movie2->getTitle();
            ?>
        </li>
        <li>
            ID :
            <?php
            echo $movie2->getId();
            ?>
        </li>
        <li>
            Genres :
            <?php
            echo $movie2->getGenres();
            ?>
        </li>
        <li>
            Description :
            <?php
            echo $movie2->getDescription();
            ?>
        </li>
        <li>
            Vote :
            <?php
            echo $movie2->getVote();
            ?>
        </li>
    </ul>
</body>

</html>