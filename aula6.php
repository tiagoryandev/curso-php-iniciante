<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Atribuição</title>
</head>

<body>
    <?php
    $preco = $_GET["p"];

    echo "O preço do produto R$ " . number_format($preco, 2, ",", ".");

    $preco -= ($preco * 10 / 100);

    echo "<br/> E o novo preço com 10% de aumento será R$ " . number_format($preco, 2, ",", ".");

    echo "<br/><br/>";

    $atual = $_GET["aa"];

    // Removendo um valor no ano atual usando o pre-decremento usando -- (variável)

    echo "O ano atual é $atual e o ano anterior e" . --$atual;

    # Comentário com # 
    // Comentário Inline
    /**
     *  comentário  
     *  grande
     */

    echo "<br/><br/>";

    $ate = 3;
    $bte = &$ate;
    $bte += 5; // Variável referente a outra variável

    echo "$bte";

    echo "<br/><br/>";

    $site = "cursoemvideo";
    $$site = "cursoPHP"; // Variável de outra Variável

    echo "$site tem o $cursoemvideo";
    ?>
</body>

</html>