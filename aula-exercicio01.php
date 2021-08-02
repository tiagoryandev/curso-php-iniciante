<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = isset($_GET["ano"]) ? $_GET["ano"] : 1990;
        $i = date("Y") - $a;
        echo "Você nasceu em $a e terá $i anos";

        if ($i >= 18) {
            $v = "já pode votar";
            $d = "já pode dirigir";
        } else {
            $v = "não pode votar";
            $d = "não pode dirigir";

            if (($i > 16 && $i < 18) || ($i > 65)) {
                $tipoVoto = "voto opcional";
            } elseif ($i < 16) {
                $tipoVoto = "não vota";
            } else {
                $tipoVoto = "voto obrigatório";
            };
        };

        echo "<br>Com essa idade você $v e também $d";
        echo "<br>E você tem seu $tipoVoto";
    ?>
</body>
</html>