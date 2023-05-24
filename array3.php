<?php

   //EXEMPLO SIMPLES DE ARRAYS E FOREACH.
    
   $sabor_cliente = 'Chocolate';

   $sabor_sorvete = ['Chocolate', 'Morango', 'Flocos', 'Tutti-Frutti', 'Leite Condensado', 'Doce de Leite', 'Abacate', 'Iogurte', 'Goiaba', 'Maracuja', 'Graviola'];
   
   foreach($sabor_sorvete as $sabor){
     if($sabor == $sabor_cliente){
       echo 'O sabor escolhido é: ' .$sabor. "<br>";
       echo 'O VALOR E : 2,00 REAIS';
     }
   } 
     

 ?>
