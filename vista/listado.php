<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listado</title>
</head>
<body>
  <header>
  <nav>
     <a href="index.php?action=cerrar">Cerrar sesion</a>
     <h1>Bienvenido <?=$usuario?></h1>
    </nav>
  </header>

  <table>
      <thead>
        <tr>
          <th>id</th>
          <th>Nombre</th>
          <th>1 apellido</th>
          <th>2 apellido</th>
          <th>Profesor1</th>
          <th>Profesor2</th>
          <th>Profesor3</th>
          <th>Profesor4</th>   
          <th>Editar</th>        
        </tr>
      </thead>
      <tbody>
        <?php foreach ($alumnos as $alumno): ?>
          <tr>
            <td><?= $alumno['id']; ?></td>
            <td><?= $alumno['nombre']; ?></td>
            <td><?= $alumno['apellido1']; ?></td>
            <td><?= $alumno['apellido2']; ?></td>
            <?php if($_SESSION['usuario'] == 'profesor1' || $_SESSION['usuario'] == 'admin'): ?>
            <td><?= $alumno['profesor1']; ?></td> 
            <?php else :?> 
              <td><?= ''; ?></td> 
            <?php endif;?>
            <?php if($_SESSION['usuario'] == 'profesor2' || $_SESSION['usuario'] == 'admin'): ?>
            <td><?= $alumno['profesor2']; ?></td> 
            <?php else :?> 
              <td><?= ''; ?></td> 
             <?php endif;?>  
             <?php if($_SESSION['usuario'] == 'profesor3' || $_SESSION['usuario'] == 'admin'): ?>
            <td><?= $alumno['profesor3']; ?></td> 
            <?php else :?> 
              <td><?= ''; ?></td>   
            <?php endif;?>  
             <?php if($_SESSION['usuario'] == 'profesor4' || $_SESSION['usuario'] == 'admin'): ?>
            <td><?= $alumno['profesor4']; ?></td>  
            <?php else :?> 
              <td><?= ''; ?></td>   
            <?php endif;?>
            <td><a href="index.php?action=editar&id=<?php echo $alumno['id']; ?>.<?php echo $_SESSION['usuario']; ?>.">Editar</a></td>         
          </tr>
        <?php endforeach; ?>
      </tbody>
  </table>

  
</body>
</html>