<?php
   /*
     A função array_pad() preenche um array 
     com um determinado valor de posicões.
     
     array_pad(Array,Numero de posicoes, valor das posicoes)
   */
       
     $carros_cor = array('Amarelo', 'Vermelho', 'Azul', 'Verde');
     
     $carros_cor = array_pad($carros_cor, 5, 'Branco');
     
     var_dump($carros_cor);

 ?>
