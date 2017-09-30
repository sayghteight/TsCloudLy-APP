<?php
require_once 'kernel/database/SQLConnection.class.php';

class Blog extends SQLConnect {

    public $mysqli;
    public $data;

    public function __construct() {
        $this->mysqli = parent::conectar_cms();
        $this->data = array();
    }


/*
*  Obtener lista de noticias
*/


    public function usuarios() {

        $resultado = $this->mysqli->query("SELECT * FROM blog");

        while ( $fila = $resultado->fetch_assoc() ) {
            $this->data[] = $fila;
        }
        
        return $this->data;
    }








/*
*
*   Functions ADMIN BLOG
*
*/















/*
*
*   Functions USER BLOG
*
*/

    public function blog_user() {
        
        $resultado = $this->mysqli->query("select module, active from blog_user where module = 'blog_user' and active='1'");
        
        $isasctive = $resultado->num_rows; 

        if ($isactive == 1) {
            $nick = $_SESSION['nombre'];
            
         
        } else {
          
        }
        
    }

}
