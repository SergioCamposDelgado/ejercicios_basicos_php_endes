<?php
$kilometros = $_POST['kilometros'];
$velocidad = $_POST['velocidad'];

if (empty($kilometros) || empty($velocidad)) {
    echo "Por favor, rellene todos los campos.";
} else {
    $tiempo = $kilometros / $velocidad;
    echo "Su tiempo en recorrer es: $tiempo horas";
}
?>