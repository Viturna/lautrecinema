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
  <?php include_once './header.php'; ?>
  <main class="grid">
    <div class="top-a-propos">
      <h1>L'au<span class="snell red">t</span>re <br><span class="snell red">c</span>inéma</h1>
      <div class="our-goal">
        <h2>Notre but</h2>
        <p>Bienvenue dans "L'Autre Cinéma" ! Plongez au cœur des coulisses de l'industrie cinématographique à travers une série qui met en lumière les héros méconnus de l'écran : les artisans du cinéma. <br> Chaque mois, un nouvel épisode mettra en lumière un métier différent. Rejoignez-nous pour une exploration captivante de l'art et de la technique qui se cachent derrière chaque chef-d'œuvre cinématographique.</p>
        <a href="./videos.php" class="button">Découvrir les épisodes</a>
      </div>
    </div>
    <div class="our-team">
      <h2>Notre équipe</h2>
      <div class="box-profil">
        <div class="profil">
          <img class="profil-img" src="./src/image/riquier-thomas.jpg" alt="">
          <p class="name">Riquier <br> Thomas</p>
        </div>
        <div class="profil">
          <img class="profil-img" src="./src/image/cabaret-line.jpg" alt="">
          <p class="name">Cabaret <br> Line</p>
        </div>
        <div class="profil">
          <img class="profil-img" src="./src/image/garbuio--binaud-eva.jpg" alt="">
          <p class="name">Garbuïo--Binaud <br> Eva</p>
        </div>
        <div class="profil">
          <img class="profil-img" src="./src/image/juhel-alexis.jpg" alt="">
          <p class="name">Juhel <br> Alexis</p>
        </div>
        <div class="profil">
          <img class="profil-img" src="./src/image/quemere-edgar.jpg" alt="">
          <p class="name">Quéméré <br> Edgar</p>
        </div>
        <div class="profil">
          <img class="profil-img" src="./src/image/merlaud-thomas.jpg" alt="">
          <p class="name">Merlaud <br> Thomas</p>
        </div>
        <div class="profil">
          <img class="profil-img" src="./src/image/corberand-antoine.jpg" alt="">
          <p class="name">Corberand <br> Antoine</p>
        </div>
        <div class="profil">
          <img class="profil-img" src="./src/image/cellier-elyser.jpg" alt="">
          <p class="name">Cellier <br> Elyser</p>
        </div>
        <div class="profil">
          <img class="profil-img" src="./src/image/tighidet-billel.jpg" alt="">
          <p class="name">Tighidet <br> Billel</p>
        </div>
        <div class="profil">
          <img class="profil-img" src="./src/image/valton-gabriel.jpg" alt="">
          <p class="name">Valton <br> Gabriel</p>
        </div>
      </div>
    </div>
  </main>
  <?php require_once 'footer.php' ?>
</body>

</html>
