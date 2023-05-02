<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Datos del usuario</title>
  <link rel="stylesheet" href="js/Ejercicio2.js">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h1>Datos de registro</h1>
    <?php
    // Verificar si se enviaron los datos por POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Obtener los datos del formulario
      $nombre = $_POST["nombre"];
      $direccion = $_POST["direccion"];
      $email = $_POST["email"];
      $edad = $_POST["edad"];

      // Mostrar los datos en la página
      echo '<div class="alert alert-success">';
      echo '<¡Hola  ' . $nombre . '! <br>';
      echo '<Tu dirección es ' . $direccion . '! <br>';
      echo 'Tienes  ' . $edad . 'años y tu correo es ' . $email;
      echo '</div>';
    } else {
      // Si no se enviaron datos, mostrar un mensaje de error
      echo '<div class="alert alert-danger">';
      echo 'No se recibieron datos del formulario.';
      echo '</div>';
    }
    ?>
  </div>
  
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
