<!DOCTYPE html>
<html lang="fr">

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
    <form  id="searchForm" role="search">
      <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
        <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
      </svg>
      <input id="search" type="search" placeholder="Rechercher une émission" autofocus required />
    </form>
    <div id="searchResults"></div>
    <section class="new">
      <h2>Nouveauté</h2>
      <?php
      foreach ($recents as $recent) {
        $title = $recent["titleVid"];
        $img = $recent["imgVid"];
        $sources = $recent["sourcesVid"];
        $duree = $recent["timeVid"];
        $duree_timestamp = strtotime($duree);
        $duree_datetime = new DateTime("@$duree_timestamp");
      ?>

        <div class="card card-red">
          <div class="card-content">
            <div class="card-img"><img src="<?php echo './src/image/' . $img ?>" alt="vignette de l'épisode"></div>
            <div class="col">
              <h3><?php echo $title ?></h3>
              <p class="duration"><?php echo $duree_datetime->format('i:s'); ?></p>
            </div>
            <svg class="icon-play play-one" width="37" height="46" viewBox="0 0 37 46" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0 3.72606V42.2739C0 45.2134 3.13079 46.9994 5.54187 45.3994L34.8346 26.1255C37.0657 24.6744 37.0657 21.3256 34.8346 19.8373L5.54187 0.60056C3.13079 -0.9994 0 0.786602 0 3.72606Z" fill="white" />
            </svg>
          </div>
        </div>
      <?php
      }
      ?>
    </section>

    <section class="episode">
      <h2>Nos épisodes</h2>
      <div id="searchResults"></div>
      <?php
      $videos1 = mysqli_query($connexion, "SELECT * FROM video ORDER BY dateAjoutVid LIMIT 1, 2");

      foreach ($videos1 as $video1) {
        $id = $video1["idVid"];
        $title = $video1["titleVid"];
        $img = $video1["imgVid"];
        $duree = $video1["timeVid"];
        $duree_timestamp = strtotime($duree);
        $duree_datetime = new DateTime("@$duree_timestamp");
      ?>
        <a href="<?php echo './episodes/episode' . $id . '.php'; ?>">
          <div class="card">
            <div class="card-content">
              <div class="card-img"><img src="<?php echo './src/image/' . $img ?>" alt="vignette de l'épisode"></div>
              <div class="col">
                <h3><?php echo $title ?></h3>
                <p class="duration"><?php echo $duree_datetime->format('i:s'); ?></p>
              </div>
              <svg class="icon-play" width="37" height="46" viewBox="0 0 37 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 3.72606V42.2739C0 45.2134 3.13079 46.9994 5.54187 45.3994L34.8346 26.1255C37.0657 24.6744 37.0657 21.3256 34.8346 19.8373L5.54187 0.60056C3.13079 -0.9994 0 0.786602 0 3.72606Z" fill="white" />
              </svg>
            </div>
          </div>
        </a>

      <?php
      }

      $videos = mysqli_query($connexion, "SELECT * FROM video ORDER BY dateAjoutVid LIMIT 2, 15");

      foreach ($videos as $video) {
        $id = $video["idVid"];
        $title = $video["titleVid"];
        $img = $video["imgVid"];
        $duree = $video["timeVid"];
        $duree_timestamp = strtotime($duree);
        $duree_datetime = new DateTime("@$duree_timestamp");
      ?>
        <div class="card disabled">
          <div class="card-content">
            <div class="card-img"><img src="<?php echo './src/image/' . $img ?>" alt="vignette de l'épisode"></div>
            <div class="col">
              <h3><?php echo $title ?></h3>
              <p class="duration"><?php echo $duree_datetime->format('i:s'); ?></p>
            </div>
            <svg class="icon-play" width="37" height="46" viewBox="0 0 37 46" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0 3.72606V42.2739C0 45.2134 3.13079 46.9994 5.54187 45.3994L34.8346 26.1255C37.0657 24.6744 37.0657 21.3256 34.8346 19.8373L5.54187 0.60056C3.13079 -0.9994 0 0.786602 0 3.72606Z" fill="white" />
            </svg>
          </div>
        </div>

      <?php
      }
      ?>
    </section>

  </main>
  <?php include_once './footer.php'; ?>

</body>

</html>
