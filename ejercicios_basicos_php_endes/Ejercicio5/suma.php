<?php
$numero = $_POST['numero'];
if (empty($numero)) {
    echo "Por favor, rellene todos los campos.";
} else {
    for ($i = 1; $i <= $numero; $i++) {
        $suma += $i ;
    }
    echo "La suma de los numeros del 1 al $numero es: $suma";
}
?>