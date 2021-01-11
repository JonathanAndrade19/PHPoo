<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caneta</title>
</head>
<body>
<pre>
    <?php
        require_once 'Caneta.php';
        $caneta = new Caneta("Bic" ,"Vermelho" ,0.5);
        $caneta02 = new Caneta("Bic" ,"Azul" ,1.5);
        // $caneta->setModelo("Bic");
        // $caneta->setPonta(0.5);
        var_dump($caneta);
        var_dump($caneta02);
        // echo "Eu tenho uma Caneta " .$caneta->getModelo()." de Ponta ". $caneta->getPonta();
    ?>
</pre>
</body>
</html>