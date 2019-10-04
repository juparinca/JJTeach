<?php
	//Importación de la clase Conexion
	require_once('../modelo/Conexion.php');
	require('../index.html');
	//Intanciación de un objeto de la clase Conexion
	$db = new Conexion();

	//Llama función para poder iniciar una sesión
	session_start();

	//Guarda la información recibida del login por el método POST
	$usuario = $_POST['usuario'];
	$clave = $_POST['clave'];

	//Valída cada variable de que NO esté vacía
	if(!isset($usuario)){
    	echo "<script> alert('valido');</script>";
	}
	if(!isset($clave)){
    	echo "<script> alert('invalido');</script>";

	}

	//Realizar consulta a la base de datos para comprobar si el usuario y contraseña son correctos del administrador
	$query = "SELECT * FROM registro WHERE reg_usuario='$usuario' AND reg_clave='$clave' AND reg_privilegio=1";
	$consulta = $db->consultar($query);

	//Realizar consulta a la base de datos para comprobar si el usuario y contraseña son correctos del usuario
	$query2 = "SELECT * FROM registro WHERE reg_usuario='$usuario' AND reg_clave='$clave' AND reg_privilegio=2";
	$consulta2 = $db->consultar($query2);

	//Validación sobre que consulta iniciar la sesión. Si con la de administrador o la de usuario, y en caso de que no, te rediríge al index
	if($resultado = mysqli_fetch_array($consulta)){
		$_SESSION['uUsuario'] = $usuario;
		header("location: panel.php");
	}elseif($resultado2 = mysqli_fetch_array($consulta2)){
		$_SESSION['uUsuario'] = $usuario;
		header("location: ../plataforma.html");
	}else{
		header("location: ../errorSesion/invalidarSesion.html");

		//header("location: ../index.html");

		
		
		
		
	
	}

?>