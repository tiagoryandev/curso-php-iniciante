<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
    <style>
        h1 {
            font-family: Arial;
            font-weight: bold;
        }

        h2 {
            font-family: "Bebas Neue";
            font-weight: normal;
        }
    </style>
</head>
<body>
    <h1>Operações Aritméticas no PHP:</h1>

    <?php
        $numero1 = $_GET["a"]; // Pegar os valores na Query
        $numero2 = $_GET["b"]; // Pegar os valores na Query

        $somar = $numero1 + $numero2; // Adição
        $subtrair = $numero1 - $numero2; // Subtração
        $dividir = $numero1 / $numero2; // Divisão
        $multiplicar = $numero1 * $numero2; // Multiplicação
        $modulo = $numero1 % $numero2; // Modulo

        echo "<h2>Somando: $somar</h2>";
        echo "<h2>Subtrair: $subtrair</h2>";
        echo "<h2>Dividir: $dividir</h2>";
        echo "<h2>Multiplicar: $multiplicar</h2>";
        echo "<h2>Modulo: $modulo</h2>";
        
        echo "<h1>Funções Matemáticas:</h1>";

        echo "<h2>Valor Absoluto: " . abs($numero1) . "</h2>"; // Valor absoluto
        echo "<h2>Valor Potenciação: " . pow($numero1, $numero2) . "</h2>"; // Potenciação
        echo "<h2>Valor Raiz: " . sqrt($numero1) . "</h2>"; // Raiz Quadrada
        echo "<h2>Valor Arredondado: " . round($numero1) . "</h2>"; // Arredondamento
        // Round arredonda tanto para cima, quanto para baixo
        // ceil arredonda para cima
        // floor arredonda para baixo
        echo "<h2>Parte Inteira: " . intval($numero1) . "</h2>"; // Pega a parte inteira de um numero Real
        echo "<h2>Formatação Numérica: R$" . number_format($numero1, 2, ",", ".") . "</h2>";
        // Parâmetros da função => (NUMERO, CASAS DECIMAIS, SEPARADOR DECIMAL, SEPARADOR DE MILHAR)
    ?>
</body>
</html>