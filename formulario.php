<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 8 - Grupo 6</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="contenedor">
        <h2>Ingreso de Serie Preferida</h2>
        <form action="procesar.php" method="POST">
            <label for="serie">Ingresá el nombre de tu serie preferida:</label>
            <input type="text" id="serie" name="serie" required placeholder="Ej: Breaking Bad">
            <div class="botones">
            <button type="submit">Enviar</button>
            <button type="reset">Limpiar Campos</button> 
        </div>
    </form>
</body>
</html>