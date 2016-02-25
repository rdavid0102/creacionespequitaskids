<?php

include "../Datos/conexion.php";
include "../admin/Login/class.login.php";
$clase=new  Login();
$nre=$clase->Validar_login($_POST['usuario'],$_POST['password']);

if ($nre!=0) {
	$clase=new  Login();
	$clase->Cargar_login($_POST['usuario'],$_POST['password']);	
		$caso=1;
			echo $caso;
}else{
	$caso=0;
		echo $caso;
		}

	
?>