<?php
/* 
&& (E)
|| (OU)
! (NEGAÇÃO - NOT - AO CONTRÁRIO)
 */

 // Exemplo operador AND (&&)
 // Precisa das duas ou mais condições verdadeiras

 $idade = rand(0,30);
 $carteira = true;

 if($idade >= 18 && $carteira == true) {
    echo ("Pode dirigir");
 } else {
    echo ("Não pode dirigir");
 }

 echo("<br>" . str_repeat("--", 30). "<br>");

 // Exemplo operador OR (||)
 // Precisa de APENAS uma condição verdadeira

 $idade = rand(55,70);
 $comCrianca = rand(0,1);

 echo ("Idade: " . $idade . "<br>");
 echo ("Com criança: " . $comCrianca . "<br>");


 if ($idade >= 60 || $comCrianca == true){
    echo ("Tem prioridade");
 } else {
    echo ("Não tem prioridade");
 }


 ?>
