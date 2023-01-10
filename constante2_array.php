<?php

//Definição de array com constantes

define("Dev_stack", [
       "Junior",
       "Pleno",
       "Senior"
       ], true);

echo Dev_stack[1];

echo "<br>";

//Exemplo 2 de uso de arrays de constante

define("Dev_study",[
       "Lógica_de_programacao",
       "Algoritmos",
       "Estruturas_de_dados",
       "Liguagem_de_programação",
       "Framework",
       "Sql",
       "Banco_de_dados",
       "Api's"], true);
       
foreach(Dev_study as $Dev_studys)
{
  echo "$Dev_studys <br>";
}
       
?> 
