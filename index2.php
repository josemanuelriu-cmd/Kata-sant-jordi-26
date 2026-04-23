<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <title>Sant Jordi 2026</title>
</head>
<body>
  <div class="container">
    <div id="board">
        <h1>Sant Jordi 2026</h1>
        <p class="subtitle">El dia de la rosa i el llibre</p>
        <form method="post" action="gift.php">
            <label for="gift">Demana un regal:</label>
            <select name="gift" id="gift">
                <option value="R">Rosa</option>
                <option value="L">Llibre</option>
            </select>
            <input type="submit" value="Demanar el meu regal">
        </form>
    </div>
  </div>
</body>
</html>
