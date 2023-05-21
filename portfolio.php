<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/portafolio.css">
  <title>Portafolio</title>
</head>

<body>
  <!-- Encabezado con el logotipo -->
  <header>
    <div class="logo-container">
      <a href="index.html" class="logo-link">
        <img src="img/mini-logo-dnc-rosa.png" alt="Logo DNC" class="logo-mini">
      </a>
    </div>
    <nav>
      <ul class="menu">
        <li><a href="nosotros.html" class="menu-link">Nosotros</a></li>
        <li><a href="#productos" class="menu-link">Productos</a></li>
        <li><a href="https://www.instagram.com/estudios_dnc/" target="_blank" class="menu-link">Instagram</a></li>
        <li><a href="https://www.tiktok.com/@dancort_art" target="_blank" class="menu-link">TikTok</a></li>
        <li><a href="https://www.twitch.tv/dancort" target="_blank" class="menu-link">Twitch</a></li>
        <li><a href="https://www.youtube.com/channel/UCS21p3iixZ1seywaE7oC7rA" target="_blank" class="menu-link">YouTube</a></li>
        <li><a href="https://discord.com/invite/X3uCufU9Dx" target="_blank" class="menu-link">Discord</a></li>
        <li><a href="#contacto" class="menu-link">Contacto</a></li>
      </ul>
    </nav>
  </header>

  <!-- Contenido de la página -->
  <section class="ilustraciones">
    <h2>Ilustraciones</h2>
    <div class="gallery">
      <?php
      $imageFolder = 'img/portafolio/ilustraciones/';

      $files = scandir($imageFolder);

      foreach ($files as $file) {
        if (in_array(pathinfo($file, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif'])) {
          echo '<img src="' . $imageFolder . $file . '" alt="' . $file . '">';
        }
      }
      ?>
    </div>
  </section>

  <section class="edicion-videos">
    <h2>Edición de Videos</h2>
    <div class="gallery">
      <?php
      $imageFolder = 'img/portafolio/edicion-videos/';

      $files = scandir($imageFolder);

      foreach ($files as $file) {
        if (in_array(pathinfo($file, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif'])) {
          echo '<img src="' . $imageFolder . $file . '" alt="' . $file . '">';
        }
      }
      ?>
    </div>
  </section>

  <section class="edicion-imagenes">
    <h2>Edición de Imágenes</h2>
    <div class="gallery">
      <?php
      $imageFolder = 'img/portafolio/edicion-imagenes/';

      $files = scandir($imageFolder);

      foreach ($files as $file) {
        if (in_array(pathinfo($file, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif'])) {
          echo '<img src="' . $imageFolder . $file . '" alt="' . $file . '">';
        }
      }
      ?>
    </div>
  </section>

  <section class="stickers">
    <h2>Stickers</h2>
    <div class="gallery">
      <?php
      $imageFolder = 'img/portafolio/stickers/';

      $files = scandir($imageFolder);

      foreach ($files as $file) {
        if (in_array(pathinfo($file, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif'])) {
          echo '<img src="' . $imageFolder . $file . '" alt="' . $file . '">';
        }
      }
      ?>
    </div>
  </section>

  <!-- Agrega más secciones según sea necesario -->

  <script src="js/portafolio.js"></script>
</body>

</html>
