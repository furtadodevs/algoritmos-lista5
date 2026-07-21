<?php

echo ("<h1> Quiz do Chaves (V ou F) </h1>");
 
echo ("<ol>");
echo ("<li> O Chaves mora em um barril. (V) </li>");
echo ("<li> A Chiquinha é filha do Seu Madruga. (V) </li>");
echo ("<li> O Quico mora na casa da Bruxa do 71. (F)</li>");
echo ("<li> O Senhor Barriga é dono da vila. (V) </li>");
echo ("<li> O Professor Girafales trabalha na escola da vila. (V) </li>");
echo ("<li> O Chaves sempre come sanduiche de presunto. (F) </li>");
echo ("<li> A Dona Florinda é casada com o Seu Madruga. (F)</li>");
echo ("<li> O Nhonho é filho do Senhor Barriga. (V) </li>");
echo ("<li> O Chaves usa um boné vermelho. (F)</li>");
echo ("<li> A Bruxa do 71 é apaixonada pelo Seu Madruga. (V) </li>");
echo ("</ol>");

//Respostas do competidor (aleatórias com rand)

$p1 = rand(0, 1); //V
$p2 = rand(0, 1); //V
$p3 = rand(0, 1); //F
$p4 = rand(0, 1); //V
$p5 = rand(0, 1); //V
$p6 = rand(0, 1); //F
$p7 = rand(0, 1); //F
$p8 = rand(0, 1); //F
$p9 = rand(0, 1); //V
$p10 = rand(0, 1);//V

$contador = 0;

if($p1 == true){
    $contador += 1;
}

if($p2 == true){
    $contador += 1;
}

if($p3 == false){
    $contador += 1;
}

if($p4 == true){
    $contador += 1;
}

if($p5 == true){
    $contador += 1;
}

if($p6 == false){
    $contador += 1;
}

if($p7 == false){
    $contador += 1;
}

if($p8 == true){
    $contador += 1;
}

if($p9 == false){
    $contador += 1;
}

if($p10 == false){
    $contador += 1;
}








echo ("<h1> Respostas do competidor </h1>");

echo ("P1:" . $p1 . "<br>");
echo ("P2:" . $p2 . "<br>");
echo ("P3:" . $p3 . "<br>");
echo ("P4:" . $p4 . "<br>");
echo ("P5:" . $p5 . "<br>");
echo ("P6:" . $p6 . "<br>");
echo ("P7:" . $p7 . "<br>");
echo ("P8:" . $p8 . "<br>");
echo ("P9:" . $p9 . "<br>");
echo ("P10:" . $p10 . "<br>");

echo ("<br> Você acertou " . $contador . " questões");



?>