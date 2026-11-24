<?php
include_once('controlador/listado.php');
include_once('controlador/poner_nota.php');

session_start();

function login(){
$usuario = $_POST['usuario'] ?? '';
$pass = $_POST['pass'] ?? '';
  
 $validos = [ ['nombre' => 'admin',     'pass' => '1234'],
              ['nombre' => 'profesor1', 'pass' => '1234'], 
              ['nombre' => 'profesor2', 'pass' => '1234'],
              ['nombre' => 'profesor3', 'pass' => '1234'],
              ['nombre' => 'profesor4', 'pass' => '1234']];

  foreach($validos as $valido){
    if($valido['nombre'] == $usuario && $valido['pass'] == $pass){
      $_SESSION['usuario'] = $valido['nombre']; 
      $listado = new Listado();
      $listado->vista();      
    }
  } 
}

function cerrar(){
  session_destroy();
  header('location: vista/formulario_vista.php');
  exit();
}

function editar(){  
  //$controlador = new PonerNota_controlador();
  // $controlador->ponerNota();

  echo 'Editado';
}

$action = $_REQUEST['action'] ?? '';

switch($_REQUEST['action']){
  case 'login': login(); break;
  case 'cerrar': cerrar(); break;
  case 'editar': editar(); break;
  default:
    header('location: vista/formulario_vista.php');
    exit();
}

?>