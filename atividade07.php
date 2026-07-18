<?php
/*Atividade 07 – Temperatura
Um aplicativo deseja informar como está o clima. Armazene:
● temperatura.
Condição:
● abaixo de 15°C → Frio
● até 25°C → Agradável
● até 35°C → Quente
● acima disso → Muito quente
Ao final, exiba:
● Temperatura
● Situação*/

$temperatura = 100;


echo ("Temperatura: " . $temperatura . "<br>");


if ($temperatura >= 35 && $temperatura <= 50) {
    echo ("Situação: Muito quente.");
} elseif ($temperatura >= 25 && $temperatura <= 35) {
    echo ("Situação: Quente.");
} elseif ($temperatura >= 15 && $temperatura <= 25) {
    echo ("Situação: Agradavél.");
} elseif ($temperatura >= -15  && $temperatura <= 15) {
    echo ("Situação: Frio.");
} else {
    echo ("Situação: Temperatura inválida");
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 07</title>
</head>

<body>

</body>

</html>