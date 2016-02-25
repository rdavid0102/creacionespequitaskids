<?php 
session_start();
if(isset($_SESSION['Usuario'])){
	header("Location: ../home.php?");
} 
else{

}
?>

<!doctype html>
<html lang="en">
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0 ">
	<title>Login</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/bootstrap-theme.css">
	<link rel="stylesheet" href="../css/estilos.css" />
	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/login.js"></script>
	<script src="../js/bootbox.min.js"></script>
	<link rel="shortcut icon" type="image/x-icon" href="../img/logo.png">
</head>
<body>
	<header>
		<div class="navbar-fixed-top" id="nav_top">
			<div class="container">
				<div class="container-fluid"><center>
					<span class="glyphicon glyphicon-earphone"><span class="txt_fac_xs"> +</span>57<span class="txt_fac_xs_extrem"> </span>3013253722&nbsp;</span>
					<span class="glyphicon glyphicon-envelope hidden-xs"><span class="txt_fac_md"><span class="txt_fac_xs_extrem"> </span>info@sysem_acedemic.com</span>&nbsp;</span>
						</center>	
				</div>
			</div>
			
		</div>
	<section class="container" id="encabezado">
				<div class="rows">
					<div class="col-md-3">							
						<img src="../img/logo.png" width="100px" heigth="119xp" class="img-responsive">
					</div>
						<div class="col-md-6 text-center"><br>
						
								<span class="titulo">SISTEMA ACADEMICO</span>
							<br>
								<span class="titulo">FUNDACIÓN PIES DESCALZOS</span>				
								
						</div>
								<div class="col-md-3"></div>
				</div>
					<div class="" id=""></div>									
		</section>
		<nav class="navbar navbar-default navbar-static-top" role="navigation">
<div class="container">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-rp">
			<span class="sr-only">Desplegar / Ocultar Menu</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>	
		<a href="#" class="navbar-brand">ACADEMIC SYSTEM</a>
	</div>
	<!--Inicia el menu-->


	</div>
</nav>
	</header>
	<section  id="formu">
		

			<br>
	<div class="container principal">
		<div class="col-md-2"></div>
			
				<div class="col-md-8">
							
					<div class="panel panel-info">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
					
					<form class="form-horizontal" role="form" method="POST" action="./Login/verificar_login.php" id="login" name="login">
						<input type="hidden" name="_token" value="zooMTKtg7aWjvT6LdB9bMBQ8iFRVjJiRZXGy2eFx">

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail</label>
							<div class="usuario col-md-6" id="div_email">
								<input class="nombre form-control" type="email" id="usuario" name="usuario" placeholder="Usuario" data-toggle="popover" data-placement="bottom" data-content="Ingrese una direccion de correo valida. Ejemplo: jane.doe@example.com">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Contraseña</label>
							<div class="clave col-md-6">
								<input class="password form-control" type="password" id="password" name="password" placeholder="Password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> Recuérdame
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button class="ver_login btn btn-info" type="submit"  id="ver_login" name="ver_login">Login</button>
								<a class="btn btn-link" href="../password/email.php">Olvidastes Tu Contraseña?</a>
							</div>
						</div>

						<div class="hidden alert alert-danger alert-dismissible" role="alert" id="error_email">
							
							Dirección de correo  <strong>No valida! <span class="glyphicon glyphicon-alert"></span></strong> 
						</div>
						<div class="hidden alert alert-danger alert-dismissible" role="alert" id="error_login">
							
							Usuario o Contreseña <strong>incorrecta! <span class="glyphicon glyphicon-alert"></span></strong> 
						</div>
					
					</form>
				</div>
			</div>

				</div>

		<div class="col-md-2"></div>
	</div>

	</section>

</body>
</html>

