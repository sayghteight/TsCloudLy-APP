<?php
require_once '../../config.php';

class Admin extends Conexion {

    public $mysqli;
    public $data;

    public function __construct() {
        $this->mysqli = parent::conectar();
        $this->data = array();
    }





public function create_user() {
    
    parent::conectar();
    $pass = sha1($_POST["password"]);
    $rango = 1;
    $action = 1;

    $nick = $_POST['usuario'];
    $correo = $_POST['correo'];
    
      // VALIDAMOS SI EXISTE EL NICK
        $resultado = $this->mysqli->query("select nick from usuarios where nick = '$nick'"); 

        $registros = $resultado->num_rows; 

        if ($registros == 0) {
            /*
            $resultado = $this->mysqli->query("INSERT INTO usuarios(nick, password, nombre, correo, tipo, facebook, twitter, fechaderegistro, ultimoacceso, activo, avatar, firma) 
              VALUES('$nick','$pass', '$nombre', '$correo', '$tipo', '$facebook', '$twitter', now(), now(), '$activo', '$avatar', '$firma')"); 
            */
            
            $resultado = $this->mysqli->query("INSERT INTO users(nick, password, correo, rango, activo) VALUES('$nick', '$pass', '$correo', '$rango', '$activo')");
            
         
          
            // OBTENEMOS EL ULTIMO ID
            $id = $this->mysqli->insert_id;
            
            $_SESSION["usuario"] = $id;
            $_SESSION["rango"] = $rango;
            $_SESSION["id"] = $id;
            
            echo "<script type='text/javascript'>
            window.location='dashboard.php';
            </script>";
        } else {
            echo "<script type='text/javascript'>
            window.location='index.php?r=1';
            </script>";
        }
    
    
    
}
