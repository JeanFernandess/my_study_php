<?php
   
   
   function par_ou_impar($num){
     
     /*
        Se o resto(modulo) entre $num e 2 for zero, 
        argumento($num) é par.
     */ 
     if($num % 2 == 0){
       
       echo 'Esse número é par!';
     
     //Se True o argumento $num é impar 
     }elseif($num % 2 == 1){
       
          echo 'Esse numero é impar!';
          
         }
        
     }
     
     par_ou_impar(5);
     echo "<br>";
     par_ou_impar(6);

 ?>
