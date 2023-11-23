<?php
session_start();

// Verifica si s'ha enviat el formulari
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtenir les frases de la variable de sessió
    $frase1 = $_SESSION['frase1'];
    $frase2 = $_POST['frase2'];

    // Desmuntar les paraules i comparar-les
    $paraules1 = explode(' ', $frase1);
    $paraules2 = explode(' ', $frase2);

    // Comprovar si hi ha coincidències
    $coincidencia = false;
    foreach ($paraules1 as $paraula1) {
        if (in_array($paraula1, $paraules2)) {
            $coincidencia = true;
            $paraulaCoincident = $paraula1;
            break;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COINCIDÈNCIES</title>
</head>
<body>

<h1>COINCIDÈNCIES</h1>

<?php
// Mostrar els resultats
if ($coincidencia) {
    echo "La paraula $paraulaCoincident està a les dues frases.";
} else {
    echo "No hi ha cap coincidència.";
}
?>

<br><br>
<!-- Enllaç per tornar a ex42pagina1.php -->
<a href="ex42pagina1.php">Tornar a la pàgina 1</a>

</body>
</html>