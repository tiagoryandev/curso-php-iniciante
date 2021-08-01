<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>

<body>
    <?php
    $valor = isset($_GET["v"]) ? $_GET["v"] : 100;
    $rq = sqrt($valor);

    echo "A raiz de $valor é igual á $rq";
    ?>
    <br>
    <a href="aula8.php">Voltar</a>
</body>

</html>