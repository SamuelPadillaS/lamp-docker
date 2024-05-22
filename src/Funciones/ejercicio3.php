<?php
function inicializar_array($numero_de_elementos, $min, $max) {
    // Verificar que los parámetros son válidos
    if ($numero_de_elementos <= 0 || $min > $max) {
        return [];
    }

    $array = [];
    for ($i = 0; $i < $numero_de_elementos; $i++) {
        // Generar un número entero aleatorio entre min y max
        $numero_aleatorio = rand($min, $max);
        $array[] = $numero_aleatorio;
    }

    return $array;
}

// Ejemplo de uso:
$array = inicializar_array(5, 1, 10);
print_r($array);
?>
