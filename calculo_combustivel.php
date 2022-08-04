<?php

$preco_gasolina = 5.70;
$preco_alcool = 3.90;

$quantidade_de_litros = 50;

$alcool_melhor = ($preco_alcool / $preco_gasolina) < 0.7;

$valor_abastecimento = 0;

if ($alcool_melhor) {
    $valor_abastecimento = $preco_alcool * 50;
} else {
    $valor_abastecimento = $preco_gasolina * 50;
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATIVIDADE 1 - SI - PROGRAMAÇÃO BACK END I - 53/2022</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="container">
        <main class="main">

            <div class="information-result <?= $alcool_melhor ? 'alcool ' : 'gasolina' ?>">
                <h2>
                    Compensa abastecer com
                    <?= $alcool_melhor ? 'álcool ' : 'gasolina' ?>
                    e o preço total para <?= $quantidade_de_litros ?> litros de gasolina é de R$ <?= number_format($valor_abastecimento, 2, ',', '.') ?>
                </h2>
            </div>
        </main>

        <footer>
            <h4 class="titulo-footer">
                Todos os Direitos Reservados a Rafael Bernardes - RA: 22067554-5
            </h4>
        </footer>
    </div>
</body>

</html>