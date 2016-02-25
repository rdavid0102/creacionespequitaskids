<?php

	class Productos
	{	
       	
		function Cargar_productos($id_linea,$id_sublinea)
		{	
			include ('../Datos/conexion.php');
			$re=mysqli_query($con, "SELECT * FROM Productos WHERE id_sublinea_producto="."'$id_linea' AND id_linea_producto=".$id_sublinea);
			while ($f=mysqli_fetch_array($re)) {
				$vector[]=array('id_producto'=>$f['id_producto'],'nom_producto'=>$f['nom_producto'],'img1'=>$f['img1']);
			}
			return $vector;
			mysqli_close($con); 		     		   
		}

		function Cargar_detalles_producto($id_producto)
		{	
			include ('../Datos/conexion.php');
			$re=mysqli_query($con, "SELECT * FROM Productos WHERE id_producto="."'$id_producto'");
			while ($f=mysqli_fetch_array($re)) {
				$vector[]=array('id_producto'=>$f['id_producto'],'nom_producto'=>$f['nom_producto'],'img1'=>$f['img1']);
			}
			return $vector;
			mysqli_close($con); 		     		   
		}


	}

?>