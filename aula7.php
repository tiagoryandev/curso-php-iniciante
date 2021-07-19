<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Relacionais</title>
</head>
<body>
    <?php 
        $a = 3;
        $b = 5;

        $a > $b; // a maior que b
        $a < $b; // a menor que b
        $a >= $b; // a maior ou igual a b
        $a <= $b; // a menor ou igual a b
        $a == $b; // a igual b
        $a === $b; // a com tipo e valor igual a b

        $maior = $a > $b ? $a : $b; // a maior b será a senão é b
        $r = $a > $b ? $a + $b : $a - $b; // a maior que b, será a mais b senão será a menor b
    ?>
    <?php
        $tipo = $_GET["op"];
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];

        echo "Os valores passados foram $n1 e $n2";

        $resultado = $tipo === "s" ? $n1 + $n2 : $n1 * $n2;  // tipo for igual a s

        echo "<br/> Resultado: $resultado";
    ?>
    <?php
        $a = 3;
        $b = "3";

        $resultado = $a === $b ? "SIM" : "NÃO"; // a com tipagem e valor igual a b

        echo "<br/><br/>As variáveis $a e $b são iguais? $resultado";
    ?>

    <?php 
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];

        $m = ($nota1 + $nota2) / 2; // pegar média

        echo "A média da nota é $m";

        $sit = $m < 6 ? "REPROVADO" : "APROVADO"; // média for menor que 6 será reprovado, senão será aprovado

        echo "<br/> A Situação é $sit";
    ?>
    <?php
        $ano = $_GET["an"];

        $idade = 2021 - $ano;

        echo "Quem nasceu em $ano tem idade de $idade";

        $voto = $idade >=18 && $idade <= 68 ? "OBRIGATÓRIO" : "NÃO OBRIGATÓRIO";
        // verificar idade 
        echo "<br/>E dessa forma o seu voto é $voto";
    ?>
</body>
</html>