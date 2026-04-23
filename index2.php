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
    <div id="board">
        <form method="post" action="gift.php">
            <label for="gift">Pide un regalo:</label>
            <select name="gift" id="gift">
                <option value="R">Rosa</option>
                <option value="L">Libro</option>
            </select>
            <input type="submit" value="Pedir regalo">
        </form>
    </div>
  </div>
</body>
</html>
