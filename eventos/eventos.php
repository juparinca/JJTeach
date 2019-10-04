<?php
	header('Content-Type: application/json');
	
	$conexion= new PDO(
		"mysql:dbname=aplicativo;
		host=localhost",
		"root","1005449469"
	);


	
	
	try {
		
//AGREGAR
		$accion=(isset($_GET['accion']))?$_GET['accion']:'leer';

		switch($accion){
			case 'agregar':

			//INSTRUCCIÓN DE AGREGAR
			$insertar=$conexion->prepare("INSERT INTO eventos(title,descripcion,start,end,color,textColor) VALUES(:title,:descripcion,:start,:end,:color,:textColor)");

			$insercion=$insertar->execute(array(

				"title"=> $_POST['title'],
				"descripcion"=> $_POST['descripcion'],
				"start"=>$_POST['start'],
				"end"=>$_POST['end'],
				"color"=>$_POST['color'],
				"textColor"=>$_POST['textColor']
			));

			echo json_encode($insercion);
			
			break;

			case 'eliminar':
//INSTRUCCION DE ELIMINAR
				
			$respuesta=false;
			if(isset($_POST['id'])){
				$borrarSQL= $conexion->prepare("DELETE FROM eventos WHERE id=:id");

				$respuesta=$borrarSQL->execute(array(
					"id"=>$_POST['id']));
			}
			echo json_encode($respuesta);

				break;

			case 'modificar':
			//INSTRUCCIÓN DE MODIFICAR
			$actualizar= $conexion->prepare("UPDATE eventos SET title=:title,
				descripcion=:descripcion,
				start=:start,
				end=:end,
				color=:color,
				textColor=:textColor
				WHERE id=:id
				");


				$actualizado=$actualizar->execute(array(
				"id"=>$_POST['id'],
				"title"=> $_POST['title'],
				"descripcion"=> $_POST['descripcion'],
				"start"=>$_POST['start'],
				"end"=>$_POST['end'],
				"color"=>$_POST['color'],
				"textColor"=>$_POST['textColor']
			));
				echo json_encode($actualizado);



				break;
			default:
			//SELECCIONAR LOS EVENTOS DEL CALENDARIO
		//MOSTRAR EVENTOS

			$consultaSQL=$conexion->prepare("SELECT * FROM eventos");
			$consultaSQL->execute();

			$resultado=$consultaSQL->fetchAll(PDO::FETCH_ASSOC);
			echo json_encode($resultado);
			break;

		}
	} catch (Exception $e) {
		echo 'Excepción capturada: ',  $e->getMessage(), "\n";
	}
	?>