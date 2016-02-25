<?php

if(isset($_GET['email'])) {
			$email=$_GET['email'];
		$name=$_GET['name'];
		$cadena=$_GET['cadena'];
		$fecha=date("d-m-Y");
		$hora=date("H:i:s");
		$asunto="Password-Academic System";
		$desde="no-reply@acamic_system.com";
		$correo=$email;
		$comentario='
			<div style="
				border: 1px solid #d6d2d2;
		        border-radius: 5px;
		        box-shadow: 5px 5px 10px rgba(57,29,150,0.5);
		        color:#9378f0;
		        padding:10px;
		        width:800px%;
		        heigth:400px;
			">
			<center>
				<h1>Recuperación de cuenta</h1>
			</center>
			<p>Hola '.$name.',<br>
			 Su recuperación de clave del sitio Academic System ha sido satisfactoria, la información es la siguiente:
			 <br>
			 Usuario: '.$correo.'<br>
			 Clave: '.$cadena.'<br>
			 Favor no responder a este correo, debido a que la cuenta no está habilitada para recibir respuesta
			</div>
		';
		echo $comentario;
		$headers="MIME-Version: 1.0\r\n";
		$headers.="Content-type: text/html; charset=utf8\r\n";
		$headers.="From: Academic_System\r\n";
		mail($correo,$asunto,$comentario,$headers);

}else{	echo 'error al enviar el email';}
?>