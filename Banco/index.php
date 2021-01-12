<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta Banco</title>
</head>
<body>
<pre>
    <?php
    require_once 'ContaBanco.php';

    $Conta01 = new ContaBanco();
    $Conta02 = new ContaBanco();

    $Conta01->abirConta("CC");
    $Conta01->setNomeDono("Lídia Araújo");
    $Conta01->setNumeroConta("220158-9");

    $Conta02->abirConta("CP");
    $Conta02->setNomeDono("Jonathan Moreira");
    $Conta02->setNumeroConta("221269-0");

    // $Conta01->depositar(122);
    // $Conta02->depositar(87);

    // $Conta01->sacar(65);
    // $Conta01->sacar(20);

    // $Conta01->pagarMensal();
    // $Conta01->pagarMensal();

    print_r($Conta01);
    print_r($Conta02);
    ?>
</pre>
</body>
</html>