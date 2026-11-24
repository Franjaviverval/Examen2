<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario</title>
</head>
<body>
  <form action="../index.php" method="post">
    <label for="usuario">Usuario</label>
    <input type="text" name="usuario" id="usuario">
    <label for="pass">Contraseña</label>
    <input type="password" name="pass" id="pass">
    <input type="hidden" name="action" value="login">
    <button type="submit">Acceder</button>
  </form>
</body>
</html>