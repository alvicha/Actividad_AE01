<?php
session_start();
if (!isset($_SESSION['palabra'])) {
    header("Location: index.php");
    session_destroy();
    exit();
}
$palabra = $_SESSION['palabra'];
session_destroy();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Partida perdida</title>
    <link rel="stylesheet" href="perdida.css">
</head>

<body>
    <div class="container">
        <h1>GAME OVER</h1>
        <p>Lo siento, has perdido. La palabra era <?php echo $palabra; ?></p>
        <a href="index.php" class="button-play">Jugar de nuevo</a>
    </div>
</body>

</html>