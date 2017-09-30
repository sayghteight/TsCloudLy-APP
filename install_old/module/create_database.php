<?php
require_once '../../configuration.php'; // deja de ser dependiente del config.php


class Database{
    
    public function create_db(){
    
    // Creación de las bases de datos
    $texto = file_get_contents("../sql/base.sql");
    $sentencia = explode(";", $texto);
    for($i = 0; $i < (count($sentencia)-1); $i++){
    $db_selecte = $this->mysqli->query("$sentencia[$i];") or die(mysql_error()); 
    header("Location: ../step4.php");
    }
}
}

