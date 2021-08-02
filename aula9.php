<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Condicionais</title>
</head>
<body>
    <?php
        $a = 10;
        $b = 20;

        if ($a > $b) {
            echo "$a é maior que $b";
        } else {
            echo "$b é menor que $a";
        };
    ?>
    <br>
    <br>

    <form action="aula-exercicio01.php">
        Ano de Nascimento:
        <input type="number" name="ano">
        <input type="submit" value="Verificar">
    </form>
</body>
</html>