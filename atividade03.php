<?php
/*Atividade 03 – Categoria de filme
Um cinema deseja classificar um filme conforme sua idade mínima. Armazene:
● a idade do espectador.
Condição:
● Se a idade for menor que 12 anos, exiba Filme Infantil.
● Senão, se for menor que 18 anos, exiba Filme para Adolescentes.
● Caso contrário, exiba Filme para Adultos.*/

$idade = -12;

echo ("Idade: " . $idade . "<br>");

if ($idade >= 0 && $idade <= 12) {
    echo ("Classificação: Filme infantil.");
} elseif ($idade >= 12 && $idade <= 18) {
    echo ("Classificação: Filme para adolescente");
} elseif ($idade >= 18 && $idade <= 120) {
    echo ("Classificação: Filme para adultos");
} else {
    echo ("Classificação: Opção inválida.");
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 03</title>
</head>

<body>

</body>

</html>