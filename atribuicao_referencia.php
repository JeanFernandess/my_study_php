<?php

   /* Usa-se o & comercial pra usar atribuição por
      referência.
     */
     
    

    $numero_1 = 1000;
    $numero_2 = &$numero_1; //$numero_2 = 1000
    
    $total = $numero_1 + $numero_2;
    echo $total;
    
    
      
      
      
   
 ?>
