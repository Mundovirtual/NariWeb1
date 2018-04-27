<?php
include 'conexion/conexion.php';
class consulta
{
    protected $nombre;
    protected $contrasena;

    public function __construct($nombre, $contrasena)
    {
        $this->nombre     = $nombre;
        $this->contrasena = $contrasena;

    }

    public function consulta()
    {
        $con       = new Conexion();
        $sql       = "SELECT * FROM usuarios WHERE usuario = '$this->nombre' && constrasena = '$this->contrasena'";
        $resultado = $con->query($sql);

        if ($resultado->num_rows >= 1) {
            header("location:contrato.php");
        } else {
            header("location:logeo.php");
        }

    }

}
