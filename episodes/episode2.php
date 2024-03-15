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
  <main class="grid">
    <?php
    foreach ($recents as $recent) {
      $title = $recent["titleVid"];
      $description = $recent["descriptionVid"];
      $img = $recent["imgVid"];
      $sources = $recent["sourcesVid"];
      $duree = $recent["timeVid"];
      $duree_timestamp = strtotime($duree);
      $duree_datetime = new DateTime("@$duree_timestamp");
      $url = $recent["urlVid"];
      $idVid = $recent["idVid"];
    ?>
      <div class="col-episode">
        <div class="video">
          <video id="videoPlayer" src="../src/video/episode2.mov" height="100%" style="display: none;"></video>
          <div class="infos title-video">
            <h3><?php echo $title; ?></h3>
          </div>
          <div class="infos duree-video">
            <svg width="25" height="25" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M14.0064 0C6.29065 0 0 6.28174 0 13.9962C0 21.7106 6.29192 28 14.0064 28C21.7208 28 28 21.7106 28 13.9962C28 6.28174 21.7208 0 14.0064 0ZM14.0064 2.54476C15.5108 2.54225 17.0009 2.83675 18.3912 3.41138C19.7816 3.986 21.0448 4.82945 22.1084 5.89335C23.1721 6.95725 24.0153 8.22066 24.5896 9.61113C25.1639 11.0016 25.4581 12.4918 25.4552 13.9962C25.4583 15.501 25.1643 16.9916 24.5901 18.3826C24.0159 19.7736 23.1729 21.0375 22.1093 22.1021C21.0457 23.1666 19.7825 24.0108 18.392 24.5862C17.0015 25.1616 15.5112 25.4569 14.0064 25.4552C12.5009 25.4571 11.0099 25.162 9.61861 24.5868C8.22736 24.0116 6.96322 23.1676 5.89858 22.1032C4.83394 21.0388 3.9897 19.7749 3.4142 18.3837C2.83871 16.9926 2.54325 15.5016 2.54476 13.9962C2.54476 7.65718 7.66736 2.54476 14.0064 2.54476ZM13.986 5.07171C13.8178 5.07336 13.6516 5.10833 13.4971 5.17461C13.3425 5.24089 13.2026 5.33716 13.0854 5.45785C12.9683 5.57853 12.8762 5.72125 12.8146 5.87774C12.753 6.03423 12.723 6.20138 12.7263 6.36954V13.9962C12.727 14.1636 12.7608 14.3293 12.8256 14.4836C12.8905 14.638 12.9852 14.778 13.1042 14.8958L18.1938 19.9878C18.3115 20.109 18.4522 20.2055 18.6076 20.2717C18.763 20.3379 18.93 20.3725 19.099 20.3734C19.2679 20.3744 19.4353 20.3417 19.5915 20.2773C19.7476 20.2129 19.8894 20.118 20.0085 19.9982C20.1276 19.8785 20.2217 19.7362 20.2852 19.5796C20.3488 19.4231 20.3805 19.2555 20.3786 19.0866C20.3766 18.9177 20.3411 18.7508 20.274 18.5958C20.2069 18.4408 20.1096 18.3006 19.9878 18.1836L15.2737 13.4694V6.36954C15.2771 6.19902 15.2462 6.02956 15.1828 5.87122C15.1194 5.71288 15.0249 5.5689 14.9048 5.44783C14.7847 5.32676 14.6414 5.23108 14.4836 5.16646C14.3258 5.10185 14.1565 5.06963 13.986 5.07171Z" fill="#FCF4F0" />
            </svg>
            <p><?php echo $duree_datetime->format('i:s'); ?></p>
          </div>
        </div>

        <div class="controllers">
        <div class="volume-icon">
    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
      <!-- Icône de son ici -->
    </svg>
          <a href="./episode<?php echo ($idVid - 1) ?>.php">
            <svg width="18" height="21" viewBox="0 0 18 21" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1.66638 20.2501C2.10841 20.2501 2.53233 20.0789 2.84489 19.7741C3.15745 19.4694 3.33305 19.056 3.33305 18.6251L3.33305 12.4176L3.56638 12.6613L12.0664 19.5026C12.5781 19.9023 13.1947 20.1539 13.8459 20.2286C14.4972 20.3033 15.1568 20.1981 15.7497 19.9251C16.2494 19.6918 16.6712 19.3253 16.9661 18.8681C17.2611 18.4108 17.4172 17.8815 17.4164 17.3413L17.4164 3.65881C17.4172 3.11864 17.2611 2.58929 16.9661 2.13203C16.6712 1.67478 16.2494 1.30831 15.7497 1.07506C15.2733 0.863811 14.7564 0.753061 14.233 0.750057C13.4442 0.749138 12.6791 1.0131 12.0664 1.49755L3.56638 8.33881L3.33305 8.58256V2.37506C3.33305 1.94408 3.15745 1.53075 2.84489 1.22601C2.53233 0.921261 2.10841 0.750057 1.66638 0.750057C1.22435 0.750057 0.800426 0.921261 0.487865 1.22601C0.175304 1.53075 -0.00028801 1.94408 -0.00028801 2.37506L-0.00028801 18.6251C-0.00028801 19.056 0.175304 19.4694 0.487865 19.7741C0.800426 20.0789 1.22435 20.2501 1.66638 20.2501Z" fill="#2D2D2D" />
            </svg>
          </a>

          <div class="circle" id="playButton">
            <svg width="19" height="21" viewBox="0 0 19 21" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0 1.70103V19.299C0 20.6409 1.57578 21.4562 2.7893 20.7258L17.5328 11.9269C18.6557 11.2644 18.6557 9.73561 17.5328 9.05615L2.7893 0.274169C1.57578 -0.456248 0 0.359101 0 1.70103Z" fill="#FCF4F0" />
            </svg>
          </div>

          <a href="./episode<?php echo ($idVid + 1) ?>.php">
            <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M16.1665 0.249945C15.7245 0.249945 15.3006 0.42115 14.988 0.725897C14.6754 1.03064 14.4998 1.44397 14.4998 1.87494V8.08244L14.2665 7.83869L5.76651 0.997445C5.25479 0.597685 4.63818 0.346122 3.98695 0.271422C3.33573 0.196723 2.67608 0.301892 2.08317 0.574944C1.58347 0.8082 1.16173 1.17466 0.866772 1.63192C0.571816 2.08917 0.415705 2.61852 0.416507 3.15869V16.8412C0.415705 17.3814 0.571816 17.9107 0.866772 18.368C1.16173 18.8252 1.58347 19.1917 2.08317 19.4249C2.55962 19.6362 3.07645 19.7469 3.59984 19.7499C4.38869 19.7509 5.15381 19.4869 5.76651 19.0024L14.2665 12.1612L14.4998 11.9174V18.1249C14.4998 18.5559 14.6754 18.9692 14.988 19.274C15.3006 19.5787 15.7245 19.7499 16.1665 19.7499C16.6085 19.7499 17.0325 19.5787 17.345 19.274C17.6576 18.9692 17.8332 18.5559 17.8332 18.1249V1.87494C17.8332 1.44397 17.6576 1.03064 17.345 0.725897C17.0325 0.42115 16.6085 0.249945 16.1665 0.249945Z" fill="#2D2D2D" />
            </svg>
          </a>
          <svg id="fullscreen" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2.57143 11.5714H0V18H6.42857V15.4286H2.57143V11.5714ZM0 6.42857H2.57143V2.57143H6.42857V0H0V6.42857ZM15.4286 15.4286H11.5714V18H18V11.5714H15.4286V15.4286ZM11.5714 0V2.57143H15.4286V6.42857H18V0H11.5714Z" fill="#2D2D2D" />
          </svg>

        </div>
        <script>
          const playButton = document.getElementById('playButton');
          const videoPlayer = document.getElementById('videoPlayer');
          const videoContainer = document.querySelector('.video');
          let isPlaying = false;

          playButton.addEventListener('click', () => {
            if (isPlaying) {
              videoPlayer.pause(); // Mettre en pause la vidéo si elle est en cours de lecture
              playButton.innerHTML = `
      <svg width="19" height="21" viewBox="0 0 19 21" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 1.70103V19.299C0 20.6409 1.57578 21.4562 2.7893 20.7258L17.5328 11.9269C18.6557 11.2644 18.6557 9.73561 17.5328 9.05615L2.7893 0.274169C1.57578 -0.456248 0 0.359101 0 1.70103Z" fill="#FCF4F0" />
      </svg>`;

            } else {
              videoPlayer.style.display = 'block'; // Afficher la vidéo si elle est cachée
              videoContainer.style.background = 'none';
              videoPlayer.play(); // Lancer la lecture de la vidéo
              playButton.innerHTML = `
      <svg width="16" height="21" viewBox="0 0 16 21" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.625 0C1.92881 0 1.26113 0.276562 0.768845 0.768845C0.276562 1.26113 0 1.92881 0 2.625L0 18.375C0 19.0712 0.276562 19.7389 0.768845 20.2312C1.26113 20.7234 1.92881 21 2.625 21C3.32119 21 3.98887 20.7234 4.48116 20.2312C4.97344 19.7389 5.25 19.0712 5.25 18.375V2.625C5.25 1.92881 4.97344 1.26113 4.48116 0.768845C3.98887 0.276562 3.32119 0 2.625 0ZM15.75 2.625V18.375C15.75 19.0712 15.4734 19.7389 14.9812 20.2312C14.4889 20.7234 13.8212 21 13.125 21C12.4288 21 11.7611 20.7234 11.2688 20.2312C10.7766 19.7389 10.5 19.0712 10.5 18.375V2.625C10.5 1.92881 10.7766 1.26113 11.2688 0.768845C11.7611 0.276562 12.4288 0 13.125 0C13.8212 0 14.4889 0.276562 14.9812 0.768845C15.4734 1.26113 15.75 1.92881 15.75 2.625Z" fill="white"/>
      </svg>`;
            }
            isPlaying = !isPlaying; // Inverser l'état de lecture
          });

          const fullscreenButton = document.getElementById('fullscreen');

          fullscreenButton.addEventListener('click', () => {
            if (videoPlayer.requestFullscreen) {
              videoPlayer.requestFullscreen();
            } else if (videoPlayer.mozRequestFullScreen) {
              /* Firefox */
              videoPlayer.mozRequestFullScreen();
            } else if (videoPlayer.webkitRequestFullscreen) {
              /* Chrome, Safari and Opera */
              videoPlayer.webkitRequestFullscreen();
            } else if (videoPlayer.msRequestFullscreen) {
              /* IE/Edge */
              videoPlayer.msRequestFullscreen();
            }
          });
        </script>
        <h3>Description</h3>
        <p><?php echo $description ?></p>
        <h3>Sources</h3>
        <p><?php echo $sources ?></p>
      </div>



      <!-- <iframe width="100%" height="100%" src="" frameborder="0" allowfullscreen></iframe> -->

    <?php
    }
    ?>
  </main>

  <?php
  include_once '../footer.php';
  ?>

</body>

</html>
