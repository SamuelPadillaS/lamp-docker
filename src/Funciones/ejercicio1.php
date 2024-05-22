<?php
function imprimirTablaMultiplicar($numero) {
    echo "Tabla de multiplicar del $numero:\n";
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "$numero x $i = $resultado\n";
    }
}

// Ejemplo de uso:
imprimirTablaMultiplicar(4);
?>
