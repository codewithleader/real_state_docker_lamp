<?php
require 'includes/functions.php';

incluirTemplate('header', true);
?>

<main class="contenedor seccion">
  <h1>Más sobre nosotros</h1>
  <div class="iconos-nosotros">
    <div class="icono">
      <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy" />
      <h3>Seguridad</h3>
      <p>
        Tempore nihil officiis corporis veritatis voluptatem molestias
        expedita, officia suscipit consectetur, quas eveniet repudiandae
        voluptates. Nulla obcaecati consequatur ipsam veritatis, alias et!
      </p>
    </div>

    <div class="icono">
      <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy" />
      <h3>Precio</h3>
      <p>
        Tempore nihil officiis corporis veritatis voluptatem molestias
        expedita, officia suscipit consectetur, quas eveniet repudiandae
        voluptates. Nulla obcaecati consequatur ipsam veritatis, alias et!
      </p>
    </div>

    <div class="icono">
      <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy" />
      <h3>A Tiempo</h3>
      <p>
        Tempore nihil officiis corporis veritatis voluptatem molestias
        expedita, officia suscipit consectetur, quas eveniet repudiandae
        voluptates. Nulla obcaecati consequatur ipsam veritatis, alias et!
      </p>
    </div>
  </div>
</main>

<section class="seccion contenedor">
  <h2>Casas y Depas en Venta</h2>

  <?php
  $limit = 3;

  include 'includes/templates/anuncios.php';

  ?>

  <div class="alinear-derecha">
    <a href="anuncios.php" class="boton-verde">Ver todas</a>
  </div>
</section>

<section class="imagen-contacto">
  <h2>Encuentra la casa de tus sueños</h2>
  <p>
    Llena el formulario de contacto y un asesor se comunicará contigo a la
    brevedad
  </p>
  <a href="contacto.html" class="boton-amarillo">Contáctanos</a>
</section>

<div class="contenedor seccion seccion-inferior">
  <section class="blog">
    <h3>Nuestro Blog</h3>
    <article class="entrada-blog">
      <div class="imagen">
        <picture>
          <source srcset="build/img/blog1.webp" type="image/webp" />
          <source srcset="build/img/blog1.jpg" type="image/jpeg" />
          <img loading="lazy" src="build/img/blog1.jpg" alt="Entrada de blog" />
        </picture>
      </div>

      <div class="texto-entrada">
        <a href="entrada.html">
          <h4>Terraza en el techo de tu casa</h4>
          <p class="informacion-meta">
            Escrito el: <span>10 Agosto 2023</span> por: <span>Admin</span>
          </p>
          <p>
            Consejos para construir una terraza en el techo de tu casa con
            los mejores materiales y ahorrando dinero
          </p>
        </a>
      </div>
    </article>
    <!-- #2 Entrada -->
    <article class="entrada-blog">
      <div class="imagen">
        <picture>
          <source srcset="build/img/blog2.webp" type="image/webp" />
          <source srcset="build/img/blog2.jpg" type="image/jpeg" />
          <img loading="lazy" src="build/img/blog2.jpg" alt="Entrada de blog" />
        </picture>
      </div>

      <div class="texto-entrada">
        <a href="entrada.html">
          <h4>Guía para decoración de tu hogar</h4>
          <p class="informacion-meta">
            Escrito el: <span>10 Agosto 2023</span> por: <span>Admin</span>
          </p>
          <p>
            Maximiza el espacio de tu hogar con esta guia, aprende a
            combinar muebles y colores para darle vida a tu espacio
          </p>
        </a>
      </div>
    </article>
  </section>

  <section class="testimoniales">
    <h3>Testimoniales</h3>
    <div class="testimonial">
      <blockquote>
        El personal se comportó de una excelente forma, muy buena atención y
        la casa que me ofrecieron cumple con todas mis espectativas.
      </blockquote>
      <p>- Elis Antonio Perez</p>
    </div>
  </section>
</div>

<?php incluirTemplate('footer'); ?>