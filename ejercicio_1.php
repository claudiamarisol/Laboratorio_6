<?php

$nombre = [    "EVER",
    "LUZ",
    "MARTIN",
    "JHESICA",
    "JUAN PAUL",
    "RODRIGO",
    "JUAN RONALDO",
    "CLAUDIA MARISOL",
    "BORIS",
    "YOLA",
    "ROSSE MARY"

];
//MUESTRA EL ELEMENTO DEL VECTOR
echo $nombre[7]."<br>";
//MUESTRA LA POSICION DEL ELEMENTO DEL ELEMENTO DEL VECTOR
$clave = array_search("CLAUDIA MARISOL",$nombre);
echo $clave;

//CONTAR LA CANTIDAD DE ELEMENTO DEL VECTOR

echo "<br> La cantidad elemento es: ".count($nombre);
?>