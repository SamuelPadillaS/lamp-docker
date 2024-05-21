<?php

$numero = rand(1, 6);

if ($numero == 1) {
    echo "<img src='images/dado1.png'>";
} elseif ($numero == 2) {
    echo "<img src='images/dado2.png'>";
} elseif ($numero == 3) {
    echo "<img src='images/dado3.png'>";
} elseif ($numero == 4) {
    echo "<img src='images/dado4.png'>";
} elseif ($numero == 5) {
    echo "<img src='images/dado5.png'>";
} elseif ($numero == 6) {
    echo "<img src='images/dado6.png'>";
} else {
    echo "El número generado está fuera del rango.";
}
?>

