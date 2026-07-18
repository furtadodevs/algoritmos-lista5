<?php
/*Atividade 05 – Desconto em compras
Uma loja oferece descontos conforme o valor da compra. Armazene:
● nome do cliente e valor da compra.
Condição:
● R$ 1.000 ou mais → 15% de desconto
● R$ 500 ou mais → 10%
● R$ 200 ou mais → 5%
● abaixo disso → Sem desconto
Calcule:
● valor do desconto;
● valor final.
Ao final, exiba:
● Cliente
● Valor da compra
● Desconto
● Valor final*/

$nomeCliente = "Gabrielle";
$valorCompra = 499;
$desconto = 0;

if ($valorCompra >= 1000) {
    $desconto = $valorCompra * 15 / 100;
} elseif ($valorCompra >= 500 && $valorCompra <= 1000) {
    $desconto = $valorCompra * 10 / 100;
} elseif ($valorCompra >= 200 && $valorCompra <= 500) {
    $desconto = $valorCompra * 5 / 100;
} else {
    $desconto == 0;
}

$valorLiquido = $valorCompra - $desconto;
echo ("Nome: " . $nomeCliente . "<br>");
echo ("Valor Bruto: " . number_format($valorCompra, 2, ',', '.') . "<br>");
echo ("Desconto: " . number_format($desconto, 2, ',', '.') . "<br>");
echo ("Valor Liquido: " . number_format($valorLiquido, 2, ',', '.') . "<br>");


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 05</title>
</head>

<body>

</body>

</html>