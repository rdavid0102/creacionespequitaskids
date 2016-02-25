<?php

	class Lineas
	{	
       		function Cargar_lineas()
		{	
			include ('../Datos/conexion.php');
			$re=mysqli_query($con, "SELECT * FROM lineas1");
			while ($f=mysqli_fetch_array($re)) {
				$vector[]=array('id_linea'=>$f['id_linea'],'nom_linea'=>$f['nom_linea'],'img1'=>$f['img1'],'img2'=>$f['img2'],'img3'=>$f['img3'],'descripcion1'=>$f['descripcion1'],'descripcion2'=>$f['descripcion2'],'descripcion3'=>$f['descripcion3']);
			}
			return $vector;
			mysqli_close($con); 		     		   
		}

		function Cargar_sublineas($id_linea)
		{	
			include ('../Datos/conexion.php');
			$re=mysqli_query($con, "SELECT * FROM sublineas WHERE num_linea="."'$id_linea'");
			while ($f=mysqli_fetch_array($re)) {
				$vector[]=array('id_sublinea'=>$f['id_sublinea'],'nom_sublinea'=>$f['nom_sublinea'],'img_sublinea'=>$f['img_sublinea']);
			}
			return $vector;
			mysqli_close($con); 		     		   
		}
		function Cargar_linea($id_linea)
		{	
			include ('../Datos/conexion.php');
			$re=mysqli_query($con, "SELECT * FROM lineas1 WHERE id_linea="."'$id_linea'");
			while ($f=mysqli_fetch_array($re)) {
				$vector[]=array('id_linea'=>$f['id_linea'],'nom_linea'=>$f['nom_linea'],'img1'=>$f['img1'],'img2'=>$f['img2'],'img3'=>$f['img3'],'descripcion1'=>$f['descripcion1'],'descripcion2'=>$f['descripcion2'],'descripcion3'=>$f['descripcion3']);
			}
			return $vector;
			mysqli_close($con); 		     		   
		}




		////////////
		function Nuevo_salon($num_salon,$id_profesor,$id_asignatura,$id_horario)
		{	
			include ('../Datos/conexion.php');
			mysqli_query($con, "INSERT INTO salones (num_salon,id_profesor,id_materia,id_horario) VALUES ('$num_salon','$id_profesor',
				'$id_asignatura','$id_horario')")or die(mysqli_error());					
			mysqli_close($con); 	     		        		   
		}
	
		function obtener_id($num_salon)
		{	
			include ('../Datos/conexion.php');
			$re=mysqli_query($con, "SELECT * FROM salones WHERE num_salon=".$num_salon);
			$nre = mysqli_num_rows($re);
			if ($nre!=0){
				while ($f=mysqli_fetch_array($re)) {
					$numero[]=array('id_salon'=>$f['id_salon']);
				}
				return $numero[0]['id_salon'];
			}
			//return $nre;
			mysqli_close($con); 		     		   
		}
		function Verificar_aula_profesor($id_horario, $num_salon, $id_profesor, $id_materia)
		{	
			//echo 'id_salon: '.$num_salon.' id_horario: '.$id_horario.' id_materia: '.$id_materia.' id_profesor: '.$id_profesor;
			include ('../Datos/conexion.php');
			$re=mysqli_query($con, "SELECT * FROM salones WHERE num_salon=".$num_salon." and id_profesor=".$id_profesor." and id_materia=".$id_materia." and id_horario=".$id_horario);
			$nre = mysqli_num_rows($re);
			echo $nre;
			mysqli_close($con); 		     		   
		}
			function Cargar_salones($id_horario, $num_salon, $nom_profesor, $nom_materia)
		{	
			include ('../Datos/conexion.php');
			$re=mysqli_query($con, "SELECT * FROM salones, profesores, materias WHERE salones.id_horario=".$id_horario." and salones.id_profesor=profesores.id and salones.id_materia=materias.id_materia and salones.num_salon LIKE '%".@$num_salon."%' and profesores.apellidos LIKE '%".@$nom_profesor."%' and materias.nom_materia LIKE '%".@$nom_materia."%'");
			$nre = mysqli_num_rows($re);
			if ($nre!=0){
				while ($f=mysqli_fetch_array($re)) {
					$vector[]=array('id_salon'=>$f['id_salon'],'num_salon'=>$f['num_salon'],'nombres'=>$f['nombres'],'apellidos'=>$f['apellidos'],'nom_materia'=>$f['nom_materia']);
				}
				return $vector;
			}
			return 'undefined';
			mysqli_close($con); 		     		   
		}
			function Cargar_detalles($id_salon)
		{	
			include ('../Datos/conexion.php');
			$re=mysqli_query($con, "SELECT * FROM salones, profesores, materias WHERE salones.id_salon=".$id_salon." and salones.id_profesor=profesores.id and salones.id_materia=materias.id_materia");
			$nre = mysqli_num_rows($re);
			if ($nre!=0){
				while ($f=mysqli_fetch_array($re)) {
					$vector[]=array('id_salon'=>$f['id_salon'],'num_salon'=>$f['num_salon'],'nombres'=>$f['nombres'],'apellidos'=>$f['apellidos'],'nom_materia'=>$f['nom_materia']);
				}
				return $vector;
			}
			mysqli_close($con); 		     		   
		}
		function Actualizar_salon($id_salon,$num_salon)
		{	
			include ('../Datos/conexion.php');
			mysqli_query($con, "UPDATE salones SET num_salon='$num_salon'
			WHERE id_salon=".$id_salon)or die(mysqli_error());						
			mysqli_close($con); 	     		   
		}
		function Verificar_aula($num_salon,$id_horario)
		{	
			//echo 'id_salon: '.$num_salon.' id_horario: '.$id_horario.' id_materia: '.$id_materia.' id_profesor: '.$id_profesor;
			include ('../Datos/conexion.php');
			$re=mysqli_query($con, "SELECT * FROM salones WHERE num_salon=".$num_salon." and id_horario=".$id_horario);
			$nre = mysqli_num_rows($re);
			return $nre;
			mysqli_close($con); 		     		   
		}
		function Verificar_profesor($id_profesor, $id_horario)
		{	
			//echo 'id_salon: '.$num_salon.' id_horario: '.$id_horario.' id_materia: '.$id_materia.' id_profesor: '.$id_profesor;
			include ('../Datos/conexion.php');
			$re=mysqli_query($con, "SELECT * FROM salones WHERE id_profesor=".$id_profesor." and id_horario=".$id_horario);
			$nre = mysqli_num_rows($re);
			return $nre;
			mysqli_close($con); 		     		   
		}

		function Eliminar_salon($id_salon){
			include ('../Datos/conexion.php');
			mysqli_query($con, "DELETE FROM salones WHERE id_salon=".$id_salon);
			mysqli_close($con); 
		}
	}

?>