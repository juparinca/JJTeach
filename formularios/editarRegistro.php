<?php
	require_once('../modelo/Conexion.php');
	$db = new Conexion();
	
	//Obtiene el id de la petición GET
	$cedula = $_GET['idRegistro'];
	
	//Realiza la consulta a la BD
	$consulta =$db->consultar("SELECT * FROM registro WHERE reg_cedula='$cedula'");
	$registro = $db->fetch_assoc($consulta);

	//Llama función para poder iniciar una sesión
	session_start();

	//Verifíca si aún exíste una sesión y en caso de que no, te rediríge al index
	if(!isset($_SESSION['uUsuario'])){
		header("location: ../index.html");
	}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<title>Regístros</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">﻿
	<link rel="stylesheet" href="../css/formRegistro.css">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>

<style>
	.formulario{
		margin-left: 50px;
		padding: 10px;
	}
</style>
<body>
<div>
    <h2>Modo edición</h2>
		<div>
			<form class="formulario" action='guardarRegistro.php' method='post'>

				<div class="row">
					<div class="col-2">Nombre
						<input class="form-control" type="text" name="nombre" value="<?php echo $registro['reg_nombre'];?>"></div>

					<div class="col-2">
						Apellido
						<input class="form-control"type="text" name="apellido" value="<?php echo $registro['reg_apellido'];?>"></div>


					<div class="col-2">
						Fecha de Nacimiento
						<input class="form-control" type="text" name="fechaDeNacimiento" value="<?php echo $registro['reg_fechanac'];?>"></div>
					</div>

			<div class="row">
				<div class="col-2">
					Cédula
					<input class="form-control"type="text" name="cedula" value="<?php echo $registro['reg_cedula'];?>">
				</div>

				<div class="col-2">
					
					Correo
					<input class="form-control" type="text" name="correo" value="<?php echo $registro['reg_correo'];?>">
				</div>

				<div class="col-2">
					
					  Institución
                <input class="form-control" type="text" name="institucion" value="<?php echo $registro['reg_institucion'];?>">
				</div>


			</div>    

			<div class="row">
				
				<div class="col-2">

					Teléfono
					<input class="form-control" type="text" name="telefono" value="<?php echo $registro['reg_telefono'];?>">
				</div>

				<div class="col-2">
					
					Usuario
					<input class="form-control" type="text" name="usuario" value="<?php echo $registro['reg_usuario'];?>">
				</div>

				<div class="col-2">
					 
					Clave
					<input class="form-control"type="text" name="clave" value="<?php echo $registro['reg_clave'];?>">
				</div>

				<div class="col-2">
					Privilegio
					<input class="form-control" type="text" name="privilegio" value="<?php echo $registro['reg_privilegio'];?>">
				</div>
			</div>
	
				<br>
				<input class="btn btn-primary" type='submit' Value='Guardar'>

			</form>
		</div>
</div>
</body>
</html>