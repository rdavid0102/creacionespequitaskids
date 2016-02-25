<?php	 	
include ('../admin/Login/class.login.php');
$clase=new  Login();
$nreg = $clase->Validar_password_usuario($_POST['email'], $_POST['password']);
echo $nreg;
?>