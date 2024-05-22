<?php
function calcular_media($array) {
    // Verificar que el array no está vacío
    if (empty($array)) {
        return 0; // O puedes devolver NULL o false dependiendo de cómo quieras manejar este caso
    }

    // Calcular la suma de los elementos del array
    $suma = array_sum($array);

    // Contar el número de elementos en el array
    $numero_de_elementos = count($array);

    // Calcular y devolver la media
    $media = $suma / $numero_de_elementos;
    return $media;
}

// Ejemplo de uso:
$array = [1, 2, 3, 4, 5];
$media = calcular_media($array);
echo "La media es: $media\n";
?>
