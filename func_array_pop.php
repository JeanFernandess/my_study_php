<?php
   
   $cores = array('Amarelo', 'Azul','Verde', 'Preto', 'Laranja', 'Branco', 'Roxo');
   
   //Essa função remove um item no final do array $cores
   array_pop($cores);
   array_pop($cores);
   array_pop($cores);
   array_pop($cores);
   
   var_dump($cores);

 ?>
