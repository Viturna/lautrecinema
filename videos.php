<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="./src/css/reset.css" rel="stylesheet">
  <link href="./src/css/style.css" rel="stylesheet">
</head>

<body>
  <?php
  include_once './header.php';
  require_once './config.php';

  // Exécuter une requête SELECT
  $recents = mysqli_query($connexion, "SELECT * FROM video ORDER BY dateAjoutVid LIMIT 1");
  ?>
  <main class="grid-2">
    <section class="new">
      <h2>Nouveauté</h2>
      <?php
      foreach ($recents as $recent) {
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
          <svg class="icon-play play-one" width="37" height="46" viewBox="0 0 37 46" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 3.72606V42.2739C0 45.2134 3.13079 46.9994 5.54187 45.3994L34.8346 26.1255C37.0657 24.6744 37.0657 21.3256 34.8346 19.8373L5.54187 0.60056C3.13079 -0.9994 0 0.786602 0 3.72606Z" fill="white" />
          </svg>
        </div>

      <?php
      }
      ?>
    </section>

    <section class="episode">
      <h2>Nos épisodes</h2>

      <?php
      $videos = mysqli_query($connexion, "SELECT * FROM video ORDER BY dateAjoutVid LIMIT 1, 15");

      foreach ($videos as $video) {
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
          <svg class="icon-play" width="37" height="46" viewBox="0 0 37 46" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 3.72606V42.2739C0 45.2134 3.13079 46.9994 5.54187 45.3994L34.8346 26.1255C37.0657 24.6744 37.0657 21.3256 34.8346 19.8373L5.54187 0.60056C3.13079 -0.9994 0 0.786602 0 3.72606Z" fill="white" />
          </svg>

        </div>

      <?php
      }
      ?>
    </section>

  </main>
</body>

</html>
