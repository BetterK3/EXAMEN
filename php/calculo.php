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
        <script src='https://polyfill.io/v3/polyfill.min.js?features=es6'></script>
        <script id='MathJax-script' async src='https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js'></script>
    </head>
    <body>
        <div class='container'>
            <div class='cuadro'>
                <h3>Solución</h3>
                <p>La potencia útil es de \( 75,000 \, \mathrm{W} \).</p>
                <p>El rendimiento del panel es \( 50\% \), lo que implica que la potencia real es:</p>
                <div class='equation'>
                    \( P_{real} = \frac{P_{util}}{\eta} = \frac{75,000}{0.5} = {$potencia_real} \, \mathrm{W} \)
                </div>
                <p>Al despejar la fórmula para el área del panel:</p>
                <div class='equation'>
                    \( S = \frac{P}{K} = \frac{{$potencia_real}}{1000} = {$superficie} \, \mathrm{m^2} \)
                </div>
            </div>
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
