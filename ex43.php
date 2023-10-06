<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Maquina d'escriure</title>
</head>
<body>
    <form>
    <?php
        session_start();
        
        if (!isset($_SESSION["historial"]) || isset($_GET['borrar'])) {
            // Inicio sesion
            $_SESSION["historial"] = "";
        } elseif (isset($_GET['lletra'])) {
            // Concatenacion
            $_SESSION["historial"].=$_GET['lletra'];
        }
        echo "<p>".$_SESSION['historial']."</p>";
        foreach (range("A","Z") as $letra) {
            echo "<a href='?lletra=$letra'>$letra </a>";
        }
        echo "<a href='?lletra=&nbsp;'>Espacio </a>";
        echo "<a href='?borrar=true'>Borrar</a>";
    ?>
    </form>
</body>
</html>