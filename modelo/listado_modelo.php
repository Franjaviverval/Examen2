<?php

class Listado_modelo{
  private $pdo;

  public function __construct(){
      $host = "127.0.0.1";
      $nombreBD = "tfg";
      $usuario = "root";
      $password = "";

      try {
        $this->pdo = new PDO("mysql:host=$host;dbname=$nombreBD;charset=utf8mb4",$usuario,$password);        
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);          
      } catch (PDOException $e){
          echo "Error de conexión: ".$e->getMessage();  
      }    
  }


  public function leer(){
    $data = [];      
    try{
        $consulta = $this->pdo->query("SELECT * FROM notas");
        $consulta -> setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        while($registro = $consulta->fetch()){
          $elemento = [
              'id'     => $registro['id'],
              'nombre'     => $registro['nombre'],
              'apellido1' => $registro['apellido1'],
              'apellido2' => $registro['apellido2'],
              'profesor1' => $registro['profesor1'],
              'profesor2' => $registro['profesor2'], 
              'profesor3' => $registro['profesor3'], 
              'profesor4' => $registro['profesor4']];            
          $data[] = $elemento;
        }
        return $data;
    }
    catch(PDOException $e){
        echo "Error: ".$e->getMessage();         
    }
  }
    
  public function editar($id, $nota, $profesor){
    
  }


}
?>