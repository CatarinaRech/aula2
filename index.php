<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular a Área do Triângulo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <h1>Área do Triângulo</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $base = $_POST['base'];
            $altura = $_POST['altura'];
            
             $area = ($base * $altura) / 2; 
             echo "<p>A área do triângulo é " . ($base * $altura) / 2 . ".</p>";
        }
        if  ($area <=100){
             echo 'Valor da área está dentro do limite';
        }
        else {
            echo 'Valor da área não está dentro do limite.';
        }

        ?>
        <form method="POST">
            <label for="base">Base Do Triangulo</label>
            <input type="number" id="base" name="base" step="any" required>
            <label for="altura">Altura Do Triangulo</label>
            <input type="number" id="altura" name="altura" step="any" required>
            <button type="submit">Calcular</button>
        </form>

</body>
</html> 