<?php
function calcular_maximo($array) {
    // Verificar que el array no está vacío
    if (empty($array)) {
        return null; // Puedes devolver null o false dependiendo de cómo quieras manejar este caso
    }

    // Inicializar el máximo con el primer valor del array
    $maximo = $array[0];

    // Recorrer el array para encontrar el máximo valor
    foreach ($array as $valor) {
        if ($valor > $maximo) {
            $maximo = $valor;
        }
    }

    return $maximo;
}

// Ejemplo de uso:
$array = [1, 2, 3, 4, 5];
$maximo = calcular_maximo($array);
echo "El valor máximo es: $maximo\n";
?>
