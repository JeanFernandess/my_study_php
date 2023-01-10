<?php

//Escopo das constantes

define("Dev_stack", [
       "Junior",
       "Pleno",
       "Senior",
       "FullStack",
       "Devops",
       "Especialista"
       ], true);

//Por padrão o escopo de constante é GLOBAL 
//Podemos usar constante definidas fora do escopo da função escopo_const()
function escopo_const()
{

 foreach(Dev_stack as $Dev_stacks)
 {
     echo "$Dev_stacks <br>";
 }
 
}

escopo_const();
echo "<br>";

//Exemplo 2 sobre escopo de constante
function escopo_const2()
{

   echo Dev_stack[2];
   echo "<br>";
   echo Dev_stack[4];

}

escopo_const2();
;


?> 
