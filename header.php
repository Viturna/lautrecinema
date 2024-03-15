
<header class="grid">
  <a href="/index.php">
  <img class="header-logo" src="/src/image/logo-red.svg" alt="">
  </a>
  <nav>
    <ul class="menu">
      <li><a href="/index.php" class="menu-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">Accueil</a></li>
      <li><a href="/videos.php" class="menu-link <?php echo basename($_SERVER['PHP_SELF']) == 'videos.php' ? 'active' : ''; ?>"> Nos épisodes</a></li>
      <li><a href="#" class="menu-link">Showtime MMI Bordeaux</a></li>
    </ul>
    <div class="menu-btn">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </div>
  </nav>
</header>
<script>
document.addEventListener('DOMContentLoaded', function() {
  const menuBtn = document.querySelector('.menu-btn');
  const menu = document.querySelector('.menu');

  const menuItem = document.querySelectorAll('.nav__link');
  const bars = document.querySelectorAll('.bar');

  menuBtn.addEventListener('click', function() {
    menuBtn.classList.toggle('active');
    menu.classList.toggle('active');
    bars.forEach(bar => bar.classList.toggle('active'));
  });

  menuItem.forEach(menuItem => {
    menuItem.addEventListener('click', function() {
      menuBtn.classList.toggle('active');
      menu.classList.toggle('active');
      bars.forEach(bar => bar.classList.toggle('active'));
    });
  });
});
</script>
