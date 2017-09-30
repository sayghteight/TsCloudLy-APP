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
                            	    Creando el usuario que usaras como administrador
                            	</p>
                            </div>
                        </div>
                    </div>

<form method="POST" action="execute/e_admin.php">
    
       	<div class="form-group">
		<label class="sr-only" for="form-first-name">Usuario</label>
		<input type="text" name="user" placeholder="Tu usuario ..." class="form-first-name form-control">
		</div>
		<div class="form-group">
		<label class="sr-only" for="form-password">E-Mail</label>
		<input type="text" name="email" placeholder="Tu e-mail ..." class="form-last-name form-control">
		</div>
		<div class="form-group">
		<label class="sr-only" for="form-password">Password</label>
		<input type="password" name="password" placeholder="Tu contraseña ..." class="form-last-name form-control">
		</div>
    
    
    <input type="hidden" name="tokenconfig" class="btn btn-default form-control" value="<?php echo $_SESSION['tokenconfig'] ?>">
    
    <button type="submit" class="btn form-control" name="install"> Continuar con el siguiente paso --> </button>
</form>

<?php require_once("html/footer.php"); ?>