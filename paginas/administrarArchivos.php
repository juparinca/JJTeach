<!DOCTYPE html>
<html lang="es">
<head>
  <title>JJTeach</title>
  <meta charset='utf-8' />

  <!-- NO MOLESTE-->
 

  <link href='calendario/fullcalendar.min.css' rel='stylesheet' />
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link href='calendario/fullcalendar.print.min.css' rel='stylesheet' media='print' />
  <link rel="stylesheet" href="../css/calendario_juan.css">
  <link rel="stylesheet" href="../css/bootstrap-clockpicker.css">

  <script src='../bootstrap/js/bootstrap.min.js'></script>
  <script src='calendario/lib/moment.min.js'></script>
  <script src='calendario/lib/jquery.min.js'></script>
  <script src='calendario/fullcalendar.min.js'></script>
  <script src="calendario/locale/es.js"></script>
  <script src="../popper/popper.min.js"></script>
  <script src="../popper/bootstrap.min.js"></script>
  <script src="../js/bootstrap-clockpicker.js"></script>
  <script src="../js/refrescarPaginaIndex.js"> </script>

  <script src="../js/bom.js"></script>

<style>
  

  .cerrarSesion{
    color:blue;
  }

  .cerrarSesion:hover{
    color:rgb(17, 150, 164);
  }

	.fondoAdministracion{
		background: white;
	}

body{
	height: 100%;
	width: 100%;
  background: rgb(0,0,0,0.1);

  overflow: auto;

  background: rgba(186,198,204,1);
  background: -moz-linear-gradient(-45deg, rgba(186,198,204,1) 0%, rgba(216,225,231,1) 6%, rgba(215,224,230,1) 7%, rgba(182,183,184,1) 38%, rgba(181,198,208,1) 51%, rgba(88,69,209,1) 100%);
  background: -webkit-gradient(left top, right bottom, color-stop(0%, rgba(186,198,204,1)), color-stop(6%, rgba(216,225,231,1)), color-stop(7%, rgba(215,224,230,1)), color-stop(38%, rgba(182,183,184,1)), color-stop(51%, rgba(181,198,208,1)), color-stop(100%, rgba(88,69,209,1)));
  background: -webkit-linear-gradient(-45deg, rgba(186,198,204,1) 0%, rgba(216,225,231,1) 6%, rgba(215,224,230,1) 7%, rgba(182,183,184,1) 38%, rgba(181,198,208,1) 51%, rgba(88,69,209,1) 100%);
  background: -o-linear-gradient(-45deg, rgba(186,198,204,1) 0%, rgba(216,225,231,1) 6%, rgba(215,224,230,1) 7%, rgba(182,183,184,1) 38%, rgba(181,198,208,1) 51%, rgba(88,69,209,1) 100%);
  background: -ms-linear-gradient(-45deg, rgba(186,198,204,1) 0%, rgba(216,225,231,1) 6%, rgba(215,224,230,1) 7%, rgba(182,183,184,1) 38%, rgba(181,198,208,1) 51%, rgba(88,69,209,1) 100%);
  background: linear-gradient(135deg, rgba(186,198,204,1) 0%, rgba(216,225,231,1) 6%, rgba(215,224,230,1) 7%, rgba(182,183,184,1) 38%, rgba(181,198,208,1) 51%, rgba(88,69,209,1) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#bac6cc', endColorstr='#5845d1', GradientType=1 );

}


</style>

</head>
<body>

  

  <div class="row">

    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <div class=" opciones">
        <table>
          <tr>
            <td><a href="#">Inicio</td>
            </tr>

            <tr>
              <td><a href="../agenda.html">Organizar Agenda</a></td>
            </tr>

            <tr>
              <td>Administrar Grupos</td>
            </tr>

            <tr>
              <td><a href="administrarArchivos.php" >Administrar Archivos</td>
            </tr>

            <tr>
              <td>Horarios</td>
            </tr>

            <tr>
              <td>Evaluaciones</td>
            </tr>

            <tr>
              <td>Trabajos y Talleres</td>
            </tr>


            <tr>
              <td><img class="docente" src="../img/docente.png"></td>
            </tr>
          </table>
        </div>
      </div>

     
     <div class="fondoAdministracion col-xs-7 col-sm-7 col-md-7 col-lg-7">
     	
     </div>
</div>



<div><a id="cerrarSesion" class= "cerrarSesion"href="formularios/cerrarSesion.php">Cerrar sesión</a></div>

      

     <div class="pie">JJTeach</div>


     
</body>

<script>
 
  
</script>
</html>
