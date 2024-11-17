<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Factorial</title>
</head>
<body>
    <h1>Calculadora de Factorial</h1>
    <form method="post" action="">
        <label for="numero">Ingresa un número:</label>
        <input type="number" id="numero" name="numero" min="0" required>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $numero = intval($_POST['numero']);

        function factorial($n) {
            if ($n === 0 || $n === 1) {
                return 1;
            }
            return $n * factorial($n - 1);
        }

        $resultado = factorial($numero);
        echo "<h2>El factorial de {$numero} es: {$resultado}</h2>";
    }
    ?>
</body>
</html>
