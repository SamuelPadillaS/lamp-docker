<?php

$nota = rand(1, 10);


echo "La nota generada es: $nota <br>";

if ($nota >= 0 && $nota < 5) {
    echo "Nota: Insuficiente";
} elseif ($nota >= 5 && $nota < 6) {
    echo "Nota: Suficiente";
} elseif ($nota >= 6 && $nota < 7) {
    echo "Nota: Bien";
} elseif ($nota >= 7 && $nota < 9) {
    echo "Nota: Notable";
} else {
    echo "Nota: Sobresaliente";
}

?>
