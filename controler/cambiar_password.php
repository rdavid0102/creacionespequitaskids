<?php	 	
include ('../admin/Login/class.login.php');
session_start();
$datosusuario=$_SESSION['Usuario'];
$clase=new  Login();
$clase->Cambiar_password($datosusuario[0]['email'], $_POST['password1']);
?> 
<script type="text/javascript">
	location.href="../home.php";
</script>
<?php

?>