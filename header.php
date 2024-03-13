<header class="grid">
  <img src="./src/image/logo-red.svg" alt="">
  <nav>
    <ul class="menu">
      <li>A propos</li>
      <li>Nos épisodes</li>
      <li>Autre page</li>
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
