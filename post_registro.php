<?php
include 'guardar_registro.php';

if (isset($_POST['submit'])) {
    $nombre     = $_POST['nombre'];
    $contrasena = $_POST['contrasena'];
    $correo     = $_POST['email'];

    echo "Hola :" . $nombre;

    $guardar = new Guardar($nombre, $contrasena, $correo);

}
