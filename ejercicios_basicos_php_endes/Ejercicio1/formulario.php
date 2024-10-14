<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];

if (empty($nombre) || empty($apellido)) {
    echo "Por favor, rellene todos los campos.";
} else {
    echo "¡Hola $nombre $apellido!";
}
?>