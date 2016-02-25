<?php
include('../admin/Login/class.login.php');
$clase=new Login;
$nrg=$clase->Validar_Email($_POST["email"]);
echo $nrg;
?>