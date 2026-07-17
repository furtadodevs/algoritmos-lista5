<?php
/*Atividade 04 – Faixa etária
Crie um programa que classifique uma pessoa conforme sua idade. Armazene:
● nome e idade.
Condição:
● até 11 anos → Criança
● até 17 anos → Adolescente
● até 59 anos → Adulto
● acima disso → Idoso
Ao final, exiba:
● Nome
● Idade
● Classificação*/

$nome = "Gabrielle";
$idade = 120;

echo ("Nome: " . $nome . "<br>");
echo ("Idade: " . $idade . "<br>");

if ($idade >= 0 && $idade <= 11) {
    echo ("Classificação: Criança");
} elseif ($idade >= 11 && $idade <= 17) {
    echo ("Classificação: Adolescente");
} elseif ($idade >= 17 && $idade <= 59) {
    echo ("Classificação: Adultos");
} elseif ($idade >= 59 && $idade <= 120) {
    echo ("Classificação: Idosos");
} else {
    echo ("Classificação: Opção inválida.");
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 04</title>
</head>

<body>

</body>

</html>