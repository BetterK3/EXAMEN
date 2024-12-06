<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema STEM</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
</head>
<body style="background: url('images/fondo.jpg') no-repeat center center fixed; background-size: cover;">
    <div class="container">
        <section class="nombre-control">
            <div class="cuadro">
                <h3>Estudiante: José Alberto Bautista Hernández</h3>
                <p>No. de Control: 22090600</p>
            </div>
        </section>
        <section class="contenedor">
            <!-- Problema -->
            <div class="cuadro">
                <h3>Problema</h3>
                <p>Un panel fotovoltaico entrega una potencia útil de 75 000 W. Suponiendo que la densidad de radiación sea de 1000 W/m² y el rendimiento del panel del 50 %, calcular la superficie del panel.</p>
            </div>
            <!-- Imagen del Problema -->
            <div class="cuadro">
                <h3>Imagen del Problema</h3>
                <img src="images/problema.png" alt="Problema" class="problem-image">
            </div>
            <!-- Datos -->
            <div class="cuadro">
                <h3>Datos</h3>
                <ul>
                    <li><b>Potencia útil (\( P_{util} \)):</b> 75,000 W</li>
                    <li><b>Rendimiento (\( \eta \)):</b> 50% = 0.5</li>
                    <li><b>Densidad de radiación (\( K \)):</b> 1000 W/m²</li>
                </ul>
            </div>
            <!-- Fórmulas -->
            <div class="cuadro">
                <h3>Fórmulas</h3>
                <ul>
                    <li>\( P_{real} = \frac{P_{util}}{\eta} \)</li>
                    <li>\( S = \frac{P_{real}}{K} \)</li>
                </ul>
                <p>Estas fórmulas serán utilizadas para calcular el área del panel.</p>
            </div>
            <!-- Solución -->
            <div class="cuadro">
                <h3>Solución</h3>
                <p>La potencia real se calcula como:</p>
                <div class="equation">
                    \( P_{real} = \frac{P_{util}}{\eta} = \frac{75,000}{0.5} = 150,000 \, \mathrm{W} \)
                </div>
                <p>El área del panel se despeja de la fórmula:</p>
                <div class="equation">
                    \( S = \frac{P_{real}}{K} = \frac{150,000}{1000} = 150 \, \mathrm{m^2} \)
                </div>
            </div>
            <!-- Resultado -->
            <div class="cuadro">
                <h3>Resultado</h3>
                <form action="calculo.php" method="post">
                    <input type="hidden" name="potencia_util" value="75000">
                    <input type="hidden" name="rendimiento" value="0.5">
                    <input type="hidden" name="densidad_radiacion" value="1000">
                    <button type="submit" id="calcular-btn">Mostrar Resultado</button>
                </form>
            </div>
        </section>
        <footer>
            <p>Creative Commons 4.0 - 2024</p>
        </footer>
    </div>
</body>
</html>
