<?php
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];

if (empty($n1) || empty($n2) || empty($n3) ) {
    echo "Por favor, rellene todos los campos.";
} else {
    if (($n1 >= $n2) && ($n1 >= $n3)) {
        echo "El numero mayor es $n1";
    } else { if (($n2 >= $n1) && ($n2 >= $n3)) {
        echo "El numero mayor es $n2";
    }
    else {
        echo "El numero mayor es $n3";
    }
    }
}
?>