<?php

if(isset($_POST['email'])) {
			$email=$_POST['email'];
		}

		////////////////////selecionar nuevo password////
$caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890"; //posibles caracteres a usar
$numerodeletras=10; //numero de letras para generar el texto
$cadena = ""; //variable para almacenar la cadena generada
for($i=0;$i<$numerodeletras;$i++)
{
    $cadena .= substr($caracteres,rand(0,strlen($caracteres)),1); /*Extraemos 1 caracter de los caracteres 
entre el rango 0 a Numero de letras que tiene la cadena */
}

		/////////////////inserto la nueva clave en la base de Datos//
		include('./Login/class.login.php');
		$clase=new  Login();
		$clase->Cambiar_password($email, $cadena);
		//////////////////

		$clase=new  Login();
		$datosusuario=$clase->Datos($email);
		//echo "esto es lo que trae el arreglo".$n[0]['nombres'];

		$nombres=$datosusuario[0]['nombres'];
		$apellidos=$datosusuario[0]['apellidos'];
		$name=$nombres.' '.$apellidos;
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


		header("Location: http://rafaelperez.hol.es/admin/recupera_login2.php?email=$email&name=$name&cadena=$cadena");

?>