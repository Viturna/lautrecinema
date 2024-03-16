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
        <a href="https://viturna.fr" target="_blank" class="profil">
          <img class="profil-img" src="./src/image/profil/riquier-thomas.jpg" alt="">
          <p class="name">Riquier <br> Thomas</p>
        </a>
        <a href="https://www.linkedin.com/in/line-cabaret/" target="_blank" class="profil">
          <img class="profil-img" src="./src/image/profil/cabaret-line.jpg" alt="">
          <p class="name">Cabaret <br> Line</p>
        </a>
        <a href="https://www.linkedin.com/in/eva-garbuio-binaud-639bb4297/" target="_blank" class="profil">
          <img class="profil-img" src="./src/image/profil/garbuio--binaud-eva.jpg" alt="">
          <p class="name">Garbuïo--Binaud <br> Eva</p>
        </a>
        <a href="https://www.linkedin.com/in/alexis-juhel16/" target="_blank" class="profil">
          <img class="profil-img" src="./src/image/profil/juhel-alexis.jpg" alt="">
          <p class="name">Juhel <br> Alexis</p>
        </a>
        <a href="https://edgar-quemere.fr/" target="_blank" class="profil">
          <img class="profil-img" src="./src/image/profil/quemere-edgar.jpg" alt="">
          <p class="name">Quéméré <br> Edgar</p>
        </a>
        <a href="https://www.linkedin.com/in/thomas-merlaud-857331232/" target="_blank" class="profil">
          <img class="profil-img" src="./src/image/profil/merlaud-thomas.jpg" alt="">
          <p class="name">Merlaud <br> Thomas</p>
        </a>
        <a href="https://www.linkedin.com/in/antoine-corberand-49898b294/" target="_blank" class="profil">
          <img class="profil-img" src="./src/image/profil/corberand-antoine.jpg" alt="">
          <p class="name">Corberand <br> Antoine</p>
        </a>
        <a href="https://www.linkedin.com/in/elyser-cellier-74b7b722a/" target="_blank" class="profil">
          <img class="profil-img" src="./src/image/profil/cellier-elyser.jpg" alt="">
          <p class="name">Cellier <br> Elyser</p>
        </a>
        <a href="https://billeltighidet.com/" target="_blank" class="profil">
          <img class="profil-img" src="./src/image/profil/tighidet-billel.jpg" alt="">
          <p class="name">Tighidet <br> Billel</p>
        </a>
        <a href="https://www.linkedin.com/in/gabriel-valton-b2800b294/" target="_blank" class="profil">
          <img class="profil-img" src="./src/image/profil/valton-gabriel.jpg" alt="">
          <p class="name">Valton <br> Gabriel</p>
        </a>
      </div>
    </div>
  </main>
  <?php require_once 'footer.php' ?>
</body>

</html>
