<?php
require_once '../../kernel/database/class.db.php';

class Usuario extends Conexion {

    public $mysqli;
    public $data;

    public function __construct() {
        $this->mysqli = parent::conectar();
        $this->data = array();
    }


/*
* Conseguir la lista de usuarios
*/


    public function usuarios() {

        $resultado = $this->mysqli->query("SELECT * FROM usuarios");

        while ( $fila = $resultado->fetch_assoc() ) {
            $this->data[] = $fila;
        }
        
        return $this->data;
    }

/*
* Creación de nuevo usuario
*/

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
            
            $resultado = $this->mysqli->query("INSERT INTO usuarios(nick, password, correo, rango, activo) VALUES('$nick', '$pass', '$correo', '$rango', '$activo')");
            
         
          
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
            window.location='../../index.php?r=1';
            </script>";
        }
    
    
    
}


/*
* Actualización de cuenta (PRE-RELEASE)
*/

public function update_user() {
    
    parent::conectar();
    $nick_session = $_SESSION["usuario"];
    
    $pass = sha1($_POST[""]);
    $correo = $_POST[""];
    
    // VALIDAMOS USER MEDIANTE SESSION
    
    $updateform = $this->mysqli->query("SELECT nick from nick = '$nick_session'");
    
    $update = $updateform->num_rows;
    
    if ($update == 0) {
        
        header("Location : index.php");
        
        
    }else{
        
          $resultado = $this->mysqli->query("UPDATE usuarios SET correo = '$correo' and password = '$pass' WHERE nick = '$nick_session'");
        
    }
}


/*
* Cancelación de cuenta de usuario (Pre-Release)
*/



public function deleteFollow() {
        parent::conectar();

        $nickdel = $_SESSION["usuario"]; 
        
        // Validamos que el usuario este disponible para borrar.
        
        $delete = $this->mysqli->query("SELECT * from usuarios WHERE nick='$nickdel'");
        $deluser = $delete->num_rows;
        
        if ($deluser == 0){
            echo '<script>alert(\'No eres el usuario que quieres borrar.\')</script>';
            echo "<script type='text/javascript'>
            window.location='Conexion::ruta()user.php';
            </script>";
        } else {
            
            $cancelaruser = $this->mysqli->query("DELETE FROM usuarios WHERE nick='$nickdel'");
            
            echo '<script>alert(\'Usuario removido con éxito\')</script>';
            echo "<script type='text/javascript'>
            window.location='Conexion::ruta()user.php';
            </script>";
            
        }
}


//****************************************
// loguea al usuario
//****************************************
public function logueo() {
        $pass = sha1($_POST["form-password"]);
        $usuario = $_POST["form-username"];

        $resultado = $this->mysqli->query("SELECT id, nick, rango from usuarios where nick = '$usuario' and password = '$pass'");

        while ( $fila = $resultado->fetch_assoc() ) {
            $this->login[] = $fila;
        }

        if (sizeof($this->login) > 0) {
            foreach ($this->login as $key) {
            /*
            *   Old variables
            *    $_SESSION["id"] = $key["id"];
            *    $_SESSION["nombre"] = $key["nombre"];
            *    $_SESSION["tipo"] = $key["tipo"];
            */
            
            $_SESSION["usuario"] = $key["nick"];
            $_SESSION["tipo"] = $key["rango"];
            
                switch ($_SESSION["tipo"]) {
                    case 1 : header ("Location: index.php?p=user"); // Usuario
                    break;
                    case 2 : header ("Location: index.php?p=cloud"); // Distribuidor
                    break;
                    case 3: header("Location: admin.php"); // Admin
                    break;
                }
            }
        } else {
            header("Location: index.php");
        }
}



/*
*     Sistema de Seguidores
*/


public function seguidores() {
    
        $verify = $_SESSION["nombre"];
        
        $resultado = $this->mysqli->query("SELECT * FROM users_social WHERE user = '$verify'");

        while ( $fila = $resultado->fetch_assoc() ) {
            $this->data[] = $fila;
        }
        
        return $this->data;
}
    

public function followuser() {
        parent::conectar();

        $nick = $_POST['usuario'];
        $user = $_SESSION["nombre"];
        
        
        // VALIDAMOS SI EXISTE EL USUARIO A AGREGAR
        
        $usuario = $this->mysqli->query("SELECT nick from usuarios WHERE nick = '$nick'");
        $existe = $usuario->num_rows;
        
        if($existe == 1){
        
        
        // VALIDAMOS SI EXISTE EL USUARIO INTRODUCIDO Y CHEKEAMOS QUE NO ESTE SEGUIDO
        $resultado = $this->mysqli->query("select nick, user from users_social WHERE nick='$nick' AND user='$user'");
        $social_add = $resultado->num_rows; 

        if ($social_add == 0) {
            $resultado = $this->mysqli->query("INSERT INTO users_social(user, nick, seguido) 
                VALUES('$user','$nick', now())"); 

            echo "<script type='text/javascript'>
            window.location='Conexion::ruta()user.php';
            </script>";
        } else {
            echo "<script type='text/javascript'>
            window.location='Conexion::ruta()user.php?m=2';
            </script>";
        }
        
        }else{
            echo "<script type='text/javascript'>
            window.location='Conexion::ruta()user.php?m=1';
            </script>";
        }
        
}
    
public function deleteFollow() {
        parent::conectar();

        $nick = $_POST['usuario'];
        $user = $_POST["nombre"];
        
        // Validamos que el usuario este disponible para borrar.
        
        $delete = $this->mysqli->query("SELECT * from users_social WHERE nick='$nic' AND user='$user' ");
        $social_del = $delete->num_rows;
        
        if ($social_del == 0){
            echo '<script>alert(\'Este usuario no se encuentra como seguido tuyo\')</script>';
            echo "<script type='text/javascript'>
            window.location='Conexion::ruta()user.php';
            </script>";
        } else {
            
            $delete_conf = $this->mysqli->query("DELETE FROM users_social WHERE nick='$nick' AND user= '$user'");
            
            echo '<script>alert(\'Usuario removido con éxito\')</script>';
            echo "<script type='text/javascript'>
            window.location='Conexion::ruta()user.php';
            </script>";
            
        }
}


}

