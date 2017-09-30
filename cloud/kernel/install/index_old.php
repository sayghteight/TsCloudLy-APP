<?php

if(isset($_POST['install_submit'])) {
    
    // Site config
    $url = $_POST['url'];
    $titlesite = $_POST['site_title'];
    // Database connection
    $hostname = $_POST['hostname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $database = $_POST['database'];
    $port = $_POST['port'];
    

    $my_file = '../config/site_config.php';
    $handle = fopen($my_file, 'w');
    $data = '
<?php  
    
// MySQL login details
$hostname = "' . $hostname . '";
$username = "' . $username . '";
$password = "' . $password . '";
$database = "' . $database . '";
$port = "' . $port . '";

// Connect to MySQL
$mysqli = new mysqli($hostname, $username, $password, $database, $port);
if ($mysqli->connect_errno) {
    exit();
}

// The name of your server
$url = "' . $url .'";

// The name of your server
$title = "' . $titlesite .'";

// An email address people can contact you through
$contactmail = "contact@example.com";

$installed = true;

?>
    ';
    fwrite($handle, $data);
    
    
    header("Location: kernel/install/execute/install_db.php");
    
}
    
 
?>
<?php require_once("kernel/install/html/header.php"); ?>



<form method="POST" action="">
    
    <div class="col-sm-8 col-sm-offset-2 text">
    	<div class="description">
    		<p>
    			Configuración inicial de la base de datos
            </p>
        </div>
    </div>
       	<div class="form-group">
		<label class="sr-only" for="form-first-name">Hostname</label>
		<input type="text" name="hostname" placeholder="DB Hostname" class="form-first-name form-control">
		</div>
		<div class="form-group">
		<label class="sr-only" for="form-password">User</label>
		<input type="text" name="username" placeholder="DB User" class="form-last-name form-control">
		</div>
		<div class="form-group">
		<label class="sr-only" for="form-password">Password</label>
		<input type="password" name="password" placeholder="DB Pass" class="form-last-name form-control">
		</div>
		<div class="form-group">
		<label class="sr-only" for="form-email">Name DB</label>
		<input type="text" name="database" placeholder="DB Name" class="form-email form-control">
	    </div>
		<div class="form-group">
		<label class="sr-only" for="form-email">Port</label>
		<input type="text" name="port" placeholder="Port default is 3306" class="form-email form-control">
	    </div>
	    
	    
       	<div class="form-group">
		<label class="sr-only" for="form-first-name">Dirección URL</label>
		<input type="text" name="url" placeholder="url" class="form-first-name form-control">
		</div>
		
		
		
       	<div class="form-group">
		<label class="sr-only" for="form-first-name">Titulo de tu sitio web</label>
		<input type="text" name="site_title" placeholder="Tu sitio web" class="form-first-name form-control">
		</div>
	    
	    
    <button type="submit" class="btn form-control" name="install_submit" value="Install"> Ejecutar instalador </button>
</form>


<?php require_once("kernel/install/html/footer.php"); ?>

