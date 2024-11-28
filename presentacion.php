<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Taller GitHub</title>
</head>
<body>
  <h1>Taller GitHub</h1>
  <form action="presentacion.php" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" value="<?php echo $nombre; ?>">
    <label for="apellido">Apellido:</label>
    <input type="text" id="apellido" name="apellido" value="<?php echo $apellido; ?>">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?php echo $email; ?>">
    <label for="telefono">Telefono:</label>
    <input type="tel" id="telefono" name="telefono" value="<?php echo $telefono; ?>">
    <input type="submit" value="Enviar">        
  </form>
</body>
</html> 