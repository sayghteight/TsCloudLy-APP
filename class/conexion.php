<?php
session_start();

abstract class Conexion
{
    
    public function conectar() {
      
      $mysqli = new mysqli(getenv('IP'),getenv('C9_USER'),'','c9',3306);
      
      if ($mysqli->connect_errno)
         header('Location: index.php');

      $mysqli->set_charset('utf8');
      
      return $mysqli;
        
}

    public static function ruta() {

	return "https://dzero-sayghteight.c9users.io/"; // define url de web.
   
}
}
