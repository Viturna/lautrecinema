<header class="grid">
  <a href="/index.php">
    <img class="header-logo" src="/src/image/logo-red.svg" alt="">
  </a>
  <nav>
    <ul class="menu">
      <li><a href="/index.php" class="menu-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">Accueil</a></li>
      <li><a href="/videos.php" class="menu-link <?php echo basename($_SERVER['PHP_SELF']) == 'videos.php' ? 'active' : ''; ?>"> Nos épisodes</a></li>
      <li><a href="/showtime.php" class="menu-link <?php echo basename($_SERVER['PHP_SELF']) == 'showtime.php' ? 'active' : ''; ?>">Showtime</a></li>
      <li>
        <a href="./videos.php">
          <svg class="search-header" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
          </svg>
        </a>
      </li>
    </ul>
    <div class="menu-btn">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </div>
  </nav>
</header>
<div id="loader"></div>

<script>
  window.addEventListener('load', function() {
    var loader = document.getElementById('loader');
    loader.style.display = 'none';
    document.querySelector('main').style.visibility = 'visible'; // Sélectionnez la balise main correctement
  });
</script>

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
