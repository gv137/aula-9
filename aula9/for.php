<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>for</title>

</head>

<body style="background-color: lightcyan;">
    
    <h1><center>Estrutura For</center></h1>

    <br><br><br><br>

    <?php

    $v1 = ($_POST['n1']);
    $v2 = ($_POST['n2']);

    for ($v1; $v1 <= $v2; $v1++) { 
        echo "<center>Os valores do intervalo são: $v1<br><center>";
    }

 


?>

    


</body>

</html>