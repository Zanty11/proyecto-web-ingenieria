<?php
$nombre = "Santiago Matute";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Proyecto Web Ingenieria</title>
</head>

<body>
    <h1>Proyecto Web Ingenieria</h1>

    <p>Hola mundo! Mi nombre es
        <?= htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8') ?>
    </p>
</body>

</html>