<?php
$numero = $_POST['numero'];
if (empty($numero)) {
    echo "Por favor, rellene todos los campos.";
} else {
    for ($i = 1; $i <= 10; $i++) {
        $multiplicacion = $i * $numero;
        echo "$numero x $i = $multiplicacion <br>";
    }
}
?>