<?php
     /*Essa função recebe 2 argumentos de mostra o volume de agua
       da piscina.
     
     */
     
     function piscina_redonda($diametro, $profundidade){
     
     $vol_piscina = $diametro * $diametro * $profundidade;
     
     echo 'O volume da piscina é:' . $vol_piscina * 0.8 * 1000 . ' mil litros de agua';
      
     }
     
     piscina_redonda(6.0, 1.5);

?> 
