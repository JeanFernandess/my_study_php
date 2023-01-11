<?php
   /*
     A função array_slice() recebe um array
     com mais dois argumentos e retorna 
     parte de um array.
     
     array_slice(Array, 1, 3)
     
   */
       
     
       $moto = array('Moto_0' => 'Titan_cg150',
                     'Moto_1' => 'Titan_cg160',
                     'Moto_2' => 'Harley_Davidson_BigFat',
                     'Moto_3' => 'Crf_230',
                     'Moto_4' => 'Crf_150',
                     'Moto_5' => 'Crf_450');
     
     //array_values() so retorna o conteudo 
     
     
     $a = array_slice($moto, 2, 3);
     
     print_r($a);

 ?>
