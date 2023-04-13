<?php

     //Estudo e pratica do algoritmo de repetição DO WHILE.

     $i = 0;
     $frutas = array('Laranja', 'Morango', 'Banana'); 
     
     do{
 
        echo 'Minhas frutas favoritas são :' .  strtoupper($frutas[$i]). "<br>";
        $i++;
        
        
       
     }while($i < 3);
     
     

 ?>
