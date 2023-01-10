<?php
   /*
     A função array_reverse() recebe um array 
     e retorna o inverso.
     
     array_reverse(Array, boollean(Mantem os indices intactos))
   */
       
     $flores = array('Rosa', 'Margarida', 'Orquidea', 'Tulipa');
     
     $flores = array_reverse($flores, true);
     
     var_dump($flores);

 ?>
