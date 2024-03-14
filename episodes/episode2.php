<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../src/css/reset.css" rel="stylesheet">
    <link href="../src/css/style.css" rel="stylesheet">
    <link href="../src/css/episodes.css" rel="stylesheet">
</head>
<body>
    <?php
    include_once '../header.php';
    require_once '../config.php';

    $recents = mysqli_query($connexion, "SELECT * FROM video Where idVid = 2");
    ?>
    <main class="grid-2">
        <?php
        foreach ($recents as $recent) {
            $title = $recent["titleVid"];
            $description = $recent["descriptionVid"];
            $img = $recent["imgVid"];
            $sources = $recent["sourcesVid"];
            $durée = $recent["timeVid"];
            $url = $recent["urlVid"];
        ?>
            <div class="col-episode">
                <div>
                    <iframe width="560" height="315" src="<?php echo $url ?>" frameborder="0" allowfullscreen></iframe>
                </div>
                <h3>Description</h3>
                <p><?php echo $description ?></p>
                <h3>Sources</h3>
                <p><?php echo $sources ?></p>
            </div>

        <?php
        }
        ?>
    </main>
    
</body>
</html>