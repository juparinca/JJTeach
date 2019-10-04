<!DOCTYPE html>
<html lang="es">
<head>
	<title>Regístro</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">﻿
	<link rel="stylesheet" href="../css/formRegistro.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

    <style>
        
        form{
            background: rgb(20,10,120,0.6);
            padding-bottom: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            box-shadow:inset 2px 10px 10px rgb(52, 44, 213);

        }

        .encabezado{
            background: #000000;
            opacity: 0.8;
            color:#ffffff;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            padding-left: 10px;
        }


        label{
            color:white;
        }

        .section1{
            height: 100px;
            background: black;
            text-align: center;
            color:white;
            padding-top: 20px;

        }

        .jjteach{
            font-size: 40px;
            font-family: fantasy;
            letter-spacing: 5px;
            
        }
        
        .crear{
            transition: 0.5s;
        }
        .crear:hover{
            background: #342CD5; 
            color:white;
            border-style: none;
        }
        
        

    </style>
</head>
<body>
<div>
    <form class="container" action='crearRegistro.php' method='post'>
        
       <div class="row encabezado"><h2>Regístrate</h2></div> 
<!-- NOMBRE -->
    <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 form-group">
            <label for="nombre">Nombre</label>
            <input class="form-control" type="text" name="nombre" required>
        </div>

<!-- APELLIDO -->
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 form-group form-group">
            <label for="apellido">Apellido</label>
            <input class=" form-control" type="text" name="apellido" required>
        </div>
    

<!-- CÉDULA -->    
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4  form-group">       
            <label for="cedula">Cédula</label>
            <input class="col-6 form-control" type="number" name="cedula" required>
        </div>
    </div>
        
<!-- FECHA DE NACIMIENTO -->
    <div class="row">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 form-group">
            <label for="fechaDeNacimiento">Fecha de Nacimiento</label>
            <input class="form-control" type="date" name="fechaDeNacimiento" required>
       </div>

<!-- TELÉFONO -->
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 form-group">
            <label for="telefono">Teléfono</label>
            <input class="form-control" type="number" name=telefono required>
        </div>

 

<!-- CORREO -->
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 form-group">
            <label for="correo">Correo Electrónico</label>
            <input class="form-control" type="text" name="correo" required>
        </div>

<!-- INSTITUCIÓN -->

        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 form-group">
            <label for="institucion">Institución</label>
            <select class="col-6 form-control" name="institucion">
                <option>Colegio</option>
                <option>Universidad</option>
            </select>
        </div>        
    </div>




<!-- USUARIO -->
    <div class="row">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 form-group">
            <label for="usuario">Usuario</label>
            <input class=" form-control" type="text" name="usuario" required>
        </div>
    
<!-- CLAVE -->
    
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 form-group">
            <label for="clave">Clave</label>
            <input class=" form-control" type="password" name="clave">
        </div>

         <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 form-group"><label for="rol">Rol</label>
            <select class="form-control" name="rol" >
                <option >Docente</option>
                <option >Estudiante</option>
            </select>
         </div>

    </div>

</br>
<!-- BTN CREAR -->
        <div>
            <input class="crear col-2 form-control" type='submit' Value='Crear'>
        </div>
    </form>

    <section class="section1 container">
        <span class="jjteach">JJTeach</span>
    </section>
</div>
</body>
</html>