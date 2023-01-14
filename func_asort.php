<?php
   
   /*A função asort() ordena o array pelo conteudo
     mantendo a associação entre os indices.

   */
   
        $time_futebol[0] = 'Flamengo';
        $time_futebol[1] = 'Cruzeiro';
        $time_futebol[2] = 'Palmeiras';
        $time_futebol[3] = 'Fluminense';
        $time_futebol[4] = 'Goiais';
        $time_futebol[5] = 'Botafogo';
        $time_futebol[6] = 'Atletico-Mg';
        $time_futebol[7] = 'Fortaleza';
        $time_futebol[8] = 'Campinense';
                   
   asort($time_futebol);
   
   print_r($time_futebol);
   
?> 
