<?php
   
   /*A função rsort() ordena o array, de forma reversa, pelo conteudo
     não mantendo a associação entre os indices.

   */
   
   $notas =  array('Nota_1' => '9,2',
                   'Nota_2' => '5,1',
                   'Nota_3' => '8,7',
                   'Nota_4' => '3,0',
                   'Nota_5' => '1,3',
                   'Nota_6' => '1,8',
                   'Nota_7' => '4,5',
                   'Nota_8' => '7,6',
                   'Nota_9' => '9,9');
                   
   rsort($notas);
   print_r($notas);
?> 
