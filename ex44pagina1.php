<?php
session_start();

// Inicialitzem la variable de sessió si encara no està definida
if (!isset($_SESSION['notes'])) {
    $_SESSION['notes'] = "";
}

// Verifiquem si el formulari s'ha enviat
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtenim el text del camp de text del formulari
    $nouText = $_POST['notes'];

    // Afegim el nou text al contingut de la variable de sessió
    $_SESSION['notes'] .= $nouText . "\n\n";
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prendre Notes</title>
</head>
<body>

<h1>Prendre Notes</h1>

<!-- Formulari amb un camp de text (textarea) i un botó de submit -->
<form action="ex44pagina1.php" method="post">
    <label for="notes">Introdueix les teves notes:</label><br>
    <textarea name="notes" rows="4" cols="50"></textarea><br>
    <input type="submit" value="Afegir Notes">
</form>

<hr>

<!-- Mostrar el contingut acumulat de la variable de sessió -->
<h2>Notes acumulades:</h2>
<pre>
<?php
// Mostrar el contingut de la variable de sessió
echo $_SESSION['notes'];
?>
</pre>

</body>
</html>