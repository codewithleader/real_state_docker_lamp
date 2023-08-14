<?php
// DataBase
require "../../includes/config/database.php";
$db_connect = conectarDB();

echo "<pre>";
var_dump($_POST);
echo "</pre>";
// var_dump($_GET);

// Functions
require '../../includes/functions.php';

incluirTemplate('header');
?>

<main class="contenedor seccion">
  <h1>Create</h1>

  <a href="/admin" class="boton boton-verde">Volver</a>

  <form action="/admin/properties/create.php" method="POST" class="formulario">
    <fieldset>
      <legend>Información General</legend>
      <label for="titulo">Título:</label>
      <input type="text" id="titulo" name="titulo" placeholder="Título Propiedad" />

      <label for="precio">Precio:</label>
      <input type="number" id="precio" name="precio" placeholder="Precio Propiedad" />

      <label for="imagen">Imagen:</label>
      <input type="file" id="imagen" name="imagen" accept="image/jpeg image/png" />

      <label for="descripcion">Descripción:</label>
      <textarea name="descripcion" id="descripcion"></textarea>
    </fieldset>

    <fieldset>
      <legend>Información Propiedad</legend>

      <label for="habitaciones">Habitaciones:</label>
      <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9" />

      <label for="wc">Baños:</label>
      <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" max="9" />

      <label for="estacionamiento">Estacionamiento:</label>
      <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" max="9" />
    </fieldset>

    <fieldset>
      <legend>Vendedor</legend>

      <select>
        <option value="1">Antonio</option>
        <option value="2">Yami</option>
      </select>
    </fieldset>

    <input type="submit" value="Crear Propiedad" class="boton boton-verde" />
  </form>
</main>

<?php incluirTemplate('footer'); ?>