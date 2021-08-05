<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de Repetição For</title>
</head>
<body>
    <h1>Estrutura de Repetição - <strong>For</strong></h1>
    <?php
        for ($c = 0; $c < 10; $c++) {
            echo "Contagem: $c<br>";
        };

        echo "<br>";

        for ($d = 10; $d > 0; $d--) {
            print "Contagem: $d<br>";
        }
    ?>
</body>
</html>