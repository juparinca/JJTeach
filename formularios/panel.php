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
	body{
		background: rgb(125,125,125,0.1);
	}

</style>
<body>
<div>
	<h2>Bienvenido al Panel de Administración <a href="cerrarSesion.php">Cerrar sesión</a></h2>
		<div>
			<table class="table table-hover table-dark">
				<tr>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Fecha de Nacimiento</th>
					<th>Cédula</th>
					<th>Correo Electrónico</th>
					<th>Institución</th>
					<th>Teléfono</th>
					<th>Usuario</th>
					<th>Clave</th>
                    <th>Acción</th>
				</tr>
				<?php
					//Mostrar todos los registros de la base de datos en la web
					$consulta =$db->consultar("SELECT * FROM registro");
					while($registro = $db->fetch_array($consulta)){
						echo "<tr>								
								<td>".$registro['reg_nombre']."</td>
								<td>".$registro['reg_apellido']."</td>
								<td>".$registro['reg_fechanac']."</td>
								<td>".$registro['reg_cedula']."</td>
								<td>".$registro['reg_correo']. "</td>
								<td>".$registro['reg_institucion']. "</td>
								<td>".$registro['reg_telefono']. "</td>
								<td>".$registro['reg_usuario']. "</td>
								<td>".$registro['reg_clave']. "</td>							
								<td>
									<form action='editarRegistro.php' method='get'>
										<input type='hidden' name='idRegistro' value='" .$registro['reg_cedula']. "'>
										<input class='btn btn-secondary' type='submit' Value='Editar'>
									</form>
								</td>
							 </tr>";
					}
				?>
			</table>
		</div>		
</div>
</body>
</html>
	