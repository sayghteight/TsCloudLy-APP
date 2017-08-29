<?php
require_once '../../database/class.db.php'; // deja de ser dependiente del config.php

class Admin extends Conexion {

    public $mysqli;
    public $data;

    public function __construct() {
        $this->mysqli = parent::conectar();
        $this->data = array();
    }





public function create_admin() {
       parent::conectar();
        $pass = sha1($_POST["password"]);
        $tipo = 3; // 1 usuario, 2 mod, 3 ACP
        $activo = 1;

        $nick = $_POST['user'];
        $correo = $_POST['email'];
        // VALIDAMOS SI EXISTE EL NICK
        $resultado = $this->mysqli->query("select nick from usuarios where nick = '$nick'"); 

        $registros = $resultado->num_rows; 

        if ($registros == 0) {
            $resultado = $this->mysqli->query("INSERT INTO usuarios(nick, password, correo, rango, fechaderegistro, ultimoacceso, activo) 
                VALUES('$nick','$pass', '$correo', '$tipo', now(), now(), '$activo')"); 
            // OBTENEMOS EL ULTIMO ID
            $id = $this->mysqli->insert_id;
            // creamos las sesiones para que automaticamente puedas comentar o publicar
            $_SESSION["id"] = $id;
            $_SESSION["nombre"] = $nombre;
            $_SESSION["tipo"] = $tipo;
            $_SESSION["rango"] = $rango;

            echo "<script type='text/javascript'>
            window.location='../step5.php';
            </script>";
        } else {
            echo "<script type='text/javascript'>
            window.location='../step4.php';
            </script>";
        }
    
}
}
