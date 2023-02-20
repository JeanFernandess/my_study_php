<?php

     /* A função implode converte um array em uma string, usando um 
       separador para cada elemento.
     */
      
     $array_1 = ["234", "405", "867", "-66"];
     
     var_dump(implode(".", $array_1));
     echo "<br />";
     
     $array_2 = ["23", "04", "2047"];
     
     var_dump(implode("/", $array_2));
     echo "<br />";
     
     $array_3 = ["3 ", " (4 + 7)"];
     
     var_dump(implode("*", $array_3));

     $array_4 = ["Jean", "Programador"];

     var_dump(implode("-", $array_4);
     
     
?> 
