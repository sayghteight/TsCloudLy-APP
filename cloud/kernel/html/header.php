<?php include_once 'kernel/config/site_config.php'; ?>
    <!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $title ?></title>

        <!-- CSS -->
        <link rel="stylesheet" href="assets/login/css/style.css">	
        <link rel="stylesheet" href="assets/login/css/timeline.css">		
        <link rel="stylesheet" type="text/css" href="https://bootswatch.com/flatly/bootstrap.min.css">
	    	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->


    </head>
	<body>
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand point" id="menu-toggle"><i id="menu-toggle" class="fa fa-bars" aria-hidden="true"></i></a>
				<a class="navbar-brand" href="#"> Division Zero                 </a>
			</div>
			<div class="container-fluid">
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Inicio</a></li>
						<li class=""><a href="#">Comunidad</a></li>
						<li class=""><a href="https://nixstats.com/report/562d14e265689eb5168b4567">Estado de servicios</a></li>
					</ul>
					<div class="col-sm-3 col-md-3">
						<form class="navbar-form" role="search">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Buscar" name="q">
								<div class="input-group-btn">
									<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
								</div>
							</div>
						</form>
					</div>
					<ul class="navbar-form navbar-right">
						<a href="#" class="btn btn-default">Registro</a>
						<a href="#" class="btn btn-info">Conectar</a>
					</ul>
				</div>
			</div>
			<div id="wrapper">
				<div id="sidebar-wrapper">
					<ul class="sidebar-nav">
						<li>
							<a class="activer" href="#"><i class="fa fa-home" aria-hidden="true"></i>  Inicio</a>
						</li>
						<li>
							<a class="" href="#"><i class="fa fa-github" aria-hidden="true"></i>  Github</a>
						</li>
						<hr/>
						<h5 class="text-center text-danger">
							Lista de Teamspeak 3
						</h5>
						<li>
							<a href="#">           Teamspeak 3 - Nodos</a>
						</li>
						<li>
							<a href="#"><img src="//i.ytimg.com/i/-9-kyTW8ZkZNDHQJ6FgpwQ/1.jpg" class="avatar-xs">  Teamspeak 3 - Musica</a>
						</li>
						<li>
							<a href="#"><img src="//i.ytimg.com/i/Egdi0XIXXZ-qJOFPf4JSKw/1.jpg" class="avatar-xs">  Teamspeak 3 - Clanes</a>
						</li>
						<li>
							<a href="#"><img src="//i.ytimg.com/i/YfdidRxbB8Qhf0Nx7ioOYw/1.jpg" class="avatar-xs">  Teamspeak 3 - Comunidad</a>
						</li>
						<hr/>
						<p class="container text-left">
			         		Al usar nuestros servicios
							<br/>
							 aceptas ser responsable de tu 
							<br/>
							 servidor y el aparecer en esta lista.
							<br/>
							<br/>
							<a href="#" class="btn btn-danger btn-xs">¡Participa en la beta!</a>
						</p>
					</ul>
				</div>
			</div>
		</nav>