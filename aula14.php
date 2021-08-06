<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotinas - PT.1</title>
</head>
<body>
    <h1>Rotinas ou Funções</h1>
    <?php
        function somar () {
            $p = func_get_args();
            $total = func_num_args();
            $s = 0;

            for ($i = 0; $i < $total; $i++) {
                $s = $s + $p[$i];
            };

            return $s;
        };

        $result = somar(1, 2, 3, 4, 5);

        echo $result;
    ?>
</body>
</html>