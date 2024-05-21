<?php

$numero = rand(1, 7);

switch ($numero) {
    case 1:
        echo "El número $numero es el lunes.";
        break;
    case 2:
        echo "El número $numero es el martes.";
        break;
    case 3:
        echo "El número $numero es el miércoles.";
        break;
    case 4:
        echo "El número $numero es el jueves.";
        break;
    case 5:
        echo "El número $numero es el viernes.";
        break;
    case 6:
        echo "El número $numero es el  sábado.";
        break;
    case 7:
        echo "El número $numero es el domingo.";
        break;
    default:
        echo "El número generado está fuera del rango especificado.";
}

?>
