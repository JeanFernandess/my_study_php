<?php
   /*
     A função array_values() recebe um array
     e retorna os valores desse array.
     
     array_values(Array)
   */
       
     
     $carros = array('Car_1' => 'Bmw',
                     'Car_2' => 'Fusca',
                     'Car_3' => 'Gol',
                     'Car_4' => 'Ferrari',
                     'Car_5' => 'Chevette',
                     'Car_6' => 'Jeep');
     
     //array_values() so retorna o conteudo de cada indice
     $conteudo_array = array_values($carros);
     
     print_r($conteudo_array);

 ?>
