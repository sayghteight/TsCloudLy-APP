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
	                            	Vamos a pasar un momento configurando tu panel, únicamente rellena
	                            	lo que te pedimos a continuación.
                            	</p>
                            </div>
                        </div>
                    </div>

<form method="POST" action="step5.php">
    
       	<div class="form-group">
		<label class="sr-only" for="form-first-name">URL</label>
		<input type="text" name="url" placeholder="Dirección URL del sitio web" class="form-first-name form-control">
		</div>
		<div class="form-group">
		<label class="sr-only" for="form-password">Nombre del sitio web</label>
		<input type="text" name="namepanel" placeholder="Nombre de tu sitio web" class="form-last-name form-control">
		</div>
		<hr>
		<h1><center>Configuración teamspeak 3</center></h1>
		<hr>
		
		<div class="form-group">
		<label class="sr-only" for="form-password">IP Servidor maestro</label>
		<input type="text" name="ip" placeholder="Ip server master" class="form-last-name form-control">
		</div>
		<div class="form-group">
		<label class="sr-only" for="form-password">QueryPort</label>
		<input type="text" name="queryport" placeholder="Default is 10011" class="form-last-name form-control">
		</div>
		<div class="form-group">
		<label class="sr-only" for="form-password">Serveradmin user</label>
		<input type="text" name="user" placeholder="Serveradmin user" class="form-last-name form-control">
		</div>
		<div class="form-group">
		<label class="sr-only" for="form-password">Serveradmin password</label>
		<input type="text" name="pass" placeholder="Serveradmin password" class="form-last-name form-control">
		</div>
    
    
    <input type="hidden" name="tokenconfig" class="btn btn-default form-control" value="<?php echo $_SESSION['tokenconfig'] ?>">
    
    <button type="submit" class="btn form-control" name="install"> Continuar con el siguiente paso --> </button>
</form>

<?php require_once("html/footer.php"); ?>