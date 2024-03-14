<header class="grid">
  <img src="./src/image/logo-red.svg" alt="">
  <nav>
    <ul class="menu">
      <li><a href="./index.php" class=" <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">Accueil</a></li>
      <li><a href="./videos.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'videos.php' ? 'active' : ''; ?>"> Nos épisodes</a></li>
      <li><a href="#">Autre page</a></li>
    </ul>
    <div class="burger-menu">
      <div class="burger"></div>
    </div>
  </nav>
</header>
<script>
  document.addEventListener('DOMContentLoaded', function () {
  const burgerMenu = document.querySelector('.burger-menu');
  const menu = document.querySelector('.menu');

  burgerMenu.addEventListener('click', function () {
    menu.classList.toggle('active');
  });
});

</script>
