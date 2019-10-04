<?php

class Conexion
{
    private $conexion;
    private $servidor;
    private $usuario;
    private $contraseña;
    private $base_datos;

    public function __construct()
    {
        $this->servidor = "localhost";//sql313.elmejorhosting.online
        $this->usuario = "root";//lmjr_23453560
        $this->contraseña = "1005449469";//1005449469
        $this->base_datos = "aplicativo";//lmjr_23453560_db_prueba
        $this->conector();
    }

    public function conector()
    {
        $this->conexion = mysqli_connect($this->servidor, $this->usuario, $this->contraseña, $this->base_datos);
        if (!$this->conexion) {
            die("Lo sentimos no se pudo conectar a MySQL:" . mysqli_error());
            return True;
        }
    }

    public function consultar($consulta)
    {
        if ($consulta) {
            $query = mysqli_query($this->conexion, $consulta);
            if (!$query) {
                echo "error en la consulta:" . $consulta . ", Error:" . mysqli_error($this->conexion);
            }else{
                    return $query;
                }
            }

    }

    public function fetch_array($consulta)
    {
        //Toma la consulta y la convierte en un array
        return mysqli_fetch_array($consulta);

    }

    public function num_rows($consulta)
    {
        //Cuenta la cantidad de registros que trae una consulta
        return mysqli_num_rows($consulta);
    }

    public function fetch_assoc($consulta)
    {
        //Asocia una consulta de 1 registro como un array asociativo
        //a veces es necesario en el query agregar LIMIT 1
        return mysqli_fetch_assoc($consulta);
    }

    public function ejecutar_sql($sql_insertar)
    {
        $this->conexion->set_charset('utf8');
        $resultado = mysqli_query($this->conexion, $sql_insertar);
        if (!$resultado) {
            echo 'MySQL error:' . mysqli_error($this->conexion) . '.SQL:' . $sql_insertar;
        }
        return $resultado;
    }

    function __destruct()
    {
        @mysqli_close($this->conexion);
    }

}

?>
