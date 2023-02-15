<?php
      /* A função calculadora recebe 3 argumentos, um operador e
         dois operandos.
      */
      
      function calculadora($operando_1, $operador, $operando_2){

$op = $operador;

switch ($operador) {
  case "+":
    echo $operando_1 + $operando_2;
    break;
    
  case "-":
    echo $operando_1 - $operando_2;
    break;
    
  case "*":
    echo $operando_1 * $operando_2;
    break;
    
  case "/":
    echo $operando_1 / $operando_2;
    break;
  default:
    echo "Digite o operador ou operandos de forma correta";
    
    
   }
}

   calculadora(200, "*", 5);
   
?>
