<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <title>Tu regalo - Sant Jordi 2026</title>
</head>
<body>
  <div class="container">
    <div id="board">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gift = $_POST['gift'];

    if (empty($gift)) {
        echo "<p class='result-text'>No has seleccionado ningún regalo.</p>";
    } else {
        $giftName = ($gift == "R") ? "Rosa" : "Libro";
        echo "<p class='result-text'>Has pedido: <strong>" . htmlspecialchars($giftName) . "</strong></p>";
        echo "<p class='gift-reveal'>Te ha tocado:</p>";

        if ($gift == "R") {
            $Rose = ["1" => "Roja", "2" => "Blanca", "3" => "Rosa", "4" => "Amarilla", "5" => "Negra"];
            $tipo = array_rand($Rose);
            echo "<img class='gift-image' src='img/" . $Rose[$tipo] . ".png' alt='Rosa " . $Rose[$tipo] . "' width='200'>";
        } elseif ($gift == "L") {
            $Books = ["1" => "1", "2" => "2", "3" => "3", "4" => "4", "5" => "5"];
            $tipo = array_rand($Books);
            echo "<img class='gift-image' src='img/" . $Books[$tipo] . ".png' alt='Libro " . $Books[$tipo] . "' width='200'>";
        }
    }
}
?>
      <a class="back-link" href="index2.php">Pedir otro regalo</a>
    </div>
  </div>
</body>
</html>
