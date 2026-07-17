<?php
/*Atividade 01 – Cor do semáforo
Um motorista deseja saber como agir de acordo com a cor do semáforo. Armazene:
● a cor do semáforo.
Condição:
● Se a cor for "verde", exiba Siga.
● Senão, se for "amarelo", exiba Atenção.
● Caso contrário, exiba Pare.
Ao final, exiba:
● Cor informada - ex: echo(“Cor informada:” . $corSemaforo . “<br>”);
● Situação - echo(“Situação:” . $situacao . “<br>”);*/

$corSemaforo = "Rosa";
if ($corSemaforo == "Verde") {
    echo ("Siga!");
} elseif ($corSemaforo == "Amarelo") {
    echo ("Atenção!");
} elseif ($corSemaforo == "Vermelho") {
    echo ("Pare!");
} else {
    echo ("Opção inválida! Tente novamente.");
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 01</title>
</head>

<body>

</body>

</html>