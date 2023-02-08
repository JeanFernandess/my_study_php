<?php
     //A função imc diz se voce esta no peso ideal ou não.
     
     function imc($a, $p){
       
       $meu_imc = $p/($a * $a);
       
       if($meu_imc >= 30.00){
         
          echo 'Voce esta acima do peso ideal!';
          
       }else{
         
         echo 'Voce esta com peso ideal';
         
         }
       
     }
     
     imc(1.82, 85.0);
      
      
      
   
 ?>
