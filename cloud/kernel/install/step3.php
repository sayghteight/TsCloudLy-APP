<?php 

require_once "html/header.php";





if (isset($_POST['dbhostname'])
&& isset($_POST['dbuser'])
&& isset($_POST['dbpassw'])
&& isset($_POST['dbname'])
&& isset($_POST['dbport']))
{
    // Si el token es correcto
    if ($_POST['token'] == $_SESSION['token'])
    {
        $_SESSION['token'] = NULL;
        
        if (ctype_digit($_POST['dbport'])
        && $_POST['dbport'] >= 0)
        {
            // Recuperamos los valores del formulario
            
            $dbname = htmlspecialchars(addslashes($_POST['dbname']));
            $dbhostname = htmlspecialchars(addslashes($_POST['dbhostname']));
            $dbuser = htmlspecialchars(addslashes($_POST['dbuser']));
            $dbpassw = htmlspecialchars(addslashes($_POST['dbpassw']));
            $dbport = htmlspecialchars(addslashes($_POST['dbport']));
            
            // Creamos el fichero de configuración
            $openSql = fopen('../database/class.db.php', 'w');
               fwrite($openSql, "
		    <?php
		    
		    session_start();
		    abstract class Conexion{
            public function conectar() {
      
            \$dsn = '$dbname';
            \$host='$dbhostname';
            \$port='$dbport';
		    \$user = '$dbuser';
		    \$password = '$dbpassw';
		
		          
            \$mysqli = new mysqli(\$host,\$user,\$password,\$dsn,\$port) 
            or die('No se pudo conectar: ' . mysql_error());
            echo 'Connected successfully';
      
            if (\$mysqli->connect_errno)
           \$mysqli->set_charset('utf8');
      
            return \$mysqli;
            }
            
            public function ruta(){
                
            }
            }
		    ?>");
		    fclose($openSql);
        }
        //Si tous les champs numérique ne contiennent pas un nombre
        else
        {
            echo "Los campos deben contener un número";
        }
    }
    //Si el token es incorrecto
    else
    {
        echo "Error: Debe rellenar el token de seguridad";
    }
}
//Si las variables no se encuentran
else 
{
    echo "Debe rellenar todos los datos";
}


?>


        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1>Cloud Teamspeak 3 | Instalación</h1>
                            <div class="description">
                            	<p>
	                                ¡Se ha efectuado la creación de la base de datos!
                            	</p>
                            	<br/>
                            	<strong>users_ts3</strong> <font color='green'>Creada con éxito</font>
                            	<br/>
                            	<strong>translate_panel</strong> <font color='green'>Creada con éxito</font>
                            	<br/>
                            	<strong>teamspeak_cola</strong> <font color='green'>Creada con éxito</font>
                            	<br/>
                            	<strong>usuarios</strong> <font color='green'>Creada con éxito</font>
                            	<br/>
                            </div>
                        </div>
                    </div>

		    <form method="POST" action="execute/e_installdb.php">
		          <button type="submit" class="btn form-control" name="install"> Continuar con el siguiente paso --> </button>
		    </form>

<?php

require_once 'html/footer.php';		    
?>