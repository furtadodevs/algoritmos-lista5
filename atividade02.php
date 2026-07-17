<?php
/*Atividade 02 – Classificação de notas
Uma escola deseja classificar a nota de um aluno. Armazene:
● o nome do aluno e a nota final.
Condição:
● Se a nota for maior ou igual a 90, exiba Excelente.
● Senão, se for maior ou igual a 70, exiba Bom.
● Senão, se for maior ou igual a 60, exiba Regular.
● Caso contrário, exiba Reprovado.
Exibição dentro do PHP mesmo:
● Nome do aluno - ex: echo(“Nome do aluno:” . $nomeAluno . “<br>”);
● Nota - echo(“Nota:” . $nota . “<br>”);
● Situação - echo(“Situação:” . $situacao . “<br>”);*/

$nomeAluno = "Gabrielle";
$notaFinal = 90;

echo ("Nome do aluno: " . $nomeAluno . "<br>");
if ($notaFinal >= 90 && $notaFinal <= 100) {
    echo ("Situação: Excelente!");
} elseif ($notaFinal >= 70 && $notaFinal < 90) {
    echo ("Situação: Bom.");
} elseif ($notaFinal >= 60 && $notaFinal <= 70) {
    echo ("Situação: Regular.");
} elseif ($notaFinal >= 0 && $notaFinal < 60) {
    echo ("Situação: Reprovado");
} else {
    echo ("Situação: Opção inválida.");
}


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 02</title>
</head>

<body>

</body>

</html>