<?php
	//Importación de la clase Conexion
	require_once('../modelo/Conexion.php');
	//Intanciación de un objeto de la clase Conexion
	$db = new Conexion();

	//Llama función para poder iniciar una sesión
	session_start();

	//Verifíca si aún exíste una sesión y en caso de que no, te rediríge al index
	if(!isset($_SESSION['uUsuario'])){
		header("location: ../index.html");
	}

	//Guarda la información recibida por el método POST
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$fechaDeNacimiento = $_POST['fechaDeNacimiento'];
	$cedula = $_POST['cedula'];
	$correo = $_POST['correo'];
	$institucion = $_POST['institucion'];
	$telefono = $_POST['telefono'];
	$usuario = $_POST['usuario'];
	$clave = $_POST['clave'];
	$rol= $_POST['rol'];

	//Valída cada variable de que NO esté vacía
	if(!isset($nombre)){
    	echo "nombre no valido";
	}
	if(!isset($apellido)){
    	echo "apellido no valido";
	}
	if(!isset($fechaDeNacimiento)){
    	echo "fecha de nacimiento no valida";
	}
	if(!isset($cedula)){
    	echo "cedula no valida";
	}
	if(!isset($correo)){
    	echo "correo no valido";
	}
	if(!isset($institucion)){
    	echo "institucion no valida";
	}
	if(!isset($telefono)){
    	echo "telefono no valido";
	}
	if(!isset($usuario)){
    	echo "usuario no valido";
	}
	if(!isset($clave)){
    	echo "clave no valida";
	}
	if(!isset($rol)){
		echo "rol inválido";
	}

	//Inserción de registros del usuario en la base de datos
	$query = "INSERT INTO registro (reg_nombre, reg_apellido, reg_fechanac, reg_cedula, reg_correo, reg_institucion, reg_telefono, reg_usuario, reg_clave, reg_privilegio,reg_rol) VALUES('$nombre','$apellido','$fechaDeNacimiento',$cedula,'$correo','$institucion','$telefono','$usuario','$clave',2,'$rol')";

	//Llamar al método ejecutar para comprobar si se hizo el query
	$consulta =$db->ejecutar_sql($query);
	
	if($consulta){
    	header("Location: ../index.html?idRegistro=$cedula");

/*
		$contarEventos="SELECT COUNT(*)+1 as eventos from Information_Schema.Tables where TABLE_TYPE = 'BASE TABLE' and table_schema = 'aplicativo' and TABLE_NAME like '%evento_usuario%' ";
		$contandoEventos=$db->ejecutar_sql($contarEventos);

//TRAE EL VALOR DE TODA LA FILA
		$row = mysqli_fetch_array($contandoEventos); 
//TRAE EL VALOR DE LA COLUMNA EVENTOS
		$eventos = $row['eventos'];
		//echo $eventos;

//CREACIÓN DE TABLAS POR USUARIO		
		$tablas = "
		CREATE TABLE evento_usuario_$eventos(
			id bigint AUTO_INCREMENT primary key,
			title varchar(255),
			descripcion text,
			start datetime, 
			end datetime,
			color varchar(255),
			textColor varchar(255),
			usuario_cedula bigint(12)
            
	
		);
        
 
	";

	$ejecucionTablas = $db->ejecutar_sql($tablas);

*/
	//INSERTAR EVENTOS DE CADA USUARIO
$eventoConsulta="SELECT COUNT(*)+1 AS eventos FROM eventos";

$eventosSQL=$db->ejecutar_sql($eventoConsulta);

$row= mysql_fetch_array($eventosSQL);

$eventos= $row['eventos'];



	/*$relacionar="
		ALTER TABLE evento_usuario_$eventos ADD CONSTRAINT fk_evento_usuario_$eventos FOREIGN KEY (usuario_cedula) REFERENCES registro(reg_cedula);
	";

	$ejecucionRelacion= $db->ejecutar_sql($relacionar);  

/*
	$actualizarEvento = "
		UPDATE evento_usuario_$eventos SET usuario_cedula= $cedula WHERE select max(reg_id) from registro)
group by reg_nombre
	limit 1; 
	";

	*/
	}//FIN DE LA CONSULTA SI SE REGISTRA USUARIO

	

	
	

	

?>