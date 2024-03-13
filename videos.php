<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./src/css/style.css" rel="stylesheet">
</head>
<body>
    <?php 
    include_once './header.php';
    require_once './config.php';

    // Exécuter une requête SELECT
    $videos = mysqli_query($connexion, "SELECT * FROM video ORDER BY dateAjoutVid LIMIT 1, 15");
    $recents = mysqli_query($connexion, "SELECT * FROM video ORDER BY dateAjoutVid LIMIT 1");
    ?>

    <h2>Nouveauté</h2>
    <div class="card">
        <?php
        foreach ($recents as $recent){
            $title = $recent["titleVid"];
            $img = $recent["imgVid"]; 
            $sources = $recent["sourcesVid"];
            $durée = $recent["timeVid"]; 
        } 
        ?>

    </div>
    <h2>Nos épisodes</h2>

    <?php
    foreach ($videos as $video){
        $title = $video["titleVid"];
        $img = $video["imgVid"]; 
        $sources = $video["sourcesVid"];
        $durée = $video["timeVid"];
    ?>

        <div class="card">
            <img src="<?php echo './src/image/' . $img ?>" alt="">
            <div class="col">
                <h3><?php echo $title ?></h3>
                <p><?php echo $durée ?></p>
            </div>
            <img src="./src/image/icon-play-white.svg" alt="">
        </div>
        
    <?php
    }
    ?>
</body>
</html>
