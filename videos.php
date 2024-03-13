<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./src/css/style.css" rel="stylesheet">
    <link href="./src/css/videos.css" rel="stylesheet">
</head>
<body>
    <?php 
    include_once './header.php';
    require_once './config.php';

    // Exécuter une requête SELECT
    $recents = mysqli_query($connexion, "SELECT * FROM video ORDER BY dateAjoutVid LIMIT 1");
    ?>

    <h2>Nouveauté</h2>
    <?php
    foreach ($recents as $recent){
        $title = $recent["titleVid"];
        $img = $recent["imgVid"]; 
        $sources = $recent["sourcesVid"];
        $durée = $recent["timeVid"];
    ?>

        <div class="card card-red">
            <div class="card-img"><img src="<?php echo './src/image/' . $img ?>" alt="vignette de l'épisode"></div>
            <div class="col">
                <h3><?php echo $title ?></h3>
                <p><?php echo $durée ?></p>
            </div>
            <img class="icon-play" src="./src/image/icon-play-white.svg" alt="">
        </div>

    <?php
    } 
    ?>

    <h2>Nos épisodes</h2>

    <?php
    $videos = mysqli_query($connexion, "SELECT * FROM video ORDER BY dateAjoutVid LIMIT 1, 15");

    foreach ($videos as $video){
        $title = $video["titleVid"];
        $img = $video["imgVid"]; 
        $sources = $video["sourcesVid"];
        $duree = $video["timeVid"];
    ?>

        <div class="card">
            <div class="card-img"><img src="<?php echo './src/image/' . $img ?>" alt="vignette de l'épisode"></div>
            <div class="col">
                <h3><?php echo $title ?></h3>
                <p><?php echo $duree ?></p>
            </div>
            <img class="icon-play" src="./src/image/icon-play-red.svg" alt="">
        </div>
        
    <?php
    }
    ?>

</body>
</html>
