<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>exercício</title>
</head>

<body>
    <h1><center>Cópias</center></h1>

<?php
    $v1 = ($_POST['n1']);
    $opc = ($_POST['opcao']);
    $valor = 0;
    $copias = 0;


    if ($opc == "cor") {
        while ($copias < $v1) {
            $valor = $v1 * 2.50;
            $copias ++;
        }
        echo " você escolheu $copias coloridas e o valor total será de $valor ";
    } elseif ($opc == "simples") {
        while ($copias < $v1) {
            $valor = $v1 * 1.20;
        }
        echo " você escolheu $copias simples e o valor total será de $valor ";
    }

?>

</body>

</html>