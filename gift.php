<?php	
session_start();
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$gift = $_POST['gift'];
		if (empty($gift)) {
			echo "No has seleccionado ningún regalo.<br>";
		} else {
			echo "Has seleccionado: '$gift'<br>";
		}
		
		echo "Te ha tocado:";
		if ($gift == "R") {
			$Rose = array("1" => "Roja","2" => "Blanca","3" => "Rosa","4" => "Amarilla","5" => "Negra");
			$tipo = rand(1, 5);
			echo "<img src='img/" . $Rose[$tipo] . ".png' alt='" . $Rose[$tipo] . "' width='200'>";

		} elseif ($gift == "L") {
			$Books = array("1" => "1","2" => "2","3" => "3","4" => "4","5" => "5");
			$tipo = rand(1, 5);
			echo "<img src='img/" . $Books[$tipo] . ".png' alt='" . $Books[$tipo] . "' width='200'>";

		}
		echo "<br><a href='index2.php'>Volver a pedir un regalo</a>";
		
	}


?>