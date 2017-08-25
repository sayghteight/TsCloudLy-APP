<?php 

require_once "html/header.php";

if (isset($_POST['url'])
&& isset($_POST['namepanel']))
{
    // Si el token es correcto
    if ($_POST['tokenconfig'] == $_SESSION['tokenconfig'])
    {
        $_SESSION['tokenconfig'] = NULL;
            
            $url = htmlspecialchars(addslashes($_POST['url']));
            $sitename = htmlspecialchars(addslashes($_POST['namepanel']));
            $ipserver = htmlspecialchars(addslashes($_POST['ip']));
            $query = htmlspecialchars(addslashes($_POST['queryport']));
            $userserver = htmlspecialchars(addslashes($_POST['user']));
            $passserver = htmlspecialchars(addslashes($_POST['pass']));
            
            
            // Creamos el fichero de configuración
            $openSql = fopen('../configuration.php', 'w');
               fwrite($openSql, "
		    <?php
		    /*
		    * Configuration Sitename
		    */
		    
		    \$url = '$url';
		    \$sitename = '$sitename';
		    
		    /*
		    * Configuration Teamspeak 3 - Server
		    */
		    
		    
		    \$ip = '$ipserver';
		    \$Qport = '$query';
		    \$SAuser = '$userserver';
		    \$SApass = '$passserver';
		    
		    
		    
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

		    <form method="POST" action="step6.php">
		          <button type="submit" class="btn form-control" name="install"> Continuar con el siguiente paso --> </button>
		    </form>

<?php

require_once 'html/footer.php';		    
?>