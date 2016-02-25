<?php 
	include ('../Datos/class.Producto.php');
	
		if ($_POST['caso']=='cargar_productos') {
				$clase=new  Productos();
				$vector=$clase->Cargar_productos($_POST['id_linea'],$_POST['id_sublinea']);
				echo json_encode($vector);
				
		}
		if ($_POST['caso']=='cargar_detalles_producto') {
				$clase=new  Productos();
				$vector=$clase->Cargar_detalles_producto($_POST['id_producto']);
				echo json_encode($vector);
				
		}

//////////
		if ($_POST['caso']=='actualizar') {
			$clase=new  Curso();
			$clase->Actualizar_curso($_POST['id_curso'],$_POST['nom_curso'],$_POST['num_curso']);
			$caso=0;
			echo $caso;
		}

			if ($_POST['caso']=='eliminar') {
				$clase=new  Curso();
				$clase->Eliminar_curso($_POST['id_curso']);
		}
	

		if ($_POST['caso']=='cargar_tabla') {
				$clase=new  Curso();
				$vector=$clase->cargar_tabla($_POST['buscar'],$id_horario);
				echo json_encode($vector);
		}
		
			if ($_POST['caso']=='buscar') {
				$clase=new  Curso();
				$vector=$clase->Buscar_curso($_POST['id_curso']);
				echo json_encode($vector);
		}
	

?>