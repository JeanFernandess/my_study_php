<?php

     /* A função explode converte uma string em um array, usando um 
       separador para cada elemento.
     */
      
     $string_1 = "234.405.867-66";
     
     var_dump(explode(".", $string_1));
     echo "<br />";
     
     $string_2 = "23/04/2047";
     
     var_dump(explode("/", $string_2));
     echo "<br />";
     
     $string_3 = "3 * (4 + 7)";
     
     var_dump(explode("*", $string_3));
     
     
?> 
