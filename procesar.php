<?php
$mensaje_error = "";
$serie_ingresada = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (!empty($_POST["serie"])) {
        $serie_ingresada = htmlspecialchars($_POST["serie"]);
    } else {
        $mensaje_error = "Error: No ingresaste ninguna serie.";
    }
} else {
    header("Location: formulario.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Grupo 6</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="contenedor">
        <?php if ($mensaje_error != ""): ?>
            <p class="error"><?php echo $mensaje_error; ?></p>
        <?php else: ?>
            <p>Tu serie preferida es: <b style="color: red;"><i><?php echo $serie_ingresada; ?></i></b>.</p>
        <?php endif; ?>
        
        <a href="formulario.php" class="boton-volver">Volver al inicio</a>
    </div>
</body>
</html>

