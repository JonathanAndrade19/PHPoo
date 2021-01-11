<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Ventiador</title>
</head>
<body>
<pre>
    <?php
        require_once 'Ventilador.php';
        $ventilador = new Ventilador("Cadence","Preto", 4, "40 CM");
        $ventilador02 = new Ventilador("Arno","Prata", 3, "30 CM");
        var_dump($ventilador);
        var_dump($ventilador02);
    ?>
</pre>
</body>
</html>