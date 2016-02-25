<?php
include('../admin/Login/class.login.php');
$clase=new Login;
$clase->Nuevo_Usuario($_POST["cedula"],$_POST["password1"],$_POST["nombres"],$_POST["apellidos"],$_POST["genero"],
						$_POST["celular"],$_POST["email"]);


$clase=new  Login();
$clase->Cargar_login($_POST['email'],$_POST['password1']);	
header("Location: ../horarios.php?");
?>