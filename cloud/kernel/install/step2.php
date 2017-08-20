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
    
       	<div class="form-group">
		<label class="sr-only" for="form-first-name">Hostname</label>
		<input type="text" name="dbhostname" placeholder="DB Hostname" class="form-first-name form-control">
		</div>
		<div class="form-group">
		<label class="sr-only" for="form-password">User</label>
		<input type="password" name="dbuser" placeholder="DB User" class="form-last-name form-control">
		</div>
		<div class="form-group">
		<label class="sr-only" for="form-password">Password</label>
		<input type="password" name="dbpassw" placeholder="DB Pass" class="form-last-name form-control">
		</div>
		<div class="form-group">
		<label class="sr-only" for="form-email">Name DB</label>
		<input type="text" name="dbname" placeholder="DB Name" class="form-email form-control">
	    </div>
		<div class="form-group">
		<label class="sr-only" for="form-email">Port</label>
		<input type="text" name="dbport" placeholder="Port default is 3306" class="form-email form-control">
	    </div>
    
    
    <input type="hidden" name="token" class="btn btn-default form-control" value="<?php echo $_SESSION['token'] ?>">
    
    <button type="submit" class="btn form-control" name="install"> Continuar con el siguiente paso --> </button>
</form>

<?php require_once("html/footer.php"); ?>