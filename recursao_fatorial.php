<?php
   /* Quado uma função chama-se a si mesma 
      na propria função isso e chamado de recursão
     */
     
     function fatorial($numero){
       
       if($numero == 1){
         
         return $numero;
       }else{
         
         return $numero * fatorial($numero - 1);
       }
       
     }
     
     echo fatorial(20)."<br>";
     echo fatorial(5)."<br>";

 ?>
