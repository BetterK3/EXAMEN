<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $potencia_util = floatval($_POST['potencia_util']);
    $rendimiento = floatval($_POST['rendimiento']);
    $densidad_radiacion = floatval($_POST['densidad_radiacion']);

    // Cálculos
    $potencia_real = $potencia_util / $rendimiento;
    $superficie = $potencia_real / $densidad_radiacion;

    // Resultado
    echo "
    <!DOCTYPE html>
    <html lang='es'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Resultado</title>
        <link rel='stylesheet' href='css/styles.css'>
    </head>
    <body>
        <div class='container'>
            <div class='cuadro'>
                <h3>Resultado</h3>
                <p>La superficie del panel es de <b>{$superficie} m²</b>.</p>
                <a href='index.html'>Volver</a>
            </div>
        </div>
    </body>
    </html>";
}
?>
