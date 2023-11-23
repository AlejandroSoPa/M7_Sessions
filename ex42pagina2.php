<?php
session_start();

// Verifica si s'ha enviat el formulari
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Guarda la frase1 a la variable de sessió
    $_SESSION['frase1'] = $_POST['frase1'];
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENREGISTRA FRASE 2</title>
</head>
<body>

<h1>ENREGISTRA FRASE 2</h1>

<!-- Formulari que s'envia a ex42pagina3.php -->
<form action="ex42pagina3.php" method="post">
    <label for="frase2">Introdueix la frase 2:</label>
    <input type="text" name="frase2" required>
    <br>
    <input type="submit" value="Envia a la pàgina 3">
</form>

</body>
</html>