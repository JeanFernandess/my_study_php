<?php
   /*
     A função in_array() recebe um valor
     e um array que será verificado se esse
     valor esta dentro desse array.
     
     
     in_array(Array, Valor)
     
   */
       
     
     
    $planeta = array('Planeta_0' => 'Mercurio',
                     'Planeta_1' => 'Marte',
                     'Planeta_2' => 'Jupiter',
                     'Planeta_3' => 'Terra',
                     'Planeta_4' => 'Urano',
                     'Planeta_5' => 'Saturno');
     
    
     
     //in_array retorna um valor booleano
     if(in_array('Jupiter2', $planeta))
     {
       echo 'Planeta encontrado';
     }
     else
     {
       echo 'Tente novamente!';
     }
     
     

 ?>
