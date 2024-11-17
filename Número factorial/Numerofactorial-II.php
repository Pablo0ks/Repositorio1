<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factoriales de Números Pares</title>
</head>
<body>
    <h1>Factoriales de Números Pares del 1 al 100</h1>
    <?php
    function factorial($n) {
        if ($n === 0 || $n === 1) {
            return 1;
        }
        $resultado = 1;
        for ($i = 2; $i <= $n; $i++) {
            $resultado *= $i;
        }
        return $resultado;
    }

    echo "<ul>";
    for ($i = 1; $i <= 100; $i++) {
        // Ignorar números impares
        if ($i % 2 !== 0) {
            continue;
        }

        // Calcular y mostrar el factorial del número par
        $factorial = factorial($i);
        echo "<li>El factorial de {$i} es: {$factorial}</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
