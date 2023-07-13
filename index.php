<?php
require_once './db.php';
require_once 'models/Movie.php';
$prefisso = 'movie';
for ($i = 0; $i < count($movies); $i++) {
    $nomeVariabile = $prefisso . strval($i);
    $$nomeVariabile  = new Movie($movies[$i]);
}

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
    <?php
    for ($i = 0; $i < count($movies); $i++) { ?>
        <?php $nomeVariabile = $prefisso . strval($i); ?>
        <ul>
            <li>
                Title :
                <?php
                echo $$nomeVariabile->getTitle();
                ?>
            </li>
            <li>
                ID :
                <?php
                echo $$nomeVariabile->getId();
                ?>
            </li>
            <li>
                Genres :
                <?php
                echo $$nomeVariabile->getGenres();
                ?>
            </li>
            <li>
                Description :
                <?php
                echo $$nomeVariabile->getDescription();
                ?>
            </li>
            <li>
                Vote :
                <?php
                echo $$nomeVariabile->getVote();
                ?>
            </li>
        </ul>
    <?php } ?>

</body>

</html>