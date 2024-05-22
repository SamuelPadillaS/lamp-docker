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

function inicializar_array($numero_de_elementos, $min, $max) {
    if ($numero_de_elementos <= 0 || $min > $max) {
        return [];
    }

    $array = [];
    for ($i = 0; $i < $numero_de_elementos; $i++) {
        $numero_aleatorio = rand($min, $max);
        $array[] = $numero_aleatorio;
    }

    return $array;
}

function calcular_media($array) {
    if (empty($array)) {
        return 0;
    }

    $suma = array_sum($array);
    $numero_de_elementos = count($array);
    $media = $suma / $numero_de_elementos;
    return $media;
}

function calcular_maximo($array) {
    if (empty($array)) {
        return null;
    }

    $maximo = $array[0];
    foreach ($array as $valor) {
        if ($valor > $maximo) {
            $maximo = $valor;
        }
    }

    return $maximo;
}

function calcular_minimo($array) {
    if (empty($array)) {
        return null;
    }

    $minimo = $array[0];
    foreach ($array as $valor) {
        if ($valor < $minimo) {
            $minimo = $valor;
        }
    }

    return $minimo;
}

function imprimir_array($array) {
    echo "<table border='1'>\n";
    echo "<tr><th>Posición</th><th>Valor</th></tr>\n";

    foreach ($array as $posicion => $valor) {
        echo "<tr><td>$posicion</td><td>$valor</td></tr>\n";
    }

    echo "</table>\n";
}
?>
