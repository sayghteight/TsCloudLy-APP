<?php require_once("html/header.php"); ?>



        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1>Cloud Teamspeak 3 | Instalación</h1>
                            <div class="description">
                            	<p>
	                            	Rellena los siguientes datos con información válida de tu base de datos.
                            	</p>
                            </div>
                        </div>
                    </div>

<form method="POST" action="step-3.php">
    Nom de la base de donnée : <input type="text" name="databaseName" class="form-control" required>
    Adresse de la base de donnée : <input type="text" name="databaseHost" class="form-control" required>
    Nom de l'utilisateur : <input type="text" name="databaseUser"  class="form-control" required>
    Mot de passe : <input type="password" name="databasePassword" class="form-control">
    Port (3306 par défaut) : <input type="number" name="databasePort" value="3306" class="form-control" required>
    
    <input type="hidden" name="token" class="btn btn-default form-control" value="<?php echo $_SESSION['token'] ?>">
    
    <button type="submit" class="btn form-control" name="install"> Continuar con el siguiente paso --> </button>
</form>

<?php require_once("html/footer.php"); ?>