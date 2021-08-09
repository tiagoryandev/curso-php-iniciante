<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções String PT.1</title>
</head>
<body>
    <h1>Funções String PT.1</h1>
    <?php
        $prod = "leite";
        $preco = 4.5;

        printf("o %s está custando R$%.2F", $prod, $preco);

        // [%] e o [tipo]
        // $d => decimal
        // %u => decimal sem sinal
        // %f => valor real
        // $s => string 

        echo "<br><br>";

        $x[0] = 4;
        $x[1] = 8;
        $x[2] = 3;

        print_r($x);

        echo "<br><br>";

        $v2 = array (3, 7, 6, 2, 1, 9);

        print_r($v2);
        var_dump($v2);
        var_export($v2);

        // mostra o tipo de variavel

        echo "<br><br>";

        $txt = "Este      é um exemplo de uma string muito grande para a minha pagina estática usando php, espero ter feito um grande texto para fazer o teste de funções strings";
        $r = wordwrap($txt, 20, "<br>\n", false);
        // wordwrap (texto, valor de quebra, conteúdo de quebra, quebra por palavra)
        echo $r;

        echo "<br><br>";

        $tamanho = strlen($txt);
        // Tamanho de um texto
        echo $tamanho;

        echo "<br><br>";

        $formatadoComTrim = trim($txt); // remove os espaços repetidos 

        echo $formatadoComTrim;

        echo "<br><br>";

        $ltrirmForm = ltrim($txt); // só remove os espços do left
        $rtrimForm = rtrim($txt); // Só remove os espaços do right

        $frase = "Eu vou estudar o PHP";

        $count = str_word_count($frase, 2);
        // 0 => contar as palavras
        // 1 => gerar um array das palavras
        // 2 => vetor com posicionamento das palavras
        //echo $count;

        $site = "Curso em vídeo";
        $vR = str_split($site);
        // separar cada letra em um array
        print_r($vR);

        $texto = implode("#", $x);
        // ou join => "1 3 4"
        echo $texto;

        $letra = chr(1);
        $letra2 = "C";
        $code = ord($letra2);
        echo $code;
    ?>
</body>
</html>