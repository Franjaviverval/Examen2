<?php
require_once('modelo/listado_modelo.php');

class Listado{
  public function vista(){
    $usuario = $_SESSION['usuario'];
    $modelo = new Listado_modelo();

    $alumnos = $modelo->leer();    

   include_once('vista/listado.php');
  }  

}


?>