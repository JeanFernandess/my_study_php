<?php
   
   /* A sequência de fibonacci e um array linear
      e que o novo item se dá pela soma dos
      numeros anteriores nesse array.
      
      Ex: 1, 2, 3, 5, 8, 13...etc
     */
    
    $c = 0; // Contador inicia com zero
    $n1 = 0; // Primeiro numero
    $n2 = 1; // Segundo numero
    $seqfib = 1;
   
   /* O código vai imprimir uma sequência de 50 
    numeros diferentes da fibonacci.
   */
 do{
     
    $c++; // incrementa ao contador
    echo "$seqfib "; //Imprimi de um por um a sequencia de fibonnaci
    $seqfib = $n1 + $n2; // $seqfib = 0 + 1
    $n1 = $n2; // $n1 = 1
    $n2 = $seqfib; // $n2 = 1
  
    }while($c <= 50);
      
      
     
   

 ?>
 
