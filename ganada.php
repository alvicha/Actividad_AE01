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
    <title>Partida Ganada</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1>¡Felicidades, has ganado!</h1>
    <div class="container">
        <p>¡Has ganado! La palabra era <?php echo $palabra; ?></p>
        <a href="index.php" class="button-play">Jugar de nuevo</a>
    </div>
</body>

</html>