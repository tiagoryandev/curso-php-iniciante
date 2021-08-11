<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis Compostas PT.1</title>
</head>

<body>
    <?php
    $n = array(0, 10, 10);
    $n[] = 15;
    print_r($n);

    echo "<br><br>";

    $c = range(5, 20, 5);
    print_r($c);

    echo "<br><br>";

    foreach ($c as $valor) {
        echo "$valor ";
    };

    echo "<br><br>";

    $v = array(
        "test" => "a", 
        3 => "b", 
        6 => "c", 
        8 => "d"
    );
    unset($v[1]);
    print_r($v["test"]);

    echo "<br><br>";

    $cad = array(
        "nome" => "tiago",
        "idade" => 16
    );

    foreach($cad as $campo => $valor) {
        echo "O campo $campo é $valor<br>";
    };

    $objeto = array(
        "nomes" => array("tiago", "pedro")
    );

    print_r($objeto);

    ?>
</body>

</html>