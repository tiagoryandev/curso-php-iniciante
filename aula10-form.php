<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condições de Múltiplos Casos</title>
</head>
<body>
    <form action="aula10.php" method="get">
        Numero: <input type="number" name="num">

        <fieldset>
            <legend>Operação</legend>
            <input type="radio" name="oper" value="1" id="dobro" checked>
            <label for="dobro">Dobro</label>
            <input type="radio" name="oper" value="2" id="cubo">
            <label for="cubo">Cubo</label>
            <input type="radio" name="oper" value="3" id="raiz">
            <label for="raiz">Raiz</label>
        </fieldset>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>