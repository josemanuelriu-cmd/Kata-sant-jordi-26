<?php

$Rose = array("1" => "Roja","2" => "Blanca","3" => "rosa","4" => "Amarilla","5" => "Negra");
$Books = array("1" => "Git flow para tontos","2" => "Aprende a programar BIEN","3" => "Para que narices sirve TDD","4" => "Que es un hook en react","5" => "Aprende a hacer readme en tus proyectos");

echo "Pide un regalo (R para rosa o L para libro)";

$gift = readline();
while ($gift != "R" && $gift != "L") {
    echo "Opción no válida. Por favor, ingresa R para rosa o L para libro.";
    $gift = readline();
}
if ($gift == "R") {
    $tipo = rand(1, 5);
    echo "Te ha tocado la rosa: " . $Rose[$tipo];
} elseif ($gift == "L") {
    $tipo = rand(1, 5);
    echo "Te ha tocado el libro: " . $Books[$tipo];
}