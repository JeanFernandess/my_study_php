<?php

/* A função define() possui 3 argumentos:
   define(NOME DA CONSTANTE, VALOR DA CONSTANTE, SE DEVE OU NÃO SER CASE- INSENSITIVE);
   Por padrão o terceiro argumento é false.
   
 */
 
//Exemplo de como se deve definir uma constante
define("DESENVOLVEDOR", "Sou aspirante a desenvolvedor", false);
echo DESENVOLVEDOR;

echo "<br>";

//Se a constante for definida, veremos na tela uma mensagem
//"Constante declarada com sucesso"

if(define("DESENVOLVEDOR_IDADE", "27"))
{
   echo "Constante declarado com sucesso <br>";
   echo DESENVOLVEDOR_IDADE;
}



?> 
