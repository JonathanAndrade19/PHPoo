<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OO</title>
</head>
<body>
<?php
    require_once 'Caneta.php';
    $cl = new Caneta;
    $cl->modelo = "Bic Cristal";
    $cl->cor = "Azul";
    // $cl->ponta = 0.5;
    $cl->rabiscar();
    $cl->tampar();
    var_dump($cl);

?>    
</body>
</html>