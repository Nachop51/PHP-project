<?php
  include 'conex.php'
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Codificacion de la página y compatibilidad -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Titulo -->
    <title>Eliminar productos</title>

    <!-- Fuentes de google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">

    <!-- Javascript -->
    <script src="checker.js"></script>

    <!-- CSS y favicon-->
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="form.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  
  </head>
  <body>
    <!-- Título -->
    <header>
      <h1>Eliminar productos</h1>
    </header>
    <!-- Navbar (Links) -->
    <main>  
      <?php
            include 'menu.php';
      ?>
      <!-- Contenido -->
      <section id="formSection">
        <!-- Formulario -->
        <form action="EliminarProdForm.php" method="POST" id="Form" class="formulario">
          <!-- Tabla que ordena el formulario -->
          <table>
            <tr>
              <th>
                <label for="idForm">ID:</label>
              </th>
              <td>
                <!-- Input para el ID -->
                <input type="text" name="idForm" id="idForm" maxlength="10" onkeypress="return checkNumber(event)"/>
              </td>
            </tr>
            <tr>
              <th>
                <label for="marca">Marca:</label>
              </th>
              <td>
                <!-- Deshabilitar marca ya que es innecesaria -->
                <input type="text" disabled/>
              </td>
            </tr>
            <tr>
              <th>
                <label for="descripcion">Descripción:</label>
              </th>
              <td>
                <!-- Deshabilitar descripción ya que es innecesaria -->
                <input type="text" disabled/>
              </td>
            </tr>
            <tr>
              <th>
                <label for="origen">Origen:</label>
              </th>
              <td>
                <select disabled>
                <!-- Deshabilitar origen ya que es innecesario -->
                  <option value="">-Seleccione origen-</option>
                </select>
              </td>
            </tr>
            <tr>
              <th>
                <label for="precio">Precio (En USD):</label>
              </th>
              <td>
                <!-- Deshabilitar precio ya que es innecesario -->
                <input type="text" disabled/>
              </td>
            </tr>
            <tr>
              <th>
                <label for="categoria">Categoría:</label>
              </th>
              <td>
                <!-- Deshabilitar categoría ya que es innecesaria -->
                <select disabled> 
                  <option value="0">-Seleccione categoria-</option>
                </select>
              </td>
            </tr>
            <tr>
              <td colspan="2" class="tdButtons">
                <!-- Checkear el formulario y enviarlo -->
                <input id="tdButtons" type="button" value="Enviar" onclick="checkId()" />
                <!-- En caso de no querer eliminar volver a la página principal -->
                <input id="tdButtons" type="button" value="Volver" onclick="getBack('index.php')"/>
              </td>
            </tr>
          </table>
        </form>
      </section>
    </main>
  </body>
</html>
