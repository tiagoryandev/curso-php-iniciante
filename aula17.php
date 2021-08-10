<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Strint PT.2</title>
</head>

<body>
    <h1>Funções String PT.2</h1>
    <?php
        $nome = "tiago ryan";
        $frase = "Estou estudando PHP";
        $site = "Curso em Vídeo";

        echo "Seu Nome é " . strtolower($nome); // Deixa tudo em Minúsculo
        echo "<br>";
        echo "Seu Nome é " . strtoupper($nome); // Deixa tudo Maiúsculo
        echo "<br>";
        echo ucfirst($nome); // deixa a primeira letra da fase em Maiúscula
        echo "<br>";
        echo ucwords($nome); // deixa a primeira letra das palavras em Maiúsculas
        echo "<br>";
        echo strrev($nome); // reverte uma string
        echo "<br>";
        echo strpos($frase, "PHP"); // posição da palavra
        echo "<br>";
        echo stripos($frase, "php"); // posição da palavra mesmo sendo maiúsculas ou minúsculas
        echo "<br>";
        echo substr_count($frase, "PHP"); // quantas vezes a string PHP foi encontrada na frase
        echo "<br>";
        echo substr($site, 0, 5); // corta uma frase do começo 0 até a 5 letra
        echo "<br>";
        echo str_pad($nome, 30, " ", STR_PAD_RIGHT); // adicionar conteúdo entre frases de direção esquerda, centro ou direita
        echo "<br>";
        echo str_repeat("Php", 5); // realizar a repetição de strings
        echo "<br>";
        echo str_replace("PHP", "php", $frase); // realizar a substituição de uma palavra em uma string
    ?>
</body>

</html>