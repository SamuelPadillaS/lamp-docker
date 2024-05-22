<?php
function imprimirTablaMultiplicar($numero) {
    echo "Tabla de multiplicar del $numero:\n";
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "$numero x $i = $resultado\n";
    }
    echo "\n"; // Añadir una línea en blanco entre tablas
}

function imprimirTablasMultiplicarRango($inicio, $fin) {
    if ($inicio > $fin) {
        echo "El valor de inicio debe ser menor o igual al valor de fin.\n";
        return;
    }

    for ($numero = $inicio; $numero <= $fin; $numero++) {
        imprimirTablaMultiplicar($numero);
    }
}

// Ejemplo de uso:
imprimirTablasMultiplicarRango(3, 5);
?>
