<?php
include 'conexion/conexion.php';

class Guardar
{
    protected $nombre;
    protected $constraseña;
    protected $correo;

    public function __construct($nom, $con, $corr)
    {
        $this->nombre       = $nom;
        $this->constraseña = $con;
        $this->correo       = $corr;

        echo "Nombre :" . $this->nombre . "<br>";
    }

    public function insertar()
    {
        $bd  = new Conexion();
        $sql = "INSERT INTO `usuarios`(`usuario`, `constrasena`, `correo`) VALUES ('$this->nombre','$this->constraseña','$this->correo')";

        if (mysql_query($bd, $sql)) {
            echo "Insertado";

        }

    }

}
