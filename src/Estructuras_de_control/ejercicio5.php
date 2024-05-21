<?php

$numero = rand(1, 6);

switch ($numero) {
    case 1:
        echo "<img src='images/dado1.png'>";
        break;
    case 2:
        echo "<img src='images/dado2.png'>";
        break;
    case 3:
        echo "<img src='images/dado3.png'>";
        break;
    case 4:
        echo "<img src='images/dado4.png'>";
        break;
    case 5:
        echo "<img src='images/dado5.png'>";
        break;
    case 6:
        echo "<img src='images/dado6.png'>";
        break;
    default:
        echo "El número generado está fuera del rango.";
}
?>
