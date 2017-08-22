<?php
session_start();
		abstract class Conexion{
    
    
    
    public function conectar() {
    
    $dsn = 'c9';
    $host='localhost';
    $port='3306';
		  $user = 'sayghteight';
		  $password = '';
		
		  $mysqli = new mysqli($host,$user,$password,$dsn,$port) 
     or die('No se pudo conectar: ' . mysql_error());
      if ($mysqli->connect_errno)
        $mysqli->set_charset('utf8');
       return $mysqli;
     }
}
?>