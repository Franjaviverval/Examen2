<?php


  class PonerNota_controlador{

    public function ponerNota(){
      session_start();

      if(!isset($_SESSION['usuario'])){
        echo 'Acceso denegado';
      }
      else{
        include_once('vista/poner_nota.php');
      }
    }

  }


?>