<?php
require 'includes/app.php';

incluirTemplate('header');
?>

<main class="contenedor seccion">
  <h2>Casas y Depas en Venta</h2>
  <?php
  // $limit = 9;
  include 'includes/templates/anuncios.php';
  ?>
</main>

<?php incluirTemplate('footer'); ?>