<?php
class Conexion extends mysqli
{

    private $HOST = "localhost";
    private $USER = "root";
    private $PASS = "";
    private $BASE = "nari";

    public function __construct()
    {

        parent::__construct($this->HOST, $this->USER, $this->PASS, $this->BASE);

        $this->set_charset('utf-8');

        $this->connect_errno ? die("Error en la conexion" . mysqli_errno()) : $m = 'Conectado';

    }
}
