<?php 

require_once "html/header.php";

if (isset($_POST['url'])
&& isset($_POST['namepanel']))
{
    // Si el token es correcto
    if ($_POST['tokenconfig'] == $_SESSION['tokenconfig'])
    {
        $_SESSION['tokenconfig'] = NULL;
            // Recuperamos los valores del formulario
            
            /*
            $dbname = htmlspecialchars(addslashes($_POST['dbname']));
            $dbhostname = htmlspecialchars(addslashes($_POST['dbhostname']));
            */
            
            $url = htmlspecialchars(addslashes($_POST['url']));
            $sitename = htmlspecialchars(addslashes($_POST['namepanel']));
            
            // Creamos el fichero de configuración
            $openSql = fopen('../configuration.php', 'w');
               fwrite($openSql, "
		    <?php
		    // Sitio web
		    
		    \$url = '$url';
		    \$sitename = '$sitename';
		    ?>");
		    fclose($openSql);
		    
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
	                                ¡Se ha efectuado la configuracion del sitio web!
                            	</p>
                            </div>
                        </div>
                    </div>

		    <form method="POST" action="step4.php">
		          <button type="submit" class="btn form-control" name="install"> Continuar con el siguiente paso --> </button>
		    </form>

<?php

require_once 'html/footer.php';		    
?>