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


        /*
        * Información enviada por post para instalar la base de datos
        * Creación de los archivos database (kernel/database/conexion_db.php)
        */
            
            $database = htmlspecialchars(addslashes($_POST['dbname']));
            $hostname = htmlspecialchars(addslashes($_POST['dbhostname']));
            $username = htmlspecialchars(addslashes($_POST['dbuser']));
            $password = htmlspecialchars(addslashes($_POST['dbpassw']));
            $dbport = htmlspecialchars(addslashes($_POST['dbport']));
            
            
        
        
            $configdb = '../database/conexion_db.php';
            $handle = fopen($configdb, 'w');
            $data = '
<?php

$hostname = "' . $hostname . '";
$username = "' . $username . '";
$password = "' . $password . '";
$database = "' . $database . '";
$dport = "' . $dbport . '";


?>
    ';
        fwrite($handle, $data);
        /*
        * Información enviada por post para sobrescribir la configuración inicial
        * Creación de configuración adicional (kernel/configs/site_config.php)
        */    
        
            $configsite = '../configs/site_config.php';
            $handlesite = fopen($configsite, 'w');
            $datasite = '
<?php

?>
    ';
        fwrite($handlesite, $datasite);
        
        /*
        * Información enviada por post para escribir la configuración de los TS3
        * Creación de configuración de TS (kernel/configs/ts3_config.php)
        */
        
            $configts3 = '../configs/site_config.php';
            $handlets3 = fopen($configts3, 'w');
            $datats3 = '
<?php


?>
    ';
        fwrite($handlets3, $datats3);
        
        
        
        
        }else{
            echo "Este campo debe de estar lleno";
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
                            	<strong>Creado el archivo de configuration.php</strong> <font color='green'>Creado con éxito</font>
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