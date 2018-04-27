<?php
include 'logeo_consulta.php';

$usuario    = $_POST['nombre'];
$contrasena = $_POST['contrasena'];

$consulta = new consulta($usuario, $contrasena);
$consulta->consulta();
