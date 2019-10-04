<?php
	require_once('../modelo/Conexion.php');
	$db = new Conexion();

	//Llama función para poder iniciar una sesión
	session_start();

	//Verifíca si aún exíste una sesión y en caso de que no, te rediríge al index
	if(!isset($_SESSION['uUsuario'])){
		header("location: ../index.html");
	}

	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$fechaDeNacimiento = $_POST['fechaDeNacimiento'];
	$cedula = $_POST['cedula'];
	$correo = $_POST['correo'];
	$institucion = $_POST['institucion'];
	$telefono = $_POST['telefono'];
	$usuario = $_POST['usuario'];
	$clave = $_POST['clave'];
	$privilegio = $_POST['privilegio'];

	if(!isset($nombre)){
		echo "nombre no valido";
	}
	if(!isset($apellido)){
		echo "apellido no valido";
	}
	if(!isset($fechaDeNacimiento)){
		echo "fecha De Nacimiento no valida";
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
		echo "clave no valido";
	}
	if(!isset($privilegio)){
		echo "privilegio no valido";
	}

	$query = "UPDATE registro SET reg_nombre='$nombre', reg_apellido='$apellido', reg_fechanac='$fechaDeNacimiento', reg_cedula=$cedula, reg_correo='$correo', reg_institucion='$institucion', reg_telefono='$telefono', reg_usuario='$usuario', reg_clave='$clave', reg_privilegio='$privilegio' WHERE reg_cedula='$cedula'";

	$consulta =$db->ejecutar_sql($query);
	if($consulta){
		header("Location: panel.php");
	}
?>