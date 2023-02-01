<?php

    /* Nesse pequeno algoritmo se sua renda e menor 
       que 500 reais e seus filhos estudam, voce 
       receberá um benefício de 41 reais por pessoa.
       O contrario dessa condição voce não receberá
       o Bolsa Familia.
      
      */
    
    $filhos_escola = true;
    $renda_familiar = 800;
    $familia_pessoas = 5;
    $beneficio_valor = 41;
    $familia_valor = 0;
    
    if($renda_familiar <= 500 && $filhos_escola == true){
      
      echo'PARABENS!SEU BENEFICIO FOI APROVADO!<br>';
      $familia_valor = $beneficio_valor * $familia_pessoas;
      echo "O VALOR DO SEU BENEFICIO É: $familia_valor";
      
    }else{
      
      echo 'SEU BENEFICIO FOI NEGADO!<br>';
      echo "CAUSA: Sua renda é $renda_familiar reais.<br>";
      echo 'Seus filhos não estão matriculados em uma escola.';
      
    }
      
      
      
   
 ?>
