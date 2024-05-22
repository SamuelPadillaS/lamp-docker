<?php
function imprimir_array($array) {
    // Comenzar la tabla HTML
    echo "<table border='1'>\n";
    echo "<tr><th>Posición</th><th>Valor</th></tr>\n";

    // Recorrer el array y mostrar cada elemento en una fila de la tabla
    foreach ($array as $posicion => $valor) {
        echo "<tr><td>$posicion</td><td>$valor</td></tr>\n";
    }

    // Cerrar la tabla HTML
    echo "</table>\n";
}

// Ejemplo de uso:
$array = [1, 2, 3, 4, 5];
imprimir_array($array);
?>
