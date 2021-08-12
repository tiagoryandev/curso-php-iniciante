<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores e Matrizes PT.2</title>
</head>
<body>
    <pre>
    <?php
        $v = array(80, 160, 30);
        $v[] = 80; // adicionar um valor no final
        array_push($v, 90); // adicionar um novo valor no final
        array_pop($v); // remover o ultimo valor do final

        array_unshift($v, 40); // adiciona na primeira área do array
        array_shift($v); // remove o primeiro valor

        sort($v); // ordena os valores crescente
        rsort($v); // ordena os valores decrescente

        asort($v); // ordena os valores e indexes 
        arsort($v); // ordena os valores e indexes reverso

        ksort($v); // ordenar os valores pela chaves
        krsort($v); // ordenar os valores pela chave de forma reversa
        
        var_dump($v);
    ?>
    </pre>
</body>
</html>