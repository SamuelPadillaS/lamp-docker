<?php

$imagenes_dado = array(
    'images/dado1.png',
    'images/dado2.png',
    'images/dado3.png',
    'images/dado4.png',
    'images/dado5.png',
    'images/dado6.png'
);


$dado1 = rand(0, 5);
$dado2 = rand(0, 5);


echo '<img src="' . $imagenes_dado[$dado1] . '" alt="Dado 1">';
echo '<img src="' . $imagenes_dado[$dado2] . '" alt="Dado 2">';
?>