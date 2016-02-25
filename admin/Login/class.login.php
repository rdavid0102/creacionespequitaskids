<?php


class Login
	{
		public function Encriptar_password($password, $digito = 7) {
		$set_salt = './1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
		$salt = sprintf('$2a$%02d$', $digito);
		for($i = 0; $i < 22; $i++)
		{
		  $salt .= $set_salt[mt_rand(0, 22)];
		}
		return crypt($password, $salt);
		}

		function Validar_login($email,$password)
		{	
			include ('../Datos/conexion.php');
			$re=mysqli_query($con, "SELECT * FROM usuarios WHERE email="."'$email'");
			while ($f=mysqli_fetch_array($re)) {
				if( crypt($password, $f['password']) == $f['password']) {
					$nre = 1;
				}else{
					$nre = 0;
				}	
			}
			return $nre;
			mysqli_close($con); 		     		   
		}

		function Cargar_login($email,$password)
		{	session_start();
			include ('../Datos/conexion.php');
			$re=mysqli_query($con, "SELECT * FROM usuarios WHERE email="."'$email'");
			while ($f=mysqli_fetch_array($re)) {
				if( crypt($password, $f['password']) == $f['password']) {		
						$arreglo[]=array('nombres'=>$f['nombres'],
						'apellidos'=>$f['apellidos'],'email'=>$f['email'],'genero'=>$f['genero'],'id'=>$f['id_usuario']);
						$_SESSION['Usuario']=$arreglo;
				}
					
			}
				
			mysqli_close($con); 		     		   
		}

		function Validar_Nuevo_Usuario()
		{	
			include ('./Datos/conexion.php');
			$re=mysqli_query($con, "SELECT * FROM usuarios");
			$nre = mysqli_num_rows($re);
			return $nre;
			mysqli_close($con);		     		   
		}
		function Validar_Email($email)
		{	
			include ('../Datos/conexion.php');
			$re=mysqli_query($con, "SELECT * FROM usuarios where email="."'$email'");
			$nre = mysqli_num_rows($re);
			return $nre;
			mysqli_close($con);		     		   
		}
		function Nuevo_Usuario($id_usuario, $password, $nombres, $apellidos, $genero, $celular, $email)
		{	
			$clase = new  Login();
			$password2 = $clase->Encriptar_password($password);
			include ('../Datos/conexion.php');
			mysqli_query($con, "INSERT INTO usuarios (id_usuario, password, nombres, apellidos, genero, celular, email) VALUES ('$id_usuario', '$password2', '$nombres', '$apellidos', '$genero', '$celular', '$email')")or die(mysqli_error());			
			mysqli_close($con); 	     		   
		}
		function Validar_password_usuario($email, $password)
		{	
			include ('../Datos/conexion.php');
			$re=mysqli_query($con, "SELECT * FROM usuarios WHERE email="."'$email'");
			while ($f=mysqli_fetch_array($re)) {
				if( crypt($password, $f['password']) == $f['password']) {
					$nre = 1;
				}else{
					$nre = 0;
				}	
			}
			return $nre;
			mysqli_close($con); 		   
		}
			function Cambiar_password($email,$password)
		{	
			include ('../Datos/conexion.php');
			$clase = new  Login();
			$password2 = $clase->Encriptar_password($password);
			mysqli_query($con, "UPDATE usuarios SET password='$password2'
			WHERE email="."'$email'")or die(mysqli_error());		
			mysqli_close($con); 	     		   
		}
		function Datos($email)
		{	
			include ('../Datos/conexion.php');
			$re=mysqli_query($con, "SELECT * FROM usuarios where email="."'$email'");
			while ($f=mysqli_fetch_array($re)) {
				$arreglo[]=array('nombres'=>$f['nombres'],
				'apellidos'=>$f['apellidos']);
			}
			return $arreglo;
			mysqli_close($con);		     		   
		}
	}

?>