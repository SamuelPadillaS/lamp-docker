<?php
function calcular_minimo($array) {
    // Verificar que el array no está vacío
    if (empty($array)) {
        return null; // Puedes devolver null o false dependiendo de cómo quieras manejar este caso
    }

    // Inicializar el mínimo con el primer valor del array
    $minimo = $array[0];

    // Recorrer el array para encontrar el mínimo valor
    foreach ($array as $valor) {
        if ($valor < $minimo) {
            $minimo = $valor;
        }
    }

    return $minimo;
}

// Ejemplo de uso:
$array = [1, 2, 3, 4, 5];
$minimo = calcular_minimo($array);
echo "El valor mínimo es: $minimo\n";
?>
