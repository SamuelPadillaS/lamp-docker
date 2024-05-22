<?php
include 'funciones.php';

// Uso de imprimirTablaMultiplicar
echo "Imprimiendo la tabla de multiplicar del 5:\n";
imprimirTablaMultiplicar(5);

// Uso de imprimirTablasMultiplicarRango
echo "Imprimiendo tablas de multiplicar del 3 al 5:\n";
imprimirTablasMultiplicarRango(3, 5);

// Uso de inicializar_array
echo "Inicializando un array de 5 elementos con valores entre 1 y 10:\n";
$array = inicializar_array(5, 1, 10);
print_r($array);

// Uso de calcular_media
$media = calcular_media($array);
echo "La media del array es: $media\n";

// Uso de calcular_maximo
$maximo = calcular_maximo($array);
echo "El valor máximo del array es: $maximo\n";

// Uso de calcular_minimo
$minimo = calcular_minimo($array);
echo "El valor mínimo del array es: $minimo\n";

// Uso de imprimir_array
echo "Imprimiendo el contenido del array en una tabla:\n";
imprimir_array($array);
?>
