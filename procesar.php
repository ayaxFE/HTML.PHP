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
 <!--<aca hace el commit Luis>-->
