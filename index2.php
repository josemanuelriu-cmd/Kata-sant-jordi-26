<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <title>Match up!</title>
</head>
<body>
  <div class="container">
    <div id="points-row">0 points</div>
    <div id="board">
        <?php
            define('CARDS',16);
            for($i = 0; $i < CARDS; ++$i) { 
              echo '<div class="card"></div>';
          } 
        ?>
    </div>
  </div>
</body>
</html>
<?php
$Rosas = array("1" => "Roja","2" => "Blanca","3" => "rosa","4" => "Amarilla","5" => "Negra");
$Libros = array("1" => "Git flow para tontos","2" => "Aprende a programar BIEN","3" => "Para que narices sirve TDD","4" => "Que es un hook en react","5" => "Aprende a hacer readme en tus proyectos");

echo "Pide un regalo (R para rosa o L para libro)";

$regalo = readline();
while ($regalo != "R" && $regalo != "L") {
    echo "Opción no válida. Por favor, ingresa R para rosa o L para libro.";
    $regalo = readline();
}
if ($regalo == "R") {
    $tipo = rand(1, 5);
    echo "Te ha tocado la rosa: " . $Rosas[$tipo];
} elseif ($regalo == "L") {
    $tipo = rand(1, 5);
    echo "Te ha tocado el libro: " . $Libros[$tipo];
}