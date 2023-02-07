<?php

    $minha_altura = 1.89;
    $meu_peso = 115.0;
    
    $imc = $meu_peso/($minha_altura * $minha_altura);
    $meu_imc = ($imc >= 25)? 'Seu imc é alto,fique atento ao seu peso!' : 'Seu imc esta ideal, parabens!';
    echo $meu_imc. '<br>';
    echo $imc;
      
      
      
   
 ?>
